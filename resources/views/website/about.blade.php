@extends('layouts.website')
@section('title','About Us')
@section('website-content')
@include('partials.website_sidebar')

<style>
     header {
            background-color: #9fc6ed;
            padding: 20px 0;
            text-align: center;
            color: white;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 300;
        }
        .description{
            min-height: 300px;
        }
</style>

<header>
    <h1>About Us</h1>
</header>


<!-- About Start -->
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7" style="text-align: justify !important;">
                <div class="section-title position-relative pb-2 mb-2">
                    {{-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> --}}
                    <h1 class="mb-0">About Us</h1>
                </div>
                <p class="mb-4 service-description " >{!! $content->about_description !!}</p>
                {{-- <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded contact-icon">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">{{ $content->phone_1 }}</h4>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-5 mb-3" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset($content->about_image) }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
