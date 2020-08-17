<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;


use Closure;

class UserEditar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //$id = $request->id;
        //$pageId = $request->route('id');
        return $next($request);
        /*if(Auth::user('web')->id != $id){
            return $request->all();
        }
        return $next($request);*/
    }
}
