<?php
    $user_info= Auth::user();
    $url= url()->current();
    //exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IncValuator</title>
    <link rel="stylesheet" href="{{ URL('/') }}/public_site_assets/css/style.css">

        <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL('/') }}/public_site_assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ URL('/') }}/public_site_assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ URL('/') }}/public_site_assets/css/fontastic.css">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ URL('/') }}/public_site_assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ URL('/') }}/public_site_assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ URL('/') }}/public_site_assets/css/custom.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="{{ URL('/') }}/public_site_assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ URL('/') }}/public_site_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ URL('/') }}/public_site_assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="{{ URL('/') }}/public_site_assets/js/front.js"></script>
</head>
<body>


<div class="clearfix"></div>

<!-- first-column 6 end -->



  @yield('content')


</body>
</html>
