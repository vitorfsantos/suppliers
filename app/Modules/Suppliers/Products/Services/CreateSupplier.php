<?php

namespace App\Modules\Suppliers\Products\Services;

use App\Modules\Suppliers\Products\Model\Products;
use App\Traits\StoreFiles;


class CreateSupplier
{
  use StoreFiles;
  public function create($request)
  {
    try {
      if(isset($request['images'])){
        $image = $this->storeLocal($request['images'], "partners/" . $request['supplier_id'] . "products/", $request['product'] . '.'. $request['images']->extension());
        dd($image);
      }
      dd($request);
      $supplier = Products::create($request);
      return response($supplier, 201);
    } catch (\Throwable $th) {
      return response($th->getMessage());
    }

  }
}
