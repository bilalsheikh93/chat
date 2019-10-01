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
    #date_2{
        color:white;
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
    <div class="row m-4">
          <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
        <div class="col-md-8 p-4 rounded m-auto"style="background:white;">
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
                            <option value="" selected="selected">Yearly</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3 ">
                    <div class="col-md-4 text-left mt-2">
                        <label for="" class="time_period text-left">Start Date:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="" class="form-control bg-primary" placeholder="2017" id="date">
                    </div>
                </div>
                <div class="row mt-3 ">
                    <div class="col-md-4 text-left mt-2">
                        <label for="" class="time_period text-left">End Date:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="" class="form-control bg-primary" placeholder="2017" id="date_1">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" name="" placeholder="2017" id="date_2">
                    </div>
                </div>
                <p class="time_period" style="width:28.5%;border-bottom: 1px solid #000000!important;">Current Days Outstanding:</p>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="" class="time_period text-left">Accounts Receivable:</label>
                    </div>
                    <div class="col-md-4 mt-5">
                        <input type="text" class="form-control" name="" placeholder="45 Days" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Inventory:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="30 Days" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Accounts Payable:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="30 Days" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Working Capital Calculation:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="Baseline Value" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Accounts Receivable:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="" placeholder="1,000,000" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Inventory:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="300,000" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Accounts Payable:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" placeholder="(200,000)" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Total:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" name="" placeholder="1,100,000" id="">
                    </div>
                </div>
                <p class="time_period mt-2" style="width:17%;border-bottom: 1px solid #000000!important;">Change in Cash:</p>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Accounts Receivable:</label>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="" placeholder="1,000,000" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Inventory:</label>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="" placeholder="300,000" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Accounts Payable:</label>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="" placeholder="(200,000)" id="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">Total:</label>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" name="" placeholder="1,100,000" id="">
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
                    <a href="{{ URL('/investments') }}" class="bnt-33" style="text-decoration: none;color: white;">Submit</a>
                </div>
            </form> 
        </div>
    </div>
</div>

@endsection