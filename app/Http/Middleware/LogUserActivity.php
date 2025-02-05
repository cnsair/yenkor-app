<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AuditTrail;
// use Auth;
use Illuminate\Support\Facades\Auth;

class LogUserActivity
{
    public function handle(Request $request, Closure $next)
    {
        // Log the activity
        AuditTrail::create([
            'user_id' => Auth::check() ? Auth::id() : null,
            'ip_address' => $request->ip(),
            'page_visited' => $request->path(),
            'is_registered' => Auth::check(),
        ]);

        return $next($request);
    }
}