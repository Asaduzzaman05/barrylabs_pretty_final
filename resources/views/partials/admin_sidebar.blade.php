<style>
    .dropdown-submenu {
        position: relative;

    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 60%;
        z-index: 1;
        margin-top: -1px;
        display: none !important;
        background-color: rgb(248, 242, 242);
    }

    .dropdown-submenu:hover .dropdown-menu {
        display: block !important;

    }
    </style>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
                @php
                    $prefix = Request::route()->getPrefix();
                    $route = Route::current()->getName();
                @endphp
            <div class="nav">
                <a class="nav-link  {{($route == 'admin.index')?'active':''}}" href="{{ route('admin.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color: green"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-chevron-right" aria-hidden="true" style="color: orange"></i></div>
                    Utilites
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        {{-- <a class="nav-link {{($route == 'photo.index')?'active':''}}" href="{{ route('photo.index') }}"><i class="fas fa-angle-right"></i>&nbsp;Photo Gallery</a> --}}
                        <a class="nav-link {{($route == 'slider.create')?'active':''}}" href="{{ route('slider.create') }}"><i class="fas fa-angle-right"></i>&nbsp;Slider</a>
                        <a class="nav-link {{($route == 'client.index')?'active':''}}" href="{{ route('client.index') }}"><i class="fas fa-angle-right"></i>&nbsp;Client</a>
                        <a class="nav-link {{($route == 'counter.index')?'active':''}}" href="{{ route('counter.index') }}"><i class="fas fa-angle-right"></i>&nbsp;Counter</a>
                        <a class="nav-link {{($route == 'management.index')?'active':''}}" href="{{ route('management.index') }}"><i class="fas fa-angle-right"></i>&nbsp;Management</a>
                        <a class="nav-link {{($route == 'service.index')?'active':''}}" href="{{ route('service.index') }}"><i class="fas fa-angle-right"></i>&nbsp;Products</a>
                        {{-- <a class="nav-link {{($route == 'service.index')?'':''}}" href="{{ route('service.index') }}"><i class="fas fa-angle-right"></i>&nbsp;Service</a> --}}
                        <div class="nav-item dropdown">
                            <a href="{{ route('service.website') }}"
                               class="nav-link dropdown-toggle"
                               data-bs-toggle="dropdown">Service</a>

                            <div class="dropdown-menu m-0">
                                    <div class="dropdown-submenu">
                                        <a href="{{route('admin-ais.index') }}" class="dropdown-item " >AIS</a>
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
                                        <a href="{{ route('admin-hcm.index') }}" class="dropdown-item " >HCM</a>
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
                                        <a href="{{ route('admin-plm.index') }}" class="dropdown-item " >PLM</a>
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
                                        <a href="{{ route('admin-scm.index') }}" class="dropdown-item " > SCM</a>
                                        <div class="dropdown-menu">
                                            <a href="product-detail.html" class="dropdown-item">Commercial</a>
                                            <a href="product-detail.html" class="dropdown-item">Shipping Docs</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <a class="nav-link {{($route == 'choose.index')?'':''}}" href="{{ route('choose.index') }}"><i class="fas fa-angle-right"></i>&nbsp;Why Choose</a>
                        <a class="nav-link {{($route == 'blog.index')?'':''}}" href="{{ route('blog.index') }}"><i class="fas fa-angle-right"></i>&nbsp;Blogs</a>
                        <a class="nav-link {{($route == 'message.list')?'':''}}" href="{{ route('message.list') }}"><i class="fas fa-angle-right"></i>&nbsp;Message</a>
                    </nav>
                </div>
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-sliders-h" style="color: blue"></i></div>
                    Administator
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{($route == 'company.profile')?'active':''}}" href="{{ route('company.profile') }}"><i class="fas fa-angle-right"></i>&nbsp;Company Profile</a>
                        <a class="nav-link {{($route == 'user.index')?'':''}}" href="{{ route('user.index') }}"><i class="fas fa-angle-right"></i>&nbsp;Add User</a>
                        <a class="nav-link {{($route == 'company.changepassword')?'':''}}" href="{{ route('user.changepassword') }}"><i class="fas fa-angle-right"></i>&nbsp;Setting</a>
                    </nav>
                </div>
                <a class="nav-link" href="{{route('logout')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt" style="color: red"></i></div>
                    Log Out
                </a>
            </div>
        </div>
    </nav>
</div>
