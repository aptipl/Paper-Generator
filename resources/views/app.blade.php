<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta charset="utf-8">
    <title>Paper Generator | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="admin template, admin dashboard, inbox template, calendar template, form validation">
    <meta name="author" content="DazeinCreative">
    <meta name="description" content="Administry - Massive Admin Dashboard Template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/logo-xs.png') }}" type="image/png">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dripicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/hover/hover-min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="standalone-page-wrapper image-background-1">

        @yield('content')
    </div>

    <!--Scripts-->
    <!--JQuery-->
    <script type="text/javascript" src="{{ asset('js/vendors/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors/jquery/jquery-ui.min.js') }}"></script>
    <!--Parsley-->
    <script type="text/javascript" src="{{ asset('js/vendors/parsley/parsley-config.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors/parsley/parsley.min.js') }}"></script>
    <!--Main App-->
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
