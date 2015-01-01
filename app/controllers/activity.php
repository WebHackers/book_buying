<?php

class Activity extends BaseController {

	public function index()
	{
		if(Auth::check()) {
			if(Auth::user()->user_rank=='购书管理') {
				$activity = BookActivity::where('act_status','=','已开启')->get();
				return View::make('bookBuy.activity', array(
					'message' => Session::get('message'),
					'position' => 'admin',
					'activity' => $activity,
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

	public function update()
	{
		if(Auth::check()&&Auth::user()->user_rank=='购书管理') {
			if(!is_numeric(Input::get('budget')))
				return Redirect::back()->with('message','预算不能是非数字！');

			if(Input::get('deadline')=='')
				return Redirect::back()->with('message','截止时间不能为空！');

			$act = BookActivity::where('act_status','=','已开启')->get();
			if(count($act)==0) {
				$act = new BookActivity;
				$act->act_period = Input::get('deadline');
				$act->act_budget = Input::get('budget');
				$act->act_cost = 0;
				$act->act_status = '已开启';
				$act->act_message = Input::get('message');
				$act->save();
			}
			else {
				$act[0]->act_period = Input::get('deadline');
				$act[0]->act_budget = Input::get('budget');
				$act[0]->act_message = Input::get('message');
				$act[0]->save();
			}
			return Redirect::to('activity');
		}
	}

	public function finish()
	{
		if(Auth::check()&&Auth::user()->user_rank=='购书管理') {
			$activity = BookActivity::where('act_status','=','已开启')->get();
			if(count($activity)==0)
				return Redirect::back()->with('message','没有开启的购书活动！');

			if(!is_numeric(Input::get('cost')))
				return Redirect::back()->with('message','总花费不能是非数字！');

			$act = $activity[0];
			$books = BookRecommend::where('status', '=', '已购买')->get();
			if(count($books)==0)
				return Redirect::back()->with('message','还没有购买书籍呦');
			foreach ($books as $book) {
				$listItem = new BookList;
				$listItem->book_kind 		= $book->book_kind;
				$listItem->book_time 		= date("Y-m-d");
				$listItem->book_status 	= '未被借';
				$listItem->act_id 			= $act->id;
				$listItem->save();

				$book->status = '已入库';
				$book->save();
			}

			$act->act_status = '已结束';
			$act->act_cost = Input::get('cost');
			$act->save();

			return Redirect::to('activity');
		}
	}

}

?>