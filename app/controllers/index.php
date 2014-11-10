<?php

class Index extends BaseController {

	public function index()
	{
		return View::make('layouts/master');
	}

}

?>