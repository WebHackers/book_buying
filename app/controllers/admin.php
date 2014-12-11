<?php

class Admin extends BaseController {

	public function index()
	{
		if(Auth::check()) {
			if(Auth::user()->user_rank=='购书管理') {
				return View::make('bookBuy.admin', array('user' => Auth::user()));
			}
			else {
				return Redirect::to('error')->with('message', 'You are not the Administrator');
			}
		}
		else {
			return Redirect::to('loginPage')->with('message', 'Please Login');
		}
	}

	public function toggle()
	{
		if(!Auth::check()) {return;}
		return 'toggle_admin';
	}

	public function update()
	{
		if(!Auth::check()) {return;}
		return 'update_admin';
	}

}

?>