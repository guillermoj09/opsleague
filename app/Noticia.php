<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticia';

    public function administrador(){
        return $this->belongsTo('App\Administrador');
    }
    
    public function juego(){
        return $this->belongsTo('App\Juego','juego_id');
    }

}
