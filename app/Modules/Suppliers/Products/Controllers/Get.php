<?php

namespace App\Modules\Suppliers\Products\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Suppliers\Products\Services\GetProduct;

class Get extends Controller
{
  private GetProduct $product;

  public function __construct(GetProduct $product)
  {
    $this->product = $product;
  }
  public function getAll()
  {
    return response($this->product->getAll(), 200);
  }
  public function getById($id)
  {
    return response($this->product->getById($id), 200);
  }
}
