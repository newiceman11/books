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
      <input name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Descripcion</label>
      <input name="description" class="form-control" id="exampleInputPassword1" placeholder="descripcion">
    </div>

    <button type="submit" class="btn btn-primary">enviar</button>
  </form>
</div>
@endsection
