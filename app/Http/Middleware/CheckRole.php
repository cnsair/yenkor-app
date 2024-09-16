<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if ($role == 'rider' && auth()->user()->role != 0) {
        //     abort(403);
        // }

        // if ($role == 'driver' && auth()->user()->role != 1) {
        //     abort(403);
        // }

        // if ($role == 'admin' && auth()->user()->role != 2) {
        //     abort(403);
        // }

        return $next($request);
    }
}
