@extends('books.layout')
@section('content')
<br>
  <div class="container">
    <div class="row">

      <div class="col-sm-4">

    <input type="email" class="form-control" id="email"placeholder="Email">
      </div>
      <div class="col-sm-4">
        <input type="password" class="form-control" id="pwd"placeholder="Password">
      </div>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</body>
@endsection
