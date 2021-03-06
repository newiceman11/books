<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Comments;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->type == "admin"){
          return view('home');
        }

        else {
          return view('homepage');
        }
    }

    public function admin(Request $req){

      $books = book::paginate(15);
      return view('books.index', ['array_books' => $books]);

}
}
