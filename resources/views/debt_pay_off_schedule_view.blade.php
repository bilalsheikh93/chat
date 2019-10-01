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
    #date::placeholder{
        color:white !important;
    }
    #date_1::placeholder{
        color:white !important;
    }
    #date_2::placeholder{
        color:white !important;
    }
    #add_depreciation{
        cursor: pointer;
        color: blue;
    }
</style>
<script>
$(document).ready(function(){
    $("#add_depreciation").click(function(){
        $("#description").append('<div class="col-md-4 mt-1"><textarea name="" class="form-control" rows="3"></textarea>&nbsp; <a href="javascript:void(0);" id="remCF">Remove</a></div>');
    });
    $("#description").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
    $("#add_depreciation_1").click(function(){
        $("#description_1").append('<div class="col-md-4 mt-1"><textarea name="" class="form-control" rows="3"></textarea>&nbsp; <a href="javascript:void(0);" id="remCF">Remove</a></div>');
    });
    $("#description_1").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
});

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
                        <input type="text" class="form-control bg-primary" name="" id="date_1" placeholder="2017">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left"></label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" name="" id="date_2" placeholder="2017">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <p class="time_period text-center">Actuals</p>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-2">
                            </div>
                            <div class="col-md-8">
                                <p id="add_depreciation">Add Amortization Expenses</p>
                            </div>
                        </div>
                        <div class="row mt-3" id="description">
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="" class="time_period text-left">Accounts Payable:</label>
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="" class="time_period text-left">Short Term Loans:</label>
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="" class="time_period text-left">Income Taxes Payable:</label>
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="" class="time_period text-left">Accrued Salaries:</label>
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="" class="time_period text-left">Lease Obligations:</label>
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="" class="time_period text-left">Long Term Debt:</label>
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="" class="time_period text-left">Deferred Income Tax:</label>
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="" class="time_period text-left">Long Term Lease Obligations:</label>
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="" class="time_period font-weight-bold text-left">Total Liabilities:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <label for="" class="time_period font-weight-bold text-left">New Debt Payoffs:</label>
                            </div>
                            <div class="col-md-6 mt-3">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="time_period text-center">Forecasted</p>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-2">
                            </div>
                            <div class="col-md-8">
                                <p id="add_depreciation">Add Amortization Expenses</p>
                            </div>
                        </div>
                        <div class="row mt-3" id="description">
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" name="" placeholder="1,000,000">
                            </div>
                        </div>
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
                    <a href="{{ URL('/assets') }}" class="bnt-33" style="text-decoration: none;color: white;">Submit</a>
                </div>
            </form> 
        </div>
    </div>
</div>

@endsection