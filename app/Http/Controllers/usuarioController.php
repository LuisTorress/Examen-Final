<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function indexView(){
        //return 'hola';
        return view('usuarios.index');
    }
}
