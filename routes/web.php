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

use App\Http\Controllers\MessagesController;

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/guidelines', 'PagesController@guidelines');

Route::get('/rooms', 'PagesController@rooms');

Route::get('/partnerships', 'PagesController@partnerships');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::resource('messages', 'MessagesController');

