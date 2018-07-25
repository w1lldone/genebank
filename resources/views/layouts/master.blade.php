<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="api_token" content="{{ env('API_TOKEN_DEVELOPMENT') }}"> --}}
    <!--Fontawesom-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--Animated CSS-->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Bootstrap Carousel-->
    <link type="text/css" rel="stylesheet" href="css/carousel.css" />

    <link rel="stylesheet" href="css/isotope/style.css">

    <!--Main Stylesheet-->
    <link href="css/style.css" rel="stylesheet">
    <!--Responsive Framework-->
    <link href="css/responsive.css" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script type="text/javascript">
        window.env = {
            apiToken: '{{ env('API_TOKEN_DEVELOPMENT') }}',
            baseUrl: '{{ env('APP_BASE_URL') }}',
        }
    </script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('script')

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body data-spy="scroll" data-target="#header">
    <div id="app">
        @yield('navigation')
        @yield('content')
    </div>
    <script src="js/jquery-1.12.3.min.js"></script>

    <!--Counter UP Waypoint-->
    <script src="js/waypoints.min.js"></script>
    <!--Counter UP-->
    <script src="js/jquery.counterup.min.js"></script>

    <script>
        //for counter up
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    </script>


    <!--Isotope-->
    <script src="js/isotope/min/scripts-min.js"></script>
    <script src="js/isotope/cells-by-row.js"></script>
    <script src="js/isotope/isotope.pkgd.min.js"></script>
    <script src="js/isotope/packery-mode.pkgd.min.js"></script>
    <script src="js/isotope/scripts.js"></script>


    <!--Back To Top-->
    <script src="js/backtotop.js"></script>


    <!--JQuery Click to Scroll down with Menu-->
    <script src="js/jquery.localScroll.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <!--WOW With Animation-->
    <script src="js/wow.min.js"></script>
    <!--WOW Activated-->
    <script>
        new WOW().init();
    </script>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom JavaScript-->
    <script src="js/main.js"></script>
</body>
</html>
