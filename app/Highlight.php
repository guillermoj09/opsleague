<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    protected $table = 'highlight';


    public function juego(){
        return $this->belongsTo('App\Juego','juego_id');
    }

    public function administrador(){
        return $this->belongsTo('App\Administrador');
    }
}
