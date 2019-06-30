<?php

namespace App\Http\Controllers;
use App\About_site;
use DB;
use Illuminate\Http\Request;
use View;
use Input;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$site = About_sites::paginate(1);
      //return view('aboutTable', ['array_site' => $site]);
      return view('about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(  $id)
    {
        $about = About_site::find($id);
        //show the edit form and pass the nerd
        return \View::make('about-edit')->with('array_about', $about);
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
      // process the login
      $request->validate([
          'title' => 'required',
          'description_site' => 'required',
          'firm'=> 'required',
      ]);

         $about = About_site::find($id);
         $about->title= Input::get('title');
         $about->description = Input::get('description_site');
         $about->author= Input::get('description_site');
         $about->firm = Input::get('firm');
         $about->save();

         // redirect
         return Redirect('home');

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $deleteRow=About_site::findOrFail($id);
      $deleteRow->delete();
      return redirect('/home');

    }

    public function aboutList()
    {

    }

}
