<?php
	class Index extends Controller {
		
		public function index () {
			return View :: make ('layouts.show_books');  
		}

		public function like()
		{
			$book_id = Input::get(book_id);
			if($book = BookBasic::find(book_id))
			{
				$book->like++;
				if($book->save())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}

		public function dislike()
		{
			$book_id = Input::get(book_id);
			if($book = BookBasic::find(book_id))
			{
				$book->dislike++;
				if($book->save())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	}

?>