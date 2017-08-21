<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
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
        $user= Auth::user();
        if($user)
            {
            if(auth::user()->role!='admin'){
            dd ("simple user, not an admin ");
            }
        }
        else if(Auth::guest()){
            dd ("you're a guest");
        }
        return $next($request);

    }
}
