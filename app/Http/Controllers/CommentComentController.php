<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CommentComment;


class CommentComentController extends Controller
{

    public function store(Request $request){

        $commentcomment = new CommentComment();

        $commentcomment->comentario = $request->comentario_resp;
        $commentcomment->comment_torneo_id = $request->coment_id;
        $commentcomment->jugador_id = $request->id_jugador;
        $commentcomment->save();

        $logo = $commentcomment->jugador->logo;

        $nickname = $commentcomment->jugador->nickname;
        $resultado = " ";
        $resultado = "<div class='media' style='margin-left:55px'><div class='item-img'>".
        "<img src='/jugadorimages/$logo' style='height: 75px; width: 75px;' alt='logo'></div>".                                                
        "<div class='media-body'><h4 class='item-title'>$nickname<span>September 29, 2019</span></h4>".
        "<p>$commentcomment->comentario</p></div> </div>";
        
        //return $resultado;
        return $resultado;
    }
}
