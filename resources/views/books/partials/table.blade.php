<div class="container">
  <h1>Listado de libros</h1>
  <br>
  <table class="table table-dark" style=" background-position: black; padding-top:100px!important; color:#666!important">

    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">TITULO</th>
        <th scope="col">RESEÑA</th>
        <th scope="col">IMAGEN</th>
      </tr>
    </thead>

    <tbody>
      @if(!empty($array_books))
        @foreach($array_books as $book)
      <tr>
        <th scope="row">{{$book->name}}</th>
        <td>{{$book->title}}</td>
        <td>{{$book->description}}</td>
        @if(isset($book->pdf_file))
        <td> <a href='{{ asset("pdf/$book->pdf_file") }}'><button class="btn btn-success">{{ $book->pdf_file }}</button></a></td>
        @else
        <td> <p>NO EXISTE ARHIVO</p>  </td>
        @endif
      </tr>
  @endforeach
  @endif
    </tbody>
  </table>

</div>
@include('books.partials.banner')
