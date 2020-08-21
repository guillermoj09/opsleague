<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CommentTorneo;
use Carbon\Carbon;

class CommentTorneoController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }
    
    public function store(Request $request){

        
        $commentTorneo = new CommentTorneo();

        $commentTorneo->comment = $request->comment;
        $commentTorneo->torneo_id = $request->id_torneo;
        $commentTorneo->jugador_id = $request->id_jugador;
        $commentTorneo->save();
        $logo = $commentTorneo->jugador->logo;
        $nickname = $commentTorneo->jugador->nickname;

        $created = $commentTorneo->created_at->diffForHumans();
        $resultado = "<div class='media'><div class='item-img'>".
        "<img src='/jugadorimages/$logo' style='height: 105px; width: 105px;' alt='logo'></div>".                                                
        "<div class='media-body'><h4 class='item-title'>$nickname<span>$created</span></h4>".
        "<p>$commentTorneo->comment</p><a type='button' style='' onclick='mostrarFormResp($commentTorneo->id);'> Responder </a>  </div> </div>";
       
        return $resultado;
    }
}
