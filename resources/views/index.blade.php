<!DOCTYPE html>
<htmllang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>ILunch</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dist/css')}}/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('dist/css') }}/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('dist/css') }}/style.css" rel="stylesheet">
    <link href="{{ asset('dist/css') }}/style-responsive.css" rel="stylesheet" />

    
</head>

<body class="login-body">

<div class="container">
     @if(Session::has('message'))

                                <div class="alert-box success">

                                    <h2>{{ Session::get('message') }}</h2>

                                </div>

                            @endif

    <form class="form-signin" role="form" method="POST" action="{{ url('submit_login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h2 class="form-signin-heading">Sign In Now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="email" placeholder="Email" autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
            <input type="password" class="form-control" name="password" placeholder="Password">
            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
            
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign In</button>



        </div>

        <!-- Modal -->


    </form>

</div>



<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('dist/js') }}/jquery.js"></script>
<script src="{{ asset('dist/js') }}/bootstrap.min.js"></script>


</body>
</html>