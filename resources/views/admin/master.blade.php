 <!DOCTYPE html>
 <html lang="en">

 <head>
     @notifyCss
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
     <!-- Begin SEO tag -->
     <title> Tourism Management System </title>
     <meta property="og:title" content="Dashboard">
     <meta name="author" content="FR Ridoy">
     <meta property="og:locale" content="en_US">
     <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
     <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
     <link rel="canonical" href="https://uselooper.com">
     <meta property="og:url" content="https://uselooper.com">
     <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
     <script type="application/ld+json">

    </script><!-- End SEO tag -->
     <!-- FAVICONS -->
     <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
     <link rel="shortcut icon" href="assets/favicon.ico">
     <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
     <!-- GOOGLE FONT -->
     <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
     <!-- End GOOGLE FONT -->
     <!-- BEGIN PLUGINS STYLES -->
     <link rel="stylesheet"
         href="https://uselooper.com/assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
     <link rel="stylesheet" href="https://uselooper.com/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" href="https://uselooper.com/assets/vendor/flatpickr/flatpickr.min.css">
     <!-- END PLUGINS STYLES -->
     <!-- BEGIN THEME STYLES -->
     <link rel="stylesheet" href="https://uselooper.com/assets/stylesheets/theme.min.css" data-skin="default">
     <link rel="stylesheet" href="https://uselooper.com/assets/stylesheets/theme-dark.min.css" data-skin="dark">
     <link rel="stylesheet" href="https://uselooper.com/assets/stylesheets/custom.css">
     <script>
         var skin = localStorage.getItem('skin') || 'default';
         var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
         // Disable unused skin immediately
         disabledSkinStylesheet.setAttribute('rel', '');
         disabledSkinStylesheet.setAttribute('disabled', true);
         // add loading class to html immediately
         document.querySelector('html').classList.add('loading');
     </script><!-- END THEME STYLES -->


     <style>
         .notify {
             z-index: 9999;
             justify-content: center;
         }
     </style>

 </head>

 <body>
     <!-- .app -->

     @include('notify::components.notify')
     <div class="app">

         @include('admin.partial.header')
         <!-- .app-aside -->
         @include('admin.partial.sidebar')
         <!-- .app-main -->
         <main class="app-main">
             <!-- .wrapper -->
             <div class="wrapper">
                 <!-- .page -->
                 @yield('content')
             </div><!-- .app-footer -->

             <!-- /.wrapper -->
         </main><!-- /.app-main -->
     </div><!-- /.app -->
     <!-- BEGIN BASE JS -->
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <script src="https://uselooper.com/assets/vendor/jquery/jquery.min.js"></script>
     <script src="https://uselooper.com/assets/vendor/popper.js/umd/popper.min.js"></script>
     <script src=" https://uselooper.com/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
     <!-- BEGIN PLUGINS JS -->
     <script src=" https://uselooper.com/assets/vendor/pace-progress/pace.min.js"></script>
     <script src=" https://uselooper.com/assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
     <script src=" https://uselooper.com/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     <script src=" https://uselooper.com/assets/vendor/flatpickr/flatpickr.min.js"></script>
     <script src=" https://uselooper.com/assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
     <script src=" https://uselooper.com/assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
     <!-- BEGIN THEME JS -->
     <script src=" https://uselooper.com/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
     <!-- BEGIN PAGE LEVEL JS -->
     <script src=" https://uselooper.com/assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
     <script>
         window.dataLayer = window.dataLayer || [];

         function gtag() {
             dataLayer.push(arguments);
         }
         gtag('js', new Date());
         gtag('config', 'UA-116692175-1');
     </script>
     @notifyJs
     @stack('reportcode')
 </body>

 </html>
