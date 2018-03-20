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
            echo('<br>'.$logins->NomeAnalista);
        else {
            return redirect()->back();
        }
    }

}
