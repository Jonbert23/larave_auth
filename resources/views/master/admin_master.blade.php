<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Profile ME</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('image/logo.png')}}">

        <link href="{{ asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/css/style.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        @yield('style')

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="mdi mdi-close"></i>
                </button>

                <div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">
                        
                        <a href="index.html" class="logo"><img src="{{ asset('backend/images/logo_dark.png')}}" height="20" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="/dashboard" class="waves-effect">
                                    <i class="dripicons-home"></i>
                                    <span> Dashboard <span class="badge badge-success badge-pill float-right">3</span></span>
                                </a>
                            </li>

                            <li>
                                <a href="/profesion" class="waves-effect">
                                    <i class="dripicons-graduation"></i>
                                    <span> Profesion</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="dripicons-graduation"></i>
                                    <span> Education</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="dripicons-folder"></i>
                                    <span> Experience</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="dripicons-suitcase"></i>
                                    <span> Skills </span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="dripicons-checkmark"></i>
                                    <span> Awards </span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="dripicons-folder-open"></i>
                                    <span> Projects </span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="dripicons-wallet"></i>
                                    <span> Job Pricing </span>
                                </a>
                            </li>
                           

                            <!-- <li class="menu-title">Extra</li> -->

                            <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-location"></i><span> Maps </span> <span class="badge badge-danger badge-pill float-right">2</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="maps-google.html"> Google Map</a></li>
                                    <li><a href="maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li> -->

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">
                                <a href="index.html" class="logo"><img src="{{ asset('backend/images/logo.png')}}" height="22" alt="logo"></a>
                            </div>
                        </div>

                        <nav class="navbar-custom">

                             <!-- Search input -->
                             <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell-outline noti-icon"></i>
                                        <span class="badge badge-danger badge-pill noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notification (3)</h5>
                                        </div>

                                        <div class="slimscroll-noti">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                                <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>

                                        </div>
                                        

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            View All
                                        </a>

                                    </div>
                                </li>
    

                                <li class="list-inline-item dropdown notification-list nav-user">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="{{ asset(Auth::user()->photo)}}" alt="user" class="rounded-circle">
                                        <span class="d-none d-md-inline-block ml-1"> {{ Auth::user()->first_name."  ".Auth::user()->last_name}} <i class="mdi mdi-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <a class="dropdown-item" href="/my/profile/{{ Auth::user()->id }}"><i class="dripicons-user text-muted"></i> My Profile</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#change_password_modal" ><i class="dripicons-wallet text-muted"></i> Change Password</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/logout"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>

                            </ul>


                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
                        <div class="row pt-4">
                            <div class="col-md-12">
                                <h4 class="page-title m-0">@yield('header')</h4>
                                <hr>
                            </div>
                        </div>

                          @yield('content')
                          @include('user.change_password_modal')

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2019 Zinzer <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('backend/js/jquery.min.js')}}"></script>
        <script src="{{ asset('backend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('backend/js/modernizr.min.js')}}"></script>
        <script src="{{ asset('backend/js/detect.js')}}"></script>
        <script src="{{ asset('backend/js/fastclick.js')}}"></script>
        <script src="{{ asset('backend/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('backend/js/jquery.blockUI.js')}}"></script>
        <script src="{{ asset('backend/js/waves.js')}}"></script>
        <script src="{{ asset('backend/js/jquery.nicescroll.js')}}"></script>
        <script src="{{ asset('backend/js/jquery.scrollTo.min.js')}}"></script>

      
        <!-- <script src="{{ asset('backend/pages/dashboard.int.js')}}"></script>         -->

        <!-- App js -->
        <script src="{{ asset('backend/js/app.js')}}"></script>
        <!-- Toaster -->
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

        @yield('script')
        {!! Toastr::message() !!}

    </body>
</html>