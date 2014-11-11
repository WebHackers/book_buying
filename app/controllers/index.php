<?php
	class index extends Controller {
		public function index () {
			return View :: make ('layouts.show_books');  
		}
	}

?>