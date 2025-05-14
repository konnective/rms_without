<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Revenue management</title>
  <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</head>

<body>
  <header>
    <!-- Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-custom px-3 pt-4 ">
      <div class="container d-flex justify-content-between align-items-center">
        <!-- Left: Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="./assets/images/logo/logo-dark.png" alt="Logo" class="me-2" width="200">

        </a>

        <!-- Center Menu (Desktop) -->
        <div class="navbar-middle d-none d-md-flex gap-4">
          <a href="#" class="text-dark text-decoration-none py-3 active-link">Overview</a>
          <a href="#" class="text-dark text-decoration-none py-3">Rates</a>
        </div>

        <!-- Right Buttons + Sidebar Toggle -->
        <div class="d-flex gap-2 align-items-center">


          <!-- Icon Buttons -->
          <button class="nav-icon-btn"><i class="bi bi-person-circle"></i></button>
          <button class="nav-icon-btn"><i class="bi bi-gear-fill"></i></button>
          <!-- Toggle Sidebar on Mobile -->
          <button class="nav-icon-btn d-md-none " type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
            <i class="bi bi-list "></i>
          </button>
        </div>
      </div>
    </nav>

    <div id="navPlaceholder" class="placeholder d-none"></div>

    <!-- Filter Bar -->
    <div id="filterBar" class="filter-bar d-flex align-items-center  justify-content-xl-center">
      <button class="btn btn-outline"><i class="bi bi-chevron-left"></i></button>
      <button class="btn btn-outline"><i class="bi bi-chevron-right"></i></button>
      <button class="btn btn-outline">May 9, 2025 <i class="bi bi-calendar-plus ms-2"></i></button>
      <button class="btn btn-outline dropdown-toggle">YoY 5 days ago</button>
      <button class="btn btn-outline"><i class="bi bi-tags me-2"></i> Upsell</button>
      <button class="btn btn-outline"><i class="bi bi-sliders2-vertical me-2"></i> Channels</button>
      <span class=" ">1 Night</span>
      <span class="mx-3 ">2 Guest</span>
      <span class=" me-3">Any Room</span>
      <div class="dropdown">
        <button class="btn btn-outline dropdown-toggle" data-bs-toggle="dropdown">Primary Compete</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Primary Compete</a></li>
          <li><a class="dropdown-item" href="#">Secondary Compete</a></li>
        </ul>
      </div>
    </div>

    <div id="filterPlaceholder" class="placeholder-filter d-none"></div>
    <!-- Offcanvas Sidebar for Mobile Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <a href="#" class="d-block mb-2">Overview</a>
        <a href="#" class="d-block mb-2">Rates</a>
      </div>
    </div>

  </header>

  @yield('content')
  
       <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/custom.js"></script>

</body>

</html>