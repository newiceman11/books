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
        <td></td>

      </tr>
  @endforeach
  @endif
    </tbody>
  </table>

</div>
