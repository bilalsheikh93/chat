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


<style>

    .nav-link{
    margin: 12px 9px;
    color: white !important;
    font-weight: 300;
    letter-spacing: 1.1px;
    font-size: 14px !important;
}

</style>

    <section class="bg-img pb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light head">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ URL('/') }}/public_site_assets/img/Group 2.png" alt=""></a>
                <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars text-white"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto  heading-7">
                        <li class="nav-item">
                            <a class="nav-link" href="#txt1">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#txt">Give Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#txt">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#txt3">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#txt2">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/login')}}">Login</a>
                        </li>
                    </ul>
                    <a class="bnt" href="{{url('/signup')}}">Get Started</a>
                </div>
            </nav>
             </div>
             <!--header ends here-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 mt-md-5 pt-lg-5 pt-0 mt-0 pl-5">
                        <div class="ml-md-5 pl-4 ml-0 pb-sm-5 pb-0">
                            <img src="{{ URL('/') }}/public_site_assets/img/App Icon.png" alt="">
                            <h3 class="incval">IncValuator. Best app <br> for web and mobile app</h3>
                            <span class="row text-center mt-2">
                            <a href="{{ url('/signup') }}" class="bnt-1 mt-4" style="margin:0 auto;">Get Started</a>
                            </span>
                        </div>

                    </div>
                    <div class="col-md-7 mt-md-5 pt-lg-4 pt-0 mt-0 pr-0 pl-0">
                        <img src="{{ URL('/') }}/public_site_assets/img/Laptop.png" class="img-1" alt="">
                    </div>
                </div>
            </div>


    </section>

    <!--incvaluator section ends here-->

    <section class="bg-clr">
        <div class="container pt-5">

            <h3 class="text-1 mt-5 pt-5" id="txt">Amazing features that will boost your productivity</h3>
            <div class="row  mt-5">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <img src="{{ URL('/') }}/public_site_assets/img/Calendar Icon.png" alt="">
                            <h5 class="mt-3 heading">Schedule multiple posts</h5>
                            <p class="pera">This sounded nonsense to Alice, so she said nothing, but set off at once.</p>
                        </div>
                        <div class="col-md-6 mt-5 pl-md-4">
                            <img src="{{ URL('/') }}/public_site_assets/img/Notifications Icon.png" alt="">
                            <h5 class="mt-3 heading">Schedule multiple posts</h5>
                            <p class="pera">This sounded nonsense to Alice, so she said nothing, but set off at once.</p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ URL('/') }}/public_site_assets/img/Lock Icon.png" alt="">
                            <h5 class="mt-3 heading">Schedule multiple posts</h5>
                            <p class="pera">This sounded nonsense to Alice, so she said nothing, but set off at once.</p>

                        </div>
                        <div class="col-md-6 pl-md-4">
                            <img src="{{ URL('/') }}/public_site_assets/img/Settings Icon.png" alt="">
                            <h5 class="mt-3 heading">Schedule multiple posts</h5>
                            <p class="pera">This sounded nonsense to Alice, so she said nothing, but set off at once.</p>

                        </div>
                    </div>
                </div>
                <!--<div class="col-md-6">-->
                <!--    <img src="{{ URL('/') }}/public_site_assets/img/Video Tour.png" class="w-100" alt="">-->
                <!--</div>-->
            </div>
            <div class="text-center mt-4">
                <a href="{{ url('/signup') }}" class="bnt-3 mt-4">Get Started</a>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-md-7 mt-md-5 pt-lg-4 pt-0 mt-0 pr-0 pl-0">
                    <img src="{{ URL('/') }}/public_site_assets/img/Laptop2.png" class="w-100" alt="">
                </div>
                    <div class="ml-0 col-md-5 mt-md-5 pt-md-5 pt-5">
                        <div class="mt-lg-5 pt-lg-4">
                             <h3 class="incval-3 text-dark">Best Valuator in the market</h3>
                            <p class="pera-1 mt-3">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen.To her surprise, she lost sight of her in a moment and found herself walking.</p>
                            <div class="mt-5 lock_text">
                                <img src="{{ URL('/') }}/public_site_assets/img/Reload Icon.png" alt="">
                                <span class="ml-4">Sync across all devices </span>
                            </div>
                            <div class="mt-3 lock_text">
                                <img src="{{ URL('/') }}/public_site_assets/img/Lock Icon2.png" alt="">
                                <span class="ml-4 pl-1">Secured protocol</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!--best valuator market-->

        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-5 mt-md-5 pt-lg-5 pt-0 pt-lg-5 pt-0 mt-0 pl-md-5 pl-0 pb-5">
                    <div style="display: table;" class="mt-5 pt-lg-5">
                        <div class="ml-md-5 pl-md-5 pl-3 ml-0 mt-lg-5 pt-lg-5" style="display: table-cell;">
                            <h3 class="incval-1 text-dark">Best Valuator in the market</h3>
                            <p class="pera-2 mt-3">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen.To her surprise, she lost sight of her in a moment and found herself walking.</p>
                            <div class="mt-5 lock_text">
                                <img src="{{ URL('/') }}/public_site_assets/img/Platform Icons.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 mt-md-5 pt-lg-4 pt-0 mt-0 pr-0 pl-0">
                    <img src="{{ URL('/') }}/public_site_assets/img/Desktop.png" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--Best Valuator part ends here-->

    <section class="bg-clr">
        <div class="pt-5 text-center">
            <h3 class="incval-1 mt-5 pt-md-5 pt-0 text-center text-dark">Best Valuator in the market</h3>
            <p class="pera-3 text-center m-auto mt-3">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen.
                To her surprise, she lost sight of her in a moment and found herself walking.</p>
            <img src="{{ URL('/') }}/public_site_assets/img/Laptop3.png" class="mt-5" width="65%" alt="">
            <div class="bg-img-1 mt-1" style="padding: 60px;">
                <a href="{{ url('/signup') }}" class="bnt-4 m-5">Get Started</a>
            </div>

        </div>
    </section>

    <!--marking part ends here-->

    <section class="bg-clr pt-5 border-bottom">
            <h3 class="incval-1 mt-5 pt-md-5 pt-0 text-center text-dark m-auto" id="txt1" style="width: 40%">Cool Features you get with IncValuator</h3>
        <div class="container pb-5">
            <div class="row text-center mt-5">
                <div class="col-md-3 icons_across">
                    <img src="{{ URL('/') }}/public_site_assets/img/icon.png" alt="">
                    <h6 class="heading-1">Sync across all devices </h6>
                    <p class="pera">This sounded nonsense to Alice, so she said nothing.</p>
                </div>
                <div class="col-md-3 icons_across">
                    <img src="{{ URL('/') }}/public_site_assets/img/Icon2.png" alt="">
                    <h6 class="heading-1">All emails in one place </h6>
                    <p class="pera">This sounded nonsense to Alice, so she said nothing.</p>
                </div>
                <div class="col-md-3 icons_across">
                    <img src="{{ URL('/') }}/public_site_assets/img/Icon3.png" alt="">
                    <h6 class="heading-1">Secured protocol</h6>
                    <p class="pera">This sounded nonsense to Alice, so she said nothing.</p>
                </div>
                <div class="col-md-3 icons_across">
                    <img src="{{ URL('/') }}/public_site_assets/img/Icon4.png" alt="">
                    <h6 class="heading-1">Track your time </h6>
                    <p class="pera">This sounded nonsense to Alice, so she said nothing.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 icons_across">
                    <img src="{{ URL('/') }}/public_site_assets/img/Icon5.png" alt="">
                    <h6 class="heading-1">Notifications about sales </h6>
                    <p class="pera">This sounded nonsense to Alice, so she said nothing.</p>
                </div>
                <div class="col-md-3 icons_across">
                    <img src="{{ URL('/') }}/public_site_assets/img/Icon6.png" alt="">
                    <h6 class="heading-1">Organize your files </h6>
                    <p class="pera">This sounded nonsense to Alice, so she said nothing.</p>
                </div>
                <div class="col-md-3 icons_across">
                    <img src="{{ URL('/') }}/public_site_assets/img/Icon7.png" class="mt-2" alt="">
                    <h6 class="heading-1 mt-3">Search similar posts</h6>
                    <p class="pera">This sounded nonsense to Alice, so she said nothing.</p>
                </div>
                <div class="col-md-3 icons_across">
                    <img src="{{ URL('/') }}/public_site_assets/img/Icon8.png" alt="">
                    <h6 class="heading-1">Customer profiles and themes</h6>
                    <p class="pera">This sounded nonsense to Alice, so she said nothing.</p>
                </div>
            </div>
        </div>
    </section>

    <!--Cool Features part ends here-->

    <section>
        <div class="container">
            <h3 class="incval-1 mt-5 pt-md-2 pt-0 text-center text-dark">Questions and answers</h3>
            <div class="row mt-5">
                <div class="col-md-6 pb-5">
                    <div>
                        <img src="{{ URL('/') }}/public_site_assets/img/IconQuestion.png" alt="">
                        <span class="ml-3 heading-1">What is the best app?</span>
                        <p class="pera ml-5 pl-3">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen.
                            To her surprise, she lost sight of her in a moment and found herself</p>
                    </div>
                    <div class="mt-5">
                        <img src="{{ URL('/') }}/public_site_assets/img/IconQuestion.png" alt="">
                        <span class="ml-3 heading-1">What is the best app?</span>
                        <p class="pera ml-5 pl-3">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen.
                            To her surprise, she lost sight of her in a moment and found herself</p>
                    </div>
                    <div class="mt-5">
                        <img src="{{ URL('/') }}/public_site_assets/img/IconQuestion.png" alt="">
                        <span class="ml-3 heading-1">What is the best app?</span>
                        <p class="pera ml-5 pl-3">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen.
                            To her surprise, she lost sight of her in a moment and found herself</p>
                    </div>

                </div>
                <div class="col-md-6 pl-md-4 pl-0 pb-5">
                    <div>
                        <img src="{{ URL('/') }}/public_site_assets/img/IconQuestion.png" alt="">
                        <span class="ml-3 heading-1">What is the best app?</span>
                        <p class="pera ml-5 pl-3">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen.
                            To her surprise, she lost sight of her in a moment and found herself</p>
                    </div>
                    <div class="mt-5">
                        <img src="{{ URL('/') }}/public_site_assets/img/IconQuestion.png" alt="">
                        <span class="ml-3 heading-1">What is the best app?</span>
                        <p class="pera ml-5 pl-3">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen.
                            To her surprise, she lost sight of her in a moment and found herself</p>
                    </div>
                    <div class="mt-5">
                        <img src="{{ URL('/') }}/public_site_assets/img/IconQuestion.png" alt="">
                        <span class="ml-3 heading-1">What is the best app?</span>
                        <p class="pera ml-5 pl-3">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen.
                            To her surprise, she lost sight of her in a moment and found herself</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Questions part ends here-->

    <section class="bg-img-1 pt-5">
        <div class="container">
            <div class="text-center mt-5">
                <img src="{{ URL('/') }}/public_site_assets/img/Stars.png" alt="">
                <h2 class="text-white mt-4" id="txt3" style="letter-spacing: 1.9px;">Customers about us</h2>
                <img src="{{ URL('/') }}/public_site_assets/img/Avatar.png" class="mt-5" alt="">
            </div>
            <div class="row mt-3 pb-5">
                <div class="col-md-3 text-center">
                    <img src="{{ URL('/') }}/public_site_assets/img/Arrow Left.png" alt="">
                </div>
                <div class="col-md-6 text-center">
                    <p class="pera-5 text-white ">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen.
                        To her surprise, she lost sight of her in a moment and found herself</p>
                        <div style="position: relative;">
                            <h5 class="text-white mt-5">Sergey Azovskiy</h5>
                            <p class="text-white mt-3" style="font-size: 14px;">Designer at UI</p>
                            <p class="text-white mt-3" style="font-size: 14px;">Chest</p>
                            <img src="{{ URL('/') }}/public_site_assets/img/Combined Shape.png" class="d-md-block d-none" style="position: absolute;top:2px; left: 40%" alt="">
                        </div>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{ URL('/') }}/public_site_assets/img/Arrow Right.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--Customers part ends here-->

    <section class="bg-clr pt-md-5 pt-0 pb-md-5 pb-0 border-bottom">
        <div class="mt-md-5 mt-0 text-center">
            <h2 id="txt2">Choose your plan</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 text-center bg-hvr pb-4">
                    <button class="bnt-5 mt-5">Unlimited</button>
                    <h1 class="text-dark mt-5 text-center">$9.99</h1>
                    <div class="pb-0 mb-0 mt-4" style="border:1px solid rgb(223, 223, 223); border-radius: 5px;width: 79%;margin: 0 auto;">
                        <table class="table text-left border-0 bg-white pb-0 mb-0" style="border-radius: 9px;">
                            <tbody>
                                <tr>
                                    <th style="width: 2px;"> <img src="{{ URL('/') }}/public_site_assets/img/good.PNG"> </th>
                                    <th>2 Project</th>
                                </tr>
                                <tr>
                                    <th style="width: 2px;"><img src="{{ URL('/') }}/public_site_assets/img/good.PNG"> </th>
                                    <th>Unlimited hosted projects</th>
                                </tr>
                                <tr>
                                    <th style="width: 2px;"><img src="{{ URL('/') }}/public_site_assets/img/good.PNG"> </th>
                                    <th>Code export</th>
                                </tr>
                                <tr style="color: #dfdfdf;">
                                    <th class="disabled" style="width: 2px;"><img src="{{ URL('/') }}/public_site_assets/img/cross.PNG"> </th>
                                    <th class="disabled">Password protection</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ url('/signup') }}" class="bnt-6 mt-5 text-dark" style="line-height: 60px; font-weight: 600;">Buy Now</a>
                </div>
                <div class="col-md-4 text-center bg-hvr pb-4">
                    <button class="bnt-5 mt-5">One</button>
                    <h1 class="text-dark mt-5 text-center">$2.99</h1>
                    <div class="pb-0 mb-0 mt-4" style="border:1px solid rgb(223, 223, 223); border-radius: 5px;width: 79%;margin: 0 auto;">
                        <table class="table text-left border-0 bg-white pb-0 mb-0" style="border-radius: 9px;">
                            <tbody>
                                <tr>
                                    <th style="width: 2px;"> <img src="{{ URL('/') }}/public_site_assets/img/good.PNG"> </th>
                                    <th>2 Project</th>
                                </tr>
                                <tr>
                                    <th style="width: 2px;"><img src="{{ URL('/') }}/public_site_assets/img/good.PNG"> </th>
                                    <th>Unlimited hosted projects</th>
                                </tr>
                                <tr>
                                    <th style="width: 2px;"><img src="{{ URL('/') }}/public_site_assets/img/good.PNG"> </th>
                                    <th>Code export</th>
                                </tr>
                                <tr>
                                    <th class="disabled" style="width: 2px;"><img src="{{ URL('/') }}/public_site_assets/img/good.PNG"> </th>
                                    <th class="disabled">Password protection</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ url('/signup') }}" class="bnt-6 mt-5 text-dark" style="line-height: 60px; font-weight: 600;">Buy Now</a>
                </div>
            </div>
        </div>

    </section>

    <!--plans choose part ends here-->

    <section class="pb-5">
        <h1 class="text-center mt-5 pt-md-5 pt-0" style="width: 40%!important;margin: 0 auto;">Subscribe to receive updates about new features</h1>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-8 m-auto bg-img-1 mt-5" style="border-radius: 15px;">
                    <div class="">
                        <form action="" class="p-5">
                            <input type="text" class="form-control fa fa-envelope ml-5 float-left pl-3 w-50" placeholder="&#xf0e0; Email Address" style="padding: 12px 0px;">
                            <button class="bnt-7 ml-3">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--search bar ends here-->

    <section class="bg-img-1">
        <div class="container-fluid">
           <div class="p-4">
                <nav class="navbar navbar-expand-sm navbar-light">
                    <a class="navbar-brand" href="#"><img src="{{ URL('/') }}/public_site_assets/img/Group 2.png" class="w-75" alt=""></a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a class="nav-link heading-6" style=" font-size:10px !important;" href="#">Give Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link heading-6" style=" font-size:10px !important;" href="#">TERMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link heading-6" style=" font-size:10px !important;" href="#">PRIVACY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link heading-6" style=" font-size:10px !important;" href="#">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                    <span class="text-white ml-auto pr-md-5" style="font-size:11px;">@incValuator, 2019. All rights Reserved</span>
                </nav>
            </div>
        </div>


    </section>


</body>
</html>
