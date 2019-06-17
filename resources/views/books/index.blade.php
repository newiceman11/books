@extends('books.layout')
@section('content')
<style>
    
  
</style>

<!-- slider-->
  <div class="wrap">
  <header>
    <label for="slide-1-trigger">Slide 1</label>
    <label for="slide-2-trigger">Slide 2</label>
    <label for="slide-3-trigger">Slide 3</label>
    <label for="slide-4-trigger">Slide 4</label>
  </header>
  <input id="slide-1-trigger" type="radio" name="slides" checked>
  <section class="slide slide-one">
    <!--<h1>Headline One</h1>-->
  </section>
  <input id="slide-2-trigger" type="radio" name="slides">
  <section class="slide slide-two">
    <!--<h1>Headline One</h1>-->
  </section>
  <input id="slide-3-trigger" type="radio" name="slides">
  <section class="slide slide-three">
    <!--<h1>Headline One</h1>-->
  </section>
  <input id="slide-4-trigger" type="radio" name="slides">
  <section class="slide slide-four">
    <!--<h1>Headline One</h1>-->
  </section>
</div>
<!--endslider-->

<div class="container">
  <h1>Listado de libros</h1>
  <br>
  <table class="table table-dark">
    <a class= "btn btn-info btn mb-3" href="{{route('books.create')}}">Agregar libros</a>
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
        <th scope="col">RESEÑA</th>
        <th scope="col">EDITAR</th>
          <th scope="col">ELIMINAR</th>
            <th scope="col">MOSTRAR</th>
      </tr>
    </thead>
    <tbody>
        @foreach($array_books as $book)
      <tr>

        <th scope="row">{{$book->id}}</th>
        <td>{{$book->title}}</td>
        <td>{{$book->description}}</td>
        <td> <a class="btn btn-info" href="{{route('books.edit', $book->id)}}">Editar</a></td>
            <td>
              <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                         @csrf
                         @method('DELETE')

               <button type="submit" class="btn btn-danger" onclick="return confirm('Quiere borrar el registro?')" >Eliminar</button>

             </form>
        </td>
        <td> <a href="{{ route('books.show',$book->id) }}"><button class="btn btn-success">Mostrar</button></a></td>




      </tr>
  @endforeach
    </tbody>
  </table>
{{$array_books->links()}}
</div>
@endsection
