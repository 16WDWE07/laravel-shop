<?php
	
Route::get('/', 		'HomeController@index');
Route::get('contact', 	'ContactController@index');
Route::get('about', 	'AboutController@index');

Route::resource('shop', 'ShopController');

Auth::routes();

Route::resource('account', 'AccountController');
Route::resource('blog', 'BlogController');