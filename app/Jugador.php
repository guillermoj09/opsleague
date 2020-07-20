<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Jugador extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'jugador';

    protected $hidden = [
        'password'
    ];
}
