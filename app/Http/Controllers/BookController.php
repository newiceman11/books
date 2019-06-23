<?php

namespace App\Http\Controllers;
use App\Author;
use DB;
use App\Book;
use Illuminate\Http\Request;
use Session;



class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //$books=Book::select('title','description')->with('authors')->get();
      //return view('homepage', ['array_books' => $books]);

      /*$books =Book::select('title','description')
      ->with('authors')
      ->get();
      return view('homepage', ['array_books' => $books]);*/

      $books= DB::table('books')
                  ->join('authors', 'authors.id', '=', 'books.author_id')
                  ->select('books.*','authors.name')
                  ->get();
                  return view('homepage', ['array_books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Book::create($request->all());


        Session::flash('message','Libro creado correctamente');
        return view('books.index');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
       return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {

         return view('books.edit',compact('book'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

         $book->update($request->all());

        Session::flash('message','Libro actualizado correctamente');
        return redirect()->route('books.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        Session::flash('message','Libro ha sido borrado  correctamente');
        return view('books.index');

    }
}
