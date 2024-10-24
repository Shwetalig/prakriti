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
                            <h1 class="cursor-scale">Services Details</h1>
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
        <!-- Start mediic Service Details Section  -->
        <!--==================================================-->

        <div class="mediic-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="custom-scroll">
                   <!-- Dynamic Image -->
                   <div class="mediic-thumb">
                    <img src="{{ asset('storage/') . '/' . $speciality->images}}" alt="{{ $speciality->name }}" width="850" height="500" />
                </div>

                <!-- Dynamic Title -->
                <div class="mediic-title">
                    <h2>{{ $speciality->name }}</h2>
                </div>

                <!-- Dynamic Description -->
                <div class="mediic-description" style="color: #65677a">
                    <p>{!! $speciality->desc1 !!}</p>

                </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mediic-single-box">
                        <div class="mediic-icons">
                          <img
                            src="assets/images/resource/dtls-icn.png"
                            alt="icon"
                          />
                        </div>
                        <div class="mediic-content">
                          <h3>Make Appointment</h3>
                          <p>
                            Ethical network environmental architect go forward
                            opportu credibly implement
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mediic-single-box">
                        <div class="mediic-icons">
                          <img
                            src="assets/images/resource/dtls-icn2.png"
                            alt="icon"
                          />
                        </div>
                        <div class="mediic-content">
                          <h3>Get Consultation</h3>
                          <p>
                            Ethical network environmental architect go forward
                            opportu credibly implement
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- mediic Blog -->
                  <div class="mediic-blog">
                    <div class="blog-icon">
                      <img src="assets/images/resource/icons.png" alt="" />
                    </div>
                    <div class="blog-desc">
                      <p>
                        Competently architect intermandated deliverables client
                        niches continually underwhelm
                      </p>
                    </div>
                    <div class="mediic-hover-box hover-bx"></div>
                    <div class="mediic-hover-box hover-bx2"></div>
                    <div class="mediic-hover-box hover-bx3"></div>
                    <div class="mediic-hover-box hover-bx4"></div>
                  </div>
                  <!-- Start Accordion -->
                  <div class="tab_container">
                    <div class="accordion-content">
                      <h2>What the Benifits?</h2>
                      <p>
                        Alternative innovation to ethical network environmental
                        whiteboard pursue compelling results for premier methods
                        empowerment. Dramatically architect go forward
                        opportunities
                      </p>
                    </div>
                    <div id="tab1" class="tab_content">
                      <ul class="accordion">
                        <li>
                          <a>
                            <span> 01 </span>What if my patient does not have a
                            matched sibling?</a
                          >
                          <p class="color" style="color: #65677a">
                            Alternative in network environmental whiteboard
                            pursue compelling results for premier our team
                            methods empowerment. Dramatically architect go
                            forward opportunities or premier to designer methods
                            empowerment. Dramatically architect.
                          </p>
                        </li>
                        <li>
                          <a>
                            <span> 01 </span>How is the Emergency Department
                            staffed?</a
                          >
                          <p class="color" style="color: #65677a">
                            Alternative in network environmental whiteboard
                            pursue compelling results for premier our team
                            methods empowerment. Dramatically architect go
                            forward opportunities or premier to designer methods
                            empowerment. Dramatically architect.
                          </p>
                        </li>
                        <li>
                          <a>
                            <span> 01 </span>What all should I carry for my
                            first appointment?</a
                          >
                          <p class="color" style="color: #65677a">
                            Alternative in network environmental whiteboard
                            pursue compelling results for premier our team
                            methods empowerment. Dramatically architect go
                            forward opportunities or premier to designer methods
                            empowerment. Dramatically architect.
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- End Accordion -->
                </div>
                <!-- End -->
              </div>
              <div class="col-lg-4">
                <div class="mediic-category-box" data-aos="flip-up">
                  <h3 class="category-title">Categories</h3>
                  @foreach($speciality->doctors as $doctor)
                            <div class="doctors-service">
                                <div class="doctor-icon">
                                    <img src="{{  $doctor->profile_image }}" alt="{{ $doctor->name }}" />
                                </div>
                                <div class="doctor-content">
                                    <h5>DOCTOR NAME:</h5>
                                    <h3><a href="#">{{ $doctor->name }}</a></h3>
                                    <p>{{ $doctor->speciality }}</p>
                                </div>
                            </div>
                            @endforeach
                </div>
                <!-- box 2 -->
                <div class="mediic-category-box" data-aos="flip-down">
                  <h3 class="category-title">Downloads</h3>
                  <div class="download-btn">
                    <a href="#"
                      ><i class="bi bi-file-earmark-pdf"></i> Service Report
                      <span><i class="bi bi-download"></i></span
                      ><span class="dwnlod-hvr"
                        ><i class="bi bi-download"></i></span
                    ></a>
                  </div>
                  <div class="download-btn">
                    <a class="active-btn" href="#"
                      ><i class="bi bi-file-earmark-pdf"></i> Service Report
                      <span><i class="bi bi-download"></i></span
                      ><span class="dwnlod-hvr"
                        ><i class="bi bi-download"></i></span
                    ></a>
                  </div>
                </div>
                <!-- box 3 -->
                <div class="mediic-company-contact" data-aos="flip-left">
                  <div class="mediic-category_box">
                    <div class="call-icon">
                      <img src="assets/images/resource/call3..png" alt="" />
                    </div>
                    <div class="mediic-category-content">
                      <h6>Call Us Anytime</h6>
                      <h4>+123 (4567) 890</h4>
                      <p>
                        <i class="bi bi-envelope-plus"></i> example@gmail.com
                      </p>
                    </div>
                    <div class="mediic-contact-btn">
                      <a href="#"
                        >Contact Us <i class="bi bi-arrow-right"></i>
                        <div class="mediic-hover-btn hover-btn"></div>
                        <div class="mediic-hover-btn hover-btn2"></div>
                        <div class="mediic-hover-btn hover-btn3"></div>
                        <div class="mediic-hover-btn hover-btn4"></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--==================================================-->
        <!-- End mediic Service Details Section  -->
        <!--==================================================-->

        <!--==================================================-->
        <!-- Start  Appoinment Section  -->
        <!--==================================================-->
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mediic-section-title cursor-scale text-center" data-aos="flip-left">
                            <h1>MAKE APPOINTMENT</h1>
                        </div>
                    </div>
                    <div class="mediic-shape-cntr">
                        <img src="assets/images/resource/crcle-bg.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="mediic-appoinment">
            <div class="container">
                <div class="row appoinment align-items-center">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6" data-aos="zoom-in-left">
                        <div class="mediic-section-title2 cursor-scale small">
                            <h4>ONLINE APPOINTMENT</h4>
                            <h3>
                                Make an Online Appointment Booking For {{ $speciality->name }}
                            </h3>
                        </div>
                        <div class="contact-form-box">
                            <form action="{{ route('appointments.store') }}" method="POST" id="appointment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <input type="text" name="name" placeholder="Your Name*" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <input type="text" name="email_id" placeholder="Your Email*" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <input type="text" name="phone" placeholder="Phone*" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <select name="doctor_id" required>
                                                <option value="">Select Doctor</option>
                                                @foreach($speciality->doctors as $doctor)
                                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box">
                                            <textarea name="message" placeholder="Type Your Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="submit-button">
                                            <button class="submit-btn" type="submit">
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
        <!-- Start mediic Brand Section -->
        <!--==================================================
        <div class="brand-section newupper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper brand" data-aos="zoom-in">
                            <div class="swiper-wrapper cursor-scale">
                                <div class="swiper-slide">
                                    <div class="brand-single-box">
                                        <div class="brand-thumb">
                                            <img src="assets/images/resource/brand.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-single-box">
                                        <div class="brand-thumb">
                                            <img src="assets/images/resource/brand2.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-single-box">
                                        <div class="brand-thumb">
                                            <img src="assets/images/resource/brand3.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-single-box">
                                        <div class="brand-thumb">
                                            <img src="assets/images/resource/brand4.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-single-box">
                                        <div class="brand-thumb">
                                            <img src="assets/images/resource/brand5.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-single-box">
                                        <div class="brand-thumb">
                                            <img src="assets/images/resource/brand.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-single-box">
                                        <div class="brand-thumb">
                                            <img src="assets/images/resource/brand2.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-single-box">
                                        <div class="brand-thumb">
                                            <img src="assets/images/resource/brand3.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-single-box">
                                        <div class="brand-thumb">
                                            <img src="assets/images/resource/brand4.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-single-box">
                                        <div class="brand-thumb">
                                            <img src="assets/images/resource/brand5.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ==================================================-->
        <!-- End mediic Brand Section -->
        <!--==================================================-->

        <!--==================================================-->
        <!-- Start mediic Blog Section -->
        <!--==================================================-->

        <div class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-mediic-section">
                            <div class="mediic-section-title">
                                <h1 class="cursor-scale" data-aos="flip-right">
                                    READ OUR
                                    <br />
                                    LATEST BLOG
                                </h1>
                            </div>
                            <div class="mediic-btn cursor-scale small" data-aos="fade-down">
                                <a href="blog-grid.html">View All Blog <i class="bi bi-arrow-return-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-single-box" data-aos="fade-up">
                            <div class="blog-thumb">
                                <img src="assets/images/resource/blog.jpg" alt="" />
                                <div class="mediic-hover-box hover-bx"></div>
                                <div class="mediic-hover-box hover-bx2"></div>
                                <div class="mediic-hover-box hover-bx3"></div>
                                <div class="mediic-hover-box hover-bx4"></div>
                            </div>
                            <div class="blog-content">
                                <div class="blogs-category">
                                    <ul>
                                        <li class="blg-date">APRIL 10, 2024</li>
                                        <li class="blg-admin">ADMIN</li>
                                    </ul>
                                </div>
                                <div class="blog-title">
                                    <h2 class="cursor-scale small">
                                        <a href="blog-details.html">Top 10 Popular Equipments for Medical Industre</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-single-box" data-aos="fade-down">
                            <div class="blog-thumb">
                                <img src="assets/images/resource/blog2.jpg" alt="" />
                                <div class="mediic-hover-box hover-bx"></div>
                                <div class="mediic-hover-box hover-bx2"></div>
                                <div class="mediic-hover-box hover-bx3"></div>
                                <div class="mediic-hover-box hover-bx4"></div>
                            </div>
                            <div class="blog-content">
                                <div class="blogs-category">
                                    <ul>
                                        <li class="blg-date">APRIL 10, 2024</li>
                                        <li class="blg-admin">AUTHOR</li>
                                    </ul>
                                </div>
                                <div class="blog-title">
                                    <h2 class="cursor-scale small">
                                        <a href="blog-details.html">How to maintain Patient for Better Surgery</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-single-box" data-aos="fade-up">
                            <div class="blog-thumb">
                                <img src="assets/images/resource/blog3.jpg" alt="" />
                                <div class="mediic-hover-box hover-bx"></div>
                                <div class="mediic-hover-box hover-bx2"></div>
                                <div class="mediic-hover-box hover-bx3"></div>
                                <div class="mediic-hover-box hover-bx4"></div>
                            </div>
                            <div class="blog-content">
                                <div class="blogs-category">
                                    <ul>
                                        <li class="blg-date">APRIL 10, 2024</li>
                                        <li class="blg-admin">ADMIN</li>
                                    </ul>
                                </div>
                                <div class="blog-title">
                                    <h2 class="cursor-scale small">
                                        <a href="blog-details.html">Most Popular Advises for Kids Happy & Smile Life</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==================================================-->
        <!-- End mediic Blog Section -->
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