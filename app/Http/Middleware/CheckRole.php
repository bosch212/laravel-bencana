<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next,...$role)
    {
        if(in_array($request->user()->role,$role)){
            return $next($request);
        }

        return redirect('/');
    }
}
