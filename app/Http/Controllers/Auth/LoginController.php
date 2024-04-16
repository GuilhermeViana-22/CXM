<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('Home.index');
    }

    public function logar(Request $request)
    {

        $credentials = $request->only('email', 'password');
        dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return view('Home.index');
        } else {
            dd(2);
            // Autenticação falhou
            return back()->withErrors(['email' => 'Credenciais inválidas']);
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function cadastrar()
    {

        return view('auth.cadastrar');
    }

}
