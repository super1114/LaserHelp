<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Customer:Laser Help</title>
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
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

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
                <div class="top_bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-3">
                                <a href="{{route('home')}}"><p><span style="font-size: 23px; font-style: italic;">LaserHelp</span> &nbsp;&nbsp;&nbsp; <span style="font-style: italic;">{{Auth::user()->type==1?"Customer":"Expert"}} Program</span></p></a>
                            </div>
                            
                            <div class="col-sm-12 col-md-12 col-lg-9 text-right">                            
                                <a href="{{ route('home') }}" class="top_btn" >Submit a Question</a>
                                <a href="{{ route('my_account') }}" class="top_btn">My Account</a>
                                <a href="{{ route('my_questions') }}" class="top_btn active_top_btn">My Questions</a>
                                <a href="{{ route('providers') }}" class="top_btn">Become a LaserHelp Expert</a>                                
                                
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
                    <li><a href="{{route('customers')}}">Submit Question</a></li>
                    <li><a href="{{route('providers')}}">Screenshare</a></li>
                    <li><a href="{{route('providers')}}">My profile</a></li>
                    <li><a href="">Billing account</a></li>
                    <li><a href="{{route('providers')}}">Logout</a></li>
                </ul>
            </div>
        </div>
        <!--Responsive Nav-->
        <!--Start Services-->
        <div class="services_wrap seaction_margin" style="padding-bottom: 500px; padding-top: 60px;">
            <div class="container">
                <div class="heading_wrap" style="margin-bottom:20px">
                    <h2 class="heading_a">My <span>Questions</span></h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 ">
                        <div class="service">
                            @forelse($questions as $question)
                            <div class="service_content mt-3">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <p>
                                            {{$question->question}}
                                        </p>
                                        <a href="{{$question->loom}}">Loom screen capture link</a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h3 class="text-center">You didn't submit any questions</h3>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Services-->
        <footer style="position: fixed; bottom: 0px; width: 100%;">
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
        <script src="{{ asset('js/me.js') }}"></script>
        
    </body>
</html>
