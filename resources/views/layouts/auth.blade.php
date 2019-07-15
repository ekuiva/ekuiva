
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Project {{ config('app.name') }}">
    <meta name="author" content="Lani Asep Sutisna">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashforge.auth.css') }}">
  </head>
  <body>

    <header class="navbar navbar-header navbar-header-fixed">
      <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
      <div class="navbar-brand">
        <a href="{{ url('/') }}" class="df-logo">laravel<span>starter</span></a>
      </div><!-- navbar-brand -->
      <div id="navbarMenu" class="navbar-menu-wrapper">
       
      </div><!-- navbar-menu-wrapper -->
      <div class="navbar-right">
         <a href="#" class="btn btn-social"><i class="fas fa-hashtag"></i></a>
        <a href="#" class="btn btn-social"><i class="fas fa-envelope"></i></a>
        <a href="#" class="btn btn-social"><i class="fas fa-bug"></i></a>
      </div><!-- navbar-right -->
    </header><!-- navbar -->

    <div class="content content-fixed content-auth">
      <div class="container">
        
         <!-- Content -->
         @yield('content')

      </div><!-- container -->
    </div><!-- content -->

    <footer class="footer">
      <div>
        <span>&copy; 2019 {{ config('app.name') }} v1.0.0. </span>
        <span>Made with <i class="fas fa-heart"></i> from <a href="https://www.linkedin.com/in/laniasepsutisna/">Tim IT Kimia Farma</a></span>
      </div>
      <div>
        <nav class="nav">
          <a href="#" class="nav-link">Licenses</a>
          <a href="#" class="nav-link">Change Log</a>
          <a href="#" class="nav-link">Get Help</a>
        </nav>
      </div>
    </footer>

    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('assets/js/dashforge.js') }}"></script>

    <!-- append theme customizer -->
    <script src="{{ asset('lib/js-cookie/js.cookie.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/dashforge.settings.js') }}"></script> --}}

  </body>
</html>
