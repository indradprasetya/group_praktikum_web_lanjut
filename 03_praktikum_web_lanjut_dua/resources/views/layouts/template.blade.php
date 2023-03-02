<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- 
    Stone Template
    http://www.templatemo.com/preview/templatemo_452_stone
    -->
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href=" {{ asset('css/font-awesome.min.css') }}">
    
    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/normalize.min.css') }}">

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">


</head>
<body  class="loading">
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- HEADER -->
    <div class="site-header">
      @include('layouts.header')
    </div> <!-- .site-header -->


    <!-- SLIDER -->
    <div class="site-slider">
        <div class="flexslider">
            <ul class="slides">
                <li class="slide">
                    <div class="overlay"></div>
                    <img src="{{ asset('images/slide1.jpg') }}" alt="">
                    <div class="slider-caption">
                        <div class="title">
                            <h2>WEB DESIGN</h2>
                            <h2>INSPIRATION</h2>
                        </div>
                        <a href="#" class="slider-button">Download</a>
                    </div>
                </li>
                <li class="slide">
                    <div class="overlay"></div>
                    <img src="{{ asset('images/slide2.jpg') }}" alt="">
                    <div class="slider-caption">
                        <div class="title">
                            <h2>DEVELOPMENT</h2>
                            <h2>TEMPLATEMO</h2>
                        </div>
                        <a href="#" class="slider-button">Read More</a>
                    </div>
                </li>
            </ul>
        </div>   
    </div> <!-- .site-slider -->

    <!-- CONTENT -->
    <div class="content">
      @include('layouts.content')
    </div>   

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social">
                        <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                        <li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
                        <li class="rss"><a href="#" class="fa fa-rss"></a></li>
                        <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                    <p>Copyright &copy; 2084 Company Name</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.10.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>    
    
</body>
</html>