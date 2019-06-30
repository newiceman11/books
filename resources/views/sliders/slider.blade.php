@extends('../books.layout')
@section('content')
<h1 class="text-center">AGREGAR IMAGEN</h1>
<br>
<div class="container">
<form method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
  @csrf
  <div class="col-xs-4">

  <div class="form-group">

  <label class="control-label">Subir imagen  </label><br>

  <input type="file" class="filestyle" data-icon="false" name="image_file">

  </div>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input name="name" class="form-control col-xl-6 col-md-3 col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
  </div>
<button type="submit" class="btn btn-primary" onclick="return confirm('Libro creado correctamente')">enviar</button>
</form>
</div>
<br>
<br>
@include('../books.partials.banner')
@endsection
