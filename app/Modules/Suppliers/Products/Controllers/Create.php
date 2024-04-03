<?php

namespace App\Modules\Suppliers\Products\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Suppliers\Products\Requests\ProductsRequest;
use App\Modules\Suppliers\Products\Services\CreateSupplier;



class Create extends Controller
{
	private CreateSupplier $product;

	public function __construct(CreateSupplier $product)
	{
		$this->product = $product;
	}

	public function store(ProductsRequest $request)
	{
		$product = $this->product->create($request->validated());
    
		return response($product->getContent(), $product->getStatusCode());
	}
}
