@php
 $array_items = \App\Item::all();
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">{{env('NAME')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @foreach($array_items  as $item)
      <li class="nav-item">
        <a class="nav-link" href="{{ $item->url }}">{{$item->item_name}}<span class="sr-only">(current)</span></a>
      </li>
    @endforeach
        @guest
      <li class="nav-item active" >
        <a class="nav-link" style="border-radius:5 !important;" href="{{ route('login') }}">Login<span class="sr-only">(current)</span></a>
      </li>
        @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Register</a>
      </li>
      @endif
  @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}">  {{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          <!--<a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->
        @endguest
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->

  <br>
    </form>
  </div>
  @if(Request::is ('/'))
  @else
        <button type="button" class="btn btn-dark" onclick="history.go(-1); return false;">Volver</button>
  @endif
</nav>
