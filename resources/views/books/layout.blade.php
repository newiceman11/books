<!doctype html>
<html lang="en">
  <head>
    @stack('scripts')

    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href=".././css/master.css"/>
    <link rel="stylesheet" href=".././css/elements.css"/>
    <link rel="stylesheet" href=".././css/styles.css"/>
    <link rel="stylesheet" href=".././css/banner.css"/>
    <link rel="stylesheet" href=".././css/slider.css"/>
    <link rel="stylesheet" href=".././css/blog.css"/>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>

  </head>
    @include('books.header')
    @yield('content')
      @include('books.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset ('../js/header.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset ('../js/function.js') }}">
</script>
<script>
$(function (){
  $('.accordion').accordion();
});
</script>
  </body>
</html>
