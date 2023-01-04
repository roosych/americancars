<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>American Cars | İdarə paneli</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('icon/favicon-32x32.png')}}">
    <!-- Start css -->
    <link href="{{asset('ap/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('ap/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('ap/assets/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    @stack('styles')
    <link href="{{asset('ap/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">

<!-- Start Containerbar -->
<div id="containerbar">
    <!-- Start Leftbar -->
    <div class="leftbar">
        <!-- Start Sidebar -->
        <div class="sidebar">
            <!-- Start Logobar -->
            <div class="logobar">
                <a href="{{route('dashboard')}}" class="logo logo-large"><img src="{{asset('ap/assets/images/admin-logo.jpg')}}" class="img-fluid" alt="logo" style="width: 100px"></a>
            </div>
            <!-- End Logobar -->
            <!-- Start Navigationbar -->
            <div class="navigationbar">
                <ul class="vertical-menu">
                    <li>
                        <a href="javaScript:void();">
                            <i class="ri-dashboard-line"></i><span>Kataloq</span><i class="ri-arrow-right-s-line"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{route('brands')}}">Brendlər</a></li>
                            <li><a href="{{route('carmodels')}}">Modellər</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void();">
                            <i class="ri-car-fill"></i><span>Avtomobillər</span><i class="ri-arrow-right-s-line"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{route('car.add')}}">Yeni avtomobil</a></li>
                            <li><a href="{{route('cars')}}">Bütün avtomobillər</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javaScript:void();">
                            <i class="ri-settings-4-line"></i><span>Tənzimləmələr</span><i class="ri-arrow-right-s-line"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><a href="{{route('fuels')}}">Yanacaq növləri</a></li>
                            <li><a href="{{route('transmissions')}}">Sürətlər qutuları</a></li>
                            <li><a href="{{route('drives')}}">Ötürücü növləri</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="ri-user-3-line"></i><span>İstifadəçilər</span></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('settings.index')}}">
                            <i class="ri-information-line"></i><span>Məlumatlar</span></i>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- End Navigationbar -->
        </div>
        <!-- End Sidebar -->
    </div>
    <!-- End Leftbar -->
    <!-- Start Rightbar -->
    <div class="rightbar">
        <!-- Start Topbar Mobile -->
        <div class="topbar-mobile">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="mobile-logobar">
                        <a href="{{route('dashboard')}}" class="mobile-logo"><img src="{{asset('ap/assets/images/admin-logo.jpg')}}" class="img-fluid" alt="logo" style="width: 90px;"></a>
                    </div>
                    <div class="mobile-togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="topbar-toggle-icon">
                                    <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <span class="iconbar">
                                                <i class="ri-more-fill menu-hamburger-horizontal"></i>
                                                <i class="ri-more-2-fill menu-hamburger-vertical"></i>
                                            </span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <span class="iconbar">
                                            <i class="ri-menu-2-line menu-hamburger-collapse"></i>
                                            <i class="ri-close-line menu-hamburger-close"></i>
                                        </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Topbar -->
        <div class="topbar">
            <!-- Start row -->
            <div class="row align-items-center">
                <!-- Start col -->
                <div class="col-md-12 align-self-center">
                    <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <span class="iconbar">
                                            <i class="ri-menu-2-line menu-hamburger-collapse"></i><i class="ri-close-line menu-hamburger-close"></i>
                                        </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="infobar">
                        <ul class="list-inline mb-0">

                            <li class="list-inline-item">
                                <div class="profilebar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="live-icon">{{ Auth::user()->name }}</span></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">

                                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ri-shut-down-line"></i>Çıxış</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End Topbar -->
        <div class="breadcrumbbar"></div>
        <!-- Start Contentbar -->
        <div class="contentbar">

            @yield('content')

        </div>
        <!-- End Contentbar -->
        <!-- Start Footerbar -->
        <div class="footerbar">
            <footer class="footer">
                <p class="mb-0">© {{now()->year}} American Cars</p>
            </footer>
        </div>
        <!-- End Footerbar -->
    </div>
    <!-- End Rightbar -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src="{{asset('ap/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('ap/assets/js/popper.min.js')}}"></script>
<script src="{{asset('ap/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('ap/assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('ap/assets/js/detect.js')}}"></script>
<script src="{{asset('ap/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('ap/assets/js/vertical-menu.js')}}"></script>
<!-- Core js -->
<script src="{{asset('ap/assets/js/core.js')}}"></script>
<!-- End js -->
@stack('scripts')
</body>

</html>