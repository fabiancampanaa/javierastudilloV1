<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        if(auth()->user()->user_type == 'Admin'){
            return view('inicio_admin');
        }else{
            return view('inicio_cliente');
        };


    }
}
