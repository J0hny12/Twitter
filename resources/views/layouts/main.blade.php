<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <title>Twitter</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>
    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        @yield('body')


      </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
