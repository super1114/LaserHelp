<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laser Help</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="assets/images/icon.png">
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic" rel="stylesheet" type="text/css">
        <!--Bootstrap-->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <!--font Awesome-->
        <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
        <!--slider-->
        <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
        <!--PrettyPhoto-->
        <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
        <!--main file-->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <!--Responsive file-->
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>
            <!--Start Header-->
            <header>
                <div class="header_bottom home1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12">
                                <div class="logo">
                                    <a href=""><h2 class="heading_a">Laser <span>Help</span></h2></a>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-9 col-lg-9 text-right">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="{{route('home')}}" class="active">Home</a>
                                        </li>
                                        <li >
                                            <a href="{{route('customers')}}">For Customers</a>
                                        </li>
                                        <li >
                                            <a href="{{route('customers')}}" class="">For Providers</a>
                                        </li>
                                        <li><a href="{{route('home')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--End Header-->
            <!--Responsive Nav-->
            <div class="responsive_button">
                <p>Home</p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""><i class="fa fa-bars"></i></span>
                </button>
            </div>
            <div class="responsive_nav collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('customers')}}">For Customers</a></li>
                    <li><a href="{{route('providers')}}">For Providers</a></li>
                </ul>
            </div>
        </div>
        <!--Responsive Nav-->
        <!--Start Slider-->
        <div class="main_slider owl-carousel owl-theme seaction_margin">
            <div class="item">
                <img src="https://via.placeholder.com/1920x860" alt="img" />
                <div class="slide_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h3>Making the best journey in laser help</h3>
                                <h1>We are the best laser help<br/>
                                    maintenance company </h1>
                                <a href="{{route('customers')}}" class="button">Get help from provider</a> 
                                <a href="{{route('providers')}}" class="button">Want to help customers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Slider-->
        <!--Start About-->
        <div class="about seaction_margin">
            <div class="container">
                <div class="heading_wrap animated fades">
                    <h2 class="heading_a">About <span>Laser Help</span></h2>
                    <h5 class="heading_small">Lorem ipsum dolor sit amet consectetur adipisicing elit sed ipsum eiusmod tempor <br />
                        incididunt utsmat labore et dolore magna aliqua.
                    </h5>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div class="icon_box animated fades">
                            <img src="assets/images/icons/top_icon1.png" alt="img" />
                            <h4>Cerfified Workers</h4>
                        </div>
                        <div class="icon_box animated fades">
                            <img src="assets/images/icons/top_icon3.png" alt="img" />
                            <h4>Honest & Realiable</h4>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 content about_content animated fades">
                        <p>Ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt sed laboret dolore magna aliquat enim ad minim veniam nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <p>Duis aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nula pariatur. Excepteur sint occaecat cupidatat non proidentera sunt culpa officia deserunt mollit anim est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam ipsa.</p>
                        <a href="#" class="button brdr">What we offers</a>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="icon_box animated fades">
                            <img src="assets/images/icons/top_icon2.png" alt="img" />
                            <h4>10+ Years Expertise</h4>
                        </div>
                        <div class="icon_box animated fades">
                            <img src="assets/images/icons/top_icon4.png" alt="img" />
                            <h4>24h Free Helpline</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End About-->
        <!--Start Services-->
        <div class="services_wrap seaction_margin">
            <div class="container">
                <div class="heading_wrap animated slide">
                    <h2 class="heading_a">Our <span>Services</span></h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon1.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh1.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>Landscape Caring</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon2.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh2.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>Watering Gardens</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon3.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh3.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>New Trees Planting</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon4.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh4.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>Rubbbish Cleanup</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon5.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh5.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>Lawn Moving</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 animated slide">
                        <div class="service">
                            <img src="https://via.placeholder.com/555x235" alt="img" />
                            <div class="service_content">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2 icon">
                                        <img src="assets/images/icons/icon6.png" class="icon_one" alt="img" />
                                        <img src="assets/images/icons/iconh6.png" class="icon_one icon_two" alt="img" />
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                        <h3>Design & Planning</h3>
                                        <p>Abore et dolore magna aliqua ut enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                        </p>
                                        <a href="services.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Services-->
        <!--Start Testimonials -->
        <div class="testimonials_wrap  animated slide">
            <div class="testimonials_inner">
                <div class="container">
                    <div class="heading_wrap">
                        <h2 class="heading_a">What <span>customers say</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <a href="#" class="left"><i class="fa fa-long-arrow-left"></i></a>
                            <a href="#" class="right"><i class="fa fa-long-arrow-right"></i></a>
                            <div class="testi_slider">
                                <div class="slide">
                                    <p>Enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderite voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sind occaecat cupidatat non proident sunt culpa officia.
                                    </p>
                                    <div class="user_botom">
                                        <img src="https://via.placeholder.com/56x56" alt="img" />
                                        <span> Kenn Thomson <cite>Garden Owner</cite></span>
                                    </div>
                                </div>
                                <div class="slide">
                                    <p>Enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderite voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sind occaecat cupidatat non proident sunt culpa officia.
                                    </p>
                                    <div class="user_botom">
                                        <img src="https://via.placeholder.com/56x56" alt="img" />
                                        <span> Kenn Thomson <cite>Garden Owner</cite></span>
                                    </div>
                                </div>
                                <div class="slide">
                                    <p>Enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderite voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sind occaecat cupidatat non proident sunt culpa officia.
                                    </p>
                                    <div class="user_botom">
                                        <img src="https://via.placeholder.com/56x56" alt="img" />
                                        <span> Kenn Thomson <cite>Garden Owner</cite></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5">
                            <div class="testi_img">
                                <img src="https://via.placeholder.com/813x636" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Testimonials -->
        <!--Start News -->
        <div class="news_wrap seaction_margin">
            <div class="container">
                <div class="heading_wrap">
                    <h2 class="heading_a">Our <span>Providers</span></h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 animated slide">
                        <div class="news">
                            <figure>
                                <a href="#"><img src="https://via.placeholder.com/360x300" alt="img"></a>
                                <span class="date">25 <cite>April</cite></span>
                            </figure>
                            <div class="content">
                                <h5>clients, case-study</h5>
                                <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                        eiusmod temp incididunt</a></h3>
                                <a href="services.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 animated slide">
                        <div class="news">
                            <figure>
                                <a href="#"><img src="https://via.placeholder.com/360x300" alt="img"></a>
                                <span class="date">25 <cite>April</cite></span>
                            </figure>
                            <div class="content">
                                <h5>clients, case-study</h5>
                                <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                        eiusmod temp incididunt</a></h3>
                                <a href="services.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 animated slide">
                        <div class="news">
                            <figure>
                                <a href="#"><img src="https://via.placeholder.com/360x300" alt="img"></a>
                                <span class="date">25 <cite>April</cite></span>
                            </figure>
                            <div class="content">
                                <h5>clients, case-study</h5>
                                <h3><a href="#">Dolor sit amet adipis slcin elit sed
                                        eiusmod temp incididunt</a></h3>
                                <a href="services.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End News -->
        <footer>
            <div class="container animated slide">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <p>Copyrights 2021 <strong>Laser Help</strong> • All Rights Reserved.</p>
                    </div>
                    <div class="col-md-4 col-sm-12 text-right">
                        
                    </div>
                </div>
            </div>
        </footer>
        <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Jquery Ui -->
        <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
        <!-- Slider -->
        <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
        <!-- Isotope -->
        <script src="{{ asset('assets/js/isotope-docs.min.js') }}"></script>
        <!-- PrettyPhoto -->
        <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
        <!-- Parallax -->
        <script src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
        <!-- Slider -->
        <script src="{{ asset('assets/js/jquery.cycle.all.js') }}"></script>
        <!-- Appear -->
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <!-- Custom -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        
    </body>
</html>
