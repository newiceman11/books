@extends('books.layout')
@section('content')
<!-- slider-->
@php
 $array_sliders = \App\Slider::all();
@endphp
<!-- remember to add new divs if you change $slides_number -->
<div class="slider" id="main-slider"><!-- outermost container element -->
	<div class="slider-wrapper"><!-- innermost wrapper element -->
	   @foreach($array_sliders as $slider)
		<img src='{{ asset("img/slider/$slider->image_file") }}'alt="Third" class="slide" />
    @endforeach
	</div>
	<div class="slider-nav"><!-- "Previous" and "Next" actions -->
		<button class="slider-previous">Previous</button>
		<button class="slider-next">Next</button>
	</div>
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
      @include('books.partials.banner')
@endsection
@push('scripts')
<script>
(function() {

function Slideshow( element ) {
  this.el = document.querySelector( element );
  this.init();
}

Slideshow.prototype = {
  init: function() {
    this.wrapper = this.el.querySelector( ".slider-wrapper" );
    this.slides = this.el.querySelectorAll( ".slide" );
    this.previous = this.el.querySelector( ".slider-previous" );
    this.next = this.el.querySelector( ".slider-next" );
    this.index = 0;
    this.total = this.slides.length;

    this.actions();
  },
  _slideTo: function( slide ) {
    var currentSlide = this.slides[slide];
    currentSlide.style.opacity = 1;

    for( var i = 0; i < this.slides.length; i++ ) {
      var slide = this.slides[i];
      if( slide !== currentSlide ) {
        slide.style.opacity = 0;
      }
    }
  },
  actions: function() {
    var self = this;
    self.next.addEventListener( "click", function() {
      self.index++;
      self.previous.style.display = "block";

      if( self.index == self.total - 1 ) {
        self.index = self.total - 1;
        self.next.style.display = "none";
      }

      self._slideTo( self.index );

    }, false);

    self.previous.addEventListener( "click", function() {
      self.index--;
      self.next.style.display = "block";

      if( self.index == 0 ) {
        self.index = 0;
        self.previous.style.display = "none";
      }

      self._slideTo( self.index );

    }, false);
  }


};

document.addEventListener( "DOMContentLoaded", function() {

  var slider = new Slideshow( "#main-slider" );

});


})();

</script>
@endpush
