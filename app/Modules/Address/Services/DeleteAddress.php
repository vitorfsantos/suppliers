<?php

namespace App\Modules\Address\Services;

use App\Modules\Address\Model\Address;


class DeleteAddress
{  
  public function delete($id)
  {
    try {
      $address = Address::find($id);
      if(!$address){
        return response('Fornecedor não encontrado.', 404);
      }
      return response($address->delete(), 204);
    } catch (\Throwable $th) {
      throw $th;
    }
    
  }
}
