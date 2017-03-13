<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( Auth::check() )
        {
            /*foreach (Auth::user()->roles() as $rol)
            {
                if($rol->name == 'Administrador')
                {
                    return $next($request);
                }
            }*/
            if(Auth::user()->rol == '0') //Administrador
            {
                return $next($request);
            }
            return redirect('home');
        }
    }
}
