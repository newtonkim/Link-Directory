<?php
use Illuminate\Http\Request;

Route::resource('links', 'LinkController');
//authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
