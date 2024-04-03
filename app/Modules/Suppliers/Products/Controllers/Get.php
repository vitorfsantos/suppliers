<?php

namespace App\Modules\Suppliers\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Suppliers\Services\GetSuppliers;

class Get extends Controller
{
  private GetSuppliers $suppliers;

  public function __construct(GetSuppliers $suppliers)
  {
    $this->suppliers = $suppliers;
  }
  public function getAll()
  {
    return response($this->suppliers->getAll(), 200);
  }
  public function getById($id)
  {
    return response($this->suppliers->getById($id), 200);
  }
}
