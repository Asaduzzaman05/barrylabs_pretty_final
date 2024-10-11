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
        .description{
            min-height: 300px;
        }


</style>
<header>
    <h1>Transaction</h1>
</header>

<div class="container ">
    <div class="row">
            <div class="head col-md-12" style="text-align: center">
        <h1 class="title">
          {{$transaction->title ?? ''}}
         </h1>
    </div>
   <div class="img col-md-12 offset-md-4 " style="margin-top: 5px; margin-bottom:10px">
     <img src="{{$transaction->image_path ?? '' }}" class="img-fluid" alt="" style="max-height: 250px">
   </div>
    <div class="description" style="text-align: justify">
      {{{$transaction->description ?? ''}}}
    </div>
</div>
</div>

@endsection
