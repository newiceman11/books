@extends('books.layout')
@section('content')
@php
 $array_blogs = \App\Blog::all();
@endphp
<br>
<div class="container">
       <br>

  <h1 class="text-center">AGREGAR POST</h1>
  <br>

  <form method="POST" action="">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input name="title" class="form-control col-xl-3 col-md3 col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contenido</label>
      <textarea name="content" class="form-control-md" id="exampleInputPassword1" placeholder="descripcion">
      </textarea>
    </div>
    <div class="form-group">
      <td > </td>
    </div>
    <button type="submit" class="btn btn-primary" onclick="return confirm('Posr creado correctamente')">enviar</button>
  </form>

  <div class="container">
    <br>
    <table class="table table-dark">
      @if (Session::has('success_msg'))
      <div class="alert alert-info">{{ Session::get('success_msg') }}</div>
      @endif
      @if (Session::has('msg'))
      <div class="alert alert-info">{{ Session::get('msg') }}</div>
      @endif
      @if (Session::has('msg'))
      <div class="alert alert-info">{{ Session::get('msg-delete') }}</div>
      @endif
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">TITULO</th>
          <th scope="col">CONTENIDO</th>
          <th scope="col">EDITAR</th>
          <th scope="col">ELIMINAR</th>
        </tr>
      </thead>
      <tbody>
        @foreach($array_blogs as $blog)
        <tr>

          <th scope="row">{{$blog->id}}</th>
          <td>{{$blog->title}}</td>
          <td>{{$blog->content}}</td>
          <td> <a class="btn btn-info" href="{{route('blog.edit',$blog->id)}}">Editar</a></td>
          <td>
            <form action="{{route('blog.destroy',$blog->id)}}" method="POST">
              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-danger" onclick="return confirm('Quiere borrar el registro?')" >Eliminar</button>

            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
