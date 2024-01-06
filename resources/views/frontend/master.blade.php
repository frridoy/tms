<!doctype html>
<html lang="en">

<head>
    @notifyCss
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tourism Management System | FR Ridoy</title>
    <link rel="shortcut icon" href="{{ url('forntend/') }}/assets/images/fav.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('fornted/') }}/assets/images/fav.jpg">
    <link rel="stylesheet" href="{{ url('forntend/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('forntend/') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ url('forntend/') }}/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ url('forntend/') }}/assets/css/style.css" />
    <style>
        .notify {
            z-index: 9999;
            justify-content: center;
        }
    </style>
</head>

<body>
 {{-- <x-notify::notify/> --}}
 @include('notify::components.notify')
    <!-- ################# Header Starts Here#######################--->

    @include('frontend.partial.header')

    @yield('content')

    <!--  ************************* Footer Start Here ************************** -->
    @include('frontend.partial.footer')


    @notifyJs
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    {{-- for ssl script --}}
    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>

    {{-- end ssl --}}

    @stack('reportcode')

</body>
<script src="{{ url('forntend/') }}/assets/js/jquery-3.2.1.min.js"></script>
<script src="{{ url('forntend/') }}/assets/js/popper.min.js"></script>
<script src="{{ url('forntend/') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ url('forntend/') }}/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="{{ url('forntend/') }}/assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="{{ url('forntend/') }}/assets/js/script.js"></script>

</html>
