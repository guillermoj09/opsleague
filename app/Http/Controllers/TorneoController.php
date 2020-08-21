<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


use App\Torneo;
use App\Juego;
use Carbon\Carbon;
class TorneoController extends Controller
{

    public function __construct(){
        Carbon::setLocale('es');
    }

    public function show($id){
        $torneo = Torneo::find($id);
        //return $torneo->nombre;
        $listadoTorneos = Torneo::all();
        return view('torneo',['torneos' => $listadoTorneos,'torneo' => $torneo]);
    }
    public function getImage($filename){
        $file = Storage::disk('torneos')->get($filename);
        return new Response($file,200);
    }


    //METODOS ADMIN
    public function index(){
        $listado = Torneo::all();
        return view('admin.torneo', ['torneos' => $listado]);
    }
    
    public function create(){
        $juegos = Juego::all();
        return view('admin.torneos.crear',['juegos'=>$juegos]);
    }

    public function store(Request $request){
        //return $request->all();
        $validate = $this->validate($request,[
            'nombre' => 'required',
            'juego' => 'required',
            //'teams' => 'required',
            'fechaInicio' => 'required',
            'fechaTermino' => 'required',
            'descripcionTorneo' => 'required'
        ]);
        $torneo = new Torneo();
        $admin = \Auth::user();
        $torneo->administrador_id = $admin->id;
        //return var_dump($admin);
        $torneo->nombre = $request->input('nombre');
        $torneo->juego_id = $request->input('juego');
        //falta teams
        $torneo->fecha_comienzo = $request->input('fechaInicio');
        $torneo->descripcion = $request->input('descripcionTorneo');

        $image = $request->file('imagen');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('torneos')->put($image_path,\File::get($image));
            $torneo->imagen = $image_path;
        }
        $torneo->save();

        return redirect('admin/torneos');

    }

    public function Delete($id){
        $torn = Torneo::find($id);
        $torn->delete();
       // return $id;
        return redirect('admin/torneos');
    }

    public function edit($id){
        
        $torn = Torneo::find($id);
        $juegos = Juego::all();
        return view('admin.torneos.editar',['torneo'=> $torn,'juegos'=>$juegos]);

    }

    public function Update(Request $request){
        $id = $request->id;
        
        $torneo = Torneo::find($id);
        
        $torneo->nombre = $request->nombre;
        //$torneo->juego_id = $request->juego_id;
        $torneo->fecha_comienzo = $request->fecha_comienzo;
        $torneo->descripcion = $request->descripcion;

        $torneo->save();
        return redirect('admin/torneos');
    }

    

}
