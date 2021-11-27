<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsJson
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
        if(!$request->IsJson()){
            return redirect('home');
        }
        return $next($request);
    }
}
