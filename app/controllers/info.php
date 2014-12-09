<?php

class Info extends BaseController {

	public function index()
	{
		$rec = BookRecommend::where('book_kind', '=', Input::get('id'))->get();
		$basic = BookBasic::find(Input::get('id'));
		$arr = array();
		if(count($rec)!=0&&count($basic)!=0) {
			$isfavour = BookLike::where('user_id', '=', Auth::user()->id)
						   ->where('book_kind', '=', Input::get('id'))->get();
			if(count($isfavour)==0) {
				$btn = 'uk-button-primary';
				$tip = '赞';
			}
			else {$btn = '';$tip = '已赞';}

			if($rec[0]->status=='已购买') {
				$status = '已购买';
			}
			else {$status = '';}

			$arr = array(
				'rec' => $rec[0],
				'basic' => $basic,
				'btn' => $btn,
				'tip' => $tip,
				'status' => $status
			);
			return View::make('bookBuy.info', array('book' => $arr, 'user' => Auth::user()->user_name));
		}
		return Redirect::to('error')->with('message', '找不到相应的书籍额~');
	}

	public function update()
	{
		return 'update_info';
	}

}

?>