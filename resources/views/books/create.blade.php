@extends('books.layout')
@section('content')
<br>
<div class="container">
       <br>

  <h1 class="text-center">AGREAGAR LIBROS</h1>
  <br>

  <form method="POST" action="{{route('books.store')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input name="title" class="form-control col-xl-3 col-md3 col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Descripcion</label>
      <textarea name="description" class="form-control" id="exampleInputPassword1" placeholder="descripcion">
      </textarea>
    </div>

    <button type="submit" class="btn btn-primary">enviar</button>
  </form>
</div>
@endsection
