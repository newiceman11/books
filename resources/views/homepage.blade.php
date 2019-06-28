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

      <div class="container">
          <!--<h1>bootstrap image thumbnail hover effect text</h1>-->
      <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12"style="height:100%; padding-top:30px;">
                  <div class="hovereffect">
                      <img class="img-responsive" src="./img/Letters-Flying-over-a-Book-540x304.jpg" alt="">
                      <div class="overlay">
                         <h2>VER</h2>
                         <p class="info">Listado de libros <br>
                         <a href="{{route('books-list')}}">Ver más</a></p>
                      </div>
                  </div>

              </div>

            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12"style="height: 100%; padding-top:30px;">
                  <div class="hovereffect">
                      <img class="img-responsive" src="./img/The-World-in-a-Book-540x304.jpg" alt="">
                      <div class="overlay">
                         <h2>LECTORES</h2>
                         <p class="info"> Unirse a sociedad de lectores.<br>
                         <a href="#">Ver más</a></p>
                      </div>
                  </div>
                  </div>
              </div>
      </div>
      @include('aboutTable')
@endsection
