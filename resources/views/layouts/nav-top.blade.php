<nav class="navbar top-navbar col-lg-12 col-12 p-0">
  <div class="container">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      {{-- <a class="navbar-brand brand-logo" href="/"><img src="{{ asset('admin_theme/images/logo-white.svg') }}" alt="logo"/></a> --}}
      {{-- <a class="navbar-brand brand-logo-mini" href="/"><img src="{{ asset('admin_theme/images/logo-mini.svg') }}" alt="logo"/></a> --}}
      <a class="navbar-brand brand-logo" href="/"><h2 style="color: #fff;">Librasun Test</h2></a>
      <a class="navbar-brand brand-logo-mini" href="/"><h4 style="color: #fff;">Librasun Test</h4></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end justify-content-lg-start">
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="search">
                <i class="fa fa-home"></i> <span style="margin-left: 10px;"> Current Shift No : <strong>{{ session('shiftId') }}</strong></span>
              </span>
            </div>
            
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown">
          {{-- <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline mx-0"></i>
            <span class="count"></span>
          </a> --}}
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <a class="dropdown-item">
              <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
              </p>
              <span class="badge badge-pill badge-warning float-right">View all</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                  <i class="mdi mdi-information mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-medium">Application Error</h6>
                <p class="font-weight-light small-text mb-0">
                  Just now
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                  <i class="mdi mdi-settings mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-medium">Settings</h6>
                <p class="font-weight-light small-text mb-0">
                  Private message
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                  <i class="mdi mdi-account-box mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-medium">New user registration</h6>
                <p class="font-weight-light small-text mb-0">
                  2 days ago
                </p>
              </div>
            </a>
          </div>
        </li>
        @php
          $shift = App\Shift::find(session('shiftId'));
          $cashier = App\Cashier::find(session('cashierId'));
        @endphp
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="{{ asset('admin_theme/images/faces/face5.jpg') }}" alt="profile"/>
            <span class="nav-profile-name">@if(!is_null($cashier)) {{ $cashier->fullname }} @else Enter POS @endif</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            {{-- <a class="dropdown-item">
              <i class="fa fa-shop"></i>
              @if(!is_null($shift)) Shift {{ $shift->name }} @else No Shift @endif
            </a> --}}
            <div class="dropdown-divider"></div>
            @if(!is_null($shift))
            <a class="dropdown-item" href="{{ route('kill.session') }}">
              <i class="mdi mdi-logout text-primary"></i>
              Logout Shift {{ $shift->name }}
            </a>
            @else
            <a class="dropdown-item" href="{{ route('pos.index') }}">
              <i class="mdi mdi-logout text-primary"></i>
              Enter POS
            </a>
            @endif
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </div>
</nav>