<style>
    /* Custom styles for submenu */
.dropdown-submenu {
    position: relative;
}
.dropdown-submenu .dropdown-menu {
    top: 0;
    left: -65%;
    margin-top: -1px;
    display: none;
    color: black !important;
}
.dropdown-submenu:hover .dropdown-menu {
    display: block;
}
.dropdown-menu a{
    color: black !important;
}
.dropdown-submenu .dropdown-item{
    color: black !important;
}
.dropdown-submenu a{
    height: 30px;
}
</style>
{{-- start top navber --}}
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
      <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center" style="height: 45px;">
          <small class="me-3 text-light">
            <i class="fa fa-map-marker-alt me-2"></i>{{ $content->address }} </small>
          <small class="me-3 text-light">
            <i class="fa fa-phone-alt me-2"></i>{{ $content->phone_1 }} </small>
          <small class="text-light">
            <i class="fa fa-envelope-open me-2"></i>{{ $content->email }} </small>
        </div>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <div class="d-inline-flex align-items-center" style="height: 45px;">
          <a class="btn btn-sm btn-outline-light btn-sm-square whatsapp rounded-circle me-2" href="{{ $content->twitter }}">
            <i class="fab fa-whatsapp fw-normal"></i>
          </a>
          <a class="btn btn-sm btn-outline-light btn-sm-square facebook rounded-circle me-2" href="{{ $content->facebook }}">
            <i class="fab fa-facebook-f fw-normal"></i>
          </a>
          <a class="btn btn-sm btn-outline-light btn-sm-square linkedIn rounded-circle me-2" href="{{ $content->linkedin }}">
            <i class="fab fa-linkedin-in fw-normal"></i>
          </a>
          <a class="btn btn-sm btn-outline-light btn-sm-square instra rounded-circle me-2" href="{{ $content->instagram }}">
            <i class="fab fa-instagram fw-normal"></i>
          </a>
          {{-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->instagram }}">
            <img src="{{ asset('public/uploads/instra.jpeg') }}" alt="Instagram" style="width: 20px; height: 20px;">
        </a> --}}
        </div>
      </div>
    </div>
  </div>
{{-- end top nevber --}}
<div class="container-fluid position-relative p-0">
    <nav class="navbar common-navber navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
         <a href="{{ route('home') }}" class="navbar-brand p-0">
            <img class="logo-2" src="{{ asset($content->logo) }}" alt="">
        </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"> <span class="fa fa-bars"></span> </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('about.website') }}" class="nav-item nav-link  {{ Route::currentRouteName() == 'about.website' ? 'active' : '' }}">About Us</a>
                <a href="{{ route('service.website') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'service.website' ? 'active' : '' }}">Products </a>

                <div class="nav-item dropdown">
                    <a href="{{ route('service.website') }}"
                       class="nav-link dropdown-toggle {{Route::currentRouteName() == 'our_service' ? 'active' : '' }}"
                       data-bs-toggle="dropdown">Service</a>

                    <div class="dropdown-menu m-0 wow zoomIn" >
                            <div class="dropdown-submenu navbar-nav wow zoomIn">
                                <a href="{{ url('our_service/ais/ais') }}" class="dropdown-item  nav-item nav-link " >Accounting Information System</a>
                                <div class="dropdown-menu wow zoomIn">
                                    <a href="{{ url('our_service/ais/Company') }}" class="dropdown-item  nav-item nav-link">Company</a>
                                    <a href="{{ url('our_service/ais/Transaction')}}" class="dropdown-item  nav-item nav-link" >Transaction</a>
                                    <a href="{{ url('our_service/ais/Invoice') }}" class="dropdown-item  nav-item nav-link" >Invoice</a>
                                    <a href="{{ url('our_service/ais/Courier') }}" class="dropdown-item  nav-item nav-link" >Courier</a>
                                    <a href="{{ url('our_service/ais/Challan') }}" class="dropdown-item  nav-item nav-link" >Challan</a>
                                    <a href="{{ url('our_service/ais/Inventory') }}" class="dropdown-item  nav-item nav-link" >Inventory</a>
                                    <a href="{{ url('our_service/ais/Conveyance') }}" class="dropdown-item  nav-item nav-link" >Conveyance</a>
                                </div>
                            </div>
                            <div class="dropdown-submenu navbar-nav wow zoomIn">
                                <a href="{{ url('our_service/hcm/hcm') }}" class="dropdown-item  nav-item nav-link  " >Human Capital Management</a>
                                <div class="dropdown-menu wow zoomIn">
                                    <a href="{{ url('our_service/hcm/Employee') }}" class="dropdown-item  nav-item nav-link" >Employee</a>
                                    <a href="{{ url('our_service/hcm/Salary & Wages') }}" class="dropdown-item  nav-item nav-link" >Salary & Wages</a>
                                    <a href="{{ url('our_service/hcm/Task Manager') }}" class="dropdown-item  nav-item nav-link" >Task Manager</a>
                                    <a href="{{ url('our_service/hcm/Attendance') }}" class="dropdown-item  nav-item nav-link" >Attendance</a>
                                    <a href="{{ url('our_service/hcm/Deduction') }}" class="dropdown-item  nav-item nav-link" >Deduction</a>
                                    <a href="{{ url('our_service/hcm/Recruitment') }}" class="dropdown-item  nav-item nav-link" >Recruitment</a>
                                    <a href="{{ url('our_service/hcm/Aptitude') }}" class="dropdown-item  nav-item nav-link" >Aptitude</a>
                                </div>
                            </div>
                            <div class="dropdown-submenu navbar-nav wow zoomIn">
                                <a href="{{ url('our_service/plm/plm')}}" class="dropdown-item  nav-item nav-link  " >Product Lifecycle Management</a>
                                <div class="dropdown-menu wow zoomIn">
                                    <a href="{{ url('our_service/plm/Style') }}" class="dropdown-item  nav-item nav-link" >Style</a>
                                    <a href="{{ url('our_service/plm/Budget') }}" class="dropdown-item  nav-item nav-link" >Budget</a>
                                    <a href="{{ url('our_service/plm/T&A') }}" class="dropdown-item  nav-item nav-link" >T&A</a>
                                    <a href="{{ url('our_service/plm/Production') }}" class="dropdown-item  nav-item nav-link" >Production</a>
                                    <a href="{{ url('our_service/plm/IE') }}" class="dropdown-item  nav-item nav-link" >IE</a>
                                    <a href="{{ url('our_service/plm/Log') }}" class="dropdown-item  nav-item nav-link" >Log</a>
                                    <a href="{{ url('our_service/plm/Design')}}" class="dropdown-item  nav-item nav-link" >Design</a>
                                </div>
                            </div>
                            <div class="dropdown-submenu navbar-nav wow zoomIn">
                                <a href="{{ url('our_service/scm/scm') }}" class="dropdown-item  nav-item nav-link  " > Supply Chain Management</a>
                                <div class="dropdown-menu wow zoomIn">
                                    <a href="{{url('our_service/scm/Commercial') }}" class="dropdown-item  nav-item nav-link" >Commercial</a>
                                    <a href="{{url('our_service/scm/Shipping Docs')}}" class="dropdown-item  nav-item nav-link" >Shipping Docs</a>
                                </div>
                            </div>
                    </div>
                </div>

                 <a href="{{ route('contact.website') }}" class="nav-item nav-link  {{ Route::currentRouteName() == 'contact.website' ? 'active' : '' }}">Contact</a>
                 <a href="{{ route('blog.website') }}" class="nav-item nav-link {{ in_array(Route::currentRouteName(), ['blog.website', 'blog.details']) ? 'active' : '' }}">Blogs</a>
            </div>
        </div>
    </nav>

    <script>
//         $('.dropdown-submenu a.').on("click", function(e){
//     if(!$(this).next('.dropdown-menu').is(':visible')){
//         $(this).next('.dropdown-menu').toggle();
//     }
//     e.stopPropagation();
//     e.preventDefault(); // Prevent closing dropdown on link click
// });

    </script>
