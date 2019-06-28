@php
 $array_about = \App\About_site::paginate(1);
@endphp

@extends('books.layout')
@section('content')
  @if(isset($array_about))
    <div class="container">
  <h1>Listado de libros</h1>
  <br>
  <table class="table table-dark">
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
        <th scope="col">DESCRIPCION</th>
        <th scope="col">EDITAR</th>
        <th scope="col">ELIMINAR</th>
      </tr>
    </thead>
    <tbody>
      @foreach($array_about as $about)
      <tr>
        <th scope="row">{{$about->id}}</th>
        <td>{{$about->title}}</td>
        <td>{{$about->description_site}}</td>
        <td> <a class="btn btn-info" href="{{route('crud.edit', $about->id)}}">Editar</a></td>
        <td>
          <form action="{{ route('crud.destroy',$about->id) }}" method="POST">
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
@else
  <div class="about">
    <h2>NO SE ENCUENTRAN DATOS</h2>
  </div>
@endif

@endsection
