<?php

namespace App\Modules\Address\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Address\Requests\AddressRequest;
use App\Modules\Address\Services\CreateAddress;



class Create extends Controller
{
	private CreateAddress $address;

	public function __construct(CreateAddress $address)
	{
		$this->address = $address;
	}

	public function store(AddressRequest $request)
	{
		$address = $this->address->create($request->validated());
    
		return response($address->getContent(), $address->getStatusCode());
	}
}
