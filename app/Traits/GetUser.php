<?php

namespace App\Traits;

use App\Modules\Auth\Controllers\AuthController;
use App\Models\User;

trait GetUser
{
  public function getUser(){
    // dd($_COOKIE[AuthController::getCookieName()]);
    return User::with('type')->find($_COOKIE[AuthController::getCookieName()]);
  }
}
