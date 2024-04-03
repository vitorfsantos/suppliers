<?php

namespace App\Modules\Address\Services;

use App\Modules\Address\Model\Address;


class GetAddress
{  
  public function getAll()
  {
    return Address::get();
  }
  public function getById($id)
  {
    return Address::find($id);
  }
}
