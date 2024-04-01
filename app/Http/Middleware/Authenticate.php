<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

use App\Modules\Auth\Controllers\AuthController;

class Authenticate
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if (!Str::endsWith($request->url(), '/auth/login')) {
      if(!$request->hasCookie(AuthController::getCookieName())){
        return response(['Usuário não está logado'], 401);
      }
    }


    return $next($request);
  }
}
