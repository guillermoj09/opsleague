<?php

namespace App\Http\Controllers\Jugador;

use Illuminate\Http\Request;
use App\Jugador;
use App\Http\Controllers\Controller;

class JugadorController extends Controller
{
    public function ver($id){

        $jugador = Jugador::find($id); // SELECT * FROM jugadores where id = $id;

        return view('jugador.perfil',['jugador' => $jugador]);
    }




    

}
