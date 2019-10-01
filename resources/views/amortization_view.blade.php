@extends('layouts.app')

@section('content')

@extends('layouts.nav')

<script>
</script>

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
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
<script>
// $(document).ready(function(){
//     $("#add_depreciation").click(function(){
//         $("#description").append(' ');
//         $("#remCF").on('click',function(){
//             $(this).parent().parent().remove();
//         });
//     });
// });
$(document).ready(function(){
    $("#add_depreciation").click(function(){
        $("#description").append('<div class="col-md-4 mt-1"><textarea name="" class="form-control" rows="3"></textarea>&nbsp; <a href="javascript:void(0);" id="remCF">Remove</a></div>');
    });
    $("#description").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
});
</script>
<div class="container_fluid">
    <div class="row m-4" >
        <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
        <div class="col-md-9 p-4 rounded m-auto"style="background:white;">
            <form action="">
                <div class="row">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Currency:</label>
                    </div>
                    <div class="col-md-4">
                        <select name="" class="custom-select" id="">
                            <option value="" selected="selected">USA DOLLER</option>
                            <option value="">GBP</option>
                            <option value="">EUR</option>
                            <option value="">PKR</option>
                            <option value="">JPY</option>
                            <option value="">UAH</option>
                            <option value="">TRY</option>
                            <option value="">Augs</option>
                            <option value="">Sept</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Time Period:</label>
                    </div>
                    <div class="col-md-4">
                        <select name="" class="custom-select" id="">
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
                    </div>
                    <div class="col-md-8">
                        <button type="button" class="btn" id="add_depreciation" style="background: #8663c0;color: white;">Add Amortization Expenses</button>
                    </div>
                </div>
                <div class="row mt-3" id="description">
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Asset Type:</label>
                    </div>
                    <div class="col-md-4">
                        <select name="" class="custom-select" id="">
                            <option value="" selected="selected">Goodwill</option>
                            <option value="">Marketing Courses</option>
                            <option value="">Customer Service Courses</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control bg-primary" name="" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Asset Value:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="1,000,000" id="" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Amortization Rate:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="4.00%" id="" style="background-color:goldenrod;color:white;">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Amortization Expense:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="($40,000)" id="" style="background-color:goldenrod;color:white;">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Adjusted Value:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" name="" placeholder="$960,000" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Accumulated Amortization:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" name="" placeholder="$40,000" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Asset Type:</label>
                    </div>
                    <div class="col-md-4">
                        <select name="" class="custom-select" id="">
                            <option value="" selected="selected">Intangibles</option>
                            <option value="">Marketing Courses</option>
                            <option value="">Customer Service Courses</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Asset value:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="$1,000,000">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Amortization Rate:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="4.00%" style="background-color:goldenrod;color:white;">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Amortization Expense:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="($40,000)" style="background-color:goldenrod;color:white;">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Adjusted value:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" placeholder="$960,000">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Accumulated Amortization:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" placeholder="$40,000">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Total Depreciation Expense:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="($80,000)" style="background-color:goldenrod;color:white;">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4 text-center mt-2">
                        <button type="file" class="bnt-33">Upload Exhibts</button>
                        <input type="file" class="file_upload" value="Upload Exhibts">
                    </div>
                    <div class="col-md-4">
                       <textarea name="" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="text-right mt-4">
                    <a href="{{ URL('/depreciation') }}" class="bnt-33" style="text-decoration: none;color: white;">Submit</a>
                </div>
            </form> 
        </div>
    </div>
</div>

@endsection