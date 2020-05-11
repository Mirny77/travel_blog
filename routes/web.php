<?php


Route::resource('/post', 'PostController');
Route::get('/','PostController@index');
//Route::get('post/','PostController@index')->name('post.index');
//Route::get('create/','PostController@create')->name('post.create');
//Route::post('post/','PostController@store')->name('post.store');
//Route::get('post/show/{id}','PostController@show')->name('post.show');
//Route::get('post/edit/{id}','PostController@edit')->name('post.edit');
//Route::patch('post/show/{id}','PostController@update')->name('post.update');
//Route::delete('post/{id}','PostController@destroy')->name('post.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
