@extends('layouts.website')
@section('title','Blogs')
@section('website-content')
@include('partials.website_sidebar')

    <style>

        header {
            background-color: #2c3e50;
            padding: 20px 0;
            text-align: center;
            color: white;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 300;
        }
        .blog-title {
            text-align: center;
            padding: 20px 0;
            color: #2c3e50;
            font-size: 2.25rem;
            border-bottom: 1px solid #ecf0f1;
        }

        .blog-content {
            padding: 20px;
        }

        .blog-content img {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .blog-content p {
            line-height: 1.8;
            color: #7f8c8d;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #2980b9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-link:hover {
            background-color: #1abc9c;
        }
        .blog-section{
            min-height: 1400px;
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
        .sidebar {
        background-color: #ffffff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h4 {
            margin-bottom: 15px;
        }

        .list-group-item {
            border: none;
        }

    </style>
    <!-- Header -->
    <header >
        {{-- <h1>Blog</h1> --}}
    </header>

    <div class="section-title offset-md-5  position-relative pb-2 mb-2 pd-top" >
        <h1 class="mb-0 pd-top" style="font-size: 40px;margin-left:25px" >Blog</h1>
    </div>
    <!-- Blog Post Content -->

    {{-- <div class="container blog-section wow fadeInUp" style="padding-top: 3%;background-color:#f8f8f8">
        <h2 class="blog-title">{{ $blogs->title }}</h2>
        <div class="col-md-12  image-section pd-top  d-flex justify-content-center">
            <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset($blogs->image_path) }}" alt="About Image">
        </div>
        <div class="blog-content" style="text-align: justify !important;">
            <p>{{ $blogs->description }}</p>
            <a href="{{ route('blog.website') }}" class="back-link">← Back</a>
        </div>
        @include('website.commnet')
    </div> --}}
    <div class="container blog-section wow fadeInUp" style="padding-top: 3%; background-color: #f8f8f8;">
        <div class="row">
            <div class="col-md-8">
                <h2 class="blog-title">{{ $blogs->title }}</h2>
                <div class="image-section pd-top d-flex justify-content-center">
                    <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset($blogs->image_path) }}" alt="About Image">
                </div>
                <div class="blog-content" style="text-align: justify !important;">
                    <p>{{ $blogs->description }}</p>
                    <a href="{{ route('blog.website') }}" class="back-link">← Back</a>
                </div>
                @include('website.commnet')
            </div>

            <div class="col-md-4" style="padding-top:7%">
                <div class="sidebar">
                    <h4>Top Blogs</h4>
                    <ul class="list-group">
                        @foreach($topBlogs as $topBlog)
                            <li class="list-group-item" style="text-align: justify">
                               <p> {{ $loop->iteration }}</p> <p><a href="{{ route('blog.details', $topBlog->id) }}">{{ $topBlog->title }}</a></p>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>


@endsection
