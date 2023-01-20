<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Employer {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard ='web') {
       if ((Auth::guard($guard)->check()) && ($request->user()->access == 'Employer')) {
            return $next($request);
        }
        return redirect('/');
    }

    /*
      public function handle($request, Closure $next) {
  
            return $next($request);
       
    }*/
}
