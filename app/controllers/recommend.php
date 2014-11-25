<?php

class Recommend extends BaseController {

	public function index()
	{
		if(true)
		{
			return View::make('layouts.book_recommend');
		}
		else
		{
			return Redirect::to('loginPage')->with('message', 'Please Login');
		}
	}

	public function query()
	{
		if(Input::has('target')) {
			$target = Input::get('target');
			$book = new TargetQuery;

			if(strpos($target, 'china-pub')) {
				$arr = $book->chinapub($target);
			}
			else {
				if(strpos($target, 'dangdang')) {
					$arr = $book->dangdang($target);
				}
				else {
					return false;
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
		$price = str_replace('￥', '', Input::get('book_price'));
		$book_price  = $price;
		$buy_link    = Input::get('buy_link');
		$book_pic    = Input::get('book_pic');
		$book_name   = Input::get('book_name');
		$book_author = Input::get('book_author');
		$book_pub 	 = Input::get('book_pub');
		$book_type   = Input::get('book_type');
		$book_info   = Input::get('book_info');
		$rec_reason  = Input::get('rec_reason');
		$rec_type    = Input::get('rec_type');

		if($book_name==''||$book_price==''||$book_type==''||$rec_reason==''||$rec_type=='')
		{
			return "KeyInfo couldn't be empty!";
		}
		else
		{
			$bookBasic  = new BookBasic;
			$bookDetail = new BookDetail;
			$recommend  = new BookRecommend;

			$bookBasic->act_id      = 0;
			$bookBasic->book_name   = $book_name;
			$bookBasic->book_author = $book_author;
			$bookBasic->book_pub    = $book_pub;
			$bookBasic->book_type   = $book_type;
			$bookBasic->book_info   = $book_info;
			$bookBasic->book_price  = $book_price;
			$bookBasic->book_status = '已推荐';
			$bookBasic->like        = 0;
			$bookBasic->dislike     = 0;
			$bookBasic->save();

			$bookDetail->book_id    = $bookBasic->id;
			$bookDetail->buy_time   = '0';
			$bookDetail->book_pic   = $book_pic;
			$bookDetail->book_link  = '';
			$bookDetail->save();

			$recommend->user_id     = 0;
			$recommend->book_id     = $bookBasic->id;
			$recommend->rec_reason  = $rec_reason;
			$recommend->rec_type    = $rec_type;
			$recommend->buy_link    = $buy_link;
			$recommend->save();

			return Redirect::to('personal');

		}

	}

}

?>