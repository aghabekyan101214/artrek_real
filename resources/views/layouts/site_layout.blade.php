<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> | Home Page</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Responsive stylesheet -->
    <link href="{{ asset('site/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('site/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('site/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/site/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('site/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('site/images/favicon.ico') }}" type="image/x-icon">
</head>
<body>
<?php
use App\Type;
$types = Type::all();
?>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    {{--<div class="header-fix" style="height: 90px; width: 100%;"></div>--}}
    <!--Main Header-->
    <header class="main-header sticky-header">
        <div class="container-fluid clearfix">
            <div class="logo">
                <figure style="font-size: 30px">
                    <!--<a href="index.html"><img src="images/logo.png" alt=""></a>-->
                    Լոգո
                </figure>
            </div>
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="current"><a href="/">Գլխավոր</a></li>
                        <li><a href="/about">Մեր Մասին</a></li>
                        <li class="dropdown"><a href="#">Տեսակներ</a>
                            <ul>
                                @foreach($types as $d)
                                    <li><a href="/banner-type/{{ $d->id }}">{{ $d->header }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="/news">Նորություններ</a></li>
                        <li><a href="contacts.html">Հետադարձ Կապ</a></li>
                    </ul>
                </div>
            </nav>
            <div class="link-button">
                <div class="search_option">
                    <span class="fa fa-phone"> (+374 99) 99 06 53</span>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
<!--main-footer-->
    <footer class="footer-bottom">
        <div class="container clearfix">
            <div class="left-side pull-left">
                <a href="index.html">Digency.</a>
            </div>
            <div class="copyright-text pull-right">
                <p>&copy; 2018 All Right Reserved</p>
            </div>
        </div>
    </footer>
    <!--End main-footer-->
</div>
<script src="{{ asset('site/js/jquery.js') }}"></script>
<script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('site/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('site/js/jquery.fancybox-media.js') }}"></script>
<script src="{{ asset('site/js/html5lightbox.js') }}"></script>
<script src="{{ asset('site/js/isotope.js') }}"></script>


<!--Revolution Slider-->
<script src="{{ asset('site/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('site/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('site/js/main-slider-script.js') }}"></script>
<script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/js/validate.js') }}"></script>
<script src="{{ asset('site/js/wow.js') }}"></script>
<script src="{{ asset('site/js/jquery.appear.js') }}"></script>
<script src="{{ asset('site/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('site/js/script.js') }}"></script>
</body>
</html>
