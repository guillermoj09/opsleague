<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginFormRequest;

use Illuminate\Support\Facades\Auth;

class ValidacionLoginController extends Controller
{
    public function iniciarSesion(LoginFormRequest $request){

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            return response()->json('Haz iniciado session', 200);
        
        }else{
            return response()->json(['errors' => ['login' => ['El usuario que ingresaste no se encuentra  registrado']]], 422);
        }
        return $request->all();
    }
    
}
