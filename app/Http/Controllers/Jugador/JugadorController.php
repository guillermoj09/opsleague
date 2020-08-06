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
    public function editarJugador($id){
        $jugador = Jugador::find($id);
        return view('jugador.editar',['jugador' => $jugador]);
    }
    public function Update(Request $request){
        $id = $request->id;

        $jugador = Jugador::find($id);

        $jugador->nickname = $request->nickname;
        $jugador->nombre_completo = $request->nombre_completo;
        $jugador->pais = $request->pais;

        $jugador->save();
        return redirect('/jugadores/perfil/ver/'.$id);


    }



    

}
