<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;


class HomeController extends Controller
{
    public function index(){
        $listadoNoticias = Noticia::all();
        return view('home', ['noticias' => $listadoNoticias]);
    }
}
