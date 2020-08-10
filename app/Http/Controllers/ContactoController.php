<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Torneo;

class ContactoController extends Controller
{
    public function index(){
        $listadoTorneos = Torneo::all();
        return view('contacto',['torneos' => $listadoTorneos]);
    }
}
