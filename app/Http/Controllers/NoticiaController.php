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
    public function VerNoticia($id){
        $noticia = Noticia::find($id);

        return view('noticia',['noticia'=>$noticia]);

    }
    //ADMIN
    public function index(){
        $listado = Noticia::all();
        return view('admin.noticia', ['noticias' => $listado]);
    }

    public function create(){
        return view('admin.noticias.crear');
    }

    public function crearnuevo(Request $request){
        
        $validateData = $this->validate($request,[
            //'titulo' => 'required',
            //'noticia' => 'required',
            //'categoria' => 'required',
            //'imagen' => 'required|mimes:jpeg,jpg,png,bmp'
        ]);
        
        $noticia = new Noticia();
        $admin = Auth::user();


        $noticia->administrador_id = $admin->id;
        $noticia->parrafo_1 = $request->input('parrafo1');
        $noticia->parrafo_2 = $request->input('parrafo2');
        $noticia->titulo = $request->input('titulo');
        $noticia->subtitulo = $request->input('subtitulo');
        $noticia->categoria = $request->input('categoria');
        $image1 = $request->file('imagen1');
        $image2 = $request->file('imagen2');

        if($image1){
            $image_path = time().$image1->getClientOriginalName();
            \Storage::disk('noticias')->put($image_path,\File::get($image1));
            $noticia->imagen_1 = $image_path;
        }
        if($image2){
            $image_path = time().$image2->getClientOriginalName();
            \Storage::disk('noticias')->put($image_path,\File::get($image2));
            $noticia->imagen_2 = $image_path;
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
        
        $noticia->parrafo_1 = $request->parrafo1;
        $noticia->parrafo_2 = $request->parrafo2;
        $noticia->titulo = $request->titulo;
        $noticia->subtitulo = $request->subtitulo;
        $noticia->categoria = $request->categoria;
        $image1 = $request->file('imagen1');
        $image2 = $request->file('imagen2');

        if($image1){
            $image_path = time().$image1->getClientOriginalName();
            \Storage::disk('noticias')->put($image_path,\File::get($image1));
            $noticia->imagen_1 = $image_path;
        }
        if($image2){
            $image_path = time().$image2->getClientOriginalName();
            \Storage::disk('noticias')->put($image_path,\File::get($image2));
            $noticia->imagen_2 = $image_path;
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
