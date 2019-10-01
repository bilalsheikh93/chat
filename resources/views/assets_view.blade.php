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
    #add_depreciation_1{
        cursor: pointer;
    }
    #add_depreciation{
        cursor: pointer;
    }
</style>
<script>
$(document).ready(function(){
    $("#add_depreciation").click(function(){
        $("#description").append('<textarea name="" class="form-control" rows="3"></textarea>&nbsp; <a href="javascript:void(0);" id="remCF">Remove</a>');
    });
    $("#description").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
    $("#add_depreciation_1").click(function(){
        $("#description_1").append('<textarea name="" class="form-control" rows="3"></textarea>&nbsp; <a href="javascript:void(0);" id="remCF">Remove</a>');
    });
    $("#description_1").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
});
</script>
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
                        <label for="" class="time_period text-left">Base Year:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" name="" placeholder="2017" id="date_1">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                        <label for="" class="time_period text-left">End Date:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-primary" placeholder="2018" name="" id="date_2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mt-5">
                        <p class="text-primary pb-0 mb-0" id="add_depreciation">Add Debt Issue</p>
                        <div class="mt-1" id="description"></div>

                        <input type="text" class="form-control" name="" placeholder="Debt Name">
                        <input type="text" class="form-control mt-1" name="" placeholder="Debt Name">
                    </div>
                    <div class="col-md-3 mt-5 pt-4">
                        <select name="" class="custom-select" id="">
                            <option value="" selected>Debt Type</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                        <select name="" class="custom-select mt-1" id="">
                            <option value="" selected>Debt Type</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col-md-3 mt-5 pt-4">
                        <select name="" class="custom-select" id="">
                            <option value="" selected>Term</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                        <select name="" class="custom-select mt-1" id="">
                            <option value="" selected>Term</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col-md-3 mt-3">
                        <p class="text-primary" id="add_depreciation_1">Add Commentary</p>
                        <div class="mt-1" id="description_1">
                        </div>
                        <input type="text" name="" class="form-control bg-primary" id="date_2" placeholder="2019">
                        <input type="text" name="" class="form-control mt-1" placeholder="$100">
                        <input type="text" name="" class="form-control mt-1" placeholder="$100">
                        <input type="text" name="" class="form-control bg-primary mt-4" placeholder="$200">
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