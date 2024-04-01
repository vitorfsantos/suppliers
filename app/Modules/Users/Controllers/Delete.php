<?php

namespace App\Modules\Users\Controllers;

use Illuminate\Routing\Controller;
use App\Modules\Users\Services\DeleteUser;

class Delete extends Controller
{
  private DeleteUser $user;

  public function __construct(DeleteUser $user)
  {
    $this->user = $user;
  }
  public function delete($id)
  {
    $user = $this->user->delete($id);
    return response($user->getContent(), $user->getStatusCode());
  }
}
