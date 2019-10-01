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
                            <h5 class="modal-title m-auto pt-3">ForGet Your Password</h5>
                        </div>
                        <div class="modal-body">
                            <form class="form-signin needs-validation" novalidate role="form" method="POST" action="{{ url('email_send') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                @if(Session::has('message'))
                                <div class="alert alert-warning" role="alert">
                                    <p style="color:red; margin:15px;">{{ Session::get('message') }}</p>
                                </div>
                                @endif

                                <p class="text-center text-danger d-none">Please complete your process</p>
                                <div class="form-group col-md-9 m-auto pt-4">
                                    <label for="validationCustom01" style="font-weight: 600;">Enter your E-mail address</label>
                                    <input type="email" name="email" id="validationCustom01" class="form-control" required aria-describedby="emailHelp" placeholder="Your email">
                                    <div class="invalid-feedback text-left">
                                        Please Enter Your Email
                                    </div>
                                </div>
                                <div class="col-md-9 m-auto pt-4">
                                    <button type="submit" class="btn btn-primary w-100" style="background-color: #882ef9 !important;border:1px solid #882ef9 !important;">Forget</button>
                                </div>
                                <p class="text-secondary text-center mt-4" style="font-size: 14px;">You don't have an account?
                                    <a href="{{url('/login')}}" class="text-info ml-3" style="font-weight: 600">Sign in</a>
                                </p>
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
