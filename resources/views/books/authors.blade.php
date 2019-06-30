@extends('books.layout')
@section('content')

@php
 $array_authors = \App\Author::all();
@endphp

<div class="container">
<form action="{{route('authors.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Nombre</label>
    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingresar nombre">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Apellido</label>
    <input name="last_name" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingresar apellido">
  </div>
   <button type="submit" class="btn btn-primary" onclick="return confirm('Autor creado correctamente')">Enviar</button>
</form>
</div>

<div class="container" style="margin-top:150px; margin-bottom:150px;">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">EDITAR</th>
      <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
  <tbody>
    @foreach($array_authors as $authors)
    <tr>
      <th scope="row">{{$authors->id}}</th>
      <td>{{$authors->name}}</td>
      <td>{{$authors->last_name}}</td>
        <td>  <form action="{{ route('authors.destroy',$authors->id) }}" method="POST">
                     @csrf
                     @method('DELETE')

           <button type="submit" class="btn btn-danger" onclick="return confirm('Quiere borrar el registro?')" >Eliminar</button>
             <td> <a class="btn btn-info" href="{{route('authors.edit', $authors->id)}}">Editar</a></td>
         </form></td>

    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection
