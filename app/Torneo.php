<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    protected $table = 'torneo';

    public function administrador(){
        return $this->belongsTo('App\Administrador');
    }

    public function comments(){
        return $this->hasMany('App\CommentTorneo');
    }
}
