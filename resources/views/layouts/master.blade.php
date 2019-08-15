<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Librasun POS Sample</title>
  @include('layouts.style')
  <link rel="shortcut icon" href="{{ asset('admin_themeimages/favicon.png') }}" />
  @yield('style')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      @include('layouts.nav-top')
      @yield('nav')
    </div>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          @yield('content')

          {{-- <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <h4 class="card-title">Statistics</h4>
                    <div class="dropdown">
                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        11 May 2018
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate">
                        <a class="dropdown-item" href="#">12 May 2018</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">13 May 2018</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">14 May 2018</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">15 May 2018</a>
                      </div>
                    </div>
                  </div>
                  <div id="statistics-legend" class="chartjs-legend mt-2 mb-4"></div>
                  <canvas id="statistics-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <h4 class="card-title">Traffic types</h4>
                    <div class="dropdown">
                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuTraffic" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Yearly
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTraffic">
                        <a class="dropdown-item" href="#">Monthly</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Weekly</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Daily</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Hourly</a>
                      </div>
                    </div>
                  </div>
                  <canvas id="traffic-chart" class="mt-2"></canvas>
                  <div class="d-flex mt-5 align-items-center">
                    <div id="traffic-legend" class="chartjs-legend traffic-legend mr-4"></div>
                    <h3 class="mb-0 font-weight-normal">43909</h3>
                  </div>
                  <p class="mb-0 mt-4 font-weight-light">
                    There is no denying the fact that the success of an advertisement lies mostly 
                    in the headline. The headline should attract the reader and make him read the 
                    rest.
                  </p>
                </div>
              </div>
            </div>
          </div> --}}

        </div>
        @include('layouts.footer')
      </div>
    </div>
  </div>
  @include('layouts.script')
  @stack('script')

</body>
</html>