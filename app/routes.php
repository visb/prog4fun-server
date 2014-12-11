<?php

Route::pattern('id', '[0-9]+');
Route::pattern('post_id', '[0-9]+');

// posts
Route::get('/post', 'PostController@list');
Route::post('/post', 'PostController@create');
Route::get('/post/rand', 'PostController@get');
Route::get('/post/{id}', 'PostController@get');
Route::get('/post/{id}/next', 'PostController@next');
Route::get('/post/{id}/prev', 'PostController@prev');
Route::post('/post/{id}/like', 'PostController@like');
Route::post('/post/{id}/unlike', 'PostController@unlike');

// comments
Route::get('/post/{post_id}/comment', 'CommentController@list');
Route::post('/post/{post_id}/comment', 'CommentController@create');
Route::post('/post/{post_id}/comment/{id}/like', 'CommentController@like');
Route::post('/post/{post_id}/comment/{id}/unlike', 'CommentController@unlike');




