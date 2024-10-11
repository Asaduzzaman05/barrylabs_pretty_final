@extends('layouts.website')
@section('title','Service')
@section('website-content')
@include('partials.website_sidebar')
<style>
    header {
           /* background-color: #9fc6ed;
           background-color: #f8f8f8; */
           /* background-image: linear-gradient(#2dc8f3 0,#1497e2 70%); */
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
   <h1>Our Product</h1>
</header>
<!-- About Start -->
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 10px">
    <div class="container">
        @foreach ($service as $key=>$item)

        @php
        $stype = substr($item->name, 0, 3); $slink = '';
        if ($stype == 'SCM') { $slink = 'scm/scm'; }
        if ($stype == 'HCM') { $slink = 'hcm/hcm'; }
        if ($stype == 'AIS') { $slink = 'ais/ais'; }
        if ($stype == 'PLM') { $slink = 'plm/plm'; }
        @endphp

        @if($key%2 == '0')
        <div class="row g-5">
            <div class="col-lg-7" style="text-align: justify">
                <div class="section-title position-relative pb-3 mb-3">
                    {{-- <h5 class="fw-bold text-primary text-uppercase">Service</h5> --}}
                    <h1 class="mb-0">{{ $item->name ?? '' }}</h1>
                </div>
                <p class="mb-4 service-description">

                    {!! $item->description ?? '' !!}
                    <a href="{{ url('/our_service/'.$slink) }}">Read More...</a>

                </p>
            </div>
            <div class="col-lg-5 mb-3" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset($item->big_image ?? '') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
        @elseif($key%2 == '1')
        <div class="row g-5">
            <div class="col-lg-5 mb-3" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset($item->big_image ?? '') }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7"  style="text-align: justify">
                <div class="section-title position-relative pb-3 mb-3">
                    {{-- <h5 class="fw-bold text-primary text-uppercase">Service</h5> --}}
                    <h1 class="mb-0">{{ $item->name ?? '' }}</h1>
                </div>
                <p class="mb-4 service-description">
                    {!!  $item->description ?? '' !!}
                    <a href="{{ url('/our_service/'.$slink) }}">Read More...</a>
                </p>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
<!-- About End -->
@endsection
