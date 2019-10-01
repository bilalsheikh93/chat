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
    .text-left{
        text-align: left !important;
    }
    #date{
        color:white;
    }
    #date_1{
        color:white;
    }
    #date::placeholder{
        color:white !important;
    }
    #date_1::placeholder{
        color:white !important;
    }

</style>
<script>
     $(function() {
             $( "#date" ).datepicker({dateFormat: 'yy'});
          });
          $(function() {
             $( "#date_1" ).datepicker({dateFormat: 'yy'});
          });
          $(function() {
             $( "#date_2" ).datepicker({dateFormat: 'yy'});
          });
</script>
<div class="container_fluid">
    <div class="row m-4" >
        <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
        <div class="col-md-9 p-4 rounded m-auto"style="background:white;">
            <form action="" >
                <div class="row">
                    <div class="col-md-4 text-left mt-2">
                        <label for="" class="time_period">Currency:</label>
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
                <div class="row mt-3 ">
                    <div class="col-md-4 text-left mt-2">
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
                        <input type="text" class="form-control bg-primary" name="" placeholder="2017" id="date">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">End Date:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" name="" placeholder="2027" id="date_1">
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
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Product Type:</label>
                    </div>
                    <div class="col-md-4">
                        <select name="" class="custom-select" id="">
                            <option value="">Business Courses</option>
                            <option value="">Marketing Courses</option>
                            <option value="">Customer Service Courses</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="Baseline Value" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="1,000" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    
                    <div class="col-md-4">
                        <p class="time_period" style="width:83%;border-bottom: 1px solid #000000!important;">COGS Components (%):</p>
                        <label for="" class="time_period text-left">Price Per Unit Growth Rate:</label>
                    </div>
                    <div class="col-md-4 mt-5">
                        <input type="text" class="form-control" name="" placeholder="10%" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Cost of Materials:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="10%" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Cost of Production:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="10%" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Cost of Transportation:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="10%" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Cost of Inventory:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="10%" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Cost of Overhead:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="10%" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">COGS Growth Rate (%):</label>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="10%" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Total COGS % of Sales:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="50%" id=""  style="background-color:goldenrod;color:white;">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">COGS Value (based on Revenue):</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="$1,800" id=""  style="background-color:#5656ff;color:white;">
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
                    <a href="{{ URL('/revenue_rate') }}" class="bnt-33" style="text-decoration: none;color: white;">Submit</a>
                </div>
            </form> 
        </div>
    </div>
</div>

@endsection