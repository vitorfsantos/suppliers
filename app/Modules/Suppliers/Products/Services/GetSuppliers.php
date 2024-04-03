<?php

namespace App\Modules\Suppliers\Services;

use App\Modules\Suppliers\Model\Supplier;


class GetSuppliers
{  
  public function getAll()
  {
    return Supplier::get();
  }
  public function getById($id)
  {
    return Supplier::find($id);
  }
}
