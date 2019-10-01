@extends('layouts.app')

@section('content')

@extends('layouts.nav')

<style>
    .time_period{
        color: black;
        font-size: 16px;
        font-weight: 500;
    }
    .bnt-33{
        padding: 5px 50px;
        background: #a310c9;
        border: 1px solid #a310c9;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }
    .file_upload{
        position: relative;
        top: -33px;
        left: 10px;
        opacity: 0;
        cursor: pointer !important;
    }
</style>

<div class="container_fluid">
    <div class="row m-3">
        <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

         </div>
        <div class="col-md-9 p-3 rounded"style="background:white;">
            <form action="">
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Time Period:</label>
                    </div>
                    <div class="col-md-4">
                        <select name="" class="custom-select" id="">
                            <option value="" selected>Monthly</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Start Date:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control" name="" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">End Date:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control" name="" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Product Name:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="" placeholder="product abe...." id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Product Description:</label>
                    </div>
                    <div class="col-md-8">
                        <textarea name="" rows="3" class="form-control" placeholder="product description....."></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control bg-primary" name="" placeholder="10%" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Volume:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="1,000" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Price</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="$2.00" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Period Revenue:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" name="" placeholder="$2,000" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <p class="text-danger font-weight-bold text-center">Legend</p>
                        <select name="" class="custom-select" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                        <input type="text" name="" class="form-control mt-1 bg-primary" placeholder="Calculated Value" id="">
                        <input type="text" name="" class="form-control mt-1" placeholder="Menually Entered Value" id="">
                    </div>
                </div>
                <div class="text-right mt-4">
                    <a href="{{ URL('/methodology_inner') }}" class="bnt-33" style="text-decoration: none;color: white;">Next</a>
                </div>
            </form> 
        </div>
    </div>
</div>

@endsection