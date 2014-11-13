<?php
	class index extends Controller {
		
		public function index () {
			return View :: make ('layouts.show_books');  
		}

		public function like()
		{
			return 'like';
		}

		public function dislike()
		{
			return 'dislike';
		}
	}

?>