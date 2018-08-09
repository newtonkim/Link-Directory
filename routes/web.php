<?php
use Illuminate\Http\Request;

Route::resource('links', 'LinkController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
