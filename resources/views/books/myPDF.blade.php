@extends('books.layout')
@section('content')
<form method="POST" action="{{route('add')}}" accept-charset="UTF-8" enctype="multipart/form-data">
    @csrf
  <label for="archivo"><b>Archivo: </b></label><br>
  <input type="file" name="archivo" required>
  <input class="btn btn-success" type="submit" value="Enviar" >
</form>
@if( Session::has( 'success' ))
     {{ Session::get( 'success' ) }}
@endif

@endsection
