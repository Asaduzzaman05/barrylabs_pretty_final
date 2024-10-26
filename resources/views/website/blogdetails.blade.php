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
            min-height: 800px;
            height: 1200px;

        }

    </style>


    <!-- Header -->
    <header >
        <h1>ERP Solutions Blog</h1>
    </header>

    <!-- Blog Post Content -->
    <div class="container blog-section" style="padding-top: 3%;background-color:#f8f8f8">
        <h2 class="blog-title">{{ $blogs->title }}</h2>

        <div class="blog-content">
            {{-- <img src="https://source.unsplash.com/1200x800/?technology,erp" alt="ERP Benefits"> --}}

            <p>{{ $blogs->description }}  </p>

            <a href="{{ route('blog.website') }}" class="back-link">← Back</a>
        </div>

        @include('website.commnet')
    </div>

@endsection
