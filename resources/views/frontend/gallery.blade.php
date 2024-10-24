@extends('frontend.layouts.main')

@section('main-section')

@php
use App\Models\Gallery;
$galleries = Gallery::all();
@endphp

<!--Main Area Start Here-->
<div id="smooth-wrapper">
    <div id="smooth-content">

        <!--Breadcrumb Section Start Here-->
        <div class="breatcome-section d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breatcome-content text-center">
                            <h1 class="cursor-scale"> Gallery</h1>
                            <ul class="breatcome-item">
                                <li class="cursor-scale small">
                                    <a href="index.html"> Prakriti </a>
                                </li>
                                <li> Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb Section End Here-->

        <!-- <div class="gallery-section"> -->
        <div class="blog-filter-section padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Filter Button Section Start-->
                        <div class="horizontal-scroll">
                            <ul class="button-group filters-button-group">
                                <li class="button is-checked" data-filter="*">All</li>
                                <li class="button" data-filter=".gallery-01">Interior</li>
                                <li class="button" data-filter=".gallery-02">Exterior</li>
                                <li class="button" data-filter=".gallery-03">Events</li>
                            </ul>
                        </div>
                        <!--// Filter Button Section End-->

                        <main class="main">
                            <div class="container">
                                @foreach ($galleries as $gallery)
                                @foreach ($gallery->images as $image)
                                <div class="gallery-gallery-card">
                                    <div class="gallery-card-image">
                                        <img src="{{ asset ('storage/') . '/' . ($image) }}" class="ag-photo-gallery_img" alt="Gallery image" />
                                    </div>
                                </div>
                                @endforeach
                                @endforeach

                            </div>
                        </main>

                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->



        </main>

        @endsection