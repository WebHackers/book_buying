<?php

class Account extends BaseController {

	public function loginPage()
	{
		return View::make('land.land');
	}

	public function login()	
	{
		if(Auth::attempt(Input::only('user_id', 'password'))) {  
			return Redirect::intended('/');  
		} else {
			return Redirect::back()  
			->withInput()
			->with('error', "Invalid credentials");
		}	
	}

	public function logout()
	{
		return 'logout';
	}

}

?>