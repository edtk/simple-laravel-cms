<header class="main-header">
  <a href="/" class="logo">
    <!-- LOGO -->
    SCMS
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu" style="min-width: 100px !important;width: 100px;">
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="{{ route('logout') }}" class="btn btn-default btn-flat" 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                >Sign out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>