<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Laravel Tutorial - Todolist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="{{ asset('res/pages/ico/60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('res/pages/ico/76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('res/pages/ico/120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('res/pages/ico/152.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Meet pages - The simplest and fastest way to build web UI for your dashboard or app." name="description" />
    <meta content="Ace" name="author" />
    <link href="{{ asset('res/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('res/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('res/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('res/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link class="main-stylesheet" href="{{ asset('res/pages/css/themes/corporate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Please remove the file below for production: Contains demo classes -->
    <link class="main-stylesheet" href="{{ asset('res/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    @yield('head')
</head>
<body class="fixed-header menu-pin menu-behind">
    <!-- BEGIN SIDEBAR -->
    @include('layouts.sidebar')
    <!-- END SIDEBAR -->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
        <!-- START HEADER -->
        <div class="header ">
            <!-- START MOBILE SIDEBAR TOGGLE -->
            <a href="#" class="btn-link toggle-sidebar d-lg-none pg-icon btn-icon-link" data-toggle="sidebar">
                menu
            </a>
            <!-- END MOBILE SIDEBAR TOGGLE -->
            <div class="">
                <div class="brand inline  m-l-10 ">
                    <img src="{{ asset('res/assets/img/logo.png') }}" alt="logo" data-src="{{ asset('res/assets/img/logo.png') }}" data-src-retina="{{ asset('res/assets/img/logo_2x.png') }}" width="78" height="22">
                </div>
                <!-- START NOTIFICATION LIST -->
                <ul class="d-lg-inline-block d-none notification-list no-margin d-lg-inline-block b-grey b-l b-r no-style p-l-20 p-r-20">
                    <li class="p-r-5 inline">
                        <div class="dropdown">
                            <a href="javascript:;" id="notification-center" class="header-icon  btn-icon-link" data-toggle="dropdown">
                                <i class="pg-icon">world</i>
                                <span class="bubble"></span>
                            </a>
                            <!-- START Notification Dropdown -->
                            <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                                <!-- START Notification -->
                                <div class="notification-panel">
                                    <!-- START Notification Body-->
                                    <div class="notification-body scrollable">
                                        <!-- START Notification Item-->
                                        <div class="notification-item unread clearfix">
                                            <!-- START Notification Item-->
                                            <div class="heading open">
                                                <a href="#" class="text-complete pull-left d-flex align-items-center">
                                                    <i class="pg-icon m-r-10">map</i>
                                                    <span class="bold">Carrot Design</span>
                                                    <span class="fs-12 m-l-10">David Nester</span>
                                                </a>
                                                <div class="pull-right">
                                                    <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                                        <div><i class="pg-icon">chevron_down</i></div>
                                                    </div>
                                                    <span class=" time">few sec ago</span>
                                                </div>
                                                <div class="more-details">
                                                    <div class="more-details-inner">
                                                        <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                                        distinguishes between <br>
                                                        A leader and a follower.”</h5>
                                                        <p class="small hint-text">
                                                            Commented on john Smiths wall.
                                                            <br> via pages framework.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Notification Item-->
                                            <!-- START Notification Item Right Side-->
                                            <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- START Notification Body-->
                                        <!-- START Notification Item-->
                                        <div class="notification-item  clearfix">
                                            <div class="heading">
                                                <a href="#" class="text-danger pull-left">
                                                    <i class="pg-icon m-r-10">alert_warning</i>
                                                    <span class="bold">98% Server Load</span>
                                                    <span class="fs-12 m-l-10">Take Action</span>
                                                </a>
                                                <span class="pull-right time">2 mins ago</span>
                                            </div>
                                            <!-- START Notification Item Right Side-->
                                            <div class="option">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- END Notification Item-->
                                        <!-- START Notification Item-->
                                        <div class="notification-item  clearfix">
                                            <div class="heading">
                                                <a href="#" class="text-warning pull-left">
                                                    <i class="pg-icon m-r-10">alert_warning</i>
                                                    <span class="bold">Warning Notification</span>
                                                    <span class="fs-12 m-l-10">Buy Now</span>
                                                </a>
                                                <span class="pull-right time">yesterday</span>
                                            </div>
                                            <!-- START Notification Item Right Side-->
                                            <div class="option">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- END Notification Item-->
                                        <!-- START Notification Item-->
                                        <div class="notification-item unread clearfix">
                                            <div class="heading">
                                                <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                                                    <img width="30" height="30" data-src-retina="{{ asset('res/assets/img/profiles/1x.jpg') }}" data-src="{{ asset('res/assets/img/profiles/1.jpg') }}" alt="" src="{{ asset('res/assets/img/profiles/1.jpg') }}">
                                                </div>
                                                <a href="#" class="text-complete pull-left">
                                                    <span class="bold">Revox Design Labs</span>
                                                    <span class="fs-12 m-l-10">Owners</span>
                                                </a>
                                                <span class="pull-right time">11:00pm</span>
                                            </div>
                                            <!-- START Notification Item Right Side-->
                                            <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- END Notification Item-->
                                    </div>
                                    <!-- END Notification Body-->
                                    <!-- START Notification Footer-->
                                    <div class="notification-footer text-center">
                                        <a href="#" class="">Read all notifications</a>
                                        <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                                            <i class="pg-refresh_new"></i>
                                        </a>
                                    </div>
                                    <!-- START Notification Footer-->
                                </div>
                                <!-- END Notification -->
                            </div>
                            <!-- END Notification Dropdown -->
                        </div>
                    </li>
                    <li class="p-r-5 inline">
                        <a href="#" class="header-icon  btn-icon-link">
                            <i class="pg-icon">link_alt</i>
                        </a>
                    </li>
                    <li class="p-r-5 inline">
                        <a href="#" class="header-icon  btn-icon-link">
                            <i class="pg-icon">grid_alt</i>
                        </a>
                    </li>
                </ul>
                <!-- END NOTIFICATIONS LIST -->
                <a href="#" class="search-link d-lg-inline-block d-none" data-toggle="search">
                    <i class="pg-icon">search</i>Type anywhere to <span class="bold">search</span>
                </a>
            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="dropdown pull-right d-lg-block d-none">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="profile dropdown">
                        <span class="thumbnail-wrapper d32 circular inline">
                            <img src="{{ asset('res/assets/img/profiles/avatar.jpg') }}" alt="" data-src="{{ asset('res/assets/img/profiles/avatar.jpg') }}" data-src-retina="{{ asset('res/assets/img/profiles/avatar_small2x.jpg') }}" width="32" height="32">
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="#" class="dropdown-item">
                            <span>Signed in as <br /><b>David Aunsberg</b></span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Your Profile</a>
                        <a href="#" class="dropdown-item">Your Activity</a>
                        <a href="#" class="dropdown-item">Your Archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Features</a>
                        <a href="#" class="dropdown-item">Help</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item logoutBtn">Logout</a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-item fs-12 hint-text">Last edited by David<br />on Friday at 5:27PM</span>
                    </div>
                </div>
                <!-- END User Info-->
                <a href="#" class="header-icon m-l-5 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                    <i class="pg-icon btn-icon-link">menu_add</i>
                </a>
            </div>
        </div>
        <!-- END HEADER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">
            <!-- START PAGE CONTENT -->
            <div class="content ">
                <!-- START JUMBOTRON -->
                <div class="jumbotron" data-pages="parallax">
                    <div class="container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                        <div class="inner">
                            <div class="row">
                                <div class="col-md-6">
                                    <ol class="breadcrumb">
                                        @yield('breadcrumb')
                                    </ol>
                                </div>
                                <div class="col-md-6 text-right">
                                    @yield('actions')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
                <!-- START CONTAINER FLUID -->
                <div class="container-fluid   container-fixed-lg bahagianContent">
                    @yield('content')
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->
            <!-- START COPYRIGHT -->
            <div class=" container-fluid  container-fixed-lg footer">
                <p class="small-text no-margin pull-left sm-pull-reset">
                    ©2014-2020 All Rights Reserved. Pages® and/or its subsidiaries or affiliates are registered trademark of Revox Ltd.
                    <span class="hint-text m-l-15">Pages v05.23 20201105.r.190</span>
                </p>
                <p class="small no-margin pull-right sm-pull-reset">
                    Hand-crafted <span class="hint-text">&amp; made with Love</span>
                </p>
                <div class="clearfix"></div>
            </div>
            <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
        <div class="overlay-content has-results m-t-20">
            <div class="container-fluid">
                <img class="overlay-brand" src="{{ asset('res/assets/img/logo.png') }}" alt="logo" data-src="{{ asset('res/assets/img/logo.png') }}" data-src-retina="{{ asset('res/assets/img/logo_2x.png') }}" width="78" height="22">
                <a href="#" class="close-icon-light btn-link btn-rounded  overlay-close text-black">
                    <i class="pg-icon">close</i>
                </a>
            </div>
            <div class="container-fluid">
                <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
                <br>
                <div class="d-flex align-items-center">
                    <div class="form-check right m-b-0">
                        <input id="checkboxn" type="checkbox" value="1">
                        <label for="checkboxn">Search within page</label>
                    </div>
                    <p class="fs-13 hint-text m-l-10 m-b-0">Press enter to search</p>
                </div>
            </div>
            <div class="container-fluid p-t-20">
                <span class="hint-text">suggestions :</span>
                <span class="overlay-suggestions"></span>
                <br>
                <div class="search-results m-t-30">
                    <p class="bold">Pages Search Results: <span class="overlay-suggestions"></span></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex m-t-15">
                                <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                                    <img width="36" height="36" src="{{ asset('res/assets/img/profiles/avatar.jpg') }}" data-src="{{ asset('res/assets/img/profiles/avatar.jpg') }}" data-src-retina="{{ asset('res/assets/img/profiles/avatar2x.jpg') }}" alt="">
                                </div>
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> on pages</h5>
                                    <p class="small-text hint-text">via john smith</p>
                                </div>
                            </div>
                            <div class="d-flex m-t-15">
                                <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                                    <div>T</div>
                                </div>
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> related topics</h5>
                                    <p class="small-text hint-text">via pages</p>
                                </div>
                            </div>
                            <div class="d-flex m-t-15">
                                <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                                    <div>M</div>
                                </div>
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> music</h5>
                                    <p class="small-text hint-text">via pagesmix</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex m-t-15">
                                <div class="thumbnail-wrapper d48 circular bg-info text-white d-flex align-items-center">
                                    <i class="pg-icon">facebook</i>
                                </div>
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                                    <p class="small-text hint-text">via facebook</p>
                                </div>
                            </div>
                            <div class="d-flex m-t-15">
                                <div class="thumbnail-wrapper d48 circular bg-complete text-white d-flex align-items-center">
                                    <i class="pg-icon">twitter</i>
                                </div>
                                <div class="p-l-10">
                                    <h5 class="no-margin ">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                                    <p class="small-text hint-text">via twitter</p>
                                </div>
                            </div>
                            <div class="d-flex m-t-15">
                                <div class="thumbnail-wrapper d48 circular text-white bg-danger d-flex align-items-center">
                                    <i class="pg-icon">google_plus</i>
                                </div>
                                <div class="p-l-10">
                                    <h5 class="no-margin ">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                                    <p class="small-text hint-text">via google plus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Overlay Search Results !-->
    </div>\
    <form action="{{route('logout')}}" id="logoutForm" method="post">
        @csrf
    </form>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="{{ asset('res/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/plugins/liga.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/plugins/popper/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
    <script src="{{ asset('res/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('res/assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('res/assets/plugins/classie/classie.js') }}"></script>
    <script src="{{ asset('res/pages/js/pages.js') }}"></script>
    <script src="{{ asset('res/assets/js/scripts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('res/assets/js/scripts.js') }}" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.logoutBtn').click(function (e) {
            e.preventDefault();
            $('#logoutForm').submit();
        });
    </script>

    @yield('script')
    <!-- END PAGE LEVEL JS -->
    <!-- END CORE TEMPLATE JS -->
  </body>
</html>
