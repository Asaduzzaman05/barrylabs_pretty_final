@extends('layouts.website')
@section('title','Products')
@section('website-content')

 @include('partials.website_sidebar')
<style>
    header {
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
    <header class="col-sm-12 col-xs-12 col-md-12 ">
        <h1>Contact Us</h1>
    </header>

</div>
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0"> <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;"> <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword"> <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button> </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title-1 text-center position-relative pb-3 mb-3 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase"></h5>
            {{-- <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1> --}}
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded contact-icon"> <i class="fa fa-phone-alt text-white"></i> </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">{{ $content->phone_1 }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded contact-icon"> <i class="fa fa-envelope-open text-white"></i> </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Email to get free quote</h5>
                        <h4 class="text-primary mb-0">{{ $content->email }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded contact-icon"> <i class="fa fa-map-marker-alt text-white"></i> </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Visit our office</h5>
                        <h4 class="text-primary mb-0">{{ $content->address }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 contact-form wow slideInUp" data-wow-delay="0.3s">
                <form id="contactForms">
                   @csrf
                    <div class="row gx-3">
                        <div class="col-md-6 control-group"> <input type="text" class="form-control bg-light px-4" name="name" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" style="height: 40px;">
                            <p id="p1" class="help-block text-danger"></p>
                        </div>
                        <div class="col-md-6 control-group"> <input type="email" class="form-control bg-light px-4" name="email" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" style="height: 40px;">
                            <p id="p2" class="help-block text-danger"></p>
                        </div>
                        <div class="col-12 control-group"> <input type="text" class="form-control bg-light px-4" name="subject" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" style="height: 40px;">
                            <p id="p3" class="help-block text-danger"></p>
                        </div>
                        <div class="col-12 control-group"> <textarea class="form-control bg-light px-4 py-3" rows="4" name="message"  id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p id="p4" class="help-block text-danger"></p>
                        </div>
                        <div class="col-12 mb-3">
                             <button id="" class="btn btn-danger send-btn w-50">SEND</button>
                         </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp mb-3" data-wow-delay="0.6s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14599.595646957583!2d90.4219536!3d23.822193449999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1673930020724!5m2!1sen!2sbd" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
