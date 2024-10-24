<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Prakriti</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/icon.png')}}" />
  <!-- bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" type="text/css" media="all" />

  <!-- font-awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}" type="text/css" media="all" />
  <!-- font-flaticon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}" type="text/css" media="all" />
  <!-- theme-default CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css')}}" type="text/css" media="all" />
  <!-- meanmenu CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}" type="text/css" media="all" />
  <!-- venobox CSS -->
  <link rel="stylesheet" href="{{ asset('venobox/venobox.css')}}" type="text/css" media="all" />
  <!-- bootstrap icons -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css')}}" type="text/css" media="all" />
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css')}}" />
  <!-- responsive CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}" type="text/css" media="all" />

  <!-- modernizr js -->
  <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
  <script src="{{ asset('assets/js/swiper.min.js')}}"></script>
  <link href="https://fonts.cdnfonts.com/css/clash-display" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}" />
</head>

<body>
  <!-- loder -->
  <div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loder-section left-section"></div>
    <div class="loder-section right-section"></div>
  </div>


  <!-- Curser Pointer -->
  <div class="cursor"></div>
  <div class="cursor2"></div>

  <!--==================================================-->
  <!-- Start mediic Main Menu  -->
  <!--==================================================-->
  <div id="sticky-header" class="mediic_nav_manu">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo cursor-scale small">
                    <a class="logo_img" href="/" title="logo">
                        <img src="assets/images/prakriti-logo2.png" alt="logo" />
                    </a>
                    <a class="main_sticky" href="/" title="logo">
                        <img src="assets/images/prakriti-logo2.png" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <nav class="mediic_menu">
                    <ul class="nav_scroll">
                        <li>
                            <a class="mdy-hover cursor-scale small" href="/">Home</a>
                        </li>
                        <li>
                            <a class="mdy-hover cursor-scale small" href="/about">About</a>
                        </li>
                        <li>
                            <a class="mdy-hover cursor-scale small" href="/doctors">Doctors</a>
                        </li>
                        <li>
                            <a class="mdy-hover cursor-scale small" href="/specialties">Specialities</a>
                            <ul class="sub-menu" style="display: flex; flex-direction: row; flex-wrap: nowrap; gap: 20px; max-height: 550px; overflow-y: auto; width : auto; background: #d4e5f9;">
                                <!-- Description Column -->
                               

                                <!-- Specialities Column 1 -->
                                <li style="flex: 0 1 25%;">
                                    <ul>
                                        @foreach ($specialities->take(10) as $speciality)
                                            <li><a href="{{ route('frontend.specialities_detail', $speciality->id) }}">{{ $speciality->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <!-- Specialities Column 2 -->
                                <li style="flex: 0 1 25%;">
                                    <ul>
                                        @foreach ($specialities->skip(10)->take(10) as $speciality)
                                            <li><a href="{{ route('frontend.specialities_detail', $speciality->id) }}">{{ $speciality->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <!-- Specialities Column 3 -->
                                <li style="flex: 0 1 25%;">
                                    <ul>
                                        @foreach ($specialities->skip(20)->take(10) as $speciality)
                                            <li><a href="{{ route('frontend.specialities_detail', $speciality->id) }}">{{ $speciality->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="mdy-hover cursor-scale small" href="/gallery">Gallery</a>
                        </li>
                        <li>
                            <a class="mdy-hover cursor-scale small" href="/contact">Contact Us</a>
                        </li>
                    </ul>

                    <div class="mediic-right-side cursor-scale small">
                        <!-- header button -->
                        <div class="header-button">
                            <a href="/contact">
                                Get Appointment
                                <img src="assets/images/resource/arrow.png" alt="" />
                                <div class="mediic-hover-btn hover-btn"></div>
                                <div class="mediic-hover-btn hover-btn2"></div>
                                <div class="mediic-hover-btn hover-btn3"></div>
                                <div class="mediic-hover-btn hover-btn4"></div>
                            </a>
                        </div>
                        <div class="sidebar">
                            <div class="nav-btn navSidebar-button">
                                <span><i class="bi bi-grid-3x3-gap-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


  <!-- mediic Mobile Menu  -->
  <div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
  <div class="mobile-menu">
    <nav class="mediic_menu">
      <ul class="nav_scroll">
        <li>
          <a class="mdy-hover" href="/">Home</a>
        </li>
        <li>
          <a class="mdy-hover" href="/about">About</a>
        </li>
        <li>
          <a class="mdy-hover" href="/doctors">Doctors</a>
        </li>
        <li>
          <a class="mdy-hover" href="/specialties">Specialities</a>
          <ul class="sub-menu">
            <li style="flex: 0 1 50%;">
              <ul>
                @foreach ($specialities as $speciality)
                <li><a href="{{ route('frontend.specialities_detail', $speciality->id) }}">{{ $speciality->name }}</a></li>
                @endforeach
              </ul>
            </li>
          </ul>
        </li>
        <li>
          <a class="mdy-hover" href="/gallery">Gallery</a>
        </li>
        <li>
          <a class="mdy-hover" href="/contact">Contact Us</a>
        </li>
      </ul>
    </nav>
  </div>
</div>

  <!--==================================================-->
  <!-- End mediic Main Menu  -->
  <!--==================================================-->