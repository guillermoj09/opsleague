<?php

namespace App\Http\Controllers\Jugador;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Jugador;
use App\Http\Controllers\Controller;

class JugadorController extends Controller
{
    public function ver($id){

        $jugador = Jugador::find($id); // SELECT * FROM jugadores where id = $id;

        return view('jugador.perfil',['jugador' => $jugador]);
    }

    public function getImage($filename){
        $file = Storage::disk('imagesJugadores')->get($filename);
        return new Response($file,200);
    }




    

}
