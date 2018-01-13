<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthMiddleware
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
      // if user has been login do this, means continue
      if (Auth::check()) return $next($request);
      // if is not redirect to login page
        return redirect("/login");
    }
}
