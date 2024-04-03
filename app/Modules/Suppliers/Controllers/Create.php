<?php

namespace App\Modules\Suppliers\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Suppliers\Requests\SuppliersRequest;
use App\Modules\Suppliers\Services\CreateSupplier;


class Create extends Controller
{
	private CreateSupplier $supplier;

	public function __construct(CreateSupplier $supplier)
	{
		$this->supplier = $supplier;
	}

	public function store(SuppliersRequest $request)
	{
		$supplier = $this->supplier->create($request->validated());
    
		return response($supplier->getContent(), $supplier->getStatusCode());
	}
}
