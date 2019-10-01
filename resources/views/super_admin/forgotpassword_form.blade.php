   @extends('layouts.app')

@section('content')

    <section class="bg-images p-0 m-0">
        <div class="pt-md-5 pt-0">
            <div class="mt-5 ">
                <div class="modal-dialog" role="document">
                    <div class="modal-content border-0 modl">
                        <div class="modal-header border-0">
                            <h5 class="modal-title m-auto pt-3">Change Password</h5>
                        </div>
                        <div class="modal-body">
                            
    <form class="form-signin" role="form" method="POST" action="{{ url('save_forgotpassword') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <input type="hidden" name="user_id" value="{{ $decrypted }}" >

            <p class="text-center text-danger d-none">Please complete your process</p>

                                @if(Session::has('message'))
                            <div class="alert-box success">
                                <p style="color:red; margin:15px;">{{ Session::get('message') }}</p>
                            </div>
                            @endif

                                <div class="form-group col-md-9 m-auto pt-4">
                                    <label for="exampleInputEmail1" style="font-weight: 600;">New Password</label>
                                    <input type="password" class="form-control" required aria-describedby="emailHelp" placeholder="Enter your New Password" name="new_password">
                                </div>
                                
                                <div class="form-group col-md-9 m-auto pt-4">
                                    <label for="exampleInputPassword1" style="font-weight: 600;">Confirm Password</label>
                                    <input type="password" class="form-control" required placeholder="Enter your Confirm Password" name="confirm_password">
                                </div>
                                
                                <div class="col-md-9 m-auto pt-2">
                                    <button type="submit" class="btn btn-primary w-100" style="background-color: #882ef9 !important;border:1px solid #882ef9 !important;">Change Password</button>
                                </div>
                                <p class="text-secondary text-center mt-4" style="font-size: 14px;">All ready have an account?<a href="{{url('/login')}}" class="text-info ml-3" style="font-weight: 600">Login here</a></p>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
        

@endsection
