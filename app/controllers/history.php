<?php

class History extends BaseController {

	public function index()
	{
		if(Auth::check()) {
			$act = BookActivity::where('act_status', '=', '已结束')
				->orderBy('id', 'desc')
				->paginate(10);
			
			return View::make('bookBuy.history', array(
				'message' => Session::get('message'),
				'position' => 'history',
				'user' => Auth::user(),
				'activity' => $act
			));
		}
		else {
			return Redirect::to('loginPage');
		}
	}

}

?>