<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Analistum;
use App\Http\Controllers\DAO\AnalistaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    //

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin()
    {
        //mostra a tela de login

        return View('login');

    }

    public function validaLogin(Request $request)
    {
    //    processa o formulário


       $analistaController = new AnalistaController();
           
       $logins = $analistaController->search($request->MatriculaAnalista, $request->password);
       
       if($logins != null)
        {
           
            if($logins->guard == 'Admin'){

                Auth::guard('admin')->loginUsingId($logins->IdAnalista);
                Auth::loginUsingId($logins->IdAnalista);
                
            }
            Else{            
                Auth::loginUsingId($logins->IdAnalista);
            }
            return view('home');

        }
        
        
        else {
            return redirect()->back()->with('loginErrors','Usuário ou senha incorretos');
        }

    }

}
