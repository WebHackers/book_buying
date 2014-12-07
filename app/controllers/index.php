<?php
	class Index extends Controller {
		
		public function index () {

			if(Auth::check())
			{
				$rec_list = BookRecommend::all();
				foreach ($rec_list as $rec) {
					$basic = BookBasic::find($rec->book_kind);

					$isfavour = BookLike::where('user_id', '=', 0)
						   ->where('book_kind', '=', $rec->book_kind)->get();
					if(count($isfavour)==0) {
						$btn = 'uk-button-primary';
						$tip = '赞';
					}
					else {$btn = '';$tip = '已赞';}

					$arr = array(
						'rec' => $rec,
						'basic' => $basic,
						'btn' => $btn,
						'tip' => $tip
					);
					$list[] = $arr;
				}
				return View::make ('bookBuy.index', array('list' => $list));
			}
			else
			{
				return Redirect::to('loginPage');
			}

		}

		public function favour()
		{
			if(!Auth::check()) {return;}
			$book_id = Input::get('id');
			$favour = BookLike::where('user_id', '=', 0)
						->where('book_kind', '=', $book_id)->get();

			if(count($favour)==0) {
				$like = new BookLike;
				$like->user_id = 0;
				$like->book_kind = $book_id;
				$like->save();
			}
			else {
				$del = BookLike::where('user_id', '=', 0)
					->where('book_kind', '=', $book_id)->delete();
			}
			$num = BookLike::where('book_kind', '=', $book_id)->get();
			$book = BookBasic::find($book_id);
			$book->favour = count($num);
			$book->save();
			return $book->favour;
		}
	}

?>
