<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Profile Me</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico')}}">

        <link href="{{ asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/css/style.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        @yield('style')

    </head>


    <body class="fixed-left">

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

        <div class="account-pages">
            

            <div class="container">
                <div class="row align-items-center">
                   <div class="col-md-3"></div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <h4 class="text-muted float-right font-18 mt-4">Register</h4>
                                    <div>
                                        <a href="index.html" class="logo logo-admin"><img src="{{ asset('backend/images/logo_dark.png') }}" height="28" alt="logo"></a>
                                    </div>
                                </div>
        
                                <div class="p-2">
                                    <form class="form-horizontal m-t-20" action="/register" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text"  placeholder="Firts Name" name="first_name" value="{{ old('first_name') }}">
                                            </div>
                                        </div>
                                        @error('first_name')
                                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                        @enderror

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text"  placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                                            </div>
                                        </div>
                                        @error('last_name')
                                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                        @enderror

                                        <div class="form-group">
                                            <select type="text" class="form-control " name="gender" required="required" value="{{ old('gender') }}">
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        @error('gender')
                                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                        @enderror

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text"  placeholder="Birth Date" name="b_date" value="{{ old('b_date') }}" onfocus="(this.type='date')">
                                            </div>
                                        </div>
                                        @error('b_date')
                                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                        @enderror

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text"  placeholder="Contact Number" name="phone" value="{{ old('phone') }}">
                                            </div>
                                        </div>
                                        @error('phone')
                                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                        @enderror

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text"  placeholder="Address" name="address" value="{{ old('address') }}">
                                            </div>
                                        </div>
                                        @error('address')
                                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                        @enderror

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="email"  name="email" placeholder="Email Address" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                        @error('email')
                                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                        @enderror
            
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" placeholder="Password" name="password">
                                            </div>
                                        </div>
                                        @error('password')
                                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                        @enderror

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" placeholder="Confirm Password" name="confirm_password">
                                            </div>
                                        </div>
                                        @error('confirm_password')
                                            {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Error') }}
                                        @enderror
            
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                                            </div>
                                        </div>
            
                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-12 m-t-20 text-center">
                                                <a href="/login" class="text-muted">Already have account?</a>
                                            </div>
                                        </div>
                                    </form>

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
         {!! Toastr::message() !!}

        @yield('script')
       

    </body>
</html>