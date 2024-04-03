<?php

namespace App\Modules\Suppliers\Services;

use App\Modules\Suppliers\Model\Supplier;


class CreateSupplier
{
  public function create($request)
  {
    try {
      $supplier = Supplier::create($request);
      return response($supplier, 201);
    } catch (\Throwable $th) {
      return response($th->getMessage());
    }

  }
}
