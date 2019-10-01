   @extends('layouts.app')

@section('content')

    <section class="bg-images p-0 m-0">
        <div class="pt-md-5 pt-0">
            <div class="mt-5 ">
                <div class="modal-dialog" role="document">
                    <div class="modal-content border-0 modl">
                        <div class="modal-header border-0">
                            <h5 class="modal-title m-auto pt-3">ForGet Password</h5>
                        </div>
                        <div class="modal-body">
                                <form class="form-signin" role="form" method="POST" action="{{ url('email_send') }}">


                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                @if(Session::has('message'))
        <div class="alert-box success">
            <p style="color:red; margin:15px;">{{ Session::get('message') }}</p>
        </div>
        @endif

                                <p class="text-center text-danger d-none">Please complete your process</p>
                                <div class="form-group col-md-9 m-auto pt-4">
                                    <label for="exampleInputEmail1" style="font-weight: 600;">Enter your email address</label>
                                    <input type="email" name="email" class="form-control" required aria-describedby="emailHelp" placeholder="Your email">
                                </div>
                                <div class="col-md-9 m-auto pt-4">
                                    <button type="submit" class="btn btn-primary w-100" style="background-color: #882ef9 !important;border:1px solid #882ef9 !important;">Forget</button>
                                </div>
                                <p class="text-secondary text-center mt-4" style="font-size: 14px;">Do you have no account?<a href="{{url('/login')}}" class="text-info ml-3" style="font-weight: 600">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
               

@endsection
