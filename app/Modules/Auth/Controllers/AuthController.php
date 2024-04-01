<?php

namespace App\Modules\Auth\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modules\Users\Services\GetUsers;
use App\Modules\Auth\Requests\AuthRequest;




class AuthController extends Controller
{
  private const COOKIE_NAME = 'auth-supplier';

  public static function getCookieName()
  {
    return self::COOKIE_NAME;
  }
  public function login(AuthRequest $request)
  {
    $credentials = $request->validated();

    if (!Auth::attempt($credentials)) {
      return response(['message' => 'Usuário ou senha inválido'], 401);
    }
    $user = auth()->user();

    setcookie( self::COOKIE_NAME, json_encode($user['id']), time()+24 * 60 * 60, '/', '', true, true);

    return response($user, 200);
  }

  public function logout()
  {
    auth()->logout();
    setcookie(self::COOKIE_NAME, '', time() - 3600, '/');

    return response([], 204);
  }
}
