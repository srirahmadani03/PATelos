<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">TELOS</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
          


            <li class="menu-item">
              <a href="dataproject" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Data Project</div>
              </a>
             
            </li>

            

            <!-- Technological -->
         
            <!-- Technological -->
            <li class="menu-item">
              <a href="technologi" class="menu-link">
                <i class="menu-icon tf-icons bx bx-card"></i>
                <div data-i18n="Tables"> Technological</div>
              </a>
            </li>

             <!-- Economic -->
             <li class="menu-item">
              <a href="economic" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dollar-circle"></i>
                <div data-i18n="Tables"> Economic</div>
              </a>
            </li>

             <!-- Legal -->
             <li class="menu-item">
              <a href="legal" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Tables"> Legal</div>
              </a>
            </li>

             <!-- Operational -->
             <li class="menu-item">
              <a href="operational" class="menu-link">
                <i class="menu-icon tf-icons bx bx-customize"></i>
                <div data-i18n="Tables"> Operational</div>
              </a>
            </li>

             <!-- Schedule -->
             <li class="menu-item">
              <a href="schedule" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time"></i>
                <div data-i18n="Tables"> Schedule</div>
              </a>
            </li>

             <!-- Summary-->
             <li class="menu-item">
              <a href="summary" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                <div data-i18n="Tables"> Summary</div>
              </a>
            </li>
            <!-- Misc -->
           
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
             

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
      
            <div class="row">
              <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body pb-0">
                    <span class="d-block fw-semibold mb-1"> Technological</span>
                    <h3 class="card-title mb-1">276k</h3>
                  </div>
                  <div id="orderChart" class="mb-3" style="min-height: 80px;"><div id="apexchartszy1fyvzz" class="apexcharts-canvas apexchartszy1fyvzz apexcharts-theme-light" style="width: 140px; height: 80px;"><svg id="SvgjsSvg3811" width="140" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3813" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3812"><clipPath id="gridRectMaskzy1fyvzz"><rect id="SvgjsRect3818" width="138" height="82" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskzy1fyvzz"></clipPath><clipPath id="nonForecastMaskzy1fyvzz"></clipPath><clipPath id="gridRectMarkerMaskzy1fyvzz"><rect id="SvgjsRect3819" width="160" height="108" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient3837" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3838" stop-opacity="0.8" stop-color="rgba(113,221,55,0.8)" offset="0"></stop><stop id="SvgjsStop3839" stop-opacity="0.25" stop-color="rgba(227,248,215,0.25)" offset="0.85"></stop><stop id="SvgjsStop3840" stop-opacity="0.25" stop-color="rgba(227,248,215,0.25)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine3817" x1="87.5" y1="0" x2="87.5" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="87.5" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG3843" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3844" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3853" class="apexcharts-grid"><g id="SvgjsG3854" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3856" x1="0" y1="0" x2="132" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3857" x1="0" y1="16" x2="132" y2="16" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3858" x1="0" y1="32" x2="132" y2="32" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3859" x1="0" y1="48" x2="132" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3860" x1="0" y1="64" x2="132" y2="64" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3861" x1="0" y1="80" x2="132" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3855" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3863" x1="0" y1="80" x2="132" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3862" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3820" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3821" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3841" d="M 0 80L 0 56C 7.699999999999999 56 14.3 58 22 58C 29.7 58 36.3 18 44 18C 51.7 18 58.3 72 66 72C 73.7 72 80.3 46 88 46C 95.7 46 102.3 52 110 52C 117.7 52 124.3 10 132 10C 132 10 132 10 132 80M 132 10z" fill="url(#SvgjsLinearGradient3837)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzy1fyvzz)" pathTo="M 0 80L 0 56C 7.699999999999999 56 14.3 58 22 58C 29.7 58 36.3 18 44 18C 51.7 18 58.3 72 66 72C 73.7 72 80.3 46 88 46C 95.7 46 102.3 52 110 52C 117.7 52 124.3 10 132 10C 132 10 132 10 132 80M 132 10z" pathFrom="M -1 128L -1 128L 22 128L 44 128L 66 128L 88 128L 110 128L 132 128"></path><path id="SvgjsPath3842" d="M 0 56C 7.699999999999999 56 14.3 58 22 58C 29.7 58 36.3 18 44 18C 51.7 18 58.3 72 66 72C 73.7 72 80.3 46 88 46C 95.7 46 102.3 52 110 52C 117.7 52 124.3 10 132 10" fill="none" fill-opacity="1" stroke="#71dd37" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzy1fyvzz)" pathTo="M 0 56C 7.699999999999999 56 14.3 58 22 58C 29.7 58 36.3 18 44 18C 51.7 18 58.3 72 66 72C 73.7 72 80.3 46 88 46C 95.7 46 102.3 52 110 52C 117.7 52 124.3 10 132 10" pathFrom="M -1 128L -1 128L 22 128L 44 128L 66 128L 88 128L 110 128L 132 128"></path><g id="SvgjsG3822" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG3824" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskzy1fyvzz)"><circle id="SvgjsCircle3825" r="6" cx="0" cy="56" class="apexcharts-marker no-pointer-events w7gwbmq8ik" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle><circle id="SvgjsCircle3826" r="6" cx="22" cy="58" class="apexcharts-marker no-pointer-events wd9aed5e" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle></g><g id="SvgjsG3827" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskzy1fyvzz)"><circle id="SvgjsCircle3828" r="6" cx="44" cy="18" class="apexcharts-marker no-pointer-events wz5wzarnk" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle></g><g id="SvgjsG3829" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskzy1fyvzz)"><circle id="SvgjsCircle3830" r="6" cx="66" cy="72" class="apexcharts-marker no-pointer-events waj1krzfq" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle></g><g id="SvgjsG3831" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskzy1fyvzz)"><circle id="SvgjsCircle3832" r="6" cx="88" cy="46" class="apexcharts-marker no-pointer-events wwsdwo1rq" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle></g><g id="SvgjsG3833" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskzy1fyvzz)"><circle id="SvgjsCircle3834" r="6" cx="110" cy="52" class="apexcharts-marker no-pointer-events wcr9hgxiy" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle></g><g id="SvgjsG3835" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskzy1fyvzz)"><circle id="SvgjsCircle3836" r="6" cx="132" cy="10" class="apexcharts-marker no-pointer-events w0gc4dwgn" stroke="#71dd37" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="6"></circle></g></g></g><g id="SvgjsG3823" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3864" x1="0" y1="0" x2="132" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3865" x1="0" y1="0" x2="132" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3866" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3867" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3868" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect3816" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG3852" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3814" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: -20px; top: 9.28125px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">5</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series-1: </span><span class="apexcharts-tooltip-text-y-value">205</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 141px; height: 180px;"></div></div><div class="contract-trigger"></div></div></div>
              </div>
              <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6" style="">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <span>Economy</span>
                    <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <span class="d-block mb-1">Legal</span>
                    <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                    <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-4">
                <div class="card">
                  <div class="card-body pb-2" style="position: relative;">
                    <span class="d-block fw-semibold mb-1">Operational</span>
                    <h3 class="card-title mb-1">425k</h3>
                    <div id="revenueChart" style="min-height: 95px;"><div id="apexchartslup0vg4rk" class="apexcharts-canvas apexchartslup0vg4rk apexcharts-theme-light" style="width: 92px; height: 80px;"><svg id="SvgjsSvg3982" width="92" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3984" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)"><defs id="SvgjsDefs3983"><linearGradient id="SvgjsLinearGradient3987" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3988" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3989" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3990" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasklup0vg4rk"><rect id="SvgjsRect3992" width="96" height="42.73" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklup0vg4rk"></clipPath><clipPath id="nonForecastMasklup0vg4rk"></clipPath><clipPath id="gridRectMarkerMasklup0vg4rk"><rect id="SvgjsRect3993" width="96" height="46.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect3991" width="9.857142857142856" height="42.73" x="13.85716029575893" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient3987)" class="apexcharts-xcrosshairs" y2="42.73" filter="none" fill-opacity="0.9" x1="13.85716029575893" x2="13.85716029575893"></rect><g id="SvgjsG4012" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4013" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText4015" font-family="Helvetica, Arial, sans-serif" x="6.571428571428571" y="71.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4016">M</tspan><title>M</title></text><text id="SvgjsText4018" font-family="Helvetica, Arial, sans-serif" x="19.714285714285715" y="71.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4019">T</tspan><title>T</title></text><text id="SvgjsText4021" font-family="Helvetica, Arial, sans-serif" x="32.85714285714286" y="71.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4022">W</tspan><title>W</title></text><text id="SvgjsText4024" font-family="Helvetica, Arial, sans-serif" x="46" y="71.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4025"></tspan><title></title></text><text id="SvgjsText4027" font-family="Helvetica, Arial, sans-serif" x="59.14285714285714" y="71.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4028">F</tspan><title>F</title></text><text id="SvgjsText4030" font-family="Helvetica, Arial, sans-serif" x="72.28571428571428" y="71.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4031">S</tspan><title>S</title></text><text id="SvgjsText4033" font-family="Helvetica, Arial, sans-serif" x="85.42857142857142" y="71.72999999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4034">S</tspan><title>S</title></text></g></g><g id="SvgjsG4037" class="apexcharts-grid"><g id="SvgjsG4038" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4040" x1="0" y1="0" x2="92" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4041" x1="0" y1="8.546" x2="92" y2="8.546" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4042" x1="0" y1="17.092" x2="92" y2="17.092" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4043" x1="0" y1="25.637999999999998" x2="92" y2="25.637999999999998" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4044" x1="0" y1="34.184" x2="92" y2="34.184" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4045" x1="0" y1="42.73" x2="92" y2="42.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4039" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4047" x1="0" y1="42.73" x2="92" y2="42.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4046" x1="0" y1="1" x2="0" y2="42.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3994" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3995" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath3999" d="M 1.6428571428571432 40.73L 1.6428571428571432 27.637999999999998Q 1.6428571428571432 25.637999999999998 3.6428571428571432 25.637999999999998L 9.5 25.637999999999998Q 11.5 25.637999999999998 11.5 27.637999999999998L 11.5 27.637999999999998L 11.5 40.73Q 11.5 42.73 9.5 42.73L 3.6428571428571432 42.73Q 1.6428571428571432 42.73 1.6428571428571432 40.73z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklup0vg4rk)" pathTo="M 1.6428571428571432 40.73L 1.6428571428571432 27.637999999999998Q 1.6428571428571432 25.637999999999998 3.6428571428571432 25.637999999999998L 9.5 25.637999999999998Q 11.5 25.637999999999998 11.5 27.637999999999998L 11.5 27.637999999999998L 11.5 40.73Q 11.5 42.73 9.5 42.73L 3.6428571428571432 42.73Q 1.6428571428571432 42.73 1.6428571428571432 40.73z" pathFrom="M 1.6428571428571432 40.73L 1.6428571428571432 40.73L 11.5 40.73L 11.5 40.73L 11.5 40.73L 11.5 40.73L 11.5 40.73L 1.6428571428571432 40.73" cy="25.637999999999998" cx="14.785714285714285" j="0" val="40" barHeight="17.092" barWidth="9.857142857142856"></path><path id="SvgjsPath4001" d="M 14.785714285714285 40.73L 14.785714285714285 4.136499999999998Q 14.785714285714285 2.136499999999998 16.785714285714285 2.136499999999998L 22.64285714285714 2.136499999999998Q 24.64285714285714 2.136499999999998 24.64285714285714 4.136499999999998L 24.64285714285714 4.136499999999998L 24.64285714285714 40.73Q 24.64285714285714 42.73 22.64285714285714 42.73L 16.785714285714285 42.73Q 14.785714285714285 42.73 14.785714285714285 40.73z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklup0vg4rk)" pathTo="M 14.785714285714285 40.73L 14.785714285714285 4.136499999999998Q 14.785714285714285 2.136499999999998 16.785714285714285 2.136499999999998L 22.64285714285714 2.136499999999998Q 24.64285714285714 2.136499999999998 24.64285714285714 4.136499999999998L 24.64285714285714 4.136499999999998L 24.64285714285714 40.73Q 24.64285714285714 42.73 22.64285714285714 42.73L 16.785714285714285 42.73Q 14.785714285714285 42.73 14.785714285714285 40.73z" pathFrom="M 14.785714285714285 40.73L 14.785714285714285 40.73L 24.64285714285714 40.73L 24.64285714285714 40.73L 24.64285714285714 40.73L 24.64285714285714 40.73L 24.64285714285714 40.73L 14.785714285714285 40.73" cy="2.136499999999998" cx="27.928571428571427" j="1" val="95" barHeight="40.5935" barWidth="9.857142857142856"></path><path id="SvgjsPath4003" d="M 27.928571428571427 40.73L 27.928571428571427 19.092Q 27.928571428571427 17.092 29.928571428571427 17.092L 35.785714285714285 17.092Q 37.785714285714285 17.092 37.785714285714285 19.092L 37.785714285714285 19.092L 37.785714285714285 40.73Q 37.785714285714285 42.73 35.785714285714285 42.73L 29.928571428571427 42.73Q 27.928571428571427 42.73 27.928571428571427 40.73z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklup0vg4rk)" pathTo="M 27.928571428571427 40.73L 27.928571428571427 19.092Q 27.928571428571427 17.092 29.928571428571427 17.092L 35.785714285714285 17.092Q 37.785714285714285 17.092 37.785714285714285 19.092L 37.785714285714285 19.092L 37.785714285714285 40.73Q 37.785714285714285 42.73 35.785714285714285 42.73L 29.928571428571427 42.73Q 27.928571428571427 42.73 27.928571428571427 40.73z" pathFrom="M 27.928571428571427 40.73L 27.928571428571427 40.73L 37.785714285714285 40.73L 37.785714285714285 40.73L 37.785714285714285 40.73L 37.785714285714285 40.73L 37.785714285714285 40.73L 27.928571428571427 40.73" cy="17.092" cx="41.07142857142857" j="2" val="60" barHeight="25.637999999999998" barWidth="9.857142857142856"></path><path id="SvgjsPath4005" d="M 41.07142857142857 40.73L 41.07142857142857 25.5015Q 41.07142857142857 23.5015 43.07142857142857 23.5015L 48.92857142857142 23.5015Q 50.92857142857142 23.5015 50.92857142857142 25.5015L 50.92857142857142 25.5015L 50.92857142857142 40.73Q 50.92857142857142 42.73 48.92857142857142 42.73L 43.07142857142857 42.73Q 41.07142857142857 42.73 41.07142857142857 40.73z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklup0vg4rk)" pathTo="M 41.07142857142857 40.73L 41.07142857142857 25.5015Q 41.07142857142857 23.5015 43.07142857142857 23.5015L 48.92857142857142 23.5015Q 50.92857142857142 23.5015 50.92857142857142 25.5015L 50.92857142857142 25.5015L 50.92857142857142 40.73Q 50.92857142857142 42.73 48.92857142857142 42.73L 43.07142857142857 42.73Q 41.07142857142857 42.73 41.07142857142857 40.73z" pathFrom="M 41.07142857142857 40.73L 41.07142857142857 40.73L 50.92857142857142 40.73L 50.92857142857142 40.73L 50.92857142857142 40.73L 50.92857142857142 40.73L 50.92857142857142 40.73L 41.07142857142857 40.73" cy="23.5015" cx="54.21428571428571" j="3" val="45" barHeight="19.228499999999997" barWidth="9.857142857142856"></path><path id="SvgjsPath4007" d="M 54.21428571428571 40.73L 54.21428571428571 6.273000000000003Q 54.21428571428571 4.273000000000003 56.21428571428571 4.273000000000003L 62.07142857142857 4.273000000000003Q 64.07142857142857 4.273000000000003 64.07142857142857 6.273000000000003L 64.07142857142857 6.273000000000003L 64.07142857142857 40.73Q 64.07142857142857 42.73 62.07142857142857 42.73L 56.21428571428571 42.73Q 54.21428571428571 42.73 54.21428571428571 40.73z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklup0vg4rk)" pathTo="M 54.21428571428571 40.73L 54.21428571428571 6.273000000000003Q 54.21428571428571 4.273000000000003 56.21428571428571 4.273000000000003L 62.07142857142857 4.273000000000003Q 64.07142857142857 4.273000000000003 64.07142857142857 6.273000000000003L 64.07142857142857 6.273000000000003L 64.07142857142857 40.73Q 64.07142857142857 42.73 62.07142857142857 42.73L 56.21428571428571 42.73Q 54.21428571428571 42.73 54.21428571428571 40.73z" pathFrom="M 54.21428571428571 40.73L 54.21428571428571 40.73L 64.07142857142857 40.73L 64.07142857142857 40.73L 64.07142857142857 40.73L 64.07142857142857 40.73L 64.07142857142857 40.73L 54.21428571428571 40.73" cy="4.273000000000003" cx="67.35714285714285" j="4" val="90" barHeight="38.456999999999994" barWidth="9.857142857142856"></path><path id="SvgjsPath4009" d="M 67.35714285714285 40.73L 67.35714285714285 23.365Q 67.35714285714285 21.365 69.35714285714285 21.365L 75.21428571428571 21.365Q 77.21428571428571 21.365 77.21428571428571 23.365L 77.21428571428571 23.365L 77.21428571428571 40.73Q 77.21428571428571 42.73 75.21428571428571 42.73L 69.35714285714285 42.73Q 67.35714285714285 42.73 67.35714285714285 40.73z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklup0vg4rk)" pathTo="M 67.35714285714285 40.73L 67.35714285714285 23.365Q 67.35714285714285 21.365 69.35714285714285 21.365L 75.21428571428571 21.365Q 77.21428571428571 21.365 77.21428571428571 23.365L 77.21428571428571 23.365L 77.21428571428571 40.73Q 77.21428571428571 42.73 75.21428571428571 42.73L 69.35714285714285 42.73Q 67.35714285714285 42.73 67.35714285714285 40.73z" pathFrom="M 67.35714285714285 40.73L 67.35714285714285 40.73L 77.21428571428571 40.73L 77.21428571428571 40.73L 77.21428571428571 40.73L 77.21428571428571 40.73L 77.21428571428571 40.73L 67.35714285714285 40.73" cy="21.365" cx="80.49999999999999" j="5" val="50" barHeight="21.365" barWidth="9.857142857142856"></path><path id="SvgjsPath4011" d="M 80.49999999999999 40.73L 80.49999999999999 12.682499999999997Q 80.49999999999999 10.682499999999997 82.49999999999999 10.682499999999997L 88.35714285714285 10.682499999999997Q 90.35714285714285 10.682499999999997 90.35714285714285 12.682499999999997L 90.35714285714285 12.682499999999997L 90.35714285714285 40.73Q 90.35714285714285 42.73 88.35714285714285 42.73L 82.49999999999999 42.73Q 80.49999999999999 42.73 80.49999999999999 40.73z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklup0vg4rk)" pathTo="M 80.49999999999999 40.73L 80.49999999999999 12.682499999999997Q 80.49999999999999 10.682499999999997 82.49999999999999 10.682499999999997L 88.35714285714285 10.682499999999997Q 90.35714285714285 10.682499999999997 90.35714285714285 12.682499999999997L 90.35714285714285 12.682499999999997L 90.35714285714285 40.73Q 90.35714285714285 42.73 88.35714285714285 42.73L 82.49999999999999 42.73Q 80.49999999999999 42.73 80.49999999999999 40.73z" pathFrom="M 80.49999999999999 40.73L 80.49999999999999 40.73L 90.35714285714285 40.73L 90.35714285714285 40.73L 90.35714285714285 40.73L 90.35714285714285 40.73L 90.35714285714285 40.73L 80.49999999999999 40.73" cy="10.682499999999997" cx="93.64285714285712" j="6" val="75" barHeight="32.0475" barWidth="9.857142857142856"></path><g id="SvgjsG3997" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3998" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4000" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4002" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4004" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4006" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4008" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG4010" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG3996" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine4048" x1="0" y1="0" x2="92" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4049" x1="0" y1="0" x2="92" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4050" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4051" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4052" class="apexcharts-point-annotations"></g></g><g id="SvgjsG4035" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG4036" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG3985" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: -93.6986px; top: -17.9888px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">T</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(102, 110, 232, 0.1);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series-1: </span><span class="apexcharts-tooltip-text-y-value">95</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                  <div class="resize-triggers"><div class="expand-trigger"><div style="width: 141px; height: 187px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
              </div>
              <!-- </div>
            <div class="row"> -->
              <div class="col-12 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3" style="position: relative;">
                      <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                        <div class="card-title">
                          <h5 class="text-nowrap mb-2">Schedule</h5>
                          <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                        </div>
                        <div class="mt-sm-auto">
                          <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                          <h3 class="mb-0">$84,686k</h3>
                        </div>
                      </div>
                      <div id="profileReportChart" style="min-height: 80px;"><div id="apexchartshzqa2f67" class="apexcharts-canvas apexchartshzqa2f67 apexcharts-theme-light" style="width: 124px; height: 80px;"><svg id="SvgjsSvg4054" width="124" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG4056" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs4055"><clipPath id="gridRectMaskhzqa2f67"><rect id="SvgjsRect4061" width="125" height="85" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskhzqa2f67"></clipPath><clipPath id="nonForecastMaskhzqa2f67"></clipPath><clipPath id="gridRectMarkerMaskhzqa2f67"><rect id="SvgjsRect4062" width="120" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter4068" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood4069" flood-color="#ffab00" flood-opacity="0.15" result="SvgjsFeFlood4069Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite4070" in="SvgjsFeFlood4069Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4070Out"></feComposite><feOffset id="SvgjsFeOffset4071" dx="5" dy="10" result="SvgjsFeOffset4071Out" in="SvgjsFeComposite4070Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur4072" stdDeviation="3 " result="SvgjsFeGaussianBlur4072Out" in="SvgjsFeOffset4071Out"></feGaussianBlur><feMerge id="SvgjsFeMerge4073" result="SvgjsFeMerge4073Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode4074" in="SvgjsFeGaussianBlur4072Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode4075" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend4076" in="SourceGraphic" in2="SvgjsFeMerge4073Out" mode="normal" result="SvgjsFeBlend4076Out"></feBlend></filter></defs><line id="SvgjsLine4060" x1="-0.5" y1="0" x2="-0.5" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="-0.5" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG4077" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4078" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4086" class="apexcharts-grid"><g id="SvgjsG4087" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4089" x1="0" y1="0" x2="116" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4090" x1="0" y1="20" x2="116" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4091" x1="0" y1="40" x2="116" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4092" x1="0" y1="60" x2="116" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4093" x1="0" y1="80" x2="116" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4088" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4095" x1="0" y1="80" x2="116" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4094" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4063" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG4064" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath4067" d="M 0 76C 8.12 76 15.08 12 23.2 12C 31.32 12 38.28 62 46.4 62C 54.519999999999996 62 61.48 22 69.6 22C 77.72 22 84.67999999999999 38 92.8 38C 100.91999999999999 38 107.88 6 115.99999999999999 6" fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskhzqa2f67)" filter="url(#SvgjsFilter4068)" pathTo="M 0 76C 8.12 76 15.08 12 23.2 12C 31.32 12 38.28 62 46.4 62C 54.519999999999996 62 61.48 22 69.6 22C 77.72 22 84.67999999999999 38 92.8 38C 100.91999999999999 38 107.88 6 115.99999999999999 6" pathFrom="M -1 120L -1 120L 23.2 120L 46.4 120L 69.6 120L 92.8 120L 115.99999999999999 120"></path><g id="SvgjsG4065" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle4101" r="0" cx="0" cy="76" class="apexcharts-marker wkz41lr0zj no-pointer-events" stroke="#ffffff" fill="#ffab00" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG4066" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine4096" x1="0" y1="0" x2="116" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4097" x1="0" y1="0" x2="116" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4098" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4099" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4100" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect4059" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG4085" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4057" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 1.53125px; top: 9.28125px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">1</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series-1: </span><span class="apexcharts-tooltip-text-y-value">110</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 259px; height: 116px;"></div></div><div class="contract-trigger"></div></div></div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                      document.write(new Date().getFullYear());
                  </script>
                  , TELOS | Politeknik Caltex Riau
                  
                </div>
                  
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
