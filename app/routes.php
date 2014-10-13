<?php

Route::get('users/store', 'UsersController@store');
Route::resource('users', 'UsersController');

// Route::get('/', function(){

// 	// 現状はわたすデータがないのでエンプティーアレイをわたします
// 	$data = [];
// 	Mail::send('emails.welcome', $data, function($message){
// 		$message->to('manabu.bannai@gmail.com')
// 						->subject('ここがタイトルです');
// 	});
// });
