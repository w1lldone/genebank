<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ env('APP_NAME') }} - Administration</title>

    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> --}}

    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">

  </head>

  <body id="page-top">

    @yield('layout')
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript">
        window.env = {}
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ mix('js/admin.js') }}"></script>
    {{-- <script src="{{ url('js/toastr.min.js') }}"></script> --}}

  </body>

</html>
