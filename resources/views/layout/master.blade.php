<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Samthiago Bistrô - @yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">

        <!-- Styles -->

    </head>
    <body>
      <ul id="slide-out" class="side-nav">
        <li><div class="userView">
          <div class="background">
            <img src="images/office.jpg">
          </div>
          <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
          <a href="#!name"><span class="white-text name">John Doe</span></a>
          <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div></li>
        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
        <li><a href="#!">Second Link</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
      </ul>
      <div class="to-navbar-black black">
        <a href="#" data-activates="slide-out" class="button-collapse text-white"><i class="material-icons text-white">menu</i></a>

      </div>
        @yield('content')


              <script src="{{ asset('js/jquery.min.js') }}"></script>

              <script src="{{ asset('js/materialize.js') }}"></script>
        <script>
        $( document ).ready(function() {
          $(".button-collapse").sideNav();
  });
        </script>
          </body>
      </html>
