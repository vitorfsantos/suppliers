<?php

namespace App\Modules\Address\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Address\Requests\AddressRequestEdit;
use App\Modules\Address\Services\EditAddress;



class Edit extends Controller
{
	private EditAddress $address;

	public function __construct(EditAddress $address)
	{
		$this->address = $address;
	}

	public function edit(AddressRequestEdit $request, $id)
	{
		$address = $this->address->update($request->validated(), $id);
    
		return response($address->getContent(), $address->getStatusCode() == 200 ? 200 : 400);
	}
}
