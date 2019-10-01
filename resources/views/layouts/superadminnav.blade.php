<?php
    $user_info= Auth::user();
    $url= url()->current();





    //exit;
?>

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
        margin: 0px 15px;
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
                <li class="<?php if(strpos($url,'super_admin/dashboard')) {?> active<?php }?>" ><a href="{{ URL('/super_admin/dashboard') }}">DASHBOARD</a></li>
                <li class="<?php if(strpos($url,'super_admin/profile')) {?> active<?php }?>" ><a href="{{ URL('/super_admin/profile') }}">MY PROFILE</a></li>
                <li class="<?php if(strpos($url,'super_admin/user')) {?> active<?php }?>" ><a href="{{ URL('/super_admin/user') }}">MANAGE USER</a></li>
                <li class="<?php if(strpos($url,'super_admin/company')) {?> active<?php }?>" ><a href="{{ URL('/super_admin/company') }}">MANAGE COMPANY</a></li>
                <li class="<?php if(strpos($url,'super_admin/transaction')) {?> active<?php }?>" ><a href="{{ URL('/super_admin/transaction') }}">MANAGE TRANSACTION</a></li>
                 <li class="<?php if(strpos($url,'super_admin/license')) {?> active<?php }?>" ><a href="{{ URL('/super_admin/license') }}">MANAGE LICENSE</a></li>
                <li class="<?php if(strpos($url,'super_admin/revenue')) {?> active<?php }?>" ><a href="{{ URL('/super_admin/revenue') }}">MANAGE REVENUE</a></li>
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
                      <ul aria-labelledby="notifications" class="dropdown-menu">
                        <li>
                          <a rel="nofollow" href="#" class="dropdown-item">
                            <div class="notification d-flex justify-content-between">
                              <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                              <div class="notification-time"><small>4 minutes ago</small></div>
                            </div>
                          </a>
                        </li>
                        <li><a rel="nofollow" href="#" class="dropdown-item">
                            <div class="notification d-flex justify-content-between">
                              <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                              <div class="notification-time"><small>4 minutes ago</small></div>
                            </div>
                          </a>
                        </li>
                        <li><a rel="nofollow" href="#" class="dropdown-item">
                            <div class="notification d-flex justify-content-between">
                              <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                              <div class="notification-time"><small>4 minutes ago</small></div>
                            </div>
                          </a>
                        </li>
                        <li><a rel="nofollow" href="#" class="dropdown-item">
                            <div class="notification d-flex justify-content-between">
                              <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                              <div class="notification-time"><small>10 minutes ago</small></div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                            <strong>
                              <i class="fa fa-bell">
                              </i>view all notifications
                            </strong>
                          </a>
                        </li>
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
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Bary Armstrong</a>
                          <div class="dropdown-menu p-0 mt-2" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{url('super_admin/logout')}}">Log out</a>
                            <!--<a class="dropdown-item" href="#">Change Password</a>-->
                          </div>
                        </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
          <!-- Counts Section -->
