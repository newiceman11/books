@extends('../books.layout')
@section('content')
@php
$array_sub= \App\SubItem::all();
@endphp




<div class="container fluid" style="padding:40px 40px;" >

  <div id="accordion">

    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          <h1 class="text-center">AGREGAR ITEM</h1>
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">

          <br>
          <div class="container">
            <form method="POST" action="{{route('items.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="col-xs-4">
                <label for="exampleInputEmail1">Nombre</label>
                <input name="item_name" class="form-control col-xl-6 col-md-3 col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">Url</label>
                <input  name="url" class=" id-input form-control col-xl-6 col-md-3 col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
              </div>
              <br>
              <button type="submit" class="btn btn-primary">enviar</button>
            </form>
          </div>
          <br>
        </div>
      </div>
    </div>

  </div>
  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        <h1 class="text-center">AGREGAR SUB-ITEM</h1>
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <form method="POST" action="{{route('store.sub')}}" enctype="multipart/form-data">
          @csrf
          <label for="exampleInputEmail1">Item</label>
          <select  class="form-control col-xl-6 col-md3 col-sm-4 " id="combobox" name="item_id" >
            @foreach($array_items as $item)
            <option value="{{$item->id}}">{{$item->item_name }}</option>
            @endforeach
          </select>
          <br>
          <div class="col-xs-4">
            <label for="exampleInputEmail1">Nombre</label>
            <input name="subitem_name" class="form-control col-xl-6 col-md-3 col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
          </div>
          <br>

          <div class="form-group">
            <label for="exampleInputEmail1">Url</label>
            <input name="url" class=" id-input form-control col-xl-6 col-md-3 col-sm-4 url" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
          </div>
          <button type="submit" class="btn btn-primary">enviar</button>
        </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
      <h1 style="text-align:center;">ELIMINAR ITEMS</h1>
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <div class="container">
          <br>
          <br>

          <br>
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col" style="text-align:center;">NOMBRE</th>
                <th scope="col" style="text-align:center;">EDITAR</th>
                <th scope="col" style="text-align:center;">ELIMINAR</th>
              </tr>
            </thead>
            <tbody>
              @foreach($array_items as $item)
              <tr>
                <th scope="row"  style="text-align:center;">{{$item->item_name}}</th>
                <td  style="text-align:center;"> <a class="btn btn-info" href="{{route('items.edit', $item->id)}}">Editar</a></td>
                <td  style="text-align:center;">
                  <form action="{{ route('items.destroy',$item->id) }}" method="POST">
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
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        <h1 style="text-align:center;">ELIMINAR SUB-ITEMS</h1>
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <div class="container">
          <br>
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col" style="text-align:center;">NOMBRE</th>
                <th scope="col" style="text-align:center;">EDITAR</th>
                <th scope="col" style="text-align:center;">ELIMINAR</th>
              </tr>
            </thead>
            <tbody>
              @foreach($array_sub as $sub)
              <tr>
                <th scope="row"  style="text-align:center;">{{$sub->subitem_name}}</th>
                <td  style="text-align:center;"> <a class="btn btn-info" href="">Editar</a></td>
                <td  style="text-align:center;">
                  <form action="{{ route('destroy.sub',$sub->id) }}" method="POST">
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
      </div>
    </div>
  </div>
</div>
  @include('books.partials.banner')
  @endsection
