<?php

namespace App\Modules\Suppliers\Products\Services;

use App\Modules\Suppliers\Products\Model\Products;
use App\Traits\StoreFiles;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CreateSupplier
{
  use StoreFiles;
  public function create($request)
  {
    try {
      if(isset($request['images'])){
        $image = $this->storeLocal($request['images'], "partners/" . $request['supplier_id'] . "products/", $request['product'] . '.'. $request['images']->extension());
        $request['images'] = $image;
      }
      if(isset($request['qr_code_link'])){
        $request['qr_code'] = QrCode::format('png')
        ->generate(
            $request['qr_code_link'],
        );
      }
      dd($request);
      $supplier = Products::create($request);
      return response($supplier, 201);
    } catch (\Throwable $th) {
      return response($th->getMessage());
    }

  }
}
