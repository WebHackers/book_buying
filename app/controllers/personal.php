<?php

class Personal extends BaseController {

	public function index()
	{
		if(Auth::check()) {
			return View::make('bookBuy.personal');
		}
		else {
			return Redirect::to('loginPage')->with('message', 'Please Login');
		}
	}

	public function update()
	{
		if(!Auth::check()) {return;}
		return 'update_personal';
	}

}

?>