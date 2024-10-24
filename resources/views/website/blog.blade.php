@extends('layouts.website')
@section('title','Blogs')
@section('website-content')
@include('partials.website_sidebar')

  <style>
        header {
            background-color: #87baec;
            padding: 20px 0;
            text-align: center;
            color: white;
        }

        header h1 {
            margin: 0;
            margin-top: 10px;
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
        body{
            overflow-x: hidden;
        }

        @media (max-width: 576px){
            header h1{
                font-size: 20px !important;
            }
        }

    </style>


    <!-- Header -->
    <header class="col-sm-12 col-xs-12 col-md-12 ">
        <h1>ERP Solutions Blog</h1>
    </header>

    <!-- Blog Section -->
    <div class="container wow fadeInUp"  data-wow-delay="0.1s" style="position: relative">
        @foreach ($blogs as $blog)
            <div class="blog-card d-flex flex-column flex-md-row align-items-start mb-4">
                <div class="content flex-grow-1 mb-3 mb-md-0">
                    <h2 class="h5">{{ $blog->title ?? '' }}</h2>
                    <p>{{ \Illuminate\Support\Str::limit($blog->description ?? '', 100, '...') }}</p>
                    <p><strong>Views: {{ $blog->views }}</strong></p>
                    <p><strong>Comments: {{ $blog->comments->count() }}</strong></p>
                    <a href="{{ route('blog.details', ['id' => $blog->id]) }}" class="btn btn-primary">Read More</a>
                </div>

                <div class="image-container wow fadeInUp"  data-wow-delay="0.1s" >
                    @if($blog->image_path)
                        <img src="{{ asset('public/' . $blog->image_path) }}" alt="No Image" class="img-fluid" style="max-width: 200px;">
                    @else
                        <p>No Image Available</p>
                    @endif
                </div>
            </div>

         @endforeach

    </div>

@endsection
