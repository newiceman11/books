@extends('books.layout')
@section('content')

<br>
<div class="container">
       <br>
    <button type="button" class="btn btn-dark" onclick="history.go(-1); return false;">Volver</button>
<br>
  <h1 class="text-center">EDITAR LIBROS</h1>
  <br>

  <form  action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input value="{{$book->title}}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Descripcion</label>
      <textarea class="form-control" name="description"  placeholder="Reseña">{{ $book->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">enviar</button>
  </form>
</div>
@endsection
