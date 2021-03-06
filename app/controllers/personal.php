<?php

class Personal extends BaseController {

	public function index()
	{
		if(Auth::check()) {
			$list = array();
			$rec_list = BookRecommend::where('user_id', '=', Auth::user()->id)
				->where('status', '!=', '已入库')
				->orderBy('id', 'desc')->paginate(10);
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
			return View::make ('bookBuy.personal', array(
				'message' => Session::get('message'),
				'position' => 'personal',
				'page' => $rec_list, 
				'list' => $list, 
				'user' => Auth::user()
			));
		}
		else {
			return Redirect::to('loginPage')->with('message', 'Please Login');
		}
	}

	public function delete()
	{
		if(!Auth::check()) {return;}

		$basic = BookBasic::find(Input::get('id'));
		if(count($basic)>0) $basic->delete();
		$rec = BookRecommend::where('book_kind', '=', Input::get('id'))->delete();
		$like = BookLike::where('book_kind', '=', Input::get('id'))->delete();
		$msg = BookMessage::where('book_kind', '=', Input::get('id'))->delete();

		return 'removed';
	}
}

?>