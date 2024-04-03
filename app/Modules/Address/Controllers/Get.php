<?php

namespace App\Modules\Address\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Address\Services\GetAddress;

class Get extends Controller
{
  private GetAddress $address;

  public function __construct(GetAddress $address)
  {
    $this->address = $address;
  }
  public function getAll()
  {
    return response($this->address->getAll(), 200);
  }
  public function getById($id)
  {
    return response($this->address->getById($id), 200);
  }
}
