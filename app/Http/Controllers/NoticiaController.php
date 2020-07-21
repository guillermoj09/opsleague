<?php

namespace App\Http\Controllers;

use App\Noticia;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

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

    public function index(){
        $listado = Noticia::all();
        return view('admin.noticia', ['noticias' => $listado]);
    }

    public function create(){
        return view('admin.noticias.crear');
    }

    public function crearnuevo(Request $request){
        
        $validateData = $this->validate($request,[
            'titulo' => 'required',
            'noticia' => 'required',
            'categoria' => 'required',
            'imagen' => 'required|mimes:jpeg,jpg,png,bmp'
        ]);
        
        $noticia = new Noticia();
        $admin = Auth::user();


        $noticia->administrador_id = $admin->id;
        $noticia->noticia = $request->input('noticia');
        $noticia->titulo = $request->input('titulo');
        $noticia->subtitulo = $request->input('subtitulo');
        $noticia->categoria = $request->input('categoria');
        $image = $request->file('imagen');

        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('noticias')->put($image_path,\File::get($image));
            $noticia->imagen = $image_path;
        }

        $noticia->save();

        return redirect('admin/noticias');
        
    }

    public function edit($id){
        
        $noticia = Noticia::find($id);

        return view('admin.noticias.editar',['noticia'=> $noticia]);


    }
    
    public function Update(Request $request){
        $id = $request->id;
        //return $request->all();
        $noticia = Noticia::find($id);
        
        $noticia->noticia = $request->noticia;
        $noticia->titulo = $request->titulo;
        $noticia->subtitulo = $request->subtitulo;
        $noticia->categoria = $request->categoria;
        $image = $request->file('imagen');

        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('noticias')->put($image_path,\File::get($image));
            $noticia->imagen = $image_path;
        }

        $noticia->save();

        return redirect('admin/noticias');        
       // return var_dump($noticia);
        //return view('admin.noticias.editar',['noticia'=> $noticia]);
    }

    public function Delete($id){
        $noti = Noticia::find($id);
        $noti->delete();
       // return $id;
        return redirect('admin/noticias');
    }
    

}
