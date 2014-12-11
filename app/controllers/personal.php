<?php

class Personal extends BaseController {

	public function index()
	{
		if(Auth::check()) {
			$list = array();
			$rec_list = BookRecommend::where('user_id', '=', Auth::user()->id)->get();
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
			return View::make ('bookBuy.personal', array('list' => $list, 'user' => Auth::user()));
		}
		else {
			return Redirect::to('loginPage')->with('message', 'Please Login');
		}
	}

	public function update()
	{
		if(!Auth::check()) {return;}

		$basic = BookBasic::find(Input::get('kind'));
		if(count($basic)>0) $basic->delete();
		$rec = BookRecommend::where('book_kind', '=', Input::get('kind'))->delete();
		$like = BookLike::where('book_kind', '=', Input::get('kind'))->delete();
		$msg = BookMessage::where('book_kind', '=', Input::get('kind'))->delete();

		return 'removed';
	}
}

?>