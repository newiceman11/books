@extends('books.layout')
@section('content')
@php
 $array_books = \App\Book::paginate(15);
@endphp

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Titulo</label>
                    <input value="{{$book->title}}" name="title" class="form-control col-md-5" id="exampleInputEmail1" aria-describedby="emailHelp" c>
                    <button type="submit" class="btn btn-primary col-md-2">enviar</button>
                  </div>
                    <div class="panel-body">
                        <form>
                            <textarea class="ckeditor"  name="editor1" id="editor1" rows="10" cols="80" placeholder="Descripción">
                              {{$book->description}}
                            </textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
