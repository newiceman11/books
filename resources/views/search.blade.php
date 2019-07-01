@extends('books.layout')

@section('content')
<div class="container" style=" color:#fff;">
    @if(isset($details))
        <p>Resultado de busqueda <b> {{ $query }} </b></p>
    <h2>Detalles de libros</h2>
    <table class="table table-striped" style=" color:#fff; background-color:#454d55;">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $search_book)
            <tr>
                <td>{{$search_book->title}}</td>
                <td>{{$search_book->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
<br>
<br>
@include('books.partials.banner')
@endsection
