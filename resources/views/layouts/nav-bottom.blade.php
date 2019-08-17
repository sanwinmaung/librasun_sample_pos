<nav class="bottom-navbar">
  <div class="container">
    <ul class="nav page-navigation">

      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('pos.index') }}">
          <i class="mdi mdi-airplay menu-icon"></i>
          <span class="menu-title">POS</span>
        </a>
      </li>

      <li class="nav-item mega-menu">
        <a href="{{ route('download.vocher', 1) }}" class="nav-link">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Scenario 01</span>
        </a>
      </li>

      <li class="nav-item mega-menu">
        <a href="{{ route('download.vocher', 2) }}" class="nav-link">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Scenario 02</span>
        </a>
      </li>

      <li class="nav-item mega-menu">
        <a href="{{ url('search-vocher') }}" class="nav-link">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Search Vocher</span>
        </a>
      </li>

    </ul>
  </div>
</nav>
