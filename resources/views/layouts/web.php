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
    return view('homepage');
});

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// admin route grup
Route::group(['middleware' => ['auth', 'admin']], function() {
  Route::resource('books','BookController');
  Route::resource('users','UserController');
  Route::get('/admin/crud', function () {
      return view('books.index');
  });
  Route::get('/admin/dashboard', function () {
      return redirect('/books');
  });
// END admin
});
