<?php

Route::get('/', 'InspiredPostController@index');

Route::get('/post/{post}', 'InspiredPostController@show');
