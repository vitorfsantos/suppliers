<?php

namespace App\Modules\Suppliers\Services;

use App\Modules\Suppliers\Model\Supplier;


class DeleteSupplier
{  
  public function delete($id)
  {
    try {
      $supplier = Supplier::find($id);
      if(!$supplier){
        return response('Fornecedor não encontrado.', 404);
      }
      return response($supplier->delete(), 204);
    } catch (\Throwable $th) {
      throw $th;
    }
    
  }
}
