<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Paper Generator | {{ $title or 'Back Office' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="admin template, admin dashboard, inbox template, calendar template, form validation">
    <meta name="author" content="DazeinCreative">
    <meta name="description" content="Administry - Massive Admin Dashboard Template">
    <link rel="shortcut icon" href="{{  asset("images/logo-xs.png") }}" type="image/png">
    <link href="{{  asset("css/overlay-effects/overlay-effects.css") }}" rel="stylesheet" type="text/css">
    <link href="{{  asset("css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{  asset("css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{  asset("css/dripicons.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{  asset("css/animate/animate.css") }}" rel="stylesheet" type="text/css">
    <link href="{{  asset("css/hover/hover-min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{  asset("css/styles.css") }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{  asset("js/vendors/jquery/jquery.min.js") }}"></script>
</head>

<body>
    <div class="wrapper">
        @include('include.header')
        @include('include.menu')
        @yield('content')
        <!--Bottom Bar-->
        <nav class="bottom-bar">
            <button class="btn scrollToTop pull-right" data-tooltip="tooltip" data-placement="top" title="To Top"><i class="dripicons-arrow-up"></i></button>
            <!--/Clear LocalStorage-->
        </nav>
        <!--/Bottom Bar-->

    </div>
    <!-- /#wrapper -->


    <!--Scripts-->
    <!--Main - Used on every Administry page-->
    <!--jQuery and jQuery UI-->
    <script type="text/javascript" src="{{ asset("js/vendors/jquery/jquery-ui.min.js") }}"></script>
    <!--BootStrap-->
    <script type="text/javascript" src="{{ asset("js/vendors/bootstrap/bootstrap.min.js") }}"></script>
    <!--Widgets-->
    <script type="text/javascript" src="{{ asset("js/vendors/oakenwidgets/jquery.oakenwidgets.min.js") }}"></script>
    <!--Metis Menu-->
    <script type="text/javascript" src="{{ asset("js/vendors/metismenu/metisMenu.min.js") }}"></script>
    <!--Sparkline Charts-->
    <script type="text/javascript" src="{{ asset("js/vendors/sparkline/jquery.sparkline.min.js") }}"></script>
    <!--Modal Animation-->
    <script type="text/javascript" src="{{ asset("js/vendors/bootstrap-modal-animation/animation.js") }}"></script>
    <!--MomentJS-->
    <script type="text/javascript" src="{{ asset("js/vendors/moment/moment.min.js") }}"></script>
    <!--/Main - Used on every Administry page-->

   
    <!--Sparkline Charts-->
    <script type="text/javascript" src="{{  asset("js/vendors/sparkline/sparklines-examples.js") }}"></script>
    <!--/Scripts-->
    <!--Jasny Masking-->
    <script type="text/javascript" src="{{  asset("js/vendors/jasny/jasny-bootstrap.min.js") }}"></script>
    <!--Parsley-->
    <script type="text/javascript" src="{{  asset("js/vendors/parsley/parsley-config.js") }}"></script>
    <script type="text/javascript" src="{{  asset("js/vendors/parsley/parsley.min.js") }}"></script>
    <script type="text/javascript" src="{{  asset("js/vendors/parsley/comparison.js") }}"></script>
    
    <!--Main App-->
    <script type="text/javascript" src="{{  asset("js/scripts.js") }}"></script>
    <script type="text/javascript" src="{{ Storage::url("products.json") }}"></script>
    @yeild('script')
</body>

</html>
