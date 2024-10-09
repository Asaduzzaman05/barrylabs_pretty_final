<style>
    /* Custom styles for submenu */
.dropdown-submenu {
    position: relative;

}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: -65%; /* Position submenu to the right of the parent */
    margin-top: -1px;
    display: none;
}

.dropdown-submenu:hover .dropdown-menu {
    display: block;
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
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->twitter }}">
            <i class="fab fa-twitter fw-normal"></i>
          </a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->facebook }}">
            <i class="fab fa-facebook-f fw-normal"></i>
          </a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->linkedin }}">
            <i class="fab fa-linkedin-in fw-normal"></i>
          </a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $content->instagram }}">
            <i class="fab fa-instagram fw-normal"></i>
          </a>
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
                            <div class="dropdown-submenu">
                                <a href="{{ route('scm') }}" class="dropdown-item " > Supply Chain Management</a>
                                <div class="dropdown-menu">
                                    <a href="product-detail.html" class="dropdown-item">Commercial</a>
                                    <a href="product-detail.html" class="dropdown-item">Shipping Docs</a>
                                </div>
                            </div>
                    </div>
                </div>

                 <a href="{{ route('contact.website') }}" class="nav-item nav-link  {{ Route::currentRouteName() == 'contact.website' ? 'active' : '' }}">Contact</a>
                 <a href="{{ route('blog.website') }}" class="nav-item nav-link  {{ Route::currentRouteName() == 'blog.website' ? 'active' : '' }}">Blogs</a>
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
