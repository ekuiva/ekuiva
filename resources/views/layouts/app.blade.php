
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
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/typicons.font/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/prismjs/themes/prism-vs.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashforge.dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashforge.demo.css') }}">
    
  </head>
  <body>
    
    <!-- Sidebar -->
    @include('layouts.module.sidebar')

    <div class="content ht-100v pd-0">
      <!-- Header -->
      @include('layouts.module.header')

      <!-- Content -->
      <div class="content-body">
          <div class="container pd-x-0">
            @yield('content')
          </div>
      </div>
    </div>

    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('lib/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('lib/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('lib/prismjs/prism.js') }}"></script>
    
    <script src="{{ asset('lib/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/dashforge.js') }}"></script>
    <script src="{{ asset('assets/js/dashforge.aside.js') }}"></script>
    <script src="{{ asset('assets/js/dashforge.sampledata.js') }}"></script>

    <!-- append theme customizer -->
    <script src="{{ asset('lib/js-cookie/js.cookie.js') }}"></script>

    @stack('js')

  </body>
</html>
