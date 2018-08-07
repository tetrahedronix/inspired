<?php

Route::get('/', 'InspiredPostController@index');

Route::get('/post/id/{post}', 'InspiredPostController@show')->where('post', '[0-9]+');
