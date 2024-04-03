<?php

namespace App\Modules\Address\Services;

use App\Modules\Address\Model\Address;

class EditAddress
{
  public function update($request, $id)
  {
    try {
      $address = Address::find($id);

      if (!$address) {
        return response('Endereço não encontrado', 404);
      }
      $address->update($request);
      return response($address, 200);
    } catch (\Throwable $th) {
      throw $th;
    }

  }
}
