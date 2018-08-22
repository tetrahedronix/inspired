<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
 * This single route declaration creates multiple routes to handle a variety
 * of actions on the route.
 */
Route::resource('posts', 'InspiredPostController')->only(['index', 'show']);

Route::middleware('web', 'auth', 'dashboard')->name('admin.')->group(function () {
    Route::redirect('/home', '/dashboard');
    Route::get('/dashboard', 'InspiredDashboardController@index');
    Route::get('/dashboard/create', 'InspiredDashboardController@create');
    Route::get('/dashboard/template', 'InspiredDashboardController@template')->
      name('template');
});
