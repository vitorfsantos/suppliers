<?php

namespace App\Traits;

use App\Modules\Auth\Controllers\AuthController;
use App\Models\User;

trait CheckUserPermission
{
  public function checkUserPermission(){
    $user = User::with('type')->find($_COOKIE[AuthController::getCookieName()]);
    if($user['type']['name'] != 'Mostra Glass'){
      return ['permission' => 0, 'user' => $user];
    }

    return ['permission' => 1, 'user' => $user];
  }
}
