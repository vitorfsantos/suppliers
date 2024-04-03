<?php

namespace App\Modules\Address\Services;

use App\Modules\Address\Model\Address;


class CreateAddress
{
  public function create($request)
  {
    try {
      
      $address = Address::create($request);
      return response($address, 201);
    } catch (\Throwable $th) {
      return response($th->getMessage());
    }

  }
}
