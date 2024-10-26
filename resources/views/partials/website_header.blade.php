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
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->whatsapp ?? " " }}"><i class="fab fa-whatsapp fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->facebook }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->linkedin }}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->instagram }}"><i class="fab fa-instagram fw-normal"></i></a>
                {{-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->instagram }}">
                    <img src="{{ asset('public/uploads/instra.jpeg') }}" alt="Instagram" style="width: 20px; height: 20px;">
                </a> --}}

            </div>
        </div>
    </div>
</div>
