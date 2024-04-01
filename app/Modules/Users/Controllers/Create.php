<?php

namespace App\Modules\Users\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Users\Requests\UserRequest;
use App\Modules\Users\Services\CreateUser;



class Create extends Controller
{
	private CreateUser $user;

	public function __construct(CreateUser $user)
	{
		$this->user = $user;
	}

	public function store(UserRequest $request)
	{
		$user = $this->user->create($request->validated());
    
		return response($user->getContent(), $user->getStatusCode());
	}
}
