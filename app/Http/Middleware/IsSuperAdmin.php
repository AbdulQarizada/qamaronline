<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IsSuperAdmin 
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next) 
    {     

        if (Auth::check() && Auth::user()->IsSuperAdmin == 1) 
        { 
            return $next($request); 
        } 
        return redirect('/'); 
    }

}
