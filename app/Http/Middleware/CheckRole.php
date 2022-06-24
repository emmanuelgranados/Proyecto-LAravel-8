<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{

    public function handle(Request $request, Closure $next,$role)
    {
        if (! $request->user()->hasRole($role)) {
            abort(403, "No tienes autorización para ingresar.");
        }

        return $next($request);
    }
}
