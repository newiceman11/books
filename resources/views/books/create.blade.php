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
    <div class="col-xs-4">

    <div class="form-group">

    <label class="control-label">Subir PDF  </label><br>

    <input type="file" class="filestyle" data-icon="false" name="pdf_file">

    </div>

    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input name="title" class="form-control col-xl-3 col-md3 col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo">

    </div>
    <select  class="form-control col-xl-3 col-md3 col-sm-4 " id="combobox" name="author_id" >
      @foreach($array_authors as $author)
        <option value="{{$author->id}}">{{$author->name }} {{$author->last_name }}</option>
      @endforeach
    </select>
    <div class="form-group">
      <label for="exampleInputPassword1">Descripcion</label>
      <textarea name="description" class="form-control-md" id="exampleInputPassword1" placeholder="descripcion">
      </textarea>
    </div>

    <button type="submit" class="btn btn-primary" onclick="return confirm('Libro creado correctamente')">enviar</button>
  </form>

@endsection
