<?php

namespace App\Http\Controllers;

use App\Juego;
use App\Jugador;
use App\Highlight;

use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function index(){
        $listadoHighlight = Highlight::all();
        return view('admin.highlight',['listadoHighlight' =>$listadoHighlight]);
    }
    public function create(){
        $juegos = Juego::all();
        $jugadores = Jugador::all();
        return view('admin.highlights.crear',['juegos' => $juegos,'jugadores'=>$jugadores]);
    }
    public function store(Request $request){
        $validate = $this->validate($request,[
            'nombre' => 'required',
            'juego' => 'required',
            'url' => 'required',
            'imagen' => 'required|mimes:jpeg,jpg,png,bmp'
        ]);
        
        $highlight = new Highlight();
        
        $admin = \Auth::user();
        $highlight->administrador_id = $admin->id;
        $highlight->nombre = $request->input('nombre');
        $highlight->juego = $request->input('juego');
        $highlight->link = $request->input('url');
        $image = $request->file('imagen');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('highlights')->put($image_path,\File::get($image));
            $highlight->imagen = $image_path;
        }
        
        $highlight->save();
        return redirect('admin/highlight');
    }
    public function Delete($id){
        $high = Highlight::find($id);
        $high -> delete();
        return redirect('admin/highlight');
    }
    public function Edit($id){
        
        $high = Highlight::find($id);
        //$juegos = Juego::all();
        return view('admin.highlight.editar',['highlight'=> $high]);

    }
}
