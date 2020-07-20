<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentTorneo extends Model
{
    protected $table = 'comment_torneo';

    public function jugador(){
        return $this->belongsTo('App\Jugador');
    }
    public function comment_comments(){
        return $this->hasMany('App\CommentComment');
    }
}
