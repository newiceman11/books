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

/*Route::get('/', function () {
    return view('homepage');
});*/
Route::get('/', 'BookController@index');
Route::get('/admin/menu', 'HomeController@index')->name('/admin/menu');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();
Route::resource('slider', 'SliderController');
Route::resource('admin/books','BookController');
/******ADMIN ROUTES*****/
Route::group(['middleware' => ['auth', 'admin']], function() {
Route::resource('users','UserController');
Route::get('admin/upload-pdf', 'PDFController@index')->name('pdf');
Route::resource('map','MapController');
Route::resource('/admin/authors', 'AuthorController');
Route::get('/admin/books','BookController@authorBook')->name('admin/books');
});
Route::get('/admin/about','AboutController@index')->name('admin/about');
Route::resource('admin/about/crud','AboutController');
/***************END ADMIN ROUTES********/
Route::any('/search','SearchController@Searching');
Route::get('/book-list','BookController@bookTable')->name('books-list');
