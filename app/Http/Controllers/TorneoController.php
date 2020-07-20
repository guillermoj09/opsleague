<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Torneo;

class TorneoController extends Controller
{
    public function show($id){
        $torneo = Torneo::find($id);
        //return $torneo->nombre;
        $listadoTorneos = Torneo::all();
        return view('torneo',['torneos' => $listadoTorneos,'torneo' => $torneo]);
    }
}
