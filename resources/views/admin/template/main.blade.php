<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!-- Styles -->
    <link rel="stylesheet" href={{ asset('plugins/bootstrap-3.3.6-dist/css/bootstrap.css') }} >
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <!-- Chosen plugin -->
    <link rel="stylesheet" href={{ asset('plugins/chosen_v1.6.2/chosen.css') }}>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
  </head>
  <body>
    @include('admin.template.partials.nav2')

    <div class="container">
      @include('flash::message')
      <section>
        @yield('pre-content')
      </section>
      <section>
        @yield('content')
      </section>
      <section>
        @include('admin.template.partials.footer')
      </section>

    </div>

    <!--<script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js') }}"></script>-->
    <!--<script src="{{ asset('plugins/bootstrap-3.3.6-dist/js/bootstrap.js') }}"></script>-->
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src={{ asset('plugins/chosen_v1.6.2/chosen.jquery.js') }}></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @yield('js')
  </body>
</html>
