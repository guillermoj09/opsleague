<?php

namespace App\Http\Controllers\Jugador;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Jugador;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;    
use App\Torneo;

class JugadorController extends Controller
{
    public function ver($id){
        $listadoTorneos = Torneo::all();
        $jugador = Jugador::find($id); // SELECT * FROM jugadores where id = $id;

        return view('jugador.perfil',['torneos' => $listadoTorneos,'jugador' => $jugador]);
    }

    public function getImage($filename){
        $file = Storage::disk('imagesJugadores')->get($filename);
        return new Response($file,200);
    }
    public function editarJugador($id){
        $listadoTorneos = Torneo::all();
        $idUsuarioLogin = Auth::user('web')->id;
        if($idUsuarioLogin != $id){
            return redirect('/');
        }
        $jugador = Jugador::find($id);
        return view('jugador.editar',['torneos' => $listadoTorneos,'jugador' => $jugador]);
    }
    public function Update(Request $request){
        $id = $request->id;

        $jugador = Jugador::find($id);

        $jugador->nickname = $request->nickname;
        $jugador->nombre_completo = $request->nombre_completo;
        $jugador->pais = $request->pais;
        $image1 = $request->file('imgPerfil');
        if($image1){
            $image_path = time().$image1->getClientOriginalName();
            \Storage::disk('imagesJugadores')->put($image_path,\File::get($image1));
            $jugador->logo = $image_path;
        }
        //return $image1;
        $jugador->save();
        return redirect('/jugadores/perfil/ver/'.$id);


    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');

    }

  

    

}
