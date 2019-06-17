@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" col="">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estás logueado!
                </div>
            </div>
        </div>
      @if(Auth::user()->type=='admin')
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Roles
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="admin/dashboard">CRUD libros</a>
    <a class="dropdown-item" href="#">Perfil de usuarios</a>
    <a class="dropdown-item" href="#">Extras</a>
  </div>
</div>
    </div>
@endif
</div>
@endsection
