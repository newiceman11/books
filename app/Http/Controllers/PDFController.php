<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;


class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('books.myPDF');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('PDFs.create');
        return view('PDFs.create');
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

        PDF::create($request->all());


        Session::flash('message','Libro creado correctamente');
        return redirect()->route('PDFs.index');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PDF  $PDF
     * @return \Illuminate\Http\Response
     */
    public function show(PDF $PDF)
    {
       return view('PDFs.show',compact('PDF'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PDF  $PDF
     * @return \Illuminate\Http\Response
     */
    public function edit(PDF $PDF)
    {

         return view('PDFs.edit',compact('PDF'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PDF  $PDF
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PDF $PDF)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

         $PDF->update($request->all());

        Session::flash('message','Libro actualizado correctamente');
        return redirect()->route('PDFs.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PDF  $PDF
     * @return \Illuminate\Http\Response
     */
    public function destroy(PDF $PDF)
    {
        $PDF->delete();
        Session::flash('message','Libro ha sido borrado  correctamente');
        return redirect()->route('PDFs.index');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

}
