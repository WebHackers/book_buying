<?php

class Message extends BaseController {

	public function index()
	{
		return Input::get('id');
		//return View::make('');
	}

	public function update()
	{
		return 'update_message';
	}

}

?>