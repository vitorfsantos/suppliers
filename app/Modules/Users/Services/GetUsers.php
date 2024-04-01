<?php

namespace App\Modules\Users\Services;

use App\Models\User;
use App\Modules\Users\Model\UsersType;


class GetUsers
{  
  public function getAll()
  {
    return User::with('type')->get();
  }
  public function getById($id)
  {
    return User::with('type')->find($id);
  }
  public function getTypes()
  {
    return UsersType::get();
  }
}
