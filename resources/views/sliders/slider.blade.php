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
    <label for="exampleInputEmail1">Nombre</label>
    <input name="name" class="form-control col-xl-6 col-md-3 col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
  </div>
<button type="submit" class="btn btn-primary" onclick="return confirm('imagen creada correctamente')">enviar</button>
</form>
</div>
<br>
<br>
  @if($array_sliders && $array_sliders->count() >0)
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
      <th scope="col">NOMBRE</th>
      <th scope="col">IMAGEN</th>
      <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
  <tbody>

    @foreach($array_sliders as $slider)
    <tr>
      <th scope="row">{{$slider->name}}</th>
      @if(isset($slider->image_file))
      <td><a href='{{ asset("img/slider/$slider->image_file") }}'><button class="btn btn-success">{{ $slider->image_file }}</td>
      @else
      <td> <p>SIN ARHIVO</p>  </td>
      @endif
      <td>
        <form action="{{ route('slider.destroy',$slider->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('Quiere borrar el registro?')" >Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  @else
  <h2 style="text-align:center;">No hay datos disponibles</h2 >
  @endif
  </tbody>
</table>
<br>
<br>
@include('../books.partials.banner')
@endsection
