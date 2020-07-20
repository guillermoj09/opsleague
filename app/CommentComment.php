<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentComment extends Model
{
    protected $table = "comment_comment";

    public function jugador(){
        return $this->belongsTo('App\Jugador');
    }
}
