<?php
	class Index extends Controller {
		
		public function index () {

			if(Auth::check())
			{
				$list = array();
				$rec_list = BookRecommend::all();
				foreach ($rec_list as $rec) {
					$basic = BookBasic::find($rec->book_kind);

					$isfavour = BookLike::where('user_id', '=', Auth::user()->id)
						   ->where('book_kind', '=', $rec->book_kind)->get();
					if(count($isfavour)==0) {
						$btn = 'uk-button-primary';
						$tip = '赞';
					}
					else {$btn = '';$tip = '已赞';}

					if($rec->status=='已购买') {
						$status = $rec->status;
					}
					else {$status = '';}

					$arr = array(
						'rec' => $rec,
						'basic' => $basic,
						'btn' => $btn,
						'tip' => $tip,
						'status' => $status
					);
					$list[] = $arr;
				}
				return View::make ('bookBuy.index', array('list' => $list, 'user' => Auth::user()->user_name));
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
			$favour = BookLike::where('user_id', '=', Auth::user()->id)
						->where('book_kind', '=', $book_id)->get();

			if(count($favour)==0) {
				$like = new BookLike;
				$like->user_id = Auth::user()->id;
				$like->book_kind = $book_id;
				$like->save();
			}
			else {
				$del = BookLike::where('user_id', '=', Auth::user()->id)
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
