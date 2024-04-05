<?php

namespace App\Modules\Suppliers\Products\Services;

use App\Modules\Suppliers\Products\Model\Products;
use App\Traits\StoreFiles;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CreateProduct
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
        $request['qr_code'] = QrCode::generate(
          $request['qr_code_link'],
        );
      }
      $product = Products::create($request);
      return response($product, 201);
    } catch (\Throwable $th) {
      return response($th->getMessage());
    }

  }
}
