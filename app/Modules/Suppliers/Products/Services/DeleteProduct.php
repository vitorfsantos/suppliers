<?php

namespace App\Modules\Suppliers\Products\Services;

use App\Modules\Suppliers\Products\Model\Products;


class DeleteProduct
{  
  public function delete($id)
  {
    try {
      $product = Products::find($id);
      if(!$product){
        return response('Produto não encontrado.', 404);
      }
      return response($product->delete(), 204);
    } catch (\Throwable $th) {
      throw $th;
    }
    
  }
}
