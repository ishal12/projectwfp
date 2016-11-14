<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>

  <body>

    @include('partials._nav')

    @yield('slide')

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      @yield('content')

      @include('partials._footer')

    </div><!-- /.container -->

    @include('partials._javascripts')
  </body>
</html>
