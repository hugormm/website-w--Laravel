<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request) {
        $erro = '';
        $dennied = true;

        if($request->get('erro') == 1){
            $erro = 'Usuario ou passoword nao existe.';
        };

        if($request->get('erro') == 2) {
            $erro = 'Necessario realizar login para ter acesso a pagina';
        };

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro, 'dennied' => $dennied]);

    }
    public function autenticar(Request $request) {
        $regras = [
            'user' => 'email',
            'password' => 'required'
        ];

        $feedback = [
            'user.email' => 'O campo (email) e obrigatorio',
            'password.required' => 'O campo (password) e obrigatorio'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('user');
        $password = $request->get('password');

        $user = new User;

        $user = $user->where('email', $email)->where('password', $password)->get()->first();

        if(isset($user->name)) {
            session_start();
            $_SESSION['nome'] = $user->name;
            $_SESSION['email'] = $user->email;

            return redirect()->route('backoffice.inicio');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair() {
        session_destroy();
        return redirect()->route('backoffice.logoff');
    }
}
