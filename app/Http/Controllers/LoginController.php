<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Analistum;
use App\Http\Controllers\DAO\AnalistaController;

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
       $analistaController = new AnalistaController();
        $logins = $analistaController->search($request->matricula, $request->password);
        if($logins != null)
        {
            $request->session()->put('analistaNome', $logins.NomeAnalista);
            $request->session()->put('analistaMatricula', $logins.MatriculaAnalista);
            echo($request->session()->get('analistaNome').'<br>'.$request->session()->get('analistaMatricula'));
        }
        else {
            $errors = "Usuário ou Senha incorretos.";
            return redirect()->back()->with($errors);
        }
    }

}
