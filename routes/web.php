<?php
use Illuminate\Http\Request;

Route::resource('links', 'LinkController');
//authentication of a user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user', 'UserController');
