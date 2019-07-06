<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogs.blog-create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   }
    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required',
        'content' => 'required',
        //'posted' => 'required',

      ]);

      Blog::create($request->all());
      return redirect('admin/blog');
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
    public function edit(Blog $blog)
    {
      //se intancia la c
        return view('blogs.blog-edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
      $request->validate([
        'title' => 'required',
        'content' => 'required',
      ]);
    /*  $blog = Blog::find($id);
      $blog->title = Input::get('title');
      $blog->content = Input::get('content');;
      $blog->save();*/

      Blog::find($blog)->update($request->all());
      //Session::flash('message','Libro actualizado correctamente');
      return redirect('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $blogs = Blog::find($id);
      $blogs->delete();
      return Redirect('/admin/blog');
    }
    public function blog()
    {
      //$books=Book::select('title','description')->with('authors')->get();
    return view('blogs.blog'/*, ['array_books' => $books]*/);

    }
}
