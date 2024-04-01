<?php

namespace App\Modules\Users\Controllers;
use Illuminate\Routing\Controller;

use App\Modules\Users\Requests\UserRequestEdit;
use App\Modules\Users\Requests\UserRequestPassword;
use App\Modules\Users\Services\EditUser;



class Edit extends Controller
{
	private EditUser $user;

	public function __construct(EditUser $user)
	{
		$this->user = $user;
	}

	public function edit(UserRequestEdit $request, $id)
	{
		$user = $this->user->update($request->validated(), $id);
    
		return response($user->getContent(), $user->getStatusCode() == 200 ? 200 : 400);
	}
	public function changePassword(UserRequestPassword $request, $id)
	{
		$user = $this->user->changePassword($request->validated(), $id);
    
		return response($user->getContent(), $user->getStatusCode() == 200 ? 200 : 400);
	}
}
