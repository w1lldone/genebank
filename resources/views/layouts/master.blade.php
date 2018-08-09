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
    <link rel="stylesheet" href={{ url("css/font-awesome.min.css") }}>

    <!--Animated CSS-->
    <link rel="stylesheet" type="text/css" href={{ url("css/animate.min.css") }}>

    <!-- Bootstrap -->
    <link href={{ url("css/bootstrap.min.css") }} rel="stylesheet">
    <!--Bootstrap Carousel-->
    <link type="text/css" rel="stylesheet" href={{ url("css/carousel.css") }} />

    <link rel="stylesheet" href={{ url("css/isotope/style.css") }}>

    <!--Main Stylesheet-->
    <link href={{ url("css/style.css") }} rel="stylesheet">
    
    <!--Responsive Framework-->
    <link href={{ url("css/responsive.css") }} rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script type="text/javascript">
        window.env = {
            apiToken: '{{ env('API_TOKEN_DEVELOPMENT') }}',
            baseUrl: '{{ env('APP_URL') }}',
        }
    </script>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @yield('script')

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body data-spy="scroll" data-target="#header">
    <div id="app">
        @yield('navigation')
        @yield('content')
    </div>
    <script src={{ url("js/jquery-1.12.3.min.js") }}></script>

    <!--Counter UP Waypoint-->
    <script src={{ url("js/waypoints.min.js") }}></script>
    <!--Counter UP-->
    <script src={{ url("js/jquery.counterup.min.js") }}></script>

    <script>
        //for counter up
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    </script>


    <!--Isotope-->
    <script src={{ url("js/isotope/min/scripts-min.js") }}></script>
    <script src={{ url("js/isotope/cells-by-row.js") }}></script>
    <script src={{ url("js/isotope/isotope.pkgd.min.js") }}></script>
    <script src={{ url("js/isotope/packery-mode.pkgd.min.js") }}></script>
    <script src={{ url("js/isotope/scripts.js") }}></script>


    <!--Back To Top-->
    <script src={{ url("js/backtotop.js") }}></script>


    <!--JQuery Click to Scroll down with Menu-->
    <script src={{ url("js/jquery.localScroll.min.js") }}></script>
    <script src={{ url("js/jquery.scrollTo.min.js") }}></script>
    <!--WOW With Animation-->
    <script src={{ url("js/wow.min.js") }}></script>
    <!--WOW Activated-->
    <script>
        new WOW().init();
    </script>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src={{ url("js/bootstrap.min.js") }}></script>
    <!-- Custom JavaScript-->
    <script src={{ url("js/main.js") }}></script>
</body>
</html>
