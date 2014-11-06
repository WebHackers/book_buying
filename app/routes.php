<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//index

Route::get('/', 'index@index');							//首页

Route::post('/index/like', 'index@like');				//点赞链接

Route::post('/index/dislike', 'index@dislike');			//反对链接

Route::get('/index/history', 'index@history');			//历史购书记录

//comment

Route::get('/comment', 'comment@index');				//评论页面

Route::post('/comment/update', 'comment@update');		//评论提交

//recommend

Route::get('/recommend', 'recommend@index');			//解析目标网站URL

Route::post('/recommend/commit', 'recommend@commit');	//提交推荐书目

//personal

Route::get('/personal', 'personal@index');				//个人管理页面

Route::post('/personal/update', 'personal@update');		//更新书目信息

//admin

Route::get('/admin', 'admin@index');					//管理员页面

Route::post('/admin/update', 'admin@update');			//更新管理信息


?>