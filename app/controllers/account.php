<?php

class Account extends BaseController {

	public function loginPage()
	{
		/*$user = new User;
		$user->user_id = 12101210;
		$user->password = Hash::make('12101210');
		$user->user_name = '谢俊杰';
		$user->user_rank = '购书管理';
		$user->save();*/
		return View::make('land.land', array(
			'message' => Session::get('message')
		));
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