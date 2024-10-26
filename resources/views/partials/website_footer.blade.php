   <!-- Footer Start -->

   <div class="container-fluid bg-dark text-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5"  >
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <a href="{{ route('home') }}" class="navbar-brand">
                        <img class="logo-img" src="{{ asset($content->logo) }}" alt="">
                    </a>
                    <p class="">{!! Str::limit($content->about_description, 79) !!}
                        <a href="{{ route('about.website') }}">See More</a>
                    </p>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-square me-2" href="{{ $content->twitter }}"><i class="fab fa-whatsapp fw-normal"></i></a>
                        <a class="btn btn-primary btn-square me-2" href="{{ $content->facebook }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-primary btn-square me-2" href="{{ $content->linkedin }}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-primary btn-square" href="{{ $content->instagram }}"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-6 child-class" style="width: 100%">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-3">
                        <div class="section-title section-title-sm position-relative pb-3 mb-3">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">{{ $content->address }}</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">{{ $content->email }}</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">{{ $content->phone_1 }}</p>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-3">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ route('home') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="{{ route('about.website') }}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-2" href="{{ route('service.website') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-light" href="{{ route('contact.website') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-3">
                            <h3 class="text-light mb-0">Popular Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ $content->facebook }}"><i class="bi bi-arrow-right text-primary me-2"></i>Facebook</a>
                            <a class="text-light mb-2" href="{{ $content->twitter }}"><i class="bi bi-arrow-right text-primary me-2"></i>Twitter</a>
                            <a class="text-light mb-2" href="{{ $content->linkedin }}"><i class="bi bi-arrow-right text-primary me-2"></i>Linkedin</a>
                            <a class="text-light" href="{{ $content->instagram }}"><i class="bi bi-arrow-right text-primary me-2"></i>Instagram</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center">
                    <p class="mb-0 all-right">&copy; <a class="text-white border-bottom" href="#"></a>All Rights Reserved.
                    Designed by Berrylabs</p>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    let element = document.querySelector('.child-class');
    let parent = element.parentElement;
    parent.style.maxWidth = '60%';

</script>
