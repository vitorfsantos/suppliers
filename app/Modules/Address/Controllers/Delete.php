<?php

namespace App\Modules\Address\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Address\Services\DeleteAddress;

class Delete extends Controller
{
  private DeleteAddress $address;

  public function __construct(DeleteAddress $address)
  {
    $this->address = $address;
  }
  public function delete($id)
  {
    $address = $this->address->delete($id);
    return response($address->getContent(), $address->getStatusCode());
  }
}
