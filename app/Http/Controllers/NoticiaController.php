<?php

namespace App\Http\Controllers;

use App\Noticia;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

class NoticiaController extends Controller
{
    public function listadoNoticias(){
        $listado = Noticia::all();
        return $listado;
    }

    public function getImage($filename){
        $file = Storage::disk('noticias')->get($filename);
        return new Response($file,200);
    }
}
