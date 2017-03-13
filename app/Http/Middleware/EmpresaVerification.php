<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EmpresaVerification
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
            if(Auth::user()->rol == '2') //Empresa
            {
                return $next($request);
            }
            return redirect('home');
        }
    }
}
