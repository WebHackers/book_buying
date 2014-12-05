<?php

class Personal extends BaseController {

	public function index()
	{
		return View::make('bookBuy.personal');
	}

	public function update()
	{
		return 'update_personal';
	}

}

?>