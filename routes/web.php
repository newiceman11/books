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
    return view('welcome');
});

Route::resource('books','BookController');

Route::get('/admin', function () {
    return view('admin');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin route grup
Route::group(['middleware'=>'auth','namespace'=>'Admin'],function(){
  Route::get('/usuarios','UserController@index');  
});