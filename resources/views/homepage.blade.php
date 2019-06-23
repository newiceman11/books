@extends('books.layout')
@section('content')
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
   </form>


       <form action="/search" method="POST" role="search" ng-controller="MainCtrl"  name="toDoForm" novalidate style="padding-top:40px;">
          @csrf
        <div class="form-group">
          <input name="q" type="text" placeholder="Ingresar titulo de libro" id="add-to-list" ng-model="task" class="form-control" required>
          <button class="btn add-btn" ng-click="add()" ng-disabled="toDoForm.$invalid">Buscar</button>
        </div>
      </form>

</div>
<div class="container">
  <h1>Listado de libros</h1>
  <br>
  <table class="table table-dark" style="padding-top:100px!important;">

    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">TITULO</th>
        <th scope="col">RESEÑA</th>

      </tr>
    </thead>

    <tbody>
      @if(!empty($array_books))
        @foreach($array_books as $book)
      <tr>
        <th scope="row">{{$book->name}}</th>
        <td>{{$book->title}}</td>
        <td>{{$book->description}}</td>
      </tr>
  @endforeach
  @endif
    </tbody>
  </table>

</div>
@endsection
