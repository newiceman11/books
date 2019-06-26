@extends('books.layout')
@section('content')
@php
  $array_authors = \App\Author::all();
@endphp
<br>
<div class="container">
       <br>

  <h1 class="text-center">AGREGAR LIBROS</h1>
  <br>

  <form method="POST" action="{{route('books.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
     <label for="profile_image" class="col-md-4 col-form-label text-md-right">imagen</label>
     <div class="col-md-6">
         <input id="image" type="file" class="form-control" name="image">
     </div>
</div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input name="title" class="form-control col-xl-3 col-md3 col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo">

    </div>
    <select  class="form-control col-xl-3 col-md3 col-sm-4 " id="combobox" name="author_id" >
      @foreach($array_authors as $author)
        <option value="{{$author->id}}">{{$author->name}}</option>
      @endforeach
    </select>
    <div class="form-group">
      <label for="exampleInputPassword1">Descripcion</label>
      <textarea name="description" class="form-control-md" id="exampleInputPassword1" placeholder="descripcion">
      </textarea>
    </div>

    <button type="submit" class="btn btn-primary">enviar</button>
  </form>
</div>
@endsection
