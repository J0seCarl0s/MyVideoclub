<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}">

    <title>My Videoclub</title>
  </head>
  <body>
    @include('partials.navbar')

    <div class="container">
      @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{ url('/assets/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
      $(".year-only").datepicker({
          format: "yyyy",
          startView: 'decade',
          minView: 'decade',
          viewSelect: 'decade',
          autoclose: true,
      });
    </script>
  </body>
</html>