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
        .blog-card {
            background-color: white;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .blog-card:hover {
            transform: scale(1.03);
        }

        .blog-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .blog-card .content {
            padding: 20px;
        }

        .blog-card h2 {
            margin: 0 0 10px;
            font-size: 1.75rem;
            color: #2c3e50;
        }

        .blog-card p {
            color: #7f8c8d;
            font-size: 1rem;
        }

        .blog-card .read-more {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #2980b9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .blog-card .read-more:hover {
            background-color: #1abc9c;
        }
        .blog-card {
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
          }

        .image-container {
            margin-left: 15px;
            display: flex;
            align-items: center;
        }

    </style>


    <!-- Header -->
    <header>
        <h1>ERP Solutions Blog</h1>
    </header>

    <!-- Blog Section -->
    <div class="container" style="position: relative">
        @foreach ($blogs as $blog)
        <div class="blog-card d-flex align-items-start mb-4"> <!-- Use d-flex to enable flexbox -->
            <div class="content flex-grow-1"> <!-- Make this grow to take available space -->
                <h2>{{ $blog->title }}</h2>
                <p>{{ \Illuminate\Support\Str::limit($blog->description, 100, '...') }}</p>
                <p><strong>Views: {{ $blog->views }}</strong></p>
                <p><strong>Comments: {{ $blog->comments->count() }}</strong></p>
                <a href="{{ route('blog.details', ['id' => $blog->id]) }}" class="read-more">Read More</a>
            </div>

            <div class="image-container"> <!-- This will hold the image -->
                @if($blog->image_path)
                    <img src="{{ asset('public/' .$blog->image_path) }}" alt="Blog Image" class="img-fluid" style="max-width: 200px;">
                @else
                    <p>No image available.</p>
                @endif
            </div>


        </div>
    @endforeach

    </div>

@endsection
