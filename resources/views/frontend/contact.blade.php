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
                <h1 class="cursor-scale">Contact Us</h1>
                <ul class="breatcome-item">
                  <li>
                    <a class="cursor-scale small" href="index.html">
                      mediic
                    </a>
                  </li>
                  <li>Contact Us</li>
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
      <!-- Start mediic Appoinment Section  -->
      <!--==================================================-->

      <div class="mediic-appoinment style-2">
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
      <!--==================================================-->
      <!-- End mediic Appoinment Section  -->
      <!--==================================================-->

      <!--==================================================-->
      <!-- Start mediic Contact Service Section -->
      <!--==================================================-->
      <div class="contact-service-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="contact-service-box">
                <div class="contact-service-content">
                  <div class="contact-head">
                    <div class="contact-title">
                      <h5>MEET US</h5>
                    </div>
                    <div class="contact-icon">
                      <img src="assets/images/resource/icon-message.png" alt="" />
                    </div>
                  </div>
                  <div class="contact-address">
                    <h2>Email Address</h2>
                    <span>no-reply@pbmadmin.com</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="contact-service-box">
                <div class="contact-service-content">
                  <div class="contact-head">
                    <div class="contact-title">
                      <h5>CALL NOW</h5>
                    </div>
                    <div class="contact-icon">
                      <img src="assets/images/resource/icon-call.png" alt="" />
                    </div>
                  </div>
                  <div class="contact-address">
                    <h2>Phone Number</h2>
                    <span>Phone : (+55) 654 - 545 - 5418</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="contact-service-box">
                <div class="contact-service-content">
                  <div class="contact-head">
                    <div class="contact-title">
                      <h5>SEND NOW</h5>
                    </div>
                    <div class="contact-icon">
                      <img src="assets/images/resource/icon-location.png" alt="" />
                    </div>
                  </div>
                  <div class="contact-address">
                    <h2>Our Locations</h2>
                    <span>A-1, Envanto Headquarter, Australia</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--==================================================-->
      <!-- End mediic Contact Service Section -->
      <!--==================================================-->

      <div class="google-map">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115056.06557977067!2d89.59166830628283!3d25.687796457847632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e2cae8ae57558b%3A0x5e58a2b1e4371c46!2sUlipur%20Upazila!5e0!3m2!1sen!2sbd!4v1717220046353!5m2!1sen!2sbd"
                width="1290" height="500" style="border: 2px solid #fff; border-radius: 20px" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>

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