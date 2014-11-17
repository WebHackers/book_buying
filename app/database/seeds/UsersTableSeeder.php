<?php

class UsersTableSeeder extends Seeder {
	public function run() {
		User::create(array(
			'user_id'=>12108209,
			'user_name'=>'陈露耿',
			'password'=>Hash::make('206_12108209'),
			'user_rank'=>'普通用户'
		));

		User::create(array(
			'user_id'=>12108327,
			'user_name'=>'谢俊杰',
			'password'=>Hash::make('206_12108327'),
			'user_rank'=>'图书管理员'
		));
	}

}
