<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;

use App\Torneo;


class HomeController extends Controller
{
    public function index(){
        $listadoNoticias = Noticia::all();

        $listadoTorneos = Torneo::all();
        return view('home', ['noticias' => $listadoNoticias,'torneos' => $listadoTorneos]);
    }
}
