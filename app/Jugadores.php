<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Jugadores extends Authenticatable
{
    use Notifiable;

    protected $hidden = [
        'password'
    ];
}
