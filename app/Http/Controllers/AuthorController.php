<?php

namespace App\Http\Controllers;
use App\Author;
use Illuminate\Http\Request;
use Input;
use Session;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$authors=Author::all()
      //->get();
      //return view('books.authors',['array_authors => authors']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.authors');
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
           'name' => 'required',
       ]);
       $newAuthors = new Author($request->input()) ;
       $newAuthors->name = Input::get('name');
       $newAuthors->last_name = Input::get('last_name');
       $newAuthors->save() ;
       Session::flash('message','Autor creado correctamente');
       return redirect('admin/authors/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $nerd = Nerd::find($id);
          $nerd->name       = Input::get('name');
          $nerd->last_name = Input::get('last_name');
          $nerd->save();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $authors = Author::find($id);
      $authors->delete();
      return Redirect('/admin/authors/create');

    }
}
