<?php

class Recommend extends BaseController {

	public function index()
	{
		if(Auth::check())
		{
			return View::make('bookBuy.recommend', array(
				'message' => Session::get('message'),
				'position' => 'recommend',
				'user' => Auth::user()
			));
		}
		else
		{
			return Redirect::to('loginPage')->with('message', 'Please Login');
		}
	}

	public function query()
	{
		if(!Auth::check()) {return;}
		if(Input::has('target')) {
			$target = Input::get('target');
			

			if(strpos($target, 'china-pub')) {
				try {
					$book = new TargetQuery;
					$arr = $book->chinapub($target);
				}
				catch(Exception $e) {
					return 'false';
				}
			}
			else {
				if(strpos($target, 'dangdang')) {
					try {
						$book = new TargetQuery;
						$arr = $book->dangdang($target);
					}
					catch(Exception $e) {
						return 'false';
					}
				}
				else {
					return 'false';
				}
			}
			$arr['buy_link'] = $target;
			return $arr;
		}
		else {
			return Redirect::to('recommend');
		}
	}

	public function update()
	{
		if(!Auth::check()) {return;}
		$price = str_replace('￥', '', Input::get('price'));
		$book_price  = $price;
		$buy_link    = Input::get('buy_link');
		$book_pic    = Input::get('pic_link');
		$book_isbn   = Input::get('isbn');
		$book_name   = Input::get('name');
		$book_author = Input::get('author');
		$book_pub 	 = Input::get('time');
		$book_edit 	 = Input::get('press');
		$book_type   = Input::get('type');
		$book_info   = Input::get('info');
		$rec_reason  = Input::get('rec_reason');
		$rec_type    = Input::get('rec_type');

		$num = count(BookBasic::where('book_isbn', '=', $book_isbn)->get());
		if($num!=0) {
			return Redirect::back()->with('message', '书籍已被推荐，换一本吧');
		}
		
		if($book_isbn==''||
			$book_name==''||
			$book_author==''||
			$book_price==''||
			$book_type==''||
			$book_pic==''||
			$buy_link==''||
			$rec_reason==''||
			$rec_type=='')
		{
			return Redirect::back()->with('message', '重要数据不能为空~');
		}
		else
		{
			$bookBasic  = new BookBasic;
			$recommend  = new BookRecommend;

			$bookBasic->book_name   = $book_name;
			$bookBasic->book_author = $book_author;
			$bookBasic->book_isbn   = $book_isbn;
			$bookBasic->book_pic    = $book_pic;
			$bookBasic->book_pub    = $book_pub;
			$bookBasic->book_edit   = $book_edit;
			$bookBasic->book_type   = $book_type;
			$bookBasic->book_info   = $book_info;
			$bookBasic->book_price  = $book_price;
			$bookBasic->book_link   = '';
			$bookBasic->favour      = 0;
			$bookBasic->save();

			if($bookBasic->id==NULL) {
				return Redirect::back()->with('message', '插入失败 ORZ');
			}
			$recommend->act_id      = 0;
			$recommend->user_id     = Auth::user()->id;
			$recommend->book_kind   = $bookBasic->id;
			$recommend->rec_reason  = $rec_reason;
			$recommend->rec_type    = $rec_type;
			$recommend->buy_link    = $buy_link;
			$recommend->status    	= '未购买';
			$recommend->save();

			if($recommend->id==NULL) {
				$basic = BookBasic::find($bookBasic->id);
				$basic->delete();
				return Redirect::back()->with('message', '插入失败 ORZ');
			}
			return Redirect::to('personal');
		}
	}
}

?>