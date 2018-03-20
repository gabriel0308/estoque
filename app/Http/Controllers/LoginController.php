<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Models\Analistum;

class LoginController extends Controller
{
    //

    public function showLogin()
    {
        //mostra a tela de login

        return View('login');

    }

    public function validaLogin(Request $request)
    {
        //processa o formulário
        echo($request->matricula);
        $logins = DB::table('analista')
                        ->select('MatriculaAnalista','NomeAnalista','SenhaAnalista')
                        ->where('MatriculaAnalista', 'like', $request->matricula)
                        ->where('SenhaAnalista', 'like', sha1($request->password))
                        ->first();
        if($logins != null)
            echo('<br>'.$logins->NomeAnalista);
        else {
            return redirect('https://media.giphy.com/media/8abAbOrQ9rvLG/giphy.gif');
        }
    }

}
