<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Pages - Admin Dashboard UI Kit - Lock Screen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
  <link rel="apple-touch-icon" href="{{ asset('res/pages/ico/60.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('res/pages/ico/76.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('res/pages/ico/120.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('res/pages/ico/152.png') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('res/favicon.ico') }}" />
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
  <script type="text/javascript">
  window.onload = function()
  {
    // fix for windows 8
    if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
      document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="{{ asset('res/pages/css/windows.chrome.fix.css') }}" />'
  }
  </script>
</head>
<body class="fixed-header menu-pin menu-behind">
  <div class="login-wrapper ">
    <!-- START Login Background Pic Wrapper-->
    <div class="bg-pic">
      <!-- START Background Caption-->
      <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
        <h1 class="semi-bold text-white">
          Meet pages - The simplest and fastest way to build web UI for your dashboard or app.
        </h1>
        <p class="small">
          Our beautifully-designed UI Framework come with hundreds of customizable features. Every Layout is just a starting point. ©2019-2020 All Rights Reserved. Pages® is a registered trademark of Revox Ltd.
        </p>
      </div>
      <!-- END Background Caption-->
    </div>
    <!-- END Login Background Pic Wrapper-->
    <!-- START Login Right Container-->
    <div class="login-container bg-white">
      <div class="p-l-50 p-r-50 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="{{ asset('res/assets/img/logo-48x48_c.png') }}" alt="logo" data-src="{{ asset('res/assets/img/logo-48x48_c.png') }}" data-src-retina="{{ asset('res/assets/img/logo-48x48_c@2x.png') }}" width="48" height="48">
        <h2 class="p-t-25">Get Started <br/> with your Dashboard</h2>
        <p class="mw-80 m-t-5">Sign in to your account</p>
        <!-- START Login Form -->
        <form id="form-login" method="POST" action="{{ route('login') }}">
            @csrf
          <div class="form-group form-group-default">
            <label>Login</label>
            <div class="controls">
              <input type="text" name="email" placeholder="Email Address" class="form-control" required>
            </div>
          </div>
          <div class="form-group form-group-default">
            <label>Password</label>
            <div class="controls">
              <input type="password" class="form-control" name="password" placeholder="Credentials" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 no-padding sm-p-l-10">
              <div class="form-check">
                <input type="checkbox" value="1" id="checkbox1">
                <label for="checkbox1">Remember me</label>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-end">
              <button aria-label="" class="btn btn-primary btn-lg m-t-10" type="submit">Sign in</button>
            </div>
          </div>
          <div class="m-b-5 m-t-30">
            <a href="#" class="normal">Lost your password?</a>
          </div>
          <div>
            <a href="#" class="normal">Not a member yet? Signup now.</a>
          </div>
        </form>
        <!--END Login Form-->
        <div class="pull-bottom sm-pull-bottom">
          <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
            <div class="col-sm-9 no-padding m-t-10">
              <p class="small-text normal hint-text">
                ©2019-2020 All Rights Reserved. Pages® is a registered trademark of Revox Ltd. <a href="">Cookie Policy</a>, <a href=""> Privacy and Terms</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Login Right Container-->
  </div>
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
        <span class="hint-text">
          suggestions :
        </span>
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
                  <div>M
                  </div>
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
  </div>
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
  <script src="{{ asset('res/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
  <!-- END VENDOR JS -->
  <script src="{{ asset('res/pages/js/pages.min.js') }}"></script>
  <script>
  $(function()
  {
    $('#form-login').validate()
  })
  </script>
</body>
</html>
