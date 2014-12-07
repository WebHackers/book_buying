<?php

class Admin extends BaseController {

	public function index()
	{
		if(Auth::check()) {
			return View::make('bookBuy.admin');
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