<?php

namespace App\Http\Controllers\Jugador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Facades\Hash;
use App\Jugador;


class PasswordController extends Controller
{
    public function getEmail(){
        return view('jugador.password');
    }

    public function showCambiarPassword(){
        return view('auth.passwords.cambiarpassword');
    }

    public function storeCambiarPassword(Request $request){
        $password_old = Auth::user('web')->password;
        $id = Auth::user('web')->id;

        if(!Hash::check($request->old_password, $password_old)){
            return back()->with('password_old_incorrecta','Password actual erronea');
        }
        $this->validate($request, [
            'old_password'          => 'required',
            'password'              => 'required|min:4',
            'password_confirmation' => 'required|same:password'
        ]);
        $jugador = Jugador::find($id);
        $jugador->password = bcrypt($request->password);
        $jugador->save();
        return redirect('/');
    }
}
