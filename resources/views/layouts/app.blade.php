<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}" type="text/css">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-slider.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" id="switcher-css" type="text/css" href="{{ asset('assets/switcher/css/switcher.css') }}"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/red.css') }}" title="red"
        media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/orange.css') }}" title="orange"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/blue.css') }}" title="blue"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/pink.css') }}" title="pink"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/green.css') }}" title="green"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/css/purple.css') }}"
        title="purple" media="all" />
    <link rel="icon" href="{{ asset('assets/images/favicon-icon/icon logo-01 144.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>

    <!--Header-->
    @include('includes/header')
    <!-- /Header -->


    @yield('content')


    <!--Footer -->
    @include('includes/footer')
    <!-- /Footer-->

    <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>
    </div>
    <!--/Back to top-->

    <!--Login-Form -->
    @include('includes/login')
    <!--/Login-Form -->

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/interface.js') }}"></script>
    <!--Switcher-->
    <script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>
    <!--bootstrap-slider-JS-->
    <script src="{{ asset('assets/js/bootstrap-slider.min.js') }}"></script>
    <!--Slider-JS-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

</body>

</html>
