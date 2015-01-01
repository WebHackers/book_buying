<?php

class Admin extends BaseController {

	public function index()
	{
		if(Auth::check()) {
			if(Auth::user()->user_rank=='购书管理') {
				if(Input::get('status')=='true') $status = '已购买';
				else  $status = '未购买';
				$list = array();
				$rec_list = BookRecommend::where('status', '=', $status)
					->orderBy('id', 'desc')->paginate(10);
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
					'message' => Session::get('message'),
					'position' => 'admin',
					'page' => $rec_list, 
					'status' => $status,
					'list' => $list, 
					'user' => Auth::user()
				));
			}
			else {
				return Redirect::to('error')->with('message','你不是购书管理员');
			}
		}
		else {
			return Redirect::to('loginPage')->with('message','请先登录');
		}
	}

	public function buy()
	{
		if(Auth::check()&&Auth::user()->user_rank=='购书管理') {
			$rec = BookRecommend::where('book_kind', '=', Input::get('id'))->get();
			if(count($rec)!=0) {
				if($rec[0]->status == '已购买') {
					$rec[0]->status = '未购买';
				}
				else if($rec[0]->status == '未购买') {
					$rec[0]->status = '已购买';
				}
				else {
					return 'false';
				}
				$rec[0]->save();
				return 'true';
			}
			else {
				return 'false';
			}
		}
	}

}

?>