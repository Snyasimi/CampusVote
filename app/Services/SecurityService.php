<?php

namespace App\Services;

use App\Models\{User};
use Illuminate\Support\Facades\Auth;

class SecurityService{

	public function registerUser(array $userDetails)
	{
		$userDetails['password'] = bcrypt($userDetails['password']);
		$userDetails['account_status'] = 'active';
		unset($userDetails['confirm_password']);


		$user = User::create($userDetails);

		return $user;

	}

	public function authenticate(array $credentials)
	{

		if(Auth::attempt($credentials))
		{
			$user = Auth::user();

			if ($user->account_status !== 'active') {
				Auth::logout();
				return false;
			}

			return true;
		}

		return false;

	}
}
