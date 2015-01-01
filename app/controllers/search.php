<?php

class Search extends BaseController {

	public function handle($position)
	{
		if(Auth::check()) {
			$books = array();
			foreach (Input::all() as $key => $value) {
				$col = $key;
				$val = $value;
				break;
			}

			switch ($position) {
				case '':;
				case 'personal': {
					try {
						$arr = BookRecommend::where($col, '=', $val)
							->orderBy('id', 'desc')->paginate(10);
						foreach ($arr as $book) {
							$basic = BookBasic::find($book->book_kind);
							$books[] = array(
								'rec' => $book,
								'basic' => $basic
							);
						}
					} 
					catch(Exception $e) {
						return Redirect::to('error')->with('message','查询出错啦');
					}
				}break;
				case 'history': {
					try {
						$arr = BookList::where('act_id','>',0)
							->where($col, '=', $val)
							->orderBy('id', 'desc')->get();
						foreach ($arr as $book) {
							$rec = BookRecommend::where('book_kind','=',$book->book_kind)->get();
							$basic = BookBasic::find($book->book_kind);
							$books[] = array(
								'list' => $book,
								'rec' => $rec[0],
								'basic' => $basic
							);
						}
					} 
					catch(Exception $e) {
						return Redirect::to('error')->with('message','查询出错啦');
					}
				}break;
			}

			switch ($position) {
				case '': {
					//
				}break;
				case 'personal': {
					//
				}break;
				case 'history': {
					return View::make('bookBuy.list', array(
						'message' => Session::get('message'),
						'books' => $books,
						'user' => Auth::user(),
						'position' => $position
					));
				}break;
			}
			return $arr;
		}
		else {
			return Redirect::to('loginPage');
		}
	}

}

?>