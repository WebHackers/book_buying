<?php

class UsersTableSeeder extends Seeder {
	public function run() {
		User::create(array(
			'user_id'=>12108209,
			'user_name'=>'陈露耿',
			'password'=>md5('206_12108209'),
			'user_rank'=>'普通用户'
		));

		User::create(array(
			'user_id'=>12108327,
			'user_name'=>'谢俊杰',
			'password'=>md5('206_12108327'),
			'user_rank'=>'图书管理员'
		));

		User::create(array(
			'user_id'=>12108135,
			'user_name'=>'张坚革',
			'password'=>md5('206_12108135'),
			'user_rank'=>'普通用户'
		));
	}

}
