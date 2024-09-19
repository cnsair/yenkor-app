<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
// use Spatie\Multitenancy\Http\Middleware\EnsureValidTenantSession;
// use Spatie\Multitenancy\Http\Middleware\NeedsTenant;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
        $middleware->web(append: [
            
            // 'role' => \App\Http\Middleware\CheckRole::class,

        ]);
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

    

