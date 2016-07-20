<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href={{ asset('plugins/bootstrap-3.3.6-dist/css/bootstrap.css') }} >
    <title> @yield('title', "Default") </title>
  </head>
  <body>
    @include('admin.template.partials.nav')

    <div class="container">
      @include('flash::message')
      <section>
        @yield('pre-content')
      </section>
      <section>
        @yield('content')
      </section>
    </div>
    <script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-3.3.6-dist/js/bootstrap.js') }}"></script>

  </body>
</html>
