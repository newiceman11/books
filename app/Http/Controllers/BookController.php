<?php

namespace App\Http\Controllers;
use App\Author;
use DB;
use App\Book;
use Illuminate\Http\Request;
use Session;
use Input;


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

    return view('homepage');
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //$path = $request->file('image')->store('img','public');
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
      'pdf_file'=>'mimes:pdf',
    ]);

    //  Book::create($request->all());
    $newBook = new Book($request->input()) ;

    if($file = $request->hasFile('pdf_file')) {

      $file = $request->file('pdf_file') ;
      $fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/pdf/' ;
      $file->move($destinationPath,$fileName);
      $newBook->pdf_file = $fileName ;
    }
    $newBook->author_id = Input::get('author_id');
    $newBook->description = Input::get('description');;
    $newBook->save() ;
    Session::flash('message','Libro creado correctamente');
    return redirect('admin/books');
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
  public function destroy($id)
  {
    $books = Book::find($id);
    $books->delete();
    return Redirect('/admin/books');

  }

  public function bookTable()
  {
    $books= DB::table('books')
    ->join('authors', 'authors.id', '=', 'books.author_id')
    ->select('books.*','authors.name')
    ->get();
    return view('books.book', ['array_books' => $books]);
  }

  public function authorBook()
  {
    $books= DB::table('books')
    ->join('authors', 'authors.id', '=', 'books.author_id')
    ->select('books.*','authors.name')
    ->get();
    return view('books.index', ['array_books' => $books]);
  }
}
