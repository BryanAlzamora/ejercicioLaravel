<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login.loginForm');
    }

    public function validarLogin(Request $request){
        $credentials= $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        if(Auth::attempt($credentials)){
            return redirect(route('index'));
        }

        return back()->withErrors([
            'email'=>'Error a iniciar sesion'
        ]);
    }

    public function cerrarSesion(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('index'));
    }
}
