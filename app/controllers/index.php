<?php
	class Index extends Controller {
		
		public function index () {
<<<<<<< HEAD

			//$books = BookBasic::all();
			return View :: make ('layouts.show_books');  

			if(Auth::check())
=======
			if(true)
>>>>>>> 0d24126aae7e1e9efcd1f2a74450e2ee910ae5e1
			{
				//$books = BookBasic::all();
				return View::make ('layouts.show_books');
			}
			else
			{
				return View::make('land.land');
			}
<<<<<<< HEAD

=======
>>>>>>> 0d24126aae7e1e9efcd1f2a74450e2ee910ae5e1
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
