<nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
            <div class="col-xs-6 no-padding">
                <a href="#" class="p-l-40"><img src="{{ asset('res/assets/img/demo/social_app.svg') }}" alt="socail"></a>
            </div>
            <div class="col-xs-6 no-padding">
                <a href="#" class="p-l-10"><img src="{{ asset('res/assets/img/demo/email_app.svg') }}" alt="socail"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 m-t-20 no-padding">
                <a href="#" class="p-l-40"><img src="{{ asset('res/assets/img/demo/calendar_app.svg') }}" alt="socail"></a>
            </div>
            <div class="col-xs-6 m-t-20 no-padding">
                <a href="#" class="p-l-10"><img src="{{ asset('res/assets/img/demo/add_more.svg') }}" alt="socail"></a>
            </div>
        </div>
    </div>
    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
        <img src="{{ asset('res/assets/img/logo_white.png') }}" alt="logo" class="brand" data-src="{{ asset('res/assets/img/logo_white.png') }}" data-src-retina="{{ asset('res/assets/img/logo_white_2x.png') }}" width="78" height="22">
        <div class="sidebar-header-controls">
            <button aria-label="Toggle Drawer" type="button" class="btn btn-icon-link invert sidebar-slide-toggle m-l-20 m-r-10" data-pages-toggle="#appMenu">
                <i class="pg-icon">chevron_down</i>
            </button>
            <button aria-label="Pin Menu" type="button" class="btn btn-icon-link invert d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar">
                <i class="pg-icon"></i>
            </button>
        </div>
    </div>
    <!-- END SIDEBAR MENU HEADER-->
    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
            <li class="m-t-20">
                <a href="{{route('home')}}" class="detailed">
                    <span class="title">Dashboard</span>
                </a>
                <span class="icon-thumbnail"><i class="pg-icon">home</i></span>
            </li>
            <li class="">
                <a href="{{route('task.index')}}" class="detailed">
                    <span class="title">Task</span>
                </a>
                <span class="icon-thumbnail"><i class="pg-icon">copy</i></span>
            </li>
            <li class="">
                <a href="#" class="detailed logoutBtn">
                    <span class="title">Logout</span>
                </a>
                <span class="icon-thumbnail"><i class="pg-icon">logout</i></span>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</nav>
