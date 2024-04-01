<?php

namespace App\Modules\Users\Services;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EditUser
{
  public function update($request, $id)
  {
    try {
      $user = User::find($id);

      if (!$user) {
        return response('Usuário não encontrado', 404);
      }
      $user->update($request);
      return response($user, 200);
    } catch (\Throwable $th) {
      throw $th;
    }

  }

  public function changePassword($request, $id)
  {
    try {
      $user = User::find($id);
      if (!$user) {
        return response('Usuário não encontrado', 404);
      }

      if (!Auth::attempt(['email' => $user['email'], 'password' => $request['old_password']])) {
        return response(['message' => 'Senha Inválida'], 401);
      }

      $request['password'] = Hash::make($request['password']);
      $user->update($request);
      return response($user, 200);
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
