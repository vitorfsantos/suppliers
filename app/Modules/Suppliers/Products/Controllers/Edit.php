<?php

namespace App\Modules\Suppliers\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Suppliers\Requests\SuppliersRequest;
use App\Modules\Suppliers\Services\EditSupplier;



class Edit extends Controller
{
	private EditSupplier $supplier;

	public function __construct(EditSupplier $supplier)
	{
		$this->supplier = $supplier;
	}

	public function edit(SuppliersRequest $request, $id)
	{
		$supplier = $this->supplier->update($request->validated(), $id);
    
		return response($supplier->getContent(), $supplier->getStatusCode() == 200 ? 200 : 400);
	}
}
