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

        <div class="account-pages">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8">
                        <div class="card">
                            <div class="card-block">
            
                                <div class="ex-page-content text-center">
                                    <h1 class="text-primary">4<i class="far fa-smile text-success ml-1 mr-1"></i>4!</h1>
                                    <h4 class="">Sorry, page not found</h4><br>
            
                                    <a class="btn btn-primary mb-5 waves-effect waves-light" href="/dashboard">Back to Dashboard</a>
                                </div>
            
                            </div>
                        </div>
                                            
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>


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


    </body>
</html>
