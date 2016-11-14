
<!DOCTYPE html>
<html lang="en">
  <head>

    @include('partials._head-admin')

  </head>

  <body>

    @include('partials._nav-admin')

    <div class="container-fluid">
      <div class="row">

        @include('partials._sidebar-admin')
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          @yield('content')

        </div>
      </div>
    </div>

    @include('partials._javascripts-admin')

  </body>
</html>
