<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoggedIn
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
        if(!session()->has('id')) {
            return redirect('/');
        }

        return $next($request);
    }
}
