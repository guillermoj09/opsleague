<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function save(Request $request){
        
        $validator = $this->validate($request, [
            'email' => 'required|email|unique:jugador',
            'nickname' => 'required',
            'password' => 'required',
            'nickname' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect('/registro')
                    ->withErrors($validator)
                    ->withInput();
        }

        //$jugadores = Jugadores::where('email',$request->email)->first();
        $jugadores = new Jugador();
        $jugadores->password = bcrypt($request->password);
        $jugadores->email = $request->email;
        $jugadores->nombre_completo = $request->nombrecompleto;
        $jugadores->nickname = $request->nickname;
        $jugadores->save();
        
        return view('/');
    }
}
