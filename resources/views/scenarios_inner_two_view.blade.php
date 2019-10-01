@extends('layouts.app')

@section('content')

@extends('layouts.nav')


<style>
    ul.b {
        list-style-type: square-circle;
    }
</style>

<div class="container_fliud">
    <div class="row m-3">
        <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
        <div class="col-md-9 p-3" style="background:white;">
            <div class="row mt-2">
                <div class="col-md-6">
                    <input type="text" class="form-control mt-4" placeholder="revenue" name="" id="">
                </div>
                <div class="col-md-6">
                    <textarea name="" class="form-control" rows="3" placeholder="scenario description"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <input type="text" class="form-control mt-4" placeholder="COGS" name="" id="">
                </div>
                <div class="col-md-6">
                    <textarea name="" class="form-control" rows="3" placeholder="scenario description"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <input type="text" class="form-control mt-4" placeholder="SG&A" name="" id="">
                </div>
                <div class="col-md-6">
                    <textarea name="" class="form-control" rows="3" placeholder="scenario description"></textarea>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <button class="btn w-100" style="background: #7000aa;color: white;">Back</button>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4" >
                    <a href="{{ URL('/legend_inner') }}" class="btn w-100" style="background: #7000aa;color: white;">Next</a>
                </div>
            </div>
        </div> 
    </div>
    
</div>




@endsection