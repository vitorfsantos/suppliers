<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Authenticate;


return Application::configure(basePath: dirname(__DIR__))
  ->withRouting(
    // web: __DIR__.'/../routes/modules.php',
    api: __DIR__ . '/../routes/modules.php',
    // commands: __DIR__.'/../routes/console.php',
    // health: '/up',
  )
  ->withMiddleware(function (Middleware $middleware) {
    
  })
  ->withExceptions(function (Exceptions $exceptions) {

  })->create();
