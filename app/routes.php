<?php

/**
 *|--------------------------------------------------------------------------
 *|	Account
 *|--------------------------------------------------------------------------
 */

Route::get('/loginPage', 'account@loginPage');

Route::post('/login', 'account@login');
//Route::post('/login', array('https','account@login'));

Route::get('/logout', 'account@logout');

/**
 *|--------------------------------------------------------------------------
 *|	Index
 *|--------------------------------------------------------------------------
 */

Route::get('/', 'index@index');

Route::post('/favour', 'index@favour');

/**
 *|--------------------------------------------------------------------------
 *|	History
 *|--------------------------------------------------------------------------
 */

Route::get('/history', 'history@index');

Route::get('/{history}/search', 'search@handle');

/**
 *|--------------------------------------------------------------------------
 *|	Message
 *|--------------------------------------------------------------------------
 */

Route::get('/info', 'info@index');

Route::post('/info/addMsg', 'info@addMsg');

Route::post('/info/addLink', 'info@addLink');

/**
 *|--------------------------------------------------------------------------
 *|	Recommend
 *|--------------------------------------------------------------------------
 */

Route::get('/recommend', 'recommend@index');

Route::post('/recommend/query', 'recommend@query');

Route::post('/recommend/update', 'recommend@update');

/**
 *|--------------------------------------------------------------------------
 *|	Personal
 *|--------------------------------------------------------------------------
 */

Route::get('/personal', 'personal@index');

Route::post('/personal/delete', 'personal@delete');

/**
 *|--------------------------------------------------------------------------
 *|	Admin
 *|--------------------------------------------------------------------------
 */

Route::get('/admin', 'admin@index');

Route::post('/admin/buy', 'admin@buy');

/**
 *|--------------------------------------------------------------------------
 *|	Activity
 *|--------------------------------------------------------------------------
 */

Route::get('/activity', 'activity@index');

Route::post('/activity/update', 'activity@update');

Route::post('/activity/finish', 'activity@finish');

Route::get('/error', function() {
	return View::make('bookBuy.error', array('message' => Session::get('message')));
});


?>