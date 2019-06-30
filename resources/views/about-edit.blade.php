@extends('books.layout')
@section('content')

<br>
<div class="container">
       <br>

  <h1 class="text-center">EDITAR INSTITUCIONAL</h1>
  <br>

  <form  action="{{ route('crud.update', $array_about->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input value="{{$array_about->title}}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Descripcion</label>
      <textarea class="form-control" name="description_site"  placeholder="Reseña">{{ $array_about->description_site }}</textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Firma</label>
      <input value="{{$array_about->firm}}" class="form-control" name="firm"  placeholder="Firma">
    </div>
    <button type="submit" class="btn btn-primary">enviar</button>
  </form>
</div>
<br>
@include('books.partials.banner')
<br>
@endsection
