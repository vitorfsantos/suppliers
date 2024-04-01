<?php

namespace App\Modules\Users\Controllers;

use Illuminate\Routing\Controller;
use App\Modules\Users\Services\GetUsers;

class Get extends Controller
{
  private GetUsers $users;

  public function __construct(GetUsers $users)
  {
    $this->users = $users;
  }
  public function getAll()
  {
    return response($this->users->getAll(), 200);
  }
  public function getById($id)
  {
    return response($this->users->getById($id), 200);
  }
  public function getTypes()
  {
    return response($this->users->getTypes(), 200);
  }
}
