<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Middleware_Sudah_Login_User
{
     /**
      * Handle an incoming request.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
      * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
      */
     public function handle(Request $request, Closure $next)
     {
          if (Auth::check()) {
               return redirect('/')->with('sudah_pernah_login', 'Anda sudah dalam keadaan Login');
          }
          
          return $next($request);
     }
}
