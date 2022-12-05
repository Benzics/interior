<?php
namespace App\Services;

/**
*Automatically generated service
*Author: Benjamin Ojobo
*https://github.com/benzics
*/
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginService {
	
	/**
	 * Logs an admin into the system
	 * @param array $data
	 * @return bool
	 */
	public function logAdmin(array $data, Request $request) : bool
	{
		if(Auth::attempt($data))
		{
			$request->session()->regenerate();

            return true;
		}

		return false;
	}
}


