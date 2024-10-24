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
              <h1 class="cursor-scale"> Doctors</h1>
              <ul class="breatcome-item">
                <li class="cursor-scale small">
                  <a href="index.html"> Prakriti </a>
                </li>
                <li> Doctors</li>
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
    <!-- Start mediic About Section  -->
    <!--==================================================-->

    <div class="team-section style-2 upp">
      <div class="container">
        <div class="row">
          @foreach($doctors as $doctor)
          <div class="col-lg-3 col-md-6">
            <div class="team-single-box2" data-aos="fade-right">
              <div class="team-content text-center">
                <h2>{{ $doctor->name }}</h2>
                <h5>{{ $doctor->speciality }}</h5>
              </div>
              <div class="team-thumb">
                <img src="{{ asset($doctor->profile_image) }}" alt="{{ $doctor->name }}" />
                <div class="social-icon2">
                  <ul>
                    <li>
                      <a href="team-details.html"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="team-details.html"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                      <a href="team-details.html"><i class="fab fa-twitter"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!--==================================================-->
    <!-- End mediic About Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start mediic Blog Section -->
    <!--==================================================-->

    <div class="blog-section style-2 upper">
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