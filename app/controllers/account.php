<?php

class Account extends BaseController {

	public function loginPage()
	{
		return View::make('land.land');
	}

	public function login()
	{
		if(Input::get('remember')=='on') {
			$auth = Auth::attempt(Input::only('user_id', 'password'), true);
		}
		else {
			$auth = Auth::attempt(Input::only('user_id', 'password'));
		}
		if($auth) {
			return Redirect::intended('/');  
		} else {
			return Redirect::back()  
			->withInput()
			->with('error', "Invalid credentials");
		}	
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('loginPage');
	}

}

?>