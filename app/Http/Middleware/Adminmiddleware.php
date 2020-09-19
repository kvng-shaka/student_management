<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Adminmiddleware
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
        if(Auth::user()->usertype == '1')
        {
            return $next($request);
        }
        else
        {
           return redirect('/home')->with('status','you are not authorised to admin dashboard');
        }
       
    }
}
