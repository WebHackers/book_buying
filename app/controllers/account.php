<?php

class Account extends BaseController {

	public function loginPage()
	{
		return View::make('land.land');
	}

	public function login()
	{
		$name        = Input::get('user_name');
		$password    = Input::get('password');
		$isRemmber   = Input::get('remmber');
		$user_name   = Input::get('user_name');
		$password 	 = Input::get('password');
		$isRemember  = Input::get('remember');
		$isAutoLogin = Input::get('autoLogin');

		$password = Hash::make($password);
		
	}

	public function logout()
	{
		return 'logout';
	}

}

?>