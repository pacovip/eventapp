<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Open Graph Meta -->
        <meta property="og:title" content="">
        <meta property="og:site_name" content="Event">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Title -->
        <title>@yield('title')</title>

        <!-- Favicon -->
        <link rel="icon" href="{{asset('./assets/img/core-img/favicon.png')}}">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('assets/style.css')}}">

    </head>
    

    <body>
        
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->

        <!-- Header Area Start -->
        <header class="header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="conferNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html"><img src="{{asset('./assets/img/core-img/logo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">- Home</a></li>
                                            <li><a href="about.html">- About Us</a></li>
                                            <li><a href="speakers.html">- Speakears</a></li>
                                            <li><a href="schedule.html">- Schedule</a></li>
                                            <li><a href="tickets.html">- Tickets</a></li>
                                            <li><a href="blog.html">- Blog</a></li>
                                            <li><a href="single-blog.html">- Single Blog</a></li>
                                            <li><a href="contact.html">- Contact</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="speakers.html">Speakears</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Account Button -->
                                @if (Route::has('login'))
                                        @auth
                                            <a href="{{ url('/compte') }}" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Mon compte <i class="zmdi zmdi-long-arrow-right"></i></a> 
                                        @else
                                            <a href="{{ route('login') }}" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5"><i class="zmdi zmdi-account"></i></a>                                            
                                        @endauth
                                    
                                @endif
                                
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Header Area End -->
        
        
        <div id="page-container">
            <!-- Side Overlay-->
            @yield('content')
        </div>
        
        
        <!-- Footer Area Start -->
        <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
            <!-- Main Footer Area -->
            <div class="main-footer-area">
                <div class="container">
                    <div class="row">
                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                                <!-- Footer Logo -->
                                <a href="#" class="footer-logo"><img src="{{asset('assets/img/core-img/logo.png')}}" alt=""></a>
                                <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain.</p>

                                <!-- Social Info -->
                                <div class="social-info">
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                                <!-- Widget Title -->
                                <h5 class="widget-title">Contact</h5>

                                <!-- Contact Area -->
                                <div class="footer-contact-info">
                                    <p><i class="zmdi zmdi-map"></i> 184 Main Collins Street</p>
                                    <p><i class="zmdi zmdi-phone"></i> (226) 446 9371</p>
                                    <p><i class="zmdi zmdi-email"></i> confer@gmail.com</p>
                                    <p><i class="zmdi zmdi-globe"></i> www.confer.com</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                                <!-- Widget Title -->
                                <h5 class="widget-title">Workshops</h5>

                                <!-- Footer Nav -->
                                <ul class="footer-nav">
                                    <li><a href="#">OSHA Compliance</a></li>
                                    <li><a href="#">Microsoft Excel Basics</a></li>
                                    <li><a href="#">Forum Speaker Series</a></li>
                                    <li><a href="#">Tedx Moscow Conference</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                                <!-- Widget Title -->
                                <h5 class="widget-title">Gallery</h5>

                                <!-- Footer Gallery -->
                                <div class="footer-gallery">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="{{asset('assets/img/bg-img/21.jpg')}}" class="single-gallery-item"><img src="{{asset('assets/img/bg-img/21.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="col-4">
                                            <a href="{{asset('assets/img/bg-img/22.jpg')}}" class="single-gallery-item"><img src="{{asset('assets/img/bg-img/22.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="col-4">
                                            <a href="{{asset('assets/img/bg-img/23.jpg')}}" class="single-gallery-item"><img src="{{asset('assets/img/bg-img/23.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="col-4">
                                            <a href="{{asset('assets/img/bg-img/24.jpg')}}" class="single-gallery-item"><img src="{{asset('assets/img/bg-img/24.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="col-4">
                                            <a href="{{asset('assets/img/bg-img/25.jpg')}}" class="single-gallery-item"><img src="{{asset('assets/img/bg-img/25.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="col-4">
                                            <a href="{{asset('assets/img/bg-img/26.jpg')}}" class="single-gallery-item"><img src="{{asset('assets/img/bg-img/26.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copywrite Area -->
            <div class="container">
                <div class="copywrite-content">
                    <div class="row">
                        <!-- Copywrite Text -->
                        <div class="col-12 col-md-6">
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <!-- Footer Menu -->
                        <div class="col-12 col-md-6">
                            <div class="footer-menu">
                                <ul class="nav">
                                    <li><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- Popper -->
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- All Plugins -->
        <script src="{{asset('assets/js/confer.bundle.js')}}"></script>
        <!-- Active -->
        <script src="{{asset('assets/js/default-assets/active.js')}}"></script>

    </body>
</html>
