<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Revenue management</title>
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
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
<script>
    //login js start
    $(document).ready(function () {
        // Show Forgot Password form
        $("#showForgot").on("click", function (e) {
            e.preventDefault();
            $("#loginForm").removeClass("active");
            $("#forgotForm").addClass("active");
        });

        // Back to Login form
        $("#backToLogin").on("click", function (e) {
            e.preventDefault();
            $("#forgotForm").removeClass("active");
            $("#loginForm").addClass("active");
        });

        // Optional: handle reset form submit
        $("#resetForm").on("submit", function (e) {
            e.preventDefault();
            alert("Reset link sent!");
            $("#forgotForm").removeClass("active");
            $("#loginForm").addClass("active");
        });
    });

    //navbar sticky
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 100) {
            $("#mainNavbar").addClass("sticky-nav");
            $("#filterBar").addClass("sticky-filter");
            $("#navPlaceholder").removeClass("d-none");
            $("#filterPlaceholder").removeClass("d-none");
        } else {
            $("#mainNavbar").removeClass("sticky-nav");
            $("#filterBar").removeClass("sticky-filter");
            $("#navPlaceholder").addClass("d-none");
            $("#filterPlaceholder").addClass("d-none");
        }
    });

    // Toggle active menu
    $(".navbar-middle a").on("click", function (e) {
        e.preventDefault();
        $(".navbar-middle a").removeClass("active-link");
        $(this).addClass("active-link");
    });
    //chart js start
    $(document).ready(function () {
        const $tooltip = $("#chart-tooltip");

        new Chart($("#myChart")[0].getContext("2d"), {
            type: "line",
            data: {
                labels: ["1 May", "2 May", "3 May", "4 May", "5 May", "6 May", "7 May", "8 May", "9 May"],
                datasets: [
                    {
                        label: "Line A",
                        data: [7, 8, 8, 9, 9, 9, 10, 11, 14],
                        borderColor: "#153F92",
                        pointBackgroundColor: "#ffffff",
                        pointBorderColor: "#153F92",
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        fill: false,
                        tension: 0,
                    },
                    // {
                    //   label: 'Line B',
                    //   data: [14,11,9,6,8,7,6,5,4],
                    //   borderColor: "#153F92",
                    //   pointBackgroundColor: "#ffffff",
                    //   pointBorderColor: "#153F92",
                    //   pointBorderWidth: 2,
                    //   pointRadius: 4,
                    //   pointHoverRadius: 6,
                    //   fill: false,
                    //   tension: 0,
                    // },
                ],
            },
            options: {
                interaction: {
                    mode: "nearest",
                    intersect: true,
                },
                plugins: {
                    tooltip: {
                        enabled: false,
                        external: function (context) {
                            const tooltipModel = context.tooltip;

                            if (tooltipModel.opacity === 0) {
                                $tooltip.hide();
                                return;
                            }

                            const dataPoint = tooltipModel.dataPoints?.[0];
                            const x = dataPoint.element.x;
                            const y = dataPoint.element.y;

                            $tooltip.css({
                                display: "block",
                                left: `${x}px`,
                                top: `${y}px`, // lift above dot
                            });

                            const index = dataPoint.dataIndex;
                            const label = context.chart.data.labels[index];
                            const value = dataPoint.raw;

                            $tooltip.find(".title").text(label);
                            $tooltip.find(".price").eq(0).text(`$${value}`);
                            $tooltip
                                .find(".price")
                                .eq(1)
                                .text(`$${value + 5}`);
                            $tooltip.find(".price").eq(2).text("4/25");
                        },
                    },
                },
                scales: {
                    y: {
                        min: 6,
                        max: 16,
                        ticks: {
                            stepSize: 2,
                        },
                    },
                    x: {
                        ticks: {
                            maxRotation: 0,
                            minRotation: 0,
                        },
                    },
                },
            },
        });
    });
</script>


</body>

</html>