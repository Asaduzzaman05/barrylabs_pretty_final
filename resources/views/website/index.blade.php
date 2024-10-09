<style>
.dropdown-submenu {
    position: relative;

}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: -65%;
    margin-top: -1px;
    display: none !important;
}

.dropdown-submenu:hover .dropdown-menu {
    display: block !important;

}
</style>


@extends('layouts.website')
@section('title','Home')
@section('website-content')
{{-- top navber --}}

<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 37px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{ $content->address }}</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{ $content->phone_1 }}</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{ $content->email }}</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->twitter }}"><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->facebook }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->linkedin }}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->instagram }}"><i class="fab fa-instagram fw-normal"></i></a>
                {{-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a> --}}
            </div>
        </div>
    </div>
</div>
{{-- end topber --}}
 <!-- Navbar & Carousel Start -->
 <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <img class="logo-img" src="{{ asset($content->logo) }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('about.website') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'about.website' ? 'active' : '' }}">About Us</a>
                <a href="{{ route('service.website') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'service.website' ? 'active' : '' }}">Products </a>

                <div class="nav-item dropdown">
                    <a href="{{ route('service.website') }}"
                       class="nav-link dropdown-toggle {{ in_array(Route::currentRouteName(), ['ais', 'hcm', 'plm', 'scm']) ? 'active' : '' }}"
                       data-bs-toggle="dropdown">Service</a>

                    <div class="dropdown-menu m-0">
                            <div class="dropdown-submenu">
                                <a href="{{ route('ais') }}" class="dropdown-item " >Accounting Information System</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Company</a>
                                    <a href="product-detail.html" class="dropdown-item">Transaction</a>
                                    <a href="product-detail.html" class="dropdown-item">Invoice</a>
                                    <a href="product-detail.html" class="dropdown-item">Courier</a>
                                    <a href="product-detail.html" class="dropdown-item">Challan</a>
                                    <a href="product-detail.html" class="dropdown-item">Inventory</a>
                                    <a href="product-detail.html" class="dropdown-item">Conveyance</a>
                                </div>
                            </div>
                            <div class="dropdown-submenu">
                                <a href="{{ route('hcm') }}" class="dropdown-item " >Human Capital Management</a>
                                <div class="dropdown-menu">
                                    <a href="product-detail.html" class="dropdown-item">Employee</a>
                                    <a href="product-detail.html" class="dropdown-item">Salary & Wages</a>
                                    <a href="product-detail.html" class="dropdown-item">Task Manager</a>
                                    <a href="product-detail.html" class="dropdown-item">Attendance</a>
                                    <a href="product-detail.html" class="dropdown-item">Deduction</a>
                                    <a href="product-detail.html" class="dropdown-item">Recruitment</a>
                                    <a href="product-detail.html" class="dropdown-item">Aptitude</a>
                                </div>
                            </div>
                            <div class="dropdown-submenu">
                                <a href="{{ route('plm') }}" class="dropdown-item " >Product Lifecycle Management</a>
                                <div class="dropdown-menu">
                                    <a href="product-detail.html" class="dropdown-item">Style</a>
                                    <a href="product-detail.html" class="dropdown-item">Budget</a>
                                    <a href="product-detail.html" class="dropdown-item">T&A</a>
                                    <a href="product-detail.html" class="dropdown-item">Production</a>
                                    <a href="product-detail.html" class="dropdown-item">IE</a>
                                    <a href="product-detail.html" class="dropdown-item">Log</a>
                                    <a href="product-detail.html" class="dropdown-item">Design</a>
                                </div>
                            </div>
                            <div class="{{ route('scm') }}">
                                <a href="project.html" class="dropdown-item " > Supply Chain Management</a>
                                <div class="dropdown-menu">
                                    <a href="product-detail.html" class="dropdown-item">Commercial</a>
                                    <a href="product-detail.html" class="dropdown-item">Shipping Docs</a>
                                </div>
                            </div>
                    </div>
                </div>
                <a href="{{ route('contact.website') }}" class="nav-item nav-link ">Contact</a>
                <a href="{{ route('blog.website') }}" class="nav-item nav-link">Blogs</a>

            </div>
        </div>
    </nav>
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner slider-img">
            @foreach ($sliders as $key => $item)
             <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img class="w-100" src="{{ asset('public/'.$item->image) }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3 slider-content" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $item->slider_title_one }}</h5>
                        <h1 class="display-1 slider-title-h1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                        <a href="#" class="btn btn-danger py-md-2 px-md-5 me-3 animated slideInLeft">View Demo</a>
                        <a href="#" class="btn btn-outline-light py-md-2 px-md-5 animated slideInRight">Testimonials</a>
                    </div>
                </div>
             </div>
           @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
 <!-- Facts Start -->
 <div class="container-fluid facts pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 70px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2 contact-icon">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">{{ $counter1->title}}</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">{{ $counter1->count_number }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 70px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded contact-icon mb-2">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">{{ $counter2->title }}</h5>
                        <h1 class="mb-0" data-toggle="counter-up">{{ $counter2->count_number }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 70px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2 contact-icon">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">{{$counter3->title}}</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">{{ $counter3->count_number }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts Start -->
<!-- About Start -->
<div class="container-fluid wow fadeInUp " data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-3">
                    {{-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> --}}
                    <h1 class="mb-0 second-title fw-bold text-uppercase text-primary">About Us</h1>
                </div>
                {{-- <p class="">{!! Str::limit($content->about_description, 79) !!} --}}
               <div class="">
                <p class="mb-4 service-description">{!! Str::limit($content->about_description,300) !!}</p>
                <a href="{{ route('about.website') }}" class="btn btn-danger see-btn wow zoomIn" data-wow-delay="0.9s">See More</a>
               </div>
            </div>
            <div class="col-lg-5">
                <div class="position-relative">
                    <img class="position-absolute w-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset($content->about_image) }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Features Start -->
<div class="container-fluid wow fadeInUp why-container" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 mb-3 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5> --}}
            <h1 class="mb-0 second-title text-primary fw-bold text-uppercase">Why Choose Us</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3 contact-icon">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>{{ $choose1->title }}</h4>
                        <p class="mb-0 service-description">{{ $choose1->description }}</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3 contact-icon">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>{{ $choose2->title }}</h4>
                        <p class="mb-0 service-description">{{ $choose2->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset($content->why_image) }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3 contact-icon">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>{{ $choose3->title }}</h4>
                        <p class="mb-0 service-description">{{ $choose3->description }}</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3 contact-icon">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>{{ $choose4->title??'' }}</h4>
                        <p class="mb-0 service-description">{{ $choose4->description ??''}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->
<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 mb-3 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Our Services</h5> --}}
            <h1 class="mb-0 second-title fw-bold text-primary text-uppercase">Our Services</h1>
        </div>
        <div class="row g-3">
            @foreach ($services as $item)
            <div class="col-lg-3 col-md-3 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                    <img class="w-50" src="{{ asset($item->image) }}" alt="">
                    </div>
                    <h4 class="mb-3">{{ $item->name }}</h4>
                    <p class="m-0 service-description">{!! Str::limit($item->description, 78) !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->
<!-- Pricing Plan Start -->
{{-- <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
            <h1 class="mb-0 second-title">We are Offering Competitive Prices for Our Clients</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="bg-light rounded">
                    <div class="py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Basic Plan</h4>
                        <small class="text-uppercase">For Small Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>49.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-danger mt-2">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                    <div class="py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Standard Plan</h4>
                        <small class="text-uppercase">For Medium Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>99.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-danger mt-2">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="bg-light rounded">
                    <div class="py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Advanced Plan</h4>
                        <small class="text-uppercase">For Large Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>149.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <a href="" class="btn btn-danger mt-2">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Pricing Plan End -->
<!-- Quote Start -->
 <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-2 mb-2">
                    <h1 class="fw-bold text-primary text-uppercase">Request A Quote</h1>
                    {{-- <h1 class="mb-0 second-title">Need A Free Quote? Please Feel Free to Contact Us</h1> --}}
                </div>
                <div class="row gx-2">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class=""><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class=""><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                    </div>
                </div>
                <p class="service-description">{!! Str::limit($content->request_description,330) !!}</p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded contact-icon">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">{{ $content->phone_2 }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="d-flex align-items-center p-4 wow zoomIn" data-wow-delay="0.9s">
                  <div>
                    <img class="w-100" src="{{ asset('public/'.$content->request_image) }}" alt="">
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->
<!-- Team Start -->
<div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 mb-3 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Team Members</h5> --}}
            <h1 class="mb-0 second-title text-uppercase text-primary fw-bold">Team Members</h1>
        </div>
        <div class="owl-carousel team-carousel">
            @foreach ($team as $item)
            <div class="item">
                <div class=" wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('public/'.$item->image) }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{ $item->name }}</h4>
                            <p class="text-uppercase m-0 service-description">{{ $item->designation }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->
<!-- Photo Gallery Start -->
{{-- <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Photo Gallary</h5>
            <h1 class="mb-0 second-title">Professional Stuffs Ready to Help Your Business</h1>
        </div>
        <div class="row">
            <div class="owl-carousel photo-carousel">
                <div class="item">
                    <div class="photo-gallery">
                        <img class="w-100" src="{{ asset('public/website/img/team-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="photo-gallery">
                        <img class="w-100" src="{{ asset('public/website/img/team-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="photo-gallery">
                        <img class="w-100" src="{{ asset('public/website/img/team-3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="photo-gallery">
                        <img class="w-100" src="{{ asset('public/website/img/team-1.jpg'P) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Photo Gallery End -->
<!-- Vendor Start -->
<div class="container-fluid mt-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container mb-3">
        <div class="section-title text-center position-relative pb-3 mb-3 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Our Client</h5> --}}
            <h5 class="mb-0 second-title fw-bold text-primary text-uppercase">Our Client</h5>
        </div>
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                @foreach ($clients as $item)
                    <div class="brand-icon">
                        <img src="{{ asset('public/'.$item->image) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
@endsection