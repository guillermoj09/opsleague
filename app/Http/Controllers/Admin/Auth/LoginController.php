<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;

use App\Administrador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


use Illuminate\Foundation\Auth\ThrottlesLogins;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.login');
    }

    //protected $guard = 'admins';
    

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),  [
            'email'    => 'required|email|exists:administrador|min:5|max:191',
            'password' => 'required|string|min:2|max:255',
            
        ]);

        if ($validator->fails()) {
            return redirect('admin/login')
            ->withErrors($validator)
            ->withInput();
        }

        
        if(Auth::guard('admins')->attempt($request->only('email','password'))){
            //Authentication passed...
            return redirect()
                ->intended(url('admin/home'))
                ->with('status','You are Logged in as Admin!');
        }
        //Authentication failed...
        return $this->loginFailed();
    }


    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:administrador|min:5|max:191',
            'password' => 'required|string|min:2|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];

        //validate the request.
        $request->validate($rules,$messages);
    }

    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }


    public function logout()
    {
        Auth::guard('admins')->logout();
        return redirect()
            ->url('admin/login')
            ->with('status','Admin has been logged out!');
    }

    
    
}
