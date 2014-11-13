<?php

class Account extends BaseController {

	public function login()
	{
		return View::make('land/land');
	}

	public function commit() {
		$user_name= Input::get('usename');
		$password = Input::get('password');

		if (Auth::attempt(array('user_name' => $user_name, 'password' => $password))) {
   			return '$password';	
		} else {
			return 'sorry';
		}
	}

}

