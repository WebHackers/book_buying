<?php

/**
 *|--------------------------------------------------------------------------
 *|	Account
 *|--------------------------------------------------------------------------
 *|
 *| '/loginPage' --- The page for login
 *|
 *| '/login' --- 前端->提交登陆表单
 *|          --- 后端->验证用户，成功则返回首页，否则返回登陆页面
 *|
 *| '/logout' --- 前端->发起URL请求
 *|           --- 后端->删除登陆信息，重定向到登陆页面
 *|
 */

Route::get('/loginPage', 'account@loginPage');

Route::post('/login', 'account@login');
//Route::post('/login', array('https','account@login'));

Route::get('/logout', 'account@logout');

/**
 *|--------------------------------------------------------------------------
 *|	Index
 *|--------------------------------------------------------------------------
 *|
 *| '/' --- 首页
 *|
 *| '/like' --- 前端->发起url请求，参数'bookId=**'
 *|         --- 后端->相应书目like字段值加一,成功返回true,否则false
 *|
 */

Route::get('/', 'index@index');

Route::post('/favour', 'index@favour');

/**
 *|--------------------------------------------------------------------------
 *|	History
 *|--------------------------------------------------------------------------
 *|
 *| '/history' --- 购书记录页面
 *|
 */

Route::get('/history', 'history@index');

/**
 *|--------------------------------------------------------------------------
 *|	Message
 *|--------------------------------------------------------------------------
 *|
 *| '/message' --- 留言页面
 *|
 *| '/message/update' --- 前端->Ajax提交包括"留言书目","留言人","留言内容"
 *|                   --- 后端->插入留言数据，成功则返回true，否则false
 */

Route::get('/info', 'info@index');

Route::post('/info/addMsg', 'info@addMsg');

Route::post('/info/addLink', 'info@addLink');

/**
 *|--------------------------------------------------------------------------
 *|	Recommend
 *|--------------------------------------------------------------------------
 *|
 *| '/recommend' --- 推荐页面
 *|
 *| '/recommend/query' --- 前端->URL请求，参数（target）为目标网址
 *|                    --- 后端->爬虫解析，返回目标网址上的书目信息
 *|
 *|
 *| '/recommend/update' --- 前端->表单提交推荐书目
 *|                     --- 后端->插入推荐书目，成功则返回true，否则返回false
 */

Route::get('/recommend', 'recommend@index');

Route::post('/recommend/query', 'recommend@query');

Route::post('/recommend/update', 'recommend@update');

/**
 *|--------------------------------------------------------------------------
 *|	Personal
 *|--------------------------------------------------------------------------
 *|
 *| '/personal' --- 个人页面
 *|
 *| '/personal/update' --- 前端->Ajax提交个人添加的网页链接，如精彩书评，学习资源
 *|                    --- 后端->插入link数据，成功则返回true，否则false
 */

Route::get('/personal', 'personal@index');

Route::post('/personal/delete', 'personal@delete');

/**
 *|--------------------------------------------------------------------------
 *|	Admin
 *|--------------------------------------------------------------------------
 *|
 *| '/admin' --- 管理员页面
 *|
 *| '/admin/toggle' --- 前端->Ajax发送post请求，内容为空
 *|                 --- 后端->更新数据（形式为toggle），成功则返回true，否则false
 *|
 *| '/admin/update' --- 前端->Ajax发送post请求，内容为已购买书目的ID
 *|                 --- 后端->更新数据，成功则返回true，否则false
 */

Route::get('/admin', 'admin@index');

Route::post('/admin/toggle', 'admin@toggle');

Route::post('/admin/update', 'admin@update');

Route::get('/error', function() {
	return View::make('bookBuy.error', array('message' => Session::get('message')));
});

Route::get('/master', function(){
	return View::make('layouts.master');
});

Route::get('something', ['before' => 'force.ssl', function()
{
    return "This will be forced SSL";
}]);
?>