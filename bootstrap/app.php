<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then : function () {
            Route::middleware('web' , 'auth' , 'auth.admin')
                ->prefix('admin')
                ->group(base_path('routes/admin.php'));

            Route::middleware('web' , 'auth' , 'auth.admin')
                ->prefix('admin/questions')
                ->group(base_path('routes/questions.php'));

            Route::middleware('web' , 'auth' )
                ->group(base_path('routes/members.php'));

            Route::middleware('web' , 'auth' , 'auth.admin')
                ->prefix('admin/h_questions')->name('h.')
                ->group(base_path('routes/h_questions.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
