@extends('layouts.superadminapp')

@section('content')

@extends('layouts.superadminnav')
<?php

// return $user;
// die;
?>

<style>
    html body{
    font-family: 'Manjari', sans-serif !important;
  }
.imags---{
	display: block;
	max-width: 400px;
    margin: 0 auto 15px;
	text-align: center;
    word-wrap: break-word;
	color: #1a4756;
}
.profile-pic {
    max-width: 200px;
    max-height: 200px;
    display: block;
}

.file-upload {
    display: none;
}
.circle {
    overflow: hidden;
    width: 128px;
    height: 128px;
    position: relative;
    top: 0px;
    left: 50%;
    margin-bottom: 10px;
}
img {
    max-width: 100%;
    height: auto;
}
.p-image {
    position: absolute;
    top: 14px;
    right: 38px;
    color: #050505;
    opacity: 0;
    font-size: 100px;
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    cursor: pointer;
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}
.hidden, #uploadImg:not(.hidden) + .imags---{
	display: none;
}

#file{
	display: none;
  	margin: 0 auto;
}
[type=reset], html [type=button] {

    padding: 2px 10px;
    background-color: #ab39fa;
    color: white;
    border: 1px solid #ab39fa;
    border-radius: 3px;
    margin-top: 10px;
}
.active{
        color: #1665d8;
        border: 2px solid #1665d8;
    }
    .icns-3{
        color: white;
        font-size: 20px !important;
        position: absolute;
        background-color: #1665d8;
        padding: 10px 10px;
        border-radius: 50%;
        top: 35%;
        left: 64%;
        display: none;
    }
    .icns-2{
        top:41% !important;
    }
    .icns-3{
        top:41% !important;
    }
</style>
<div class="container-fluid pt-1">
    <div>
        @if (Session::has('message'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
                    
        <form action="{{ url('/super_admin/update_profile') }}" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">


        <div class="row m-4">
        <div class="col-md-10 pl-0  m-auto ml-0 pr-0 mr-0 pb-5" style="background:white;">
            <div class="border-bottom">
                <h5 class="p-1 ml-3 mt-3 font-weight-bold" style="font-size: inherit;">Profile</h5>
            </div>
            <div class="row">
                <div class="col-md-3 p-2 text-center">
                    @if($user->image == NULL )
                    <div class="row">
                        <div class="small-12 medium-2 large-2 columns">
                            <div class="circle">
                            <!-- User Profile Image -->
                            <img class="profile-pic w-100" src="{{ URL('/public') }}/public_site_assets/img/profile_img.png">
                            </div>
                        </div>
                    </div>   

                    @else

                    <div class="row">
                        <div class="small-12 medium-2 large-2 columns">
                            <div class="circle">
                            <!-- User Profile Image -->
                            <img class="profile-pic w-100" src="{{ URL('/public') }}/user_images/{{ $user->image }}">
                            </div>
                        </div>
                    </div>   

                    @endif
                    
                    <h6 class="font-weight-bold mb-0" style="font-size:16px;">{{ $user->name }}</h6>
                    <p class="" style="font-size:13px;">{{ $user->role }}</p>
                </div>
                <div class="col-md-9 pt-3 pr-5">
                    <div>
                        <label for="" class="font-weight-bold" style="font-size:13px;">Change E-mail Address</label>
                        <input type="email" readonly class="form-control w-75" name="email" placeholder="Enter Your email" value="{{ $user->email }}">
                    </div>
                    <div class="mt-3">
                        <label for="" class="font-weight-bold" style="font-size:13px;">Change Password</label><br>
                        <a href="#"  data-toggle="modal" data-target="#exampleModal" class="htrh font-weight-bold" style="color:#ab39fa !important;font-size:13px;">
                            <i class="fa fa-plus-circle"></i> Change Password</a>
                    </div>
                    
                    <div class="mt-3">
                            <label  class="font-weight-bold" style="font-size:13px;" for="input">Change Image!</label>
                        <div class="container">
                            <div class="input">
                                <input class="" id="file" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <a href="{{ url('/super_admin/dashboard') }}" class="btn btn-primary">Cancel</a>
                        </div>
                        <div class="col-md-6 pl-5">
                            <button type="submit" class="btn btn-info ml-4">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

    </div>


            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-0">&times;</span>
                </button>
                </div>
                <div class="modal-body" style="background:#f8fafb;">
                    <!--<form>-->
                    
                    @if(Session::has('ch_message'))

                                <div class="alert-box success">

                                    <h2>{{ Session::get('ch_message') }}</h2>

                                </div>

                            @endif
                    
                    <form method="post" action="{{ url('super_admin/send_pass_var') }}" >
                        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="font-weight-bold" style="font-size:13px;">Current Password</label>
                            <input type="password" name="oldPassowrd" class="form-control" placeholder="current password">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" style="font-size:13px;" for="exampleInputEmail1">Password</label>
                            <input type="password" name="newPassowrd" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" style="font-size:13px;" for="exampleInputEmail1">Confirm Password</label>
                            <input type="password" name="confermPassowrd" class="form-control" placeholder="confirm password">
                        </div>
                    
                </div>
                <div class="row pl-0 ml-0 mr-0 pr-0 pt-3 pb-3">
                <div class="col-md-6">
                    <button type="submit" class="btn w-50" style="background:#882ef9 !important; color:white;font-size:14px; font-weight:500;">Update</button>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ url('/super_admin/profile') }}" class="btn w-50" style="background:#f2f4f6;color:#798da3; font-size:14px; font-weight:500;" data-dismiss="modal">CANCEL</a>
                </div>
                </div>
                
                </form>
            </div>
            </div>
        </div>



<script>
    $(function(){
	var container = $('.container'), inputFile = $('#file'), img, btn, txt = 'Browse', txtAfter = 'Browse another pic';
			
	if(!container.find('#upload').length){
		container.find('.input').append('<input type="button" value="'+txt+'" id="upload">');
		btn = $('#upload');
		container.prepend('<img src="" class="hidden" alt="Uploaded file" id="uploadImg" width="200">');
		img = $('#uploadImg');
	}
			
	btn.on('click', function(){
		img.animate({opacity: 0}, 300);
		inputFile.click();
	});

	inputFile.on('change', function(e){
		container.find('label').html( inputFile.val() );
		
		var i = 0;
		for(i; i < e.originalEvent.srcElement.files.length; i++) {
			var file = e.originalEvent.srcElement.files[i], 
				reader = new FileReader();

			reader.onloadend = function(){
				img.attr('src', reader.result).animate({opacity: 1}, 700);
			}
			reader.readAsDataURL(file);
			img.removeClass('hidden');
		}
		
		btn.val( txtAfter );
	});
});

$(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});

$(".upload-button").on('click', function() {
   $(".file-upload").click();
});
});
</script>
@endsection