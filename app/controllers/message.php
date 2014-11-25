<?php

class Message extends BaseController {

	public function index()
	{
		/*return 'hello_message';*/
		return View::make('layouts.first_book');
	}

	public function update()
	{
		return 'update_message';
	}

}

?>