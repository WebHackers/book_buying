<?php

class Admin extends BaseController {

	public function index()
	{
		if(Auth::check()) {
			if(Auth::user()->user_rank=='购书管理') {
				if(Input::get('status')=='true') $status = '已购买';
				else  $status = '未购买';
				$list = array();
				$rec_list = BookRecommend::where('status', '=', $status)->paginate(10);
				foreach ($rec_list as $rec) {
					$user = User::find($rec->user_id);
					if(count($user)==0) {
						$user_name = '未知';
					}
					else {
						$user_name = $user->user_name;
					}

					$basic = BookBasic::find($rec->book_kind);

					$arr = array(
						'rec' => $rec,
						'basic' => $basic,
						'name' => $user_name
					);
					$list[] = $arr;
				}
				return View::make ('bookBuy.admin', array(
					'position' => 'admin',
					'page' => $rec_list, 
					'status' => $status,
					'list' => $list, 
					'user' => Auth::user()
				));
			}
			else {
				return Redirect::to('error')->with('message', 'You are not the Administrator');
			}
		}
		else {
			return Redirect::to('loginPage')->with('message', 'Please Login');
		}
	}

	public function buy()
	{
		if(!Auth::check()) {return;}
		$rec = BookRecommend::where('book_kind', '=', Input::get('id'))->get();
		if(count($rec)!=0) {
			if($rec[0]->status == '已购买') {
				$rec[0]->status = '未购买';
			}
			else {
				$rec[0]->status = '已购买';
			}
			$rec[0]->save();
			return 'true';
		}
		else {
			return 'false';
		}
	}

	public function activity()
	{
		if(Auth::check()) {
			return View::make('bookBuy.activity', array(
				'position' => 'admin',
				'user' => Auth::user()
			));
		}
	}

}

?>