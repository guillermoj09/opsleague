<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CommentTorneo;

class CommentTorneoController extends Controller
{
    public function store(Request $request){

        
        $commentTorneo = new CommentTorneo();

        $commentTorneo->comment = $request->comment;
        $commentTorneo->torneo_id = $request->id_torneo;
        $commentTorneo->jugador_id = $request->id_jugador;
        $commentTorneo->save();

        $resultado = "<div class='media' style='margin-left:55px'><div class='item-img'>".
        "<img src='{{ url('jugadorimages/'.auth('web')->user()->logo) }}' style='height: 105px; width: 105px;' alt='logo'></div>".                                                
        "<div class='media-body'><h4 class='item-title'>asdadas<span>September 29, 2019</span></h4>".
        "<p>asdad</p> </div> </div>";

        return $resultado;
    }
}
