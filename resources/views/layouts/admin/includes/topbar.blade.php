<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

    <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
      <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:void(0)">
        <i class="ion ion-md-menu text-large align-middle"></i>
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
      <!-- Divider -->
      <hr class="d-lg-none w-100 my-2">
      <div class="navbar-nav align-items-lg-center ml-auto">
        <!-- Divider -->
        <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
        <div class="demo-navbar-user nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
            <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
              <img src="{{ asset('public/images/admin.jpg') }}" alt class="d-block ui-w-30 rounded-circle">
              <span class="px-1 mr-lg-2 ml-2 ml-lg-0"> {{ Auth::user()->name }}</span>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="{{route('admin.change.password.show')}}" class="dropdown-item"><i class="ion ion-md-settings text-lightest"></i> &nbsp; Change Password</a>
            <a href="{{route('admin.setting.edit', 1)}}" class="dropdown-item"><i class="ion ion-md-settings text-lightest"></i> &nbsp; Settings</a>
            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
          </div>
        </div>
      </div>
    </div>
  </nav>