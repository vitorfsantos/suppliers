<?php

namespace App\Modules\Suppliers\Products\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Suppliers\Products\Requests\ProductsRequest;
use App\Modules\Suppliers\Products\Services\EditProduct;



class Edit extends Controller
{
	private EditProduct $product;

	public function __construct(EditProduct $product)
	{
		$this->product = $product;
	}

	public function edit(ProductsRequest $request, $id)
	{
		$product = $this->product->update($request->validated(), $id);
    
		return response($product->getContent(), $product->getStatusCode() == 200 ? 200 : 400);
	}
}
