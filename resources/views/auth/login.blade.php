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

    <section class="bg-images p-0 m-0">
        <div class="pt-md-5 pt-0">
            <div class="mt-5 ">
                <div class="modal-dialog" role="document">
                    <div class="modal-content border-0 modl">
                        <div class="modal-header border-0">
                            <h5 class="modal-title m-auto pt-3">Account Login</h5>
                        </div>
                        <div class="modal-body">

                            <form class="form-signin needs-validation" novalidate role="form" method="POST" action="{{ url('login') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <p class="text-center text-danger d-none">Please complete your process</p>

                                    @if(Session::has('message'))
                                    <div class="alert alert-warning" role="alert">
                                        <p style="color:red; margin:15px;">{{ Session::get('message') }}</p>
                                    </div>
                                    @endif

                                <div class="form-group col-md-9 m-auto pt-4">
                                    <label for="validationCustom01" style="font-weight: 600;">E-mail address</label>
                                    <input type="email" class="form-control" required id="validationCustom01" aria-describedby="emailHelp" placeholder="Your email" name="email">
                                    <div class="invalid-feedback text-left">
                                        Please Enter Your Email
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                     @endif


                                </div>
                                <div class="form-group col-md-9 m-auto pt-4">
                                    <label for="validationCustom02" style="font-weight: 600;">Password</label>
                                    <input type="password" class="form-control" required id="validationCustom02" placeholder="Enter your Password" name="password">
                                    <div class="invalid-feedback text-left">
                                        Please Enter Your Password
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="row pl-5 ml-2 mt-3">
                                    <!-- <div class="col-md-6">
                                        <input type="checkbox" required name="" id="">
                                        <label class="ml-1" style="font-size: 14px;">Remmber me</label>
                                    </div> -->
                                    <div class="col-md-10 text-center">
                                        <a href="{{url('/forgotpassword')}}" style="font-size: 14px;">Forget your Password</a>
                                    </div>
                                </div>
                                <div class="col-md-9 m-auto pt-2">
                                    <button type="submit" class="btn btn-primary w-100" style="background-color: #882ef9 !important;border:1px solid #882ef9 !important;">Login</button>
                                </div>
                                <p class="text-secondary text-center mt-4" style="font-size: 14px;">Do you have no account?<a href="{{url('/signup')}}" class="text-info ml-3" style="font-weight: 600">Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
 <script>

        (function() {
            'use strict';
            window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
            }, false);
            });
            }, false);
        })();
    </script>

    </body>
</html>
