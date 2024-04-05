<?php

namespace App\Modules\Suppliers\Products\Services;

use App\Modules\Suppliers\Products\Model\Products;


class GetProduct
{  
  public function getAll()
  {
    return Products::get();
  }
  public function getById($id)
  {
    return Products::find($id);
  }
}
