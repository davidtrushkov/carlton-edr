<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $team = null)
    {
        if(auth()->user()->admin == 1) {
            return $next($request);
        }
        
        return redirect('/')->with('error','You do not have access to the site. You need to be invited by admin.');
    }
}
