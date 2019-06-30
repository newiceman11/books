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
Route::get('/admin/menu', 'HomeController@index')->name('/admin/menu');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();
Route::resource('admin/books','BookController');
Route::group(['middleware' => ['auth', 'admin']], function() {
Route::resource('users','UserController');
Route::get('admin/upload-pdf', 'PDFController@index')->name('pdf');
//Route::resource('item','ItemController');
Route::resource('map','MapController');
//Route::get('/admin/authors/crud','AuthorController@create')->name('authors');
Route::resource('/admin/authors', 'AuthorController');
Route::get('/admin/books','BookController@authorBook')->name('admin/books');
});



Route::get('/admin/about','AboutController@index')->name('admin/about');
Route::resource('admin/about/crud','AboutController');
/***************search********/
Route::any('/search','SearchController@Searching');
Route::get('/book-list','BookController@bookTable')->name('books-list');
