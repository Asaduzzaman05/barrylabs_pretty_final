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
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Added shadow */
            transition: box-shadow 0.3s ease;
        }
        li:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
        }
        li h3 {
            margin: 0 0 10px 0;
            font-size: 1.5em;
        }
        li p {
            margin: 0;
        }


        .section{
            margin-top: 10px;
        }
        .btn-more{
            margin-top: 10px;
        }
</style>
<header>
    <h1>Product Lifecycle Management</h1>
</header>

<div class="container ">
    <div class="row">
            <div class="head col-md-12" style="text-align: center">
        <h1 class="title">
          {{$plm_web->title ?? ''}}
         </h1>
    </div>
   <div class="img col-md-12 offset-md-4 " style="margin-top: 5px; margin-bottom:10px">
     <img src="{{$plm_web->image_path ?? '' }}" class="img-fluid" alt="" style="max-height: 250px">
   </div>
    <div class="description" style="text-align: justify">
      {{{$plm_web->description ?? ''}}}
    </div>
</div>

</div>

<div class="section" >
    <div class="container">
        <div class="row">
            <div class="com-md-12 col-sm-12 col-xs-12 text-right">
                <h2>Sub Modules Of PLM</h2>
            </div>
            <div class="com-md-12 col-sm-12 col-xs-12 text-right">
                <ul>
                    <li>
                        <h3>Style</h3>
                        <p>Outline how the system manages company data, structure, branches, and legal entities.</p>
                        <div class="btn-more">
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>
                    </li>

                    <li>
                        <h3>Budget </h3>
                        <p>Explain how the system supports different types of transactions, recording, and reporting.</p>
                        <div class="btn-more">
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>
                    </li>

                    <li>
                        <h3>T&A</h3>
                        <p>Detailed breakdown of the invoice management process.</p>
                        <div class="btn-more">
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>
                    </li>

                    <li>
                        <h3>Production</h3>
                        <p>Manage courier services, track shipments.</p>
                        <div class="btn-more">
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>
                    </li>

                    <li>
                        <h3>IE</h3>
                        <p>Handle shipping documentation (Challan management).</p>
                        <div class="btn-more">
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>
                    </li>

                    <li>
                        <h3>Log</h3>
                        <p>Real-time inventory tracking, stock levels, and warehousing.</p>
                        <div class="btn-more">
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>
                    </li>

                    <li>
                        <h3>Design</h3>
                        <p>Manage conveyance allowances and tracking for the company.</p>
                        <div class="btn-more">
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
