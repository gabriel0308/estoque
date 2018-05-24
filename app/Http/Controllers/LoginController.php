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
            // $request->session()->put('analistaNome', $logins["NomeAnalista"]);
            // $request->session()->put('analistaMatricula', $logins["MatriculaAnalista"]);
            // //echo($request->session()->get('analistaNome').'<br>'.$request->session()->get('analistaMatricula'));

            // Auth::guard();
           
            Auth::loginUsingId($logins->IdAnalista); 
            //->loginUsingId($logins->idAnalista);
            return view('home')->with('analistaNome', $logins["NomeAnalista"])->with('analistaMatricula', $logins["MatriculaAnalista"]);

        }
        
        
        else {
            return redirect()->back()->with('loginErrors','Usuário ou senha incorretos');
        }

    }

}
