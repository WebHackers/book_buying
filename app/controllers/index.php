<?php
	class Index extends Controller {
		
		public function index () {

			if(Auth::check())
			{
				$list = array();
				$rec_list = BookRecommend::paginate(10);
				foreach ($rec_list as $rec) {
					$user = User::find($rec->user_id);
					if(count($user)==0) {
						$user_name = '未知';
					}
					else {
						$user_name = $user->user_name;
					}

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
						'name' => $user_name,
						'btn' => $btn,
						'tip' => $tip,
						'status' => $status
					);
					$list[] = $arr;
				}
				return View::make ('bookBuy.index', array(
					'page' => $rec_list, 
					'list' => $list, 
					'user' => Auth::user()
				));
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
