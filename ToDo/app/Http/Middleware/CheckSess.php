<?php

namespace App\Http\Middleware;

use Closure;

class CheckSess
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
        if($request['username']=='antonio' && $request['pass']=='contra'){
            $_SESSION['nombre']=$request['username'];
            return $next($request);
        }
        return $next($request);
        
    }
}
