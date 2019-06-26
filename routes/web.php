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
Route::get('/', 'BookController@index');
/*Route::get('/', function () {
    return view('homepage');
});*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();
Route::resource('books','BookController');
Route::group(['middleware' => ['auth', 'admin']], function() {
Route::resource('books','BookController');
Route::resource('users','UserController');
Route::get('/upload-pdf', 'PDFController@index')->name('pdf');
//Route::resource('item','ItemController');
Route::resource('map','MapController');
  // END admin
  Route::get('books-admin', function () {
      return view('books.index');
  });
});
/***************search********/
Route::any('/search','SearchController@Searching');
