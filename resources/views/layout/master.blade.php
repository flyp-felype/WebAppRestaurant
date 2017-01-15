<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Samthiago Bistrô - @yield('title')</title>
<link rel="manifest" href="{{ asset('manifest.json')}}" />
        <!-- Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Styles -->

    </head>
    <body>
      <nav class="black">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo"><img src="{{asset('images/logo-escrito.png')}}"  /></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right dark">

            <li><a href="mobile.html"><i class="material-icons">search</i></a></li>
          </ul>

          <ul id="mobile-demo" class="side-nav grey darken-4 white-text">
            <li><div class="userView">
              <div class="background">

              </div>
              <center>
                <img class="responsive-img img-logo" src="{{asset('images/logo-samthiago.png')}}">
              </center>
            </div></li>
            <li><a href="#!" class=" white-text"><i class="material-icons  white-text">receipt</i>Cardápio</a></li>
            <li><a href="#!" class=" white-text"><i class="material-icons  white-text">star</i>Promoções</a></li>
            <li><a href="{{asset('reservas')}}" class=" white-text"><i class="material-icons  white-text">schedule</i>Reservas</a></li>

          </ul>
        </div>
      </nav>

      <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light red darken-3" href="{{ asset('reservas/create/')}}" ><i class="material-icons">add</i></a>
      </div>
        @yield('content')


              <script src="{{ asset('js/jquery.min.js') }}"></script>

              <script src="{{ asset('js/materialize.js') }}"></script>
        <script>

        $( document ).ready(function() {
          $(".button-collapse").sideNav({
            draggable: true,
            menuWidth: 250
          });
  });
        </script>
          </body>
      </html>
