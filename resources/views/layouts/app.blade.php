<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="It's for Wepeiyang Management">
    <meta name="author" content="TAKOOCTOPUS">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!-- ionicons -->
    <link href="/css/ionicons.min.css" rel="stylesheet">

    <!-- Simplify -->
    <link href="/css/simplify.min.css" rel="stylesheet">

    @yield('styles')

    <!-- Scripts -->
{{--    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>--}}
</head>
<body class="overflow-hidden">

<div id="app">
    <div class="wrapper preload">
        @include('parts.sidebar-right')
        @include('parts.top-nav')
        @include('parts.sidebar-menu')
        <div class="main-container">
            <div class="padding-md">

                @yield('content')

            </div><!-- ./padding-md -->
        </div><!-- /main-container -->

        <footer class="footer">
                    <span class="footer-brand">
                        <strong class="text-danger">WPY</strong> MANAGE
                    </span>
            <p class="no-margin">
                &copy; 2017 <strong>TWTSTUDIO</strong>. ALL Rights Reserved.
            </p>
        </footer>

    </div><!-- /wrapper -->

    <a href="#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>
</div>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Scripts -->
<script src="/js/app.js"></script>



<!-- Jquery -->
<script src="/js/jquery-1.11.1.min.js"></script>

<!-- Bootstrap -->
<script src="/bootstrap/js/bootstrap.min.js"></script>

<!-- Slimscroll -->
<script src='/js/jquery.slimscroll.min.js'></script>

<!-- Popup Overlay -->
<script src='/js/jquery.popupoverlay.min.js'></script>

<!-- Modernizr -->
<script src='/js/modernizr.min.js'></script>

<!-- Simplify -->
<script src="/js/simplify/simplify.js"></script>


{{--<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

    Laravel.apiToken = "{{ Auth::check() ? 'Bearer '.Auth::user()->api_token : 'Bearer ' }}";
</script>--}}

@yield('scripts')
</body>

</html>
