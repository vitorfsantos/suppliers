<?php

namespace App\Modules\Suppliers\Products\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Suppliers\Products\Services\DeleteProduct;

class Delete extends Controller
{
  private DeleteProduct $product;

  public function __construct(DeleteProduct $product)
  {
    $this->product = $product;
  }
  public function delete($id)
  {
    $product = $this->product->delete($id);
    return response($product->getContent(), $product->getStatusCode());
  }
}
