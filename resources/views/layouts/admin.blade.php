<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="admin/css/custom.css">


  </head>
  <body>
     @include('includes.admin.sidebar')
     <div class="page">
      @include('includes.admin.header')
      @yield('content')
    </div>
    <!-- JavaScript files-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="admin/js/front.js"></script>
  </body>
</html>