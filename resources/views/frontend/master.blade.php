
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Travel Website Template | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="{{url('forntend/')}}/assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('fornted/')}}/assets/images/fav.jpg">
    <link rel="stylesheet" href="{{url('forntend/')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('forntend/')}}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{url('forntend/')}}/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{url('forntend/')}}/assets/css/style.css" />
</head>

    <body>

<!-- ################# Header Starts Here#######################--->

     @include('frontend.partial.header')

     @yield('content')

     <!--  ************************* Footer Start Here ************************** -->
 @include('frontend.partial.footer')




    </body>

    <script src="{{url('forntend/')}}/assets/js/jquery-3.2.1.min.js"></script>
    <script src="{{url('forntend/')}}/assets/js/popper.min.js"></script>
    <script src="{{url('forntend/')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('forntend/')}}/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="{{url('forntend/')}}/assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="{{url('forntend/')}}/assets/js/script.js"></script>
</html>
