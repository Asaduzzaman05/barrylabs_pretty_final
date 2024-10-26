@extends('layouts.website')
@section('title', $services->module?? '')
@section('website-content')
@include('partials.website_sidebar')

<style>
      header {
            /* background-color: #8bbdee; */
            padding: 20px 0;
            text-align: center;
            color: white;
            height: 80px;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 300;
        }
        .description{
            min-height: 300px;
        }
        body{
            overflow-x: hidden;
        }

</style>

<header>
    <h1>
      {{ strtoupper( $services->submodule ?? '' )}}
    </h1>
</header>

<div class="container pd-top ">
    <div class="row wow fadeInUp"  data-wow-delay="0.1s" style="min-height: 480px">
            <div class="head col-md-12 wow zoomIn" style="text-align: center">
                <h1  class="title" style="margin-top: 10px">
                        {{$services->title ?? ''}}
                </h1>
            </div>

            <div class="img col-md-12 offset-md-4 wow zoomIn " style="margin-top: 5px; margin-bottom:10px">
                    <img src="{{ asset($services->image_path ?? '') }}" class="img-fluid" alt="" style="max-height: 250px">
            </div>

            <div class="description wow zoomIn" style="text-align: justify">
                {!! $services->description ?? '' !!}
            </div>
    </div>
</div>

@php
    $module_arr = ['scm', 'hcm', 'plm', 'ais'];
@endphp
@if ($services != null)
@if (in_array(strtoupper($services->submodule), array_map('strtoupper', $module_arr)))
<div class="container wow zoomIn">
    <div class="row ">
        <h2 class="text-center"> Submodules</h2>
        <div class="container">
            <div class="row">
                    @foreach ($submodules as $submodule)
                        <div class="col-lg-3 col-md-3 wow zoomIn" data-wow-delay="0.9s" style="margin-bottom:20px">
                            <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon ">
                                        <img class="w-50" src="{{ asset($submodule->image ?? '') }}" alt="">
                                </div>
                                <h4 class="mb-3">{{ strtoupper($submodule->submodule ?? '') }}</h4>
                                <p class="m-0 service-description">{!! Str::limit($submodule->description, 40) !!}</p>
                                <a href="{{ url('our_service/' . $module . '/' . $submodule->submodule) }}">Read More ...</a>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endif
@endif
@endsection
