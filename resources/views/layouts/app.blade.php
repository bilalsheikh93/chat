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

<style type="text/css">
    .tab-1 ul{
            border-bottom: 1px solid #dedede;
        }
    .tab-1 ul li a {
        color: #717171 !important;
        background-color: transparent !important;
        font-size: 14px;
        padding: 0px;
        padding-bottom: 10px;
        margin: 0px 15px;
    }
    .tab-1 ul li a.active{
        border-bottom: 2px solid #8f39f9;
        border-radius:0px !important;
        color: black !important;
    }
    .tab-1 ul li a span{
        color: lightgray;
        font-size: 9px;
        margin-left: 5px;
    }
    .tab-1-table th{
        border-top:none;
    }
    .tab-1-table th{
        color:gray;
        font-size: 11px;
        margin-left: 5px;
        font-weight: 100;
    }
    .tab-1-table2 th{
        font-weight: 500;
            font-size: 14px;
    }
    .tab-1-table2 td{
        font-weight: 400;
        text-align: center;
            font-size: 14px;
    }
    .tab-2 ul{
            border-bottom: 1px solid #dedede;
        }
    .tab-2 ul li a {
        color: #717171!important;
        background-color: transparent !important;
        font-size: 14px;
        padding: 0px;
        padding-bottom: 10px;
        margin: 0px 12px;
    }
    .tab-2 ul li a.active{
        border-bottom: 3px solid #8f39f9;
        border-radius:0px !important;
        font-weight:500;
        color: black !important;
    }
    .tab-2 ul li a span{
        color: lightgray;
        font-size: 12px;
        margin-left: 5px;
    }
    #box-12.active{
      background-color:#f4f7fa;
      border-left: 3px solid #882ef9;
      border-top:1px solid #d3d2d2;
      border-bottom:1px solid #d3d2d2;
    }
    .bnt-30{
      font-size: 13px;
      padding: 10px 30px;
      background-color: #882ef9;
      border: 1px solid #882ef9;
      color: white;
      border-radius: 6px;
    }
    .bnt-30:hover
    {
      text-decoration: none;
      color: white;
    }


    #notifications_ajax_load{
      height: 200px;
      width:400px;
      overflow-y: auto;
    }
    </style>

    <link rel="stylesheet" href="{{ URL('/') }}/public_site_assets/css/style.default.css" id="theme-stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Comfortaa:600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">

    <!--<ul>-->

        <!--<li>-->
        <!--    <a href="{{url('changePassword')}}">-->
        <!--        Change Password-->
        <!--    </a>-->
        <!--</li>-->
    <!--</ul>-->
      <nav class="side-navbar">
          <div class="side-navbar-wrapper">
            <!-- Sidebar Header    -->
            <div class="sidenav-header d-flex align-items-center justify-content-center">
              <!-- User Info-->
              <div class="sidenav-header-inner text-center"><a href="{{url('welcome')}}"><img src="{{ URL('/') }}/public_site_assets/img/Group 2.png" class=""></a>

              </div>
              <!-- Small Brand information, appears on minimized sidebar-->
              <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><img src="{{ URL('/') }}/public_site_assets/img/App Icon.png" class="w-100" alt=""></a></div>
            </div>
            <!-- Sidebar Navigation Menus-->
            <div class="main-menu">
              <ul id="side-main-menu" class="side-menu list-unstyled">
              <?php if($user_info->role == 'admin'){ ?>
                <li class="<?php if(strpos($url,'dashboard')) {?> active<?php }?>"><a href="{{ URL('/dashboard') }}">DASHBOARD</a></li>
                <li class="<?php if(strpos($url,'initiate_valuation') || strpos($url,'step_1') || strpos($url,'step_2') || strpos($url,'step_3')
                || strpos($url,'step_4') || strpos($url,'step_5') || strpos($url,'step_6')
                || strpos($url,'step_7') || strpos($url,'step_8') || strpos($url,'step_9')
                || strpos($url,'step_10')) {?> active<?php }?>"><a href="{{ URL('/initiate_valuation') }}">INITIATE A VALUATION</a></li>
                <li class="<?php if(strpos($url,'saved')) {?> active<?php }?>" ><a href="{{ URL('/saved') }}">SAVED VALUATIONS</a></li>
                <li class="<?php if(strpos($url,'team')) {?> active<?php }?>"><a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown">MANAGE TEAM</a>
                    <ul class="collapse list-unstyled side-menu list-unstyled" id="homeSubmenu">
                        <li class="<?php if(strpos($url,'team')) {?> active<?php }?> pl-3">
                            <a href="{{ URL('/team') }}">Team Setting</a>
                        </li>
                        <li class="<?php if(strpos($url,'company_new_user')) {?> active<?php }?> pl-3">
                            <a href="{{ URL('/company_new_user') }}">New User</a>
                        </li>
                    </ul>
                </li>
                 <li class="<?php if(strpos($url,'message')) {?> active<?php }?>"><a href="{{ URL('/home') }}">MESSAGES</a></li>
                <li class="<?php if(strpos($url,'profile')) {?> active<?php }?>" ><a href="{{ URL('/profile') }}">MY PROFILE</a></li>
                 <li class="<?php if(strpos($url,'cost_of_gold_sold')) {?> active<?php }?>" ><a href="{{ URL('/cost_of_gold_sold') }}">DEMO HTML</a></li>

                 <?php } elseif($user_info->role == 'contributor'){ ?>

                    <li class="<?php if(strpos($url,'my_assignment')) {?> active<?php }?>" ><a href="{{ URL('/my_assignment') }}">ASSIGNMENTS</a></li>
                    <li class="<?php if(strpos($url,'message')) {?> active<?php }?>"><a href="{{ URL('/home') }}">MESSAGES</a></li>
                    <li class="<?php if(strpos($url,'profile')) {?> active<?php }?>" ><a href="{{ URL('/profile') }}">MY PROFILE</a></li>

                 <?php } elseif($user_info->role == 'super_contributor'){ ?>

                    <li class="<?php if(strpos($url,'my_assignment')) {?> active<?php }?>" ><a href="{{ URL('/my_assignment') }}">ASSIGNMENTS</a></li>
                    <li class="<?php if(strpos($url,'saved')) {?> active<?php }?>" ><a href="{{ URL('/saved') }}">SAVED VALUATIONS</a></li>
                    <li class="<?php if(strpos($url,'message')) {?> active<?php }?>"><a href="{{ URL('/home') }}">MESSAGES</a></li>
                    <li class="<?php if(strpos($url,'profile')) {?> active<?php }?>" ><a href="{{ URL('/profile') }}">MY PROFILE</a></li>

                 <?php } else{ ?>

                    <li class="<?php if(strpos($url,'profile')) {?> active<?php }?>" ><a href="{{ URL('/profile') }}">MY PROFILE</a></li>
                 <?php } ?>

              </ul>
            </div>
            <div class="admin-menu">
              <h5 class="sidenav-heading"></h5>
              <ul id="side-admin-menu" class="side-menu list-unstyled">
                <!--<li> <a href="#"> </a></li>-->
                <!--<li> <a href="#"> </a>-->
                <!--<li> <a href=""> </a></li>-->
                <!--<li> <a href=""> </a></li>-->
              </ul>
            </div>
          </div>
        </nav>
        <div class="page">
          <!-- navbar-->
         <header class="header">
            <nav class="navbar pb-1 pt-1">
              <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                  <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars"> </i>
                  </a>
                  <a href="{{ URL('/dashboard') }}" class="navbar-brand">
                      <div class="d-none d-md-inline-block text-dark">Dashboard</div>
                    </a>
                  </div>
                  <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Notifications dropdown-->
                    <li class="nav-item dropdown">
                        <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                          <i class="fa fa-envelope"></i>
                        </a>
                      <ul aria-labelledby="notifications" class="dropdown-menu" id="notifications_ajax_load">
                      </ul>
                    </li>
                    <!-- Messages dropdown-->
                    <li class="nav-item dropdown">
                        <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                          <i class="fa fa-bell"></i>
                        </a>
                      <ul aria-labelledby="notifications" class="dropdown-menu">
                        <li>
                          <a rel="nofollow" href="#" class="dropdown-item d-flex">
                            <div class="msg-body">
                              <h3 class="h5">Jason Doe</h3>
                              <span>sent you a direct message</span>
                              <small>3 days ago at 7:58 pm - 10.06.2014</small>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a rel="nofollow" href="#" class="dropdown-item d-flex">
                            <div class="msg-body">
                              <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span>
                              <small>3 days ago at 7:58 pm - 10.06.2014</small>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a rel="nofollow" href="#" class="dropdown-item d-flex">
                            <div class="msg-body">
                              <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span>
                              <small>3 days ago at 7:58 pm - 10.06.2014</small>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                            <strong> <i class="fa fa-envelope"></i>Read all messages</strong>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Log out-->
                    <li class="nav-item">
                      <a href="" class="nav-link p-1">
                       <span class="d-none d-sm-inline-block">
                        <img src="{{ URL('/') }}/public_site_assets/img/User.png" class="border p-1 rounded-circle">
                      </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown show">
                          <a href="" class="nav-link font-weight-normal dropdown" style="font-size: 13px" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ $user_info->name }} </a>
                          <div class="dropdown-menu p-0 mt-2" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{url('logout')}}">Log out</a>
                            <!--<a class="dropdown-item" href="#">Change Password</a>-->
                          </div>
                        </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
          @yield('content')
        </div>
          <!-- Counts Section -->


<!-- first-column 6 end -->

</body>
</html>
