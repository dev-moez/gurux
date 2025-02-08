<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using: function () {

            $centralDomains = config('tenancy.central_domains');

            foreach ($centralDomains as $domain) {
                Route::domain($domain)->group(function () {
                    Route::middleware('web')
                        ->middleware([
                            'web',
                        ])
                        ->group(__DIR__ . '/../routes/web.php');
                });
            }
        },
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
