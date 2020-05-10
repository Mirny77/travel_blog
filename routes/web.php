<?php



Route::get('/','PostController@index');
Route::get('post/','PostController@index')->name('post.index');
Route::get('create/','PostController@create')->name('post.create');
