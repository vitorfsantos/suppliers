<?php

namespace App\Modules\Users\Services;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class CreateUser
{
  public function create($request)
  {
    try {
      $request['password'] = Hash::make($request['password']);
      
      $user = User::create($request);
      return response($user, 201);
    } catch (\Throwable $th) {
      return response($th->getCode() == 23000 ? 'Email já cadastrado.' : $th->getMessage(), 400);
    }

  }
}
