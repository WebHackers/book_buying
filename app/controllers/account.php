<?php

class Account extends BaseController {

	public function loginPage()
	{
		return View::make('land.land');
	}

	public function login()
	{
		$name = Input::get('userName');
		$password = Input::get('password');
		$isRemmber = Input::get('remmber');
		$isAutoLogin = Input::get('autoLogin');

		$password = Hash::make($password);
		
	}

	public function logout()
	{
		return 'logout';
	}

}

?>