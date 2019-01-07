<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    public function __contruct(){
        $this->middleware('guest',['only' => 'showLoginForm']);
    }
    
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login()
    {
        $credentials = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        //return $credentials;

        if(Auth::attempt($credentials))
        {
            return redirect()->route('inicio');
        }

        return back()->withErrors(['email' => 'Email invalido, no se encuentra registrado']);

    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
