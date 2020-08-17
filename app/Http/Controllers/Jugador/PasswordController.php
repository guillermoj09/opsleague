<?php

namespace App\Http\Controllers\Jugador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function getEmail(){
        return view('jugador.password');
    }
}
