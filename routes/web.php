<?php
Use App\Book;
use Illuminate\Support\Facades\Input;
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
});
/***************serach********/
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $search_book = Book::where('title','LIKE','%'.$q.'%')->get ();/*orWhere('email','LIKE','%'.$q.'%')->get();*/
  if ($search_book)
    return view('search')->withDetails($search_book)->withQuery ( $q );
      else
    return view ('homepage')->withMessage('No se encuentran datos');
});
