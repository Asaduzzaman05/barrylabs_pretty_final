

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Berrylabs.net</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="barrylabs" name="keywords">
    <meta content="ariful islam tuhin" name="description">
    {{-- <link href="{{ asset('uploads/fav.png') }}" rel="icon"> --}}
    <link rel="icon" href="{{ asset('public/uploads/fav.png') }}" type="image/png">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('public/website/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/css/style.css') }}" rel="stylesheet">
</head>
<body>
    {!! Toastr::message() !!}

    <style>
        .navbar-light .navbar-nav .nav-link{
            font-family:nunito,sans-serif;
            position:relative;
            margin-left:14px;
            /* padding:35px 0; */
            color:#fff;
            font-size:15px;
            font-weight:600;
            outline:none;
            transition:.5s
        }
        .sticky-top.navbar-light .navbar-nav .nav-link{
            /* padding:20px 0; */
            color:var(--dark)!important
        }
        .navbar-light .navbar-nav .nav-link:hover,.navbar-light .navbar-nav .nav-link.active{
            color:var(--primary)!important
        }
        .navbar-light .navbar-brand h1{
            color:#fff
        }
        .navbar-light .navbar-brand img{
            max-height:60px;
            transition:.5s
        }
        .sticky-top.navbar-light .navbar-brand img{
            max-height:45px
        }
        @media(max-width:991.98px){
            .sticky-top.navbar-light{
                position:relative;
                background:#fff
            }
            .navbar-light .navbar-collapse{
                margin-top:15px;
                border-top:1px solid #ddd
            }
            .navbar-light .navbar-nav .nav-link,.sticky-top.navbar-light .navbar-nav .nav-link{
                padding:10px 0;
                margin-left:0;
                color:var(--dark)!important
            }
            .navbar-light .navbar-brand h1{
                color:var(--primary)
            }
            .navbar-light .navbar-brand img{
                max-height:45px
            }
        }
        @media(min-width:992px){
            .navbar-light{
                position:absolute;
                width:100%;
                top:0;
                left:0;
                z-index:999
            }
            .sticky-top.navbar-light{
                position:fixed;
                background:#fff
            }
            .navbar-light .navbar-nav .nav-link::before{
                position:absolute;
                content:"";
                width:0;
                height:2px;
                bottom:-1px;
                left:50%;
                background:var(--primary);
                transition:.5s
            }
            .navbar-light .navbar-nav .nav-link:hover::before,.navbar-light .navbar-nav .nav-link.active::before{
                width:100%;
                left:0
            }
            .navbar-light .navbar-nav .nav-link.nav-contact::before{
                display:none
            }
            .sticky-top.navbar-light .navbar-brand h1{
                color:var(--primary)
            }
        }
        </style>

    {{-- @include('partials.website_header') --}}
    <!-- Topbar End -->

   @yield('website-content')

   @include('partials.website_footer')

    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-danger btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/website/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/website/js/easing.min.js') }}"></script>
    <script src="{{ asset('public/website/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/website/js/counterup.min.js') }}"></script>
    <script src="{{ asset('public/website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/website/js/main.js') }}"></script>
    <script src="{{ asset('public/website/js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('success') }}");
        @endif

        @if(Session::has('update'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('update') }}");
        @endif

        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('remove'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('remove') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif
      </script>
    <script>
        $.ajaxSetup({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        $(document).on('submit','#contactForms',function(e){
            e.preventDefault();
            let formData = new FormData(this);
            console.log(formData);
           $.ajax({
                url:"{{ route('message.store') }}",
                type:"post",
                dataType: "json",
                data:formData,
                cache: false,
                contentType: false,
                processData: false,
              success:function(res){
               console.log(res);
               if(res){
                toastr.success('Data Send Successfully');
               }else{
                toastr.error('res.error');
               }
                $("#contactForms")[0].reset();

              },
              error:function(err){
               $('#p1').text(err.responseJSON.errors.name);
              }
           });
        });
    </script>

</body>

</html>
