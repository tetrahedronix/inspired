<?php

Route::get('/', 'InspiredPostController@index');

Route::get('/post/id/{post}', 'InspiredPostController@show')
    ->where('post', '[0-9]+');

Route::get('/post/create', 'InspiredPostController@create');

Route::middleware('web', 'auth', 'dashboard')->group(function () {
    Route::redirect('/home', '/dashboard');
    Route::get('/dashboard', 'InspiredDashboardController@index');
    Route::get('/dashboard/template', 'InspiredDashboardController@template')->name('template');
});
