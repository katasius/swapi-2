<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SWAPI - Star Wars API</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('assets/css/bootstrap.min.css') !!}

    <!-- Custom styles for this template -->
    {!! Html::style('assets/css/app.css') !!}

  </head>

  <body>

  
    @yield('content')

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Herdion Marsel 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    {!! Html::script('assets/js/jquery.min.js') !!}
    {!! Html::script('assets/popper/popper.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    @yield('javascript')
    @yield('javascript_index')
  </body>

</html>
