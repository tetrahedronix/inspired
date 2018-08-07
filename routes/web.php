<?php

Route::get('/', 'InspiredPostController@index');

Route::get('/post/id/{post}', 'InspiredPostController@show')->where('post', '[0-9]+');

Route::get('/post/create', 'InspiredPostController@create');
