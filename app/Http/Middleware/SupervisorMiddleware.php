<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupervisorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && (Auth::user()->roleId == 2 || Auth::user()->roleId == 3))
        {
            return $next($request);
        }
        else {
            Auth::logout();
            return redirect ('login');
        }
    }
}
