<?php
	class Index extends Controller {
		
		public function index () {
<<<<<<< HEAD
			//$books = BookBasic::all();
			return View :: make ('layouts.show_books');  
=======
			if(Auth::check())
			{
				//$books = BookBasic::all();
				return View::make ('layouts.show_books');
			}
			else
			{
				return View::make('land.land');
			}
>>>>>>> 98b6e83e52395eafe7a3b40af268f9c9ce0f1c4e
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