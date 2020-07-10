<?php

namespace App\Http\Controllers\Jugador;

use Illuminate\Http\Request;
use App\Jugadores;
use App\Http\Controllers\Controller;

class JugadorController extends Controller
{
    public function ver($id){

        $jugador = Jugadores::find($id); // SELECT * FROM jugadores where id = $id;

        return view('jugador.perfil',['jugador' => $jugador]);
    }




    

}
