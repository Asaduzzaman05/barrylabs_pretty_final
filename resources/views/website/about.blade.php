@extends('layouts.website')
@section('title','About Us')
@section('website-content')
@include('partials.website_sidebar')

<style>
        .description{
            min-height: 300px;
        }
        .image-section{
            height: 400px;
            width: 100%;
        }
        .about-image{
            height: 300px ;
            width: 50%;
        }
        .image-section {
            position: relative;
            overflow: hidden;
        }
        .image-section img {
            object-fit: cover;
        }
        body{
            overflow-x: hidden !important;
        }
</style>

<header>
    <h1></h1>
</header>
<!-- About Start -->
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="padding-top:3%;background-color:#f8f8f8">
    <div class="container" >
        <div class="row g-5" >
            <div class="col-lg-12" style="text-align: justify !important;">
                <div class="row">
                <div class="section-title-head offset-md-5 position-relative pb-2 mb-2 ">
                    {{-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> --}}
                    <h1 class="mb-0 pd-top" style="font-size: 60px" >About Us</h1>
                </div>
                <div class="col-md-12 image-section pd-top d-flex justify-content-center">
                    <img class="img-fluid rounded wow zoomIn " data-wow-delay="0.9s" src="{{ asset($content->about_image) }}" alt="About Image" style="width:50%">
                </div>

                <p class="mb-4 service-description pd-top" style="text-align: justify !important;line-height: 1.6;">{!! $content->about_description !!}</p>
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
            {{-- <div class="col-lg-5 mb-3" style="min-height: 500px;padding-top:18%">
                <div class="position-relative h-100" style="padding-top: 10%" >
                    <img class="position-absolute w-100  rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset($content->about_image) }}" style="object-fit: cover;">
                </div>
            </div>
        </div> --}}
    </div>
    </div>
</div>
<!-- About End -->
@endsection
