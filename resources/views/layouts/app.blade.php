<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lifesafe Insurance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/icon.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('venobox/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dropdown.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    
</head>

<body>

<header class="header-area" id="sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo">
                    <a href="{{ url('/home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="header-menu">
                    <ul>
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="{{ url('/catalog') }}">Catalog</a></li>

                        <li><a href="#">Pages <i class="bi bi-plus"></i></a>
                            <div class="sub-menu">
                                <ul>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Project Grid</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="/contact">Contact Us</a></li>
                    </ul>

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#"><i class="bi bi-search"></i></a>
                        </div>
                        <div class="Lifesafe-btn">
                            <a href="#">Monitor Your Order Status</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>


@yield('content')

<!-- JS -->
<script src="{{ asset('assets/js/vendor/jquery-3.6.2.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>


</body>
</html>
