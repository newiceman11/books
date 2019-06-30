<?php

namespace App\Http\Controllers;
use App\Slider;
use Illuminate\Http\Request;
use Session;
use Input;
use Image;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sliders.slider');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        'image_file'=>'required| mimes:jpg,png,bmp,jpeg',
      ]);

      //  Book::create($request->all());
      $newSlider = new Slider($request->input()) ;

      if($file = $request->hasFile('image_file')) {
        $file = $request->file('image_file') ;
        Image::make($file)->resize(320,240)->save();
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/img/slider' ;
        $file->move($destinationPath,$fileName);
        $newSlider->image_file = $fileName ;
      }
      $newSlider->name = Input::get('name');
      $newSlider->save() ;
      Session::flash('message','Libro creado correctamente');
      return redirect('admin/books');
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
        //
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
        //
    }
}
