@extends('books.layout')
@section('content')
<br>
<br>
<div class="container">


<form method="POST" action="{{ route('blog.update', $blog->id) }}">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input value="{{$blog->title}}" name="title" class="form-control col-xl-3 col-md3 col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" >

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contenido</label>
    <textarea name="content" class="form-control-md" id="exampleInputPassword1"> {{$blog->content}}</textarea>
  </div>
  <div class="form-group">
    <td > </td>
  </div>
  <button type="submit" class="btn btn-primary" onclick="return confirm('Posr creado correctamente')">enviar</button>
</form>
</div>

@endsection
