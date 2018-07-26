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

Route::get('/','PageController@getHome');

Route::get('/about','PageController@getAbout');

Route::get('/contact','PageController@getContact');

Route::post('/contact/submit','MessageController@submit');


Route::get('/messages', 'MessageController@getMessages');

Route::resource('/api/messages', 'APIController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

