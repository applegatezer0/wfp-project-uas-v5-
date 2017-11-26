<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        //return $next($request);
        if(auth()->user()->status==1)
        {
            return redirect('home');
        }
        else if(auth()->user()->status==2)
        {
            return redirect('home');
        }
        return redirect('home');
    }
}
