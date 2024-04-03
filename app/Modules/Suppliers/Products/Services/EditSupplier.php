<?php

namespace App\Modules\Suppliers\Services;

use App\Modules\Suppliers\Model\Supplier;

class EditSupplier
{
  public function update($request, $id)
  {
    try {
      $supplier = Supplier::find($id);

      if (!$supplier) {
        return response('Fornecedor não encontrado', 404);
      }
      $supplier->update($request);
      return response($supplier, 200);
    } catch (\Throwable $th) {
      throw $th;
    }

  }
}
