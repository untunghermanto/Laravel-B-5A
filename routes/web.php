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

Route::get('/', function () {
    return redirect('/saran');
});

Route::get('/lontong', function () {
    return redirect()->Route('cetak');
});

Route::get('/nama/{nama}', function ($nama) {
    return "nama saya adalah ".$nama;
});

Route::get('/cetak', function () {
    // return "Hello World";
    // return "<h1>Hello World</h1>";
	return "<h1>Hello World</h1>";
})->name('cetak');

Route::get('/index', function () {
    return view('users.index');
});

Route::get('/index/create', function () {
    return view('users.create');
});
Route::get('/index/show','MyuserController@show');
Route::post('/index/show','MyuserController@store');

Route::delete('/index/show/{id}','MyuserController@delete');

Route::get('/saran','SaranController@show');

Route::get('/saran/create','SaranController@create');
Route::post('/saran/show','SaranController@store');
