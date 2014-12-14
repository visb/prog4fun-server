<?php

Route::pattern('id', '[0-9]+');

Route::get('post/rand', 'PostController@show');
Route::post('post/{id}/like', 'PostController@like');
Route::post('post/{id}/unlike', 'PostController@unlike');
Route::get('post/{id}/next', 'PostController@next');
Route::get('post/{id}/prev', 'PostController@prev');
Route::resource('post', 'PostController', ['only' => ['index', 'store', 'show']]);

// // comments
// Route::get('post/{post_id}/comment', 'CommentController@list');
// Route::post('post/{post_id}/comment', 'CommentController@create');
// Route::post('post/{post_id}/comment/{id}/like', 'CommentController@like');
// Route::post('post/{post_id}/comment/{id}/unlike', 'CommentController@unlike');




