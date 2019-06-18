@extends('books.layout')
@section('content')

@if(Auth::user()->type == "admin")
<div class="grid-page">
  <div class="menu-container">
    <h2 align="center" style="color:#b3b3b3";>Menú de Admin</h2>
    <nav>
      <ul class="nav-bar">
        <li>
          <a href=" {{ route('books.index') }}" onclick="clickChange(this.innerHTML)">Libros</a>
        </li>
        <li>
          <a href="#" onclick="clickChange(this.innerHTML)">Tiempo</a>
        </li>
        <li>
          <a href="#" onclick="clickChange(this.innerHTML)">Anotaciones</a>
        </li>
        <li>
          <a href="#" onclick="clickChange(this.innerHTML)">Timeline</a>
        </li>
        <li>
          <a href="#" onclick="clickChange(this.innerHTML)">Configuraciones</a>
        </li>
        <li>
          <a href="#" onclick="clickChange(this.innerHTML)">Buscar</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="option">
    <h2 id="title" onclick="clickChange()">Listado de usuarios</h2>
    <div class="container">
      <br>
      <table class="table table-dark">
        <a class= "btn btn-info btn mb-3" href="">Agregar usuarios</a>
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
            <th scope="col">NOMBRE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ROL</th>
            <th scope="col">EDITAR</th>
            <th scope="col">ELIMINAR</th>
            <th scope="col">MOSTRAR</th>
          </tr>
        </thead>
        <tbody>
          @php
           $array_users = \App\user::paginate(15);
          @endphp
          @foreach($array_users as $user)
          <tr>

            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->type}}</td>
            <td> <a class="btn btn-info" href="">Editar</a></td>
            <td>
              <form action="" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger" onclick="return confirm('Quiere borrar el registro?')" >Eliminar</button>

              </form>
            </td>
            <td> <a href=""><button class="btn btn-success">Mostrar</button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$array_users->links()}}
    </div>
  </div>
</div>
@endif
@endsection
<script>
function clickChange(value) {
  let x = document.getElementById("title");
  x.innerHTML = value;
}

let acc = document.getElementsByClassName("accordion");

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
