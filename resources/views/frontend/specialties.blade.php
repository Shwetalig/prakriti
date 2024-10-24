@extends('frontend.layouts.main')

@section('main-section')

<div id="smooth-wrapper">
    <div id="smooth-content">
      <!--==================================================-->
      <!-- Start mediic Breatcome Section  -->
      <!--==================================================-->

      <div class="breatcome-section d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="breatcome-content text-center">
                <h1 class="cursor-scale">Services</h1>
                <ul class="breatcome-item">
                  <li class="cursor-scale small"><a href="index.html"> Prakriti </a></li>
                  <li>services</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--==================================================-->
      <!-- End mediic Breatcome Section  -->
      <!--==================================================-->

      <!--==================================================-->
      <!-- Start mediic Services Section  -->
      <!--==================================================-->

      <div class="services-section">
    <div class="container">
        <div class="row">
            @foreach($specialities as $speciality)
            <div class="col-lg-4 col-md-6">
                <div class="single-services-box upp" data-aos="fade-down">
                    <div class="services-content-2">
                        <div class="service-flex d-flex align-items-center">
                            <div class="services-icon">
                                <img src="{{ asset('assets/images/resource/srvce-icn-' . $loop->index+1 . '.png') }}" alt="img" />
                                <span class="mdy-hover-icon"><img src="{{ asset('assets/images/resource/srvce-icn.png') }}" alt="" /></span>
                            </div>
                            <div class="services-title">
                                <h3>{{ $speciality->name }}</h3> <!-- Fetching the name from database -->
                            </div>
                        </div>
                        <div class="services-desc">
                            <p>
                                {{ $speciality->description }} <!-- Fetching the description from database -->
                            </p>
                        </div>
                        <div class="srvce-btn cursor-scale small">
                            <a href="{{ route('frontend.specialities_detail', $speciality->id) }}">READ MORE <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

      <!--==================================================-->
      <!-- End mediic Services Section  -->
      <!--==================================================-->

      <!--==================================================-->
      <!-- Start mediic Appoinment Section  -->
      <!--==================================================-->
      <div class="appoinment-section style-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="mediic-section-title text-center cursor-scale" data-aos="flip-right">
                <h1>MAKE APPOINMENT</h1>
              </div>
            </div>
            <div class="mediic-shape-cntr">
              <img src="assets/images/resource/crcle-bg.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="main-div">
        <div class="mediic-appoinment">
          <div class="container">
            <div class="row appoinment align-items-center">
              <div class="col-lg-6"></div>
              <div class="col-lg-6" data-aos="zoom-in-left">
                <div class="mediic-section-title2">
                  <h4>ONLINE APPOINMENT</h4>
                  <h3 class="cursor-scale small">
                    Make an Online Appoinemnt Booking For Treatment Patients
                  </h3>
                </div>
                <div class="contact-form-box">
                  <form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="form-box">
                          <input type="text" name="name" placeholder="Your Name*" required="" />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-box">
                          <input type="text" name="email" placeholder="Your E-Mail*" required="" />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-box">
                          <input type="text" name="subject" placeholder="Subject*" required="" />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-box">
                          <input type="text" name="subject" placeholder="Phone" required="" />
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-box">
                          <textarea name="massage" id="massage" placeholder="Type Your Message" required=""></textarea>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-6">
                        <div class="submit-button">
                          <button class="submit-btn cursor-scale small">
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
      </div>
      <!--==================================================-->
      <!-- End mediic Appoinment Section  -->
      <!--==================================================-->

      <!--==================================================-->
      <!-- Start mediic Subscribe Section -->
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
                    Since 2007 We’re working Medical group more than 1200+
                    Patient
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
      <!-- End mediic Subscribe Section -->
      <!--==================================================-->

@endsection