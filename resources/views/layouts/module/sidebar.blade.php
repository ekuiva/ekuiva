<aside class="aside aside-fixed">
  <div class="aside-header">
    <a href="{{ url('/') }}" class="aside-logo">laravel<span>starter</span></a>
    <a href="" class="aside-menu-link">
      <i data-feather="menu"></i>
      <i data-feather="x"></i>
    </a>
  </div>
  <div class="aside-body">
    <div class="aside-loggedin">
      <div class="d-flex align-items-center justify-content-start">
        <a href="" class="avatar"><img src="{{ asset('assets/img/man-admin.svg') }}" class="rounded-circle" alt=""></a>
        <div class="aside-alert-link">
          <a href="" data-toggle="tooltip" title="Messages"><i data-feather="message-square"></i></a>
          <a href="" data-toggle="tooltip" title="Notifications"><i data-feather="bell"></i></a>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
        </div>
      </div>
      <div class="aside-loggedin-user">
        <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
          <h6 class="tx-semibold mg-b-0">{{{ Auth::user()->name }}}</h6>
          <i data-feather="chevron-down"></i>
        </a>
        <p class="tx-color-03 tx-12 mg-b-0">{{{ Auth::user()->roles->first()->name  }}}</p>
      </div>
      <div class="collapse" id="loggedinMenu">
        <ul class="nav nav-aside mg-b-0">
            <li class="nav-item"><a href="{{ url('users/edit',  Crypt::encryptString(Auth::user()->id)) }}" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>
            <li class="nav-item"><a href="{{ url('home/help') }}" class="nav-link"><i data-feather="help-circle"></i> <span>Help Center</span></a></li>
            <li class="nav-item"><a href="{{ url('home/about') }}" class="nav-link"><i data-feather="info"></i> <span>About</span></a></li>
        </ul>
      </div>
    </div><!-- aside-loggedin -->
    <ul class="nav nav-aside">
      <li class="nav-label">Dashboard</li>
      <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i data-feather="home"></i> <span>Home</span></a></li>
      
      @role('Admin')
      <!-- Management User -->
      <li class="nav-label mg-t-25">User Pages</li>
      <li class="nav-item"><a href="{{ url('activity-log') }}" class="nav-link"><i data-feather="activity"></i> <span>Activity Logs</span></a></li>
      <li class="nav-item with-sub">
        <a href="" class="nav-link"><i data-feather="user"></i> <span>Management Users</span></a>
        <ul>
          <li><a href="{{ url('users') }}">Data Users</a></li>
          <li><a href="{{ url('roles') }}">Role Users</a></li>
          <li><a href="{{ url('users/role-permission') }}">Role Permissions</a></li>
        </ul>
      </li>
      @endrole
      
    </ul>
  </div>
</aside>