@extends('layouts.website')
@section('title','AIS')
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
</style>
<header>
    <h1>Supply Chain Management</h1>
</header>
<div class="container ">
    <div class="row">
            <div class="head col-md-12" style="text-align: center">
        <h1 class="title">
          {{$scm_web->title ?? ''}}
         </h1>
    </div>
   <div class="img col-md-12 offset-md-4 " style="margin-top: 5px; margin-bottom:10px">
     <img src="{{$scm_web->image_path ?? '' }}" class="img-fluid" alt="" style="max-height: 250px">
   </div>
    <div class="description" style="text-align: justify">
      {{{$scm_web->description ?? ''}}}
    </div>
</div>

</div>
@endsection