<?php

use App\Http\Middleware\AuthSuperAdmin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth.middlewear' => \App\Http\Middleware\AuthMiddlewear::class,
            'superadmin' => \App\Http\Middleware\AuthSuperAdmin::class,

        ]);

    })
    
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
