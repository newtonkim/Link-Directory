<?php
use Illuminate\Http\Request;

Route::resource('links', 'LinkController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// Route::post('/submit', function (Request $request) {
//     $data = $request->validate([
//         'title' => 'required|max:255',
//         'url' => 'required|url|max:255',
//         'description' => 'required|max:255',
//     ]);

//     $link = tap(new App\Link($data))->save();

//     return redirect('/');
// });
