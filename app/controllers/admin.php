<?php

class Admin extends BaseController {

	public function index()
	{
		return View::make('bookBuy.admin');
	}

	public function toggle()
	{
		return 'toggle_admin';
	}

	public function update()
	{
		return 'update_admin';
	}

}

?>