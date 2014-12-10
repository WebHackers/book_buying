<?php

class Info extends BaseController {

	public function index()
	{
		if(Auth::check()) {
			$rec = BookRecommend::where('book_kind', '=', Input::get('id'))->get();
			$basic = BookBasic::find(Input::get('id'));
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

				$msgList = array();
				$msgs = BookMessage::where('user_id', '=', Auth::user()->id)
					->where('book_kind', '=', Input::get('id'))->get();
				foreach ($msgs as $msg) {
					$user = User::find($msg->user_id);
					$msgList[] = array(
						'content' => $msg->user_message,
						'user' => $user->user_name,
						'time' => $msg->created_at
					);
				}

				$arr = array(
					'rec' => $rec[0],
					'basic' => $basic,
					'btn' => $btn,
					'tip' => $tip,
					'status' => $status,
					'msg' => $msgList
				);

				return View::make('bookBuy.info', array('book' => $arr, 'user' => Auth::user()->user_name));
			}
			return Redirect::to('error')->with('message', '没找到相应的书籍~');
		}
		else {
			return Redirect::to('loginPage');
		}
	}

	public function update()
	{
		if(!Auth::check()) {return;}
		$message = new BookMessage;
		$message->user_id = Auth::user()->id;
		$message->book_kind = Input::get('id');
		$message->user_message = Input::get('message');
		$message->save();
		return  Redirect::to('info?id=' . Input::get('id'));
	}

}

?>