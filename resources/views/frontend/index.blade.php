@extends('frontend.layouts.main')

@section('main-section')
<div id="smooth-wrapper">
  <div id="smooth-content">
    <!--==================================================-->
    <!-- Start  Hero Section  -->
    <!--==================================================-->

    <div class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row hero-bg">
          <div class="col-lg-12">
            <div class="hero-content text-center">
              <h1>
                Healthcare
                <span class="wood-animation"><img src="assets/images/slider/heart.png" alt="" /></span>
              </h1>
              <h1 class="mediic-style cursor-scale">
                <span class="team-mbr"><img src="assets/images/slider/team-img.png" alt="img" />MEMBER</span>
                DOCTORS
              </h1>
              <div class="hero-btm-boxs">
                <div class="mediic-service-bx cursor-scale small">
                  <div class="mediic-hero-icon">
                    <img src="assets/images/slider/tick.png" alt="icon" />
                  </div>
                  <div class="mediic-hero-content">
                    <h4>Best Medical</h4>
                    <p>
                      Rapidiously reinvent long-term impact collaboration
                    </p>
                  </div>
                </div>
                <div class="mediic-btn cursor-scale small">
                  <a href="/contact">
                    Book Appointment
                    <i class="bi bi-arrow-return-right"></i></a>
                </div>
              </div>
              <div class="hero-socail-icon cursor-scale small">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
              </div>

              <div class="hero-cnct-nmbr cursor-scale small">
                <h4>+91 9119512345</h4>
              </div>

              <div class="hero-all-shape cursor-scale small">
                <div class="hero-shape">
                  <img src="assets\images\dr image.png" alt="" />
                </div>
                <div class="hero-shape2">
                  <img src="assets/images/slider/plus.png" alt="" />
                </div>
                <div class="hero-shape3">
                  <img src="assets/images/slider/plus.png" alt="" />
                </div>
                <div class="hero-shape4">
                  <img src="assets/images/slider/arrow.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End  Hero Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start  Counter Section -->
    <!--==================================================-->
    <div class="counter-serction">
      <div class="container">
        <div class="row counter-bg align-items-center">
          <div class="col-lg-12">
            <div class="counter-items">
              <div class="counter-left-side" data-aos="fade-right">
                <div class="counter-thumb">
                  <img src="assets/images/slider/counter-img.png" alt="" />
                </div>
                <div class="counter-title cursor-scale small">
                  <h2>Medical Achivement</h2>
                  <h2>Health Protection</h2>
                </div>
              </div>
              <div class="counter-right-side cursor-scale">
                <div class="counter-single-box bx-1" data-aos="fade-up">
                  <div class="odometer-wrapper counter-box-title" data-count="6000">
                    <h1 class="odometer"></h1>
                    <h1>+</h1>
                  </div>
                  <div class="counter-desc">
                    <p> Patients Treated </p>
                  </div>
                </div>
                <div class="counter-single-box" data-aos="fade-down">
                  <div class="odometer-wrapper counter-box-title" data-count="400">
                    <h1 class="odometer"></h1>
                    <h1>+</h1>
                  </div>
                  <div class="counter-desc">
                    <p>Surgeries</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mediic-shape-cntr">
            <img src="assets/images/resource/crcle-bg.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End  Counter Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start  Counter Section -->
    <!--==================================================-->
    <div class="feature-serction">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="feature-single-box" data-aos="fade-down">
              <div class="feature-head">
                <div class="head-title">
                  <h2>Our Professionals</h2>
                </div>
                <div class="mediic-link cursor-scale small">
                  <a href="/doctors"><i class="bi bi-arrow-return-right"></i></a>
                </div>
              </div>
              <div class="feature-content text-center">
                <div class="mediic-icon">
                  <img src="assets/images/resource/srvc-tm.png" alt="" />
                </div>
                <h3>
                  180 <span class="mddle-pd">+</span><span>Doctors</span>
                </h3>

                <p>Rapidiously reinvent long-term impact collaboration</p>
              </div>
              <div class="mediic-hover-box hover-bx"></div>
              <div class="mediic-hover-box hover-bx2"></div>
              <div class="mediic-hover-box hover-bx3"></div>
              <div class="mediic-hover-box hover-bx4"></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-single-box bx-2" data-aos="fade-up">
              <div class="feature-head">
                <div class="feature-btn c
                ursor-scale small">
                  <a href="/contact">BOOKING</a>
                </div>
                <div class="head-title">
                  <h2>Appointments</h2>
                </div>
              </div>
              <div class="feature-content text-center">
                <div class="mediic-icon">
                  <img src="assets/images/resource/call.png" alt="" />
                </div>
                <h4>+91 9119512345</h4>
                <p>
                  Call Us for Booking appoinments online 24 hrs available
                </p>
              </div>
              <div class="mediic-hover-box hover-bx"></div>
              <div class="mediic-hover-box hover-bx2"></div>
              <div class="mediic-hover-box hover-bx3"></div>
              <div class="mediic-hover-box hover-bx4"></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-single-box bx-3" data-aos="fade-down">
              <div class="feature-head">
                <div class="head-title">
                  <h2>Locations</h2>
                </div>
                <div class="mediic-link cursor-scale small">
                  <a href="team.html"><i class="bi bi-arrow-return-right"></i></a>
                </div>
              </div>
              <div class="feature-content text-center">
                <div class="mediic-icon">
                  <img src="assets/images/resource/location.png" alt="" />
                </div>
                <p>Rapidiously reinvent long-term impact collaboration</p>
                <div class="feature-btn cursor-scale small">
                  <a href="/contact">BOOKING</a>
                </div>
              </div>
              <div class="mediic-hover-box hover-bx"></div>
              <div class="mediic-hover-box hover-bx2"></div>
              <div class="mediic-hover-box hover-bx3"></div>
              <div class="mediic-hover-box hover-bx4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End  Counter Section  -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start  Service Section  -->
    <!--==================================================-->
    <div class="mediic-top-section">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="top-mediic-section">
              <div class="mediic-section-title cursor-scale white" data-aos="flip-left">
                <h1> YOUR HEALTH</h1>
                <h1>OUR PRIORITY</h1>
              </div>
              <div class="mediic-desc" data-aos="fade-up">
                <p>
                  "At Prakriti Health, we believe in providing personalized healthcare solutions that cater to your unique needs.
                  Our team of experienced professionals ensures that every step of your journey towards wellness is supported with advanced treatments and compassionate care."
                </p>
              </div>
              <div class="mediic-btn cursor-scale small" data-aos="fade-down">
                <a href="/specialties">Discover Our Services <i class="bi bi-arrow-return-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="service-section">
      <div class="container-fluid">
        <div class="row">
          <!-- Swiper -->
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              @foreach($specialities as $speciality)
              <div class="swiper-slide">
                <div class="single-service-box" data-aos="zoom-out">
                  <div class="service-thumb">
                    <!-- Assuming you store image paths in the database -->
                    <img src="{{ asset('storage/') . '/' . $speciality->images}}" alt="{{ $speciality->name }}" />
                    <div class="service-icon cursor-scale small">
                      <a href="{{ route('frontend.specialities_detail', $speciality->id) }}">
                        <i class="bi bi-arrow-return-right"></i>
                      </a>
                    </div>
                  </div>
                  <div class="service-content">
                    <h2 class="cursor-scale small">
                      <a href="{{ route('frontend.specialities_detail', $speciality->id) }}">{{ $speciality->name }}</a>
                    </h2>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/swiper.min.js"></script>

    <!--==================================================-->
    <!-- End  Service Section  -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start  About Section -->
    <!--==================================================-->
    <div class="about-serction">
      <div class="container">

        <div class="row about-bg align-items-center">
          <div class="col-lg-7">
            <div class="about-thumb" data-aos="fade-up-right">
              <img src="assets/images/about.png" alt="" />
             
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up-left">
            <div class="mediic-section-title2">
              <h4>ABOUT US</h4>

            </div>
            <div class="about-service-list">
              <h5>
                Prakriti Hospital, Vasai Virar's leading multispecialty hub, combines advanced technology with compassionate, personalized care.
                Our state-of-the-art Cath Lab, OT Complex, and expert team provide comprehensive healthcare solutions. Trust Prakriti Hospital for excellence in your health journey.
              </h5>

            </div>
            <div class="about-service-list">
              <h4>We’re Putting your Comfort List</h4>
              <ul>
                <li>
                  <i class="bi bi-check-circle-fill"></i>Top-notch facilities & expert care.
                  
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i> 24 X 7 Critical Care ICU With Intensive Team
                  
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>NIDAN Imaging Center
                  
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i> Advanced CATHLAB
                </li>

                <li class="border-style">
                  <i class="bi bi-check-circle-fill"></i> 24 X 7 Ambulance Service
                 
                </li>
              </ul>
            </div>
            <div class="mediic-btn cursor-scale small">
              <a href="/about">More About <i class="bi bi-arrow-return-right"></i></a>
            </div>
          </div>
          <div class="mediic-shape" data-aos="fade-up-left">
            <img src="assets/images/resource/dctr.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End  About Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start  Marquee Section  -->
    <!--==================================================-->

    <div class="marquee-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="marquee cursor-scale" data-aos="zoom-out-left">
              <div class="marquee-single-box">
                <div class="marquee-content">
                  @foreach ($specialities->chunk(3) as $chunk)
                  @foreach ($chunk as $speciality)
                  <h2>
                    {{ strtoupper($speciality->name) }}
                    <span><img src="{{ asset('assets/images/resource/star.png') }}" alt="" /></span>
                  </h2>
                  @endforeach
                  @endforeach
                </div>
              </div>
              <div class="marquee-single-box">
                <div class="marquee-content">
                  @foreach ($specialities->chunk(3) as $chunk)
                  @foreach ($chunk as $speciality)
                  <h2>
                    {{ strtoupper($speciality->name) }}
                    <span><img src="{{ asset('assets/images/resource/star.png') }}" alt="" /></span>
                  </h2>
                  @endforeach
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--==================================================-->
    <!-- End  Marquee Section  -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start  Appoinment Section  -->
    <!--==================================================-->
    
    <div class="mediic-appoinment">
      <div class="container">
        <div class="row appointment align-items-center">
          <div class="col-lg-6"></div>
          <div class="col-lg-6" data-aos="zoom-in-left">
            <div class="mediic-section-title2 cursor-scale small">
              <h4>ONLINE APPOINTMENT</h4>
              <h3>Book an Appointment </h3>
            </div>
            <div class="contact-form-box">
              <form action="{{ route('appointments.store') }}" method="POST" id="dreamit-form">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="form-box">
                      <input type="text" name="name" placeholder="Your Name*" required="" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-box">
                      <input type="email" name="email" placeholder="Your E-Mail*" required="" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-box">
                      <select name="doctor_id" required="">
                        <option value="" disabled selected>Select Doctor*</option>
                        @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-box">
                      <input type="text" name="phone" placeholder="Phone*" required="" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-box">
                      <textarea name="massage" id="massage" placeholder="Type Your Message" required=""></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-6">
                    <div class="submit-button cursor-scale small">
                      <button class="submit-btn">
                        Send Now <i class="bi bi-arrow-return-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="appointment-shape">
            <div class="mediic-shape-2" data-aos="fade-down">
              <img src="assets/images/resource/heart2.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--==================================================-->
    <!-- End  Appoinment Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- End  Team Section  -->
    <!--==================================================-->
    <div class="appoinment-section">
        <div class="">
          <div class="row">
            <div class="col-lg-12">
              <div class="mediic-section-title cursor-scale text-center" data-aos="flip-left">
                <h1>Meet Our Best Doctors</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    <div class="team-section">
      <div class="container">
        <div class="row">
          <div class="swiper style-2 team">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                  <div class="team-single-box" data-aos="fade-up">
                    <div class="team-thumb">
                      <img src="assets/images/Doctors/01HQ900VG65DPN6SNQDKEB73NA.jpg" alt="" />                     
                    </div>
                    <div class="team-content text-center">
                      <h5>Obstetrics and Gynaecology</h5>
                      <h2>Dr. Priyanka Thakur</h2>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-single-box" data-aos="zoom-in">
                    <div class="team-thumb">
                      <img src="assets\images\Doctors\2.png" alt="" />
                    </div>
                    <div class="team-content text-center">
                      <h5>Obstetrics and Gynaecology</h5>
                      <h2>Dr. Pradnya Thakur</h2>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="team-single-box" data-aos="fade-up">
                    <div class="team-thumb">
                      <img src="assets\images\Doctors\3.png" alt="" />
                      
                    </div>
                    <div class="team-content text-center">
                      <h5>Cardiology</h5>
                      <h2>Dr. Suchit Mahale</h2>
                    </div>
                  </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>

    <!--==================================================-->
    <!-- End  Team Section  -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start Blog Section -->
    <!--=================================================-->

  

    <!--==================================================-->
    <!-- End  Blog Section -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start  Subscribe Section -->
    <!--==================================================-->

    <div class="mediic-subscribe">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="subscribe-content" data-aos="fade-up">
              <div class="subscribe-icon cursor-scale">
                <img src="assets/images/resource/bag.png" alt="" />
              </div>
              <div class="subscribe-title">
                                <h1 class="cursor-scale small">
                                Virar's most advanced hospital blends cutting-edge technology, expert care, and medical excellence, setting new standards in healthcare.
                                </h1>
                            </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="mediic-button text-right cursor-scale small" data-aos="fade-down">
              <a href="contact.html" class="mediic-btn">
                <span class="mediic-btn__hover"></span>
                <span class="mediic-btn__hover"></span>
                <span class="mediic-btn__hover"></span>
                <span class="mediic-btn__hover"></span>
                <span class="mediic-btn__hover"></span>
                <span class="mediic-btn__hover"></span>
                Contact Us
                <i class="bi bi-arrow-return-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--==================================================-->
    <!-- End  Subscribe Section -->
    <!--==================================================-->
    @endsection