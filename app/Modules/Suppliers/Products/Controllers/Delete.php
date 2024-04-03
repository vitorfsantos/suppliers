<?php

namespace App\Modules\Suppliers\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Suppliers\Services\DeleteSupplier;

class Delete extends Controller
{
  private DeleteSupplier $supplier;

  public function __construct(DeleteSupplier $supplier)
  {
    $this->supplier = $supplier;
  }
  public function delete($id)
  {
    $supplier = $this->supplier->delete($id);
    return response($supplier->getContent(), $supplier->getStatusCode());
  }
}
