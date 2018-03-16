<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function showLogin()
    {
        //mostra a tela de login

        return View('login');

    }

    public function validaLogin()
    {
        //processa o formulário
        echo("funciona.");
    }

}
