<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Customer | Laser Help</title>
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
                <div class="header_bottom home1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12">
                                <div class="logo">
                                    <a href=""><img src="{{asset('2.png')}}" style="height: 75%;width: 75%;"></a>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-9 col-lg-9 text-right">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="{{route('welcome')}}" class="active">Submit a Question</a>
                                        </li>
                                        <li >
                                            <a href="{{route('providers')}}">Become a LaserHelp Expert</a>
                                        </li>
                                        <li >
                                            @auth
                                            <a href="{{route('logout')}}" class="">Logout</a>
                                            @else
                                            <a href="{{route('login')}}" class="">Login</a>
                                            @endauth
                                        </li>
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
                    <li><a href="{{route('customers')}}">Submit Question</a></li>
                    <li><a href="{{route('providers')}}">Become a LaserHelp Expert</a></li>
                    <li >
                        @auth
                        <a href="{{route('logout')}}" class="">Logout</a>
                        @else
                        <a href="{{route('login')}}" class="">Login</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
        <!--Responsive Nav-->
        <!--Start Quote-->
        <div class="qoute_wrap seaction_margin  animated entrance">
            <div class="layer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2"></div>
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            <div class="qoute">
                                <div class="heading_wrap" style="margin-bottom: 10px;">
                                    <h2 class="heading_a">Get Instant Quote</h2>
                                    <h5 class="heading_small">Use <a href="https://www.loom.com" target="_blank" style="color:#7da500">Loom</a> to screencapture your question</h5>
                                </div>
                                <form action="{{route('submit_question')}}" method="post" id="queston_form" class="row">
                                    @csrf
                                    <div class="col-sm-12 col-md-12">
                                        <input type="text" class="form-control" placeholder="Paste a link to your loom recordig here" name="loom" id="loom" />
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-12">
                                        <textarea name="question" placeholder="How can we help?" class="form-control" id="question" rows="7"></textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <span style="color: #7da500; cursor: pointer;" class="heading_small" id="attach_file">Attach file</span>
                                    </div>
                                    <input type="file" name="file" id="file" style="display: none;">
                                    <input type="text" name="categories" id="categories" style="display: none;">
                                    <div class="col-sm-12 col-md-12">
                                        <span style="color: #fff; cursor: pointer;" class="heading_small" id="selected_files"></span>
                                    </div>
                                    <div class="col-sm-12 col-md-12 text-center">
                                        <span class="heading_small">Select all niches that apply</span>
                                    </div>
                                    <div class="col-sm-12 col-md-12 mt-2 niches_container" style="display:flex;">
                                        <button type="button" class="niche" data-id="1">VFX</button>
                                        <button type="button" class="niche" data-id="2">Code</button>
                                        <button type="button" class="niche" data-id="3">Programming</button>
                                        <button type="button" class="niche" data-id="4">Blender</button>
                                        <button type="button" class="niche" data-id="5">After Effect</button>
                                        <button type="button" class="niche" data-id="6">Photoshop</button>
                                    </div>
                                    <div class="col-sm-4 col-md-4"></div>
                                    <div class="col-sm-4 col-md-6 mt-4">
                                        <input type="submit" class="button" value="Submit Question" id="submit_btn" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Start News -->
        <div class="news_wrap seaction_margin">
            <div class="container">
                <div class="heading_wrap">
                    <h2 class="heading_a">Our <span>Experts</span></h2>
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
        
        <script type="text/javascript">
            var register_link = "{{ route('register') }}";
            var myquestions_link = "{{ route('my_questions') }}";
        </script>
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
