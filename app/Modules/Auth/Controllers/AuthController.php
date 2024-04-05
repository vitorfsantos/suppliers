<?php

namespace App\Modules\Auth\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modules\Auth\Requests\AuthRequest;




class AuthController extends Controller
{
  public function login(AuthRequest $request)
  {
    $credentials = $request->validated();

    if (!Auth::attempt($credentials)) {
      return response(['message' => 'Usuário ou senha inválido'], 401);
    }
    $user = auth()->user();
    $user->tokens()->delete();
    
    $token = $user->createToken('auth');
    return ['token' => $token->plainTextToken];
  }

  public function logout()
  {
    auth()->user()->tokens()->delete();

    return response([], 204);
  }
}
