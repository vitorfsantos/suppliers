<?php

namespace App\Modules\Users\Services;

use App\Models\User;
use App\Traits\GetUser;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CreateUser
{
  use GetUser;
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
