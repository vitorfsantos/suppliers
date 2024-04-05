<?php

namespace App\Modules\Suppliers\Products\Services;

use App\Modules\Suppliers\Products\Model\Products;

class EditProduct
{
  public function update($request, $id)
  {
    try {
      $product = Products::find($id);

      if (!$product) {
        return response('Produto não encontrado', 404);
      }
      $product->update($request);
      return response($product, 200);
    } catch (\Throwable $th) {
      throw $th;
    }

  }
}
