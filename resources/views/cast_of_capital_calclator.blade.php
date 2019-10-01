@extends('layouts.app')

@section('content')

@extends('layouts.nav')


<script>

$(document).ready(function (){
  

    $('#cast_of_equity').on('change', function() {
        var selectedCountry = $(this).children("option:selected").val();
        if(selectedCountry == 'estimation')
        {
          $("#estimation").show();
          $("#estimation-1").show();
          $("#capm").hide();
          $("#dupont").hide();
          $("#dupont-1").hide();
        }
        else if(selectedCountry == 'capm')
        {
          $("#capm").show();
          $("#estimation").hide();
          $("#dupont").hide();
          $("#estimation-1").hide();
          $("#dupont-1").hide();
        }
        else if(selectedCountry == 'dupont')
        {
          $("#capm").hide();
          $("#estimation").hide();
          $("#dupont").show();
          $("#estimation-1").hide();
          $("#dupont-1").show();
        }
        else{
          alert("error");
        }

      });

    
});


</script>

<style>
#remove{
  display: none;
}
$theme:       #454cad;
$dark-text:   #5f6982;
.uploader {
  display: block;
  clear: both;
  margin: 0 auto;
  width: 100%;
  max-width: 600px;

  #file-drag {
    float: left;
    clear: both;
    padding: 2rem 1.5rem;
    text-align: center;
    transition: all .2s ease;
    user-select: none;
  }

  #start {
    float: left;
    clear: both;
    width: 100%;
    &.hidden {
      display: none;
    }
    i.fa {
      font-size: 50px;
      margin-bottom: 1rem;
      transition: all .2s ease-in-out;
    }
  }
  #response {
    float: left;
    clear: both;
    width: 100%;
    &.hidden {
      display: none;
    }
    #messages {
      margin-bottom: .5rem;
    }
  }

  #file-image {
    display: inline;
    margin: 0 auto .5rem auto;
    width: auto;
    height: auto;
    max-width: 180px;
    &.hidden {
      display: none;
    }
  }
  
  #notimage {
    display: block;
    float: left;
    clear: both;
    width: 100%;
    &.hidden {
      display: none;
    }
  }

  progress,
  .progress {
    // appearance: none;
    display: inline;
    clear: both;
    margin: 0 auto;
    width: 100%;
    overflow: hidden;
  }

  .progress[value]::-webkit-progress-bar {
    border-radius: 4px;
  }

  .progress[value]::-webkit-progress-value {
    background: linear-gradient(to right, darken($theme,8%) 0%, $theme 50%);
    border-radius: 4px; 
  }
  .progress[value]::-moz-progress-bar {
    background: linear-gradient(to right, darken($theme,8%) 0%, $theme 50%);
    border-radius: 4px; 
  }

  input[type="file"] {
    display: none;
  }
}  




  html body{
    font-family: 'Manjari', sans-serif !important;
  }
  .icome{
    font-size: 11px;
    color: #b3becb;
    text-transform: uppercase;
    font-weight: 600;
  }
  
  .update-1{
    position: relative;
    z-index: 99999;
  }
  .choose{
    position: absolute;
    top:30px;
    left: 33%;
    cursor: pointer;
  }
  .count{
    font-size: 15px;
    color: #778ca2;
    font-weight: bold;
  }
  .count-1{
    font-size: 15px;
    color: #882ef9;
    font-weight: bold;
  }
    .container {
      display: block;
      position: relative;
      color: #bababa;
      padding-left: 35px;
      cursor: pointer;
      font-size: 12px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      font-family: 'Didact Gothic', sans-serif;
    }
    .container-1 {
      display: block;
      position: relative;
      color: black;
      padding-left: 35px;
      cursor: pointer;
      font-size: 12px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      font-family: 'Didact Gothic', sans-serif;
    }
    /* Hide the browser's default checkbox */
    .container input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }
    .container-1 input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }
    /* Create a custom checkbox */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 6px;
      height: 17px;
      width: 17px;
      background-color: #eee;
    }
    .checkmark-1 {
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 50%;
      height: 17px;
      width: 17px;
      background-color: #eee;
    }
    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
      background-color: #ccc;
    }
    .container-1:hover input ~ .checkmark-1 {
      background-color: #ccc;
    }
    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
      background-color: #882ef9;
    }
    .container-1 input:checked ~ .checkmark-1 {
      background-color: #4fe5bb;
    }
    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }
    .checkmark-1:after {
      content: "";
      position: absolute;
      display: none;
    }
    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
      display: block;
    }
    .container-1 input:checked ~ .checkmark-1:after {
      display: block;
    }
    /* Style the checkmark/indicator */
    .container .checkmark:after {
      left: 5px;
        top: 2px;
        width: 7px;
        height: 11px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }
    .container-1 .checkmark-1:after {
      left: 5px;
        top: 2px;
        width: 7px;
        height: 11px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }
    .custom-select option{
      padding: 10px 10px;
    }
    
    
    #capm{
    display: none;
}
#dupont{
    display: none;
}
#dupont-1{
    display: none;
}



.custom-file-input {
      color: transparent;
      position: relative !important;
      top: 15px !important;
    }
    .custom-file-input::-webkit-file-upload-button {
      visibility: hidden;
    }
    .custom-file-input::before {
      content: 'Select some files';
      color: black;
      display: inline-block;
      background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
      border: 1px solid #999;
      border-radius: 3px;
      padding: 47px 78px !important;
      outline: none;
      white-space: nowrap;
      position: relative;
      top: 20px;
      -webkit-user-select: none;
      cursor: pointer;
      text-shadow: 1px 1px #fff;
      font-weight: 700;
      font-size: 10pt;
    }
    .custom-file-input:hover::before {
      border-color: black;
    }
    .custom-file-input:active {
      outline: 0;
    }
    .custom-file-input:active::before {
      background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
    }

</style>
  <div class="container-fluid pt-1">
<!--Cost Capital Form-->

    <div id="form-step-5">
      <form action="{{ url('/add_step_4') }}" method="POST" enctype="multipart/form-data">
          
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
          <input type="hidden" name="project_id" value="{{ collect(request()->segments())->last() }}" >

         <div class="row m-3 pl-0 pr-0">
             <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
              
            <div class="col-md-9 pl-0 pr-0 pb-5" style="background:white;">
              <div class="row">
                <div class="col-md-12 pl-0 pr-0">
                  <div class="border-bottom ml-4 mr-4">
                    <h5 class="p-2 ml-3 mt-3 font-weight-bold" style="font-size: inherit;">Cost of Capital Calculator</h5>
                  </div>
                  <div class="border-bottom mb-4 ml-4 mr-4">
                    <h6 class="ml-4 mt-4 assin" style="width: 10% !important;">Cost of Debt</h6>
                  </div>
                </div>
                <div class="col-md-12 pl-0 pt-1 pr-0 ml-4 mr-4">
                  <table class="table">
                      <tr>
                          <td class="border-top-0 row">
                            <div class="col-md-4">
                              <div class="row">
                                  <div class="col-md-5 pr-0 text-left">
                                      <label class="mt-3" style="font-weight:600;font-size: 13px;">Type of Debt</label>
                                  </div>
                                  <div class="col-md-7 pl-0 pr-0 text-right">
                                      <input type="type" name="cost_of_debt_type[]" class="form-control">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="row">
                                  <div class="col-md-4 text-left">
                                      <label class="mt-3" style="font-weight:600;font-size: 13px;">Amount</label>
                                  </div>
                                  <div class="col-md-8 pl-0 pr-0">
                                      <span class="float-left font-weight-bold mt-2 pt-2">$</span>
                                      <input type="type" class="form-control calculate_prie" style="width:90%;" name="cost_of_debt_amount[]">
                                  </div>
                              </div>
                            </div>

                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-3 pl-2  text-left">
                                        <label class="mt-1" style="font-weight:600;font-size: 13px;">Interest Rate</label>
                                    </div>
                                    <div class="col-md-6 pr-0 pl-0">
                                        <input type="type" class="form-control calculate2 float-left" style="width:90%" name="cost_of_debt_rate[]">
                                        <span class="mt-2 pt-1 ml-1">%</span>
                                    </div>
                                    <div class="col-md-2 pl-3 mt-2">
                                        <a href="javascript:void(0);" class="clrss" style="font-size:18px;" id="addMore" title="Add More Person">
                                            <i class="fa fa-plus-circle"></i>
                                          </a>
                                    </div>
                                </div>
                            </div>
                          </td>
                        </tr>
                  </table>
                  <table  class="table mb-0 mr-4" id="tb">
                    <tr class="">
                    </tr>
                    </tr>
                      <tr>
                        <td class="border-top-0 row">
                          <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-5 text-left">
                                    <label class="mt-3" style="font-weight:600; font-size: 13px;">Type of Debt</label>
                                </div>
                                <div class="col-md-7 pl-0 pr-0 text-right">
                                    <input type="type" name="cost_of_debt_type[]" class="form-control">
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-4 text-left">
                                    <label class="mt-3" style="font-weight:600;font-size: 13px;">Amount</label>
                                </div>
                                <div class="col-md-8 pl-0 pr-0">
                                    <span class="float-left font-weight-bold mt-2 pt-2">$</span>
                                    <input type="type" class="form-control calculate_prie" style="width:90%;" name="cost_of_debt_amount[]">
                                </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3 pl-2 text-left">
                                  <label class="mt-1" style="font-weight:600;font-size: 13px;">Interest Rate</label>
                              </div>
                              <div class="col-md-6 pr-0 pl-0">
                                  <input type="type" class="form-control calculate2 float-left" style="width:90%;" name="cost_of_debt_rate[]">
                                  <span class="mt-2 pt-1 ml-1">%</span>
                              </div>
                              <div class="col-md-2">
                                  <a href='javascript:void(0);' style="font-size:18px;"  class='remove text-danger'>
                                    <span class='glyphicon glyphicon-remove'>
                                        <i class="fa fa-minus-square"></i>
                                    </span>
                                  </a>
                                </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
                
              </div>
                <div class="row pl-0 pr-0 mr-0 ml-0 pt-4 pb-3" style="background:#f4f7fa;">
                  <div class="col-md-3">

                  </div>
                  <div class="col-md-5">
                    <div class="row">
                      <div class="col-md-4 pr-0 text-left">
                          <label class="mt-3 ml-5 pl-5 mr-0" style="font-weight:600;font-size: 13px;">Total</label>
                      </div>
                      <div class="col-md-8 pl-4">
                          <span class="float-left font-weight-bold mt-2 pt-2 pl-3">$</span>
                          <input type="type" id="total_price" class="form-control ml-3" style="width:80% !important" name="total_debt_amount">
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-4 pl-0">
                    <div class="row">
                      <div class="col-md-4 pr-0 pl-0 text-left">
                          <label class="mt-1 mr-0" style="font-weight:600;font-size: 13px;">Weighted Interest Rate</label>
                      </div>
                      <div class="col-md-8 pl-0">
                        <input type="type" class="form-control float-left" style="width:85% !important" id="final_total" name="total_debt_weighted_interest_rate">
                        <span class="mt-2 pt-1 ml-1">%</span>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="border-bottom mb-4 mt-3 fmrs">
                    <h6 class="ml-4 mr-4 assin" style="width: 11% !important;">Cost of Equity</h6>
                  </div>
                <div class="row">
                    <div class="col-md-2 text-left">
                      <label for="" class="ml-4 mt-3 font-weight-bold" style="font-size: 12px;">Method</label>
                    </div>
                    <div class="col-md-8 fmrs">
                      <select name="cost_of_equity_type" class="form-control" id="cast_of_equity">
                        <option value="estimation">Estimation</option>
                        <option value="capm">CAPM</option>
                        <option value="dupont">DuPont</option>
                      </select>
                    </div>
                    <div class="col-md-12 pl-0 pt-1 pr-0 ml-4 mr-4" id="estimation">
                      <table class="table">
                          <tr>
                            <td class="border-top-0 row pb-0">
                              <div class="col-md-4">
                                <div class="row">
                                  <div class="col-md-12 pr-0 text-left">
                                      <label class="mt-3" style="font-weight:600;font-size: 13px;">Equity Description</label>
                                      <textarea type="type" name="cost_of_equity_description[]" class="form-control" rows="3"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3 mt-md-4 mt-0 pt-3">
                                <div class="row">
                                    <div class="col-md-4 text-left">
                                        <label class="mt-3" style="font-weight:600;font-size: 13px;">Amount</label>
                                    </div>
                                    <div class="col-md-8 pl-0 pr-0">
                                        <span class="float-left font-weight-bold mt-2 pt-2">$</span>
                                        <input type="type" class="form-control calculate_second_prie" style="width:90%;" name="cost_of_equity_amount[]">
                                    </div>
                                </div>
                              </div>
  
                              <div class="col-md-5 mt-md-4 mt-0 pt-3">
                                <div class="row">
                                  <div class="col-md-3 pl-2 pr-0 text-left">
                                      <label class="mt-1" style="font-weight:600;font-size: 13px;">Required Rate of Return</label>
                                  </div>
                                  <div class="col-md-6 pr-0 pl-0">
                                      <input type="type" style="width:90%;" class="form-control  calculate2_second float-left" name="cost_of_equity_rate[]">
                                      <span class="mt-2 pt-1 ml-1">%</span>
                                  </div>
                                  <div class="col-md-2 pl-3 mt-2">
                                    <a href="javascript:void(0);" class="clrss" style="font-size:18px;" id="addMore-1" title="Add More Person">
                                      <i class="fa fa-plus-circle"></i>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                      </table>
                      <table  class="table mb-0 mr-4" id="tb-1">
                        <tr class="">
                        </tr>
                        <tr>
                            <td class="border-top-0 row pt-0">
                              <div class="col-md-4">
                                <div class="row">
                                  <div class="col-md-12 pr-0 text-left">
                                    <label class="" style="font-weight:600;font-size: 13px;">Equity Description</label>
                                    <textarea type="type" name="cost_of_equity_description[]" class="form-control" rows="3"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3 mt-md-4 mt-0">
                                <div class="row">
                                    <div class="col-md-4 text-left">
                                        <label class="mt-3" style="font-weight:600;font-size: 13px;">Amount</label>
                                    </div>
                                    <div class="col-md-8 pl-0 pr-0">
                                        <span class="float-left font-weight-bold mt-2 pt-2">$</span>
                                        <input type="type" class="form-control  calculate_second_prie" style="width:90%;" name="cost_of_equity_amount[]">
                                    </div>
                                </div>
                              </div>
    
                              <div class="col-md-5 mt-md-4">
                                <div class="row">
                                  <div class="col-md-3 pl-2 pr-0 text-left">
                                      <label class="mt-1" style="font-weight:600;font-size: 13px;">Required Rate of Return</label>
                                  </div>
                                  <div class="col-md-6 pr-0 pl-0">
                                      <input type="type" style="width:90%;" class="form-control calculate2_second float-left" name="cost_of_equity_rate[]">
                                      <span class="mt-2 pt-1 ml-1">%</span>
                                  </div>
                                  <div class="col-md-2">
                                      <a href='javascript:void(0);' style="font-size:18px;"  class='remove-1 text-danger'>
                                        <span class='glyphicon glyphicon-remove'>
                                            <i class="fa fa-minus-square"></i>
                                        </span>
                                      </a>
                                    </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div id="estimation-1">
                      <div class="row w-100 pl-0 pr-0 mr-0 ml-0 pt-4 pb-3" style="background:#f4f7fa;">
                        <div class="col-md-3">
      
                        </div>
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-4 pr-0 text-left">
                                <label class="mt-3 ml-5 pl-5 mr-0" style="font-weight:600;font-size: 12px;">Total</label>
                            </div>
                            <div class="col-md-8 pl-4">
                                <span class="float-left mt-2 pt-1">$</span>
                                <input type="type" id="second_table_total" class="form-control ml-3" style="width:80% !important" name="total_equity_amount">
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-4 pl-0">
                          <div class="row">
                            <div class="col-md-4 pr-1 pl-0 text-left">
                                <label class="mt-1 mr-0" style="font-weight:600;font-size: 12px;">Weighted Equity Required Rate of Return</label>
                            </div>
                            <div class="col-md-8 pl-0">
                              <input type="type" class="form-control float-left" style="width:85% !important" id="final_total_for_second" name="total_equity_weighted_interest_rate">
                              <span class="mt-2 pt-1 ml-1">%</span>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                   
                    <div class="" id="capm">
                      <div class="row ml-0">
                        <div class="col-md-12 mt-4">
                          <div class="row">
                            <div class="col-md-2">
                                <label for="" class="ml-4 mt-3 font-weight-bold" style="font-size: 12px;">Risk Free Rate</label>
                            </div>
                            <div class="col-md-8 pr-4">
                              <span class="float-left font-weight-bold mt-2 pt-1">%</span>
                              <input type="type" id="risk_free_rate" class="form-control" style="margin-left: 0px; width:90%;" name="cost_of_equity_risk_rate">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 mt-4">
                          <div class="row">
                            <div class="col-md-2">
                                <label for="" class="ml-4 mt-3 font-weight-bold" style="font-size: 12px;">Market premium</label>
                            </div>
                            <div class="col-md-8 pr-4">
                                <span class="float-left font-weight-bold mt-2 pt-1">$</span>
                                <input type="type" id="market_premium" class="form-control" style="margin-left: 0px;width:90%;" name="cost_of_equity_market_premium">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mt-4">
                          <div class="row">
                            <div class="col-md-4 pr-0">
                                <label for="" class="ml-4 mt-1 font-weight-bold" style="font-size: 12px;">Company Classification</label>
                            </div>
                            <div class="col-md-8 pl-0">
                                <select name="cost_of_equity_company_classification" class="form-control" id="" style="margin-left: 15px;">
                                  <option value=""></option>
                                  <option value=""></option>
                                  <option value=""></option>
                                  <option value=""></option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 mt-4">
                          <div class="row">
                            <div class="col-md-3 text-right">
                                <label for="" class="ml-4 mt-3 font-weight-bold" style="font-size: 13px;">Beta</label>
                            </div>
                            <div class="col-md-8">
                                <span class="float-left font-weight-bold mt-2 pt-1">%</span>
                                <input type="type" id="beta" class="form-control" style="width:90%;" name="cost_of_equity_beta">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row w-100 pl-0 pr-0 mr-0 ml-0 pt-4 mt-4 pb-3" style="background:#f4f7fa;">
                          <div class="col-md-4 text-right count"><p>Calculated Cost of Equity</p></div>
                          <div class="col-md-4"><p class="count-1" id="camp">$10.000</p></div>
                          <input type="hidden" name="total_cost_capm" id="camp_value">
                      </div>
                    </div>
                    <div id="dupont">
                      <div class="row ml-0" >
                        <div class="col-md-5 mt-4">
                          <div class="row">
                            <div class="col-md-5">
                                <label for="" class="ml-4 mt-3 font-weight-bold" style="font-size: 13px;">Sales</label>
                            </div>
                            <div class="col-md-7 pl-2">
                                <span class="float-left font-weight-bold mt-2 pt-1">$</span>
                                <input type="type" class="form-control" style="margin-left: 0px;width:90%;" id="dupont_sales" name="cost_of_equity_sale">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5 mt-4">
                          <div class="row">
                            <div class="col-md-5">
                              
                                <label for="" class="ml-4 mt-3 font-weight-bold" style="font-size: 13px;">Net Income</label>
                            </div>
                            <div class="col-md-7">
                                <span class="float-left font-weight-bold mt-2 pt-1">$</span>
                                <input type="type" class="form-control" id="dupont_net_income" style="width:90%;" name="cost_of_equity_net_income">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5 mt-4">
                          <div class="row">
                            <div class="col-md-5">
                                <label for="" class="ml-4 mt-3 font-weight-bold" style="font-size: 13px;">Total Assets</label>
                            </div>
                            <div class="col-md-7 pl-2">
                                <span class="float-left font-weight-bold mt-2 pt-1">$</span>
                                <input type="type" class="form-control" style="margin-left: 0px;width:90%;" id="dupont_total_assets" name="cost_of_equity_total_assets">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5 mt-4">
                          <div class="row">
                            <div class="col-md-5">
                                <label for="" class="ml-4 mt-3 font-weight-bold" style="font-size: 13px;">Total Equity</label>
                            </div>
                            <div class="col-md-7">
                                <span class="float-left font-weight-bold mt-2 pt-1">$</span>
                                <input type="type" class="form-control" id="dupont_total_equity" style="width:90%;" name="cost_of_equity_total_equity">
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    
                </div>
                
                <div class="w-100" id="dupont-1">
                  <div class="row w-100 pl-0 pr-0 mr-0 ml-0 pt-4 mt-4 pb-3" style="background:#f4f7fa;">
                    <div class="col-md-3">
                      <div class="float-left">
                        <label for="" class="icome">Net Income Margin</label>
                        <h6 class="count" id="result_net_income">%10.00</h6>
                        <input type="hidden" id="result_net_income_1" >
                      </div>
                      <div class="float-right mr-4 mt-4">
                          <a style="font-size:15px; font-weight:100;"  class='remove text-secondary'>
                              <i class="fa fa-times"></i>
                            </a>
                      </div>
                    </div>
                    <div class="col-md-2 pl-0">
                      <div class="float-left">
                        <label for="" class="icome">Sales TurnOver</label>
                        <h6 class="count" id="result_sale_turnover">$10,000</h6>
                        <input type="hidden" id="result_sale_turnover_1" >
                      </div>
                      <div class="float-right mt-4">
                          <a style="font-size:15px; font-weight:100;"  class='remove text-secondary'>
                              <i class="fa fa-times"></i>
                            </a>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="float-left">
                        <label for="" class="icome">LeverAge</label>
                        <h6 class="count" id="result_leverage">%10.00</h6>
                        <input type="hidden" id="result_leverage_1" >
                      </div>
                      <div class="float-right mt-1">
                          <span class="font-weight-bold text-secondary" style="font-size: 30px;">=</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="float-left">
                          <label for="" class="icome">Calclated cost of equity</label>
                          <h6 class="count-1" id="result_equity_total">%10.00</h6>
                          <input type="hidden" id="result_equity_total_1" name="total_cost_dupont" >
                        </div>
                        <div class="float-right mr-4 mt-4">
                        </div>
                      </div>
                  </div>
                </div>
                
                <div class="border-bottom mb-4">
                  <h6 class="ml-4 mt-4 assin" style="width: 26% !important;">Weighted Average cost of Capital</h6>
                </div>
                <div class="row pl-0 pr-0 mr-0 ml-0 pt-4 mt-4 pb-3">
                  <div class="col-md-3">
                    <div class="float-left">
                      <label for="" class="icome">Debt Weighting</label>
                      <h6 class="count" id="debt_weighting">%10.00</h6>
                      <input type="hidden" id="debt_weighting_1" >
                    </div>
                    <div class="float-right mr-4 mt-4">
                        <a style="font-size:15px; font-weight:100;"  class='remove text-secondary'>
                            <i class="fa fa-times"></i>
                          </a>
                    </div>
                  </div>
                  <div class="col-md-2 pl-0">
                    <div class="float-left">
                      <label for="" class="icome">Cost of debt</label>
                      <h6 class="count" id="cost_of_debt">$10,000</h6>
                      <input type="hidden" id="cost_of_debt_1" >
                    </div>
                    <div class="float-right mt-2">
                        <span class="font-weight-bold text-secondary" style="font-size: 30px;">+</span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="float-left">
                      <label for="" class="icome">equity Weighting</label>
                      <h6 class="count" id="equity_weighting">%10.00</h6>
                      <input type="hidden" id="equity_weighting_1" >
                    </div>
                    <div class="float-right mt-4 mr-4">
                        <a style="font-size:15px; font-weight:100;"  class='remove text-secondary'>
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="float-left">
                      <label for="" class="icome">Cost of equity</label>
                      <h6 class="count" id="cost_of_equity">$10,000</h6>
                      <input type="hidden" id="cost_of_equity_1" >
                    </div>
                  </div>
                  <div class="col-md-2 pl-0">
                    <div class="float-left mt-1">
                        <span class="font-weight-bold text-secondary" style="font-size: 30px;">=</span>
                    </div>
                    <div class="float-right mr-3">
                      <h6 class="count-1" style="font-size:20px !important;" id="final_price">%40.00</h6>
                      <input type="hidden" id="final_price_1" name="total_cost_of_capital">
                    </div>
                  </div>
                </div>
                <div class="border-bottom mb-4">
                  <h6 class="ml-4 mt-4 assin" style="width: 6% !important;">Exhibits</h6>
                </div>
                <table class="table" id="tb-2">
                  <tr class="">
                  </tr>
                  <tr>
                    <td class="row border-top-0">
                        <div class="col-md-5 pl-5 profile-img">
                            <input class="custom-file-input"  id="profile-img" value="profile-img-tag" type="file" name="cost_of_exhibit_file[]" accept="image/*" />
                            <img style="margin-top:-32px;" src="{{ URL('/public') }}/public_site_assets/img/upload.png" id="profile-img-tag" width="250px" height="100px" />
                          </div>
                        <div class="col-md-5 pr-0 pl-0">
                          <textarea name="cost_of_exhibit_description[]" id="" class="form-control" rows="4" placeholder="Exhibits Description"></textarea>
                          <div class="text-right mt-3">
                              <a href="javascript:void(0);" class="bnt-20 pt-2 pr-2 w-25" id="addMore-2" style="color:#8e39fa !important">Add a Exhibits</a>
                              
                              <a href="javascript:void(0);" class="remove-2 btn btn-danger w-25 mt-1" style="height:35px !important;">Remove</a>
                          </div>
                        </div>
                    </td>
                    
                  </tr>
                </table>
                <div class="mt-4 fmrs">
                  <div class="form-row ml-1 mr-1 border-top">
                    <div class="col-md-6 pl-5 mt-4">
                        <button type="button" class="bnt-20 w-25">Previous</button>
                    </div>
                    <div class="col-md-6 mt-4 pr-5 text-right">
                        <button type="submit" class="bnt-21 w-25" id="btn-1-4">Next</button>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </form>
    </div>

</div>

<script src='https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js'></script>

<script>
    
    function readURL(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#'+id).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    //$(".profile-img").click(function(){
      
    $("#profile-img").change(function(){
      var id = $(this).attr('value');
        readURL(this , id);
    });
    
</script>

                  <script>
                  $(function(){
                      $('#addMore').on('click', function() {
                                var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
                                data.find("input").val('');
                       });
                       $(document).on('click', '.remove', function() {
                           var trIndex = $(this).closest("tr").index();
                              if(trIndex>1) {
                               $(this).closest("tr").remove();
                               calculate_price();
                             } else {
                               alert("Sorry!! Can't remove first row!");
                             }
                        });
                        
                        
                        
                        $('#addMore-1').on('click', function() {
                                var data = $("#tb-1 tr:eq(1)").clone(true).appendTo("#tb-1");
                                data.find("input").val('');
                       });
                       $(document).on('click', '.remove-1', function() {
                           var trIndex = $(this).closest("tr").index();
                              if(trIndex>1) {
                               $(this).closest("tr").remove();
                             } else {
                               alert("Sorry!! Can't remove first row!");
                             }
                        });
                        
                    //     $('#addMore-2').on('click', function() {
                    //       // alert("asdsasdas");
                    //             var data = $("#tb-2 tr:eq(1)").clone(true).appendTo("#tb-2");
                    //             data.find("input").val('');
                    //             $("#remove").css('display','block');
                    //             $("#remove").show();     
                    //   });
                    var count = 0;
                      $('#addMore-2').on('click', function() {
                          count += 1;
                          // alert("asdsasdas");
                                var data = $("#tb-2 tr:eq(1)").clone(true).appendTo("#tb-2");
                                data.find("input").attr('value',count);
                                data.find("img").attr('src','{{ URL('/public') }}/public_site_assets/img/upload.png');
                                data.find("img").attr('id',count);
                                $("#remove").css('display','block');
                                $("#remove").show();     
                       });
                       
                       
                       $(document).on('click', '.remove-2', function() {
                           var trIndex = $(this).closest("tr").index();
                              if(trIndex>1) {
                               $(this).closest("tr").remove();
                             } else {
                               alert("Sorry!! Can't remove first row!");
                             }
                        });


            <!---------------- Umar Farooq ---------------------->            
                 
                 function calculate_price() {
                     var sum=0;
                    var val_1 = new Array();
                   var val_2 = new Array();
                        $( ".calculate_prie" ).each(function() {
                            var num = parseInt($( this ).val()) || 0;
                            val_1.push(num);
                            sum=parseInt(sum+num); 
                        });
                         $( ".calculate2" ).each(function() {
                            var num2 = parseInt($( this ).val()) || 0;
                            val_2.push(num2);
                            
                        });
                    var sub_total=0;
                    //alert(val_2.length);
                    
                        for(i=0;i<val_2.length;i++)
                        {
                            sub_total=sub_total+val_1[i]*val_2[i];
                        }
                        $("#total_price").val(sum.toFixed(2));
                        v1=sub_total/sum;
                        $("#final_total").val(v1.toFixed(2));
            
            /**************************************************************/
                var total_amount_of_debt=parseInt($( "#total_price" ).val()) || 0;
                var total_amount_of_equity=parseInt($( "#second_table_total" ).val()) || 0;
                var total_capital=total_amount_of_debt+total_amount_of_equity;
                var cost_of_debt=parseInt($( "#final_total" ).val()) || 0;
                var cost_of_equity=parseInt($( "#final_total_for_second" ).val()) || 0;
                var final_val=((total_amount_of_debt/total_capital)*cost_of_debt)+((total_amount_of_equity/total_capital)*cost_of_equity);
              
                $("#debt_weighting").text(cost_of_debt);
                $("#debt_weighting_1").val(cost_of_debt);
                
                $("#cost_of_debt").text(total_amount_of_debt);
                $("#cost_of_debt_1").val(total_amount_of_debt);
                
                $("#equity_weighting").text(cost_of_equity);
                $("#equity_weighting_1").val(cost_of_equity);
                
                $("#cost_of_equity").text(total_amount_of_equity);
                $("#cost_of_equity_1").val(total_amount_of_equity);
                
                $("#final_price").text(final_val);
                $("#final_price_1").val(final_val);
                
            /**************************************************************/            
                        
                    }
                
                
                
                 function calculate_second_price() {
                     var sum=0;
                    var val_1 = new Array();
                   var val_2 = new Array();
                        $( ".calculate_second_prie" ).each(function() {
                            var num = parseInt($( this ).val()) || 0;
                            val_1.push(num);
                            sum=parseInt(sum+num); 
                        });
                         $( ".calculate2_second" ).each(function() {
                            var num2 = parseInt($( this ).val()) || 0;
                            val_2.push(num2);
                            
                        });
                    var sub_total=0;
                    //alert(val_2.length);
                    
                        for(i=0;i<val_2.length;i++)
                        {
                            sub_total=sub_total+val_1[i]*val_2[i];
                        }
                        $("#second_table_total").val(sum.toFixed(2));
                        v2=sub_total/sum;
                        $("#final_total_for_second").val(v2.toFixed(2));
                         /**************************************************************/
                var total_amount_of_debt=parseInt($( "#total_price" ).val()) || 0;
                var total_amount_of_equity=parseInt($( "#second_table_total" ).val()) || 0;
                var total_capital=total_amount_of_debt+total_amount_of_equity;
                var cost_of_debt=parseInt($( "#final_total" ).val()) || 0;
                var cost_of_equity=parseInt($( "#final_total_for_second" ).val()) || 0;
                var final_val=((total_amount_of_debt/total_capital)*cost_of_debt)+((total_amount_of_equity/total_capital)*cost_of_equity);
                $("#debt_weighting").text(cost_of_debt.toFixed(2));
                $("#cost_of_debt").text(total_amount_of_debt.toFixed(2));
                
                $("#equity_weighting").text(cost_of_equity.toFixed(2));
                $("#equity_weighting_1").val(cost_of_equity);
                
                $("#cost_of_equity").text(total_amount_of_equity.toFixed(2));
                $("#cost_of_equity_1").val(total_amount_of_equity);
                
                $("#final_price").text(final_val.toFixed(2));
            /**************************************************************/  
                    }
                
                
                $(".calculate_prie").keyup(function(){
                    calculate_price();
                });      
                   $(".calculate2").keyup(function(){
                    calculate_price();
                });  
                
                
                $(".calculate_second_prie").keyup(function(){
                    calculate_second_price();
                });      
                   $(".calculate2_second").keyup(function(){
                    calculate_second_price();
                });  
                
                
                function camp() {
                    var sum=0;
                    var risk_free_rate=parseInt($("#risk_free_rate").val())|| 0;
                    var market_premium=parseInt($("#market_premium").val())|| 0;
                    var beta=parseInt($("#beta").val())|| 0;
                    
                    var result=risk_free_rate+beta*(market_premium-risk_free_rate);
                        $("#camp").text(result);
                        $("#camp_value").val(result);
                        // document.getElementById("camp_value").value = result;
                    }
                
                 $("#risk_free_rate").keyup(function(){
                    camp();
                }); 
                 $("#market_premium").keyup(function(){
                    camp();
                }); 
                 $("#beta").keyup(function(){
                    camp();
                }); 
                
                
                 function dupont() {
                   
                    var dupont_sales=parseInt($("#dupont_sales").val())|| 0;
                    var dupont_net_income=parseInt($("#dupont_net_income").val())|| 0;
                    var dupont_total_assets=parseInt($("#dupont_total_assets").val())|| 0;
                    var dupont_total_equity=parseInt($("#dupont_total_equity").val())|| 0;
                    var dupont_beta=parseInt($("#dupont_beta").val())|| 0;
                    result_net_income=parseInt(dupont_net_income/dupont_sales);
                    result_sale_turnover=parseInt(dupont_sales/dupont_total_assets);
                    result_leverage=parseInt(dupont_total_assets/dupont_total_equity);
                    result_equity_total=result_net_income*result_sale_turnover*result_leverage;
                    
                    $("#result_net_income").text(result_net_income);
                    $("#result_net_income_1").val(result_net_income);
                    
                    $("#result_sale_turnover").text(result_sale_turnover);
                    $("#result_sale_turnover_1").val(result_sale_turnover);
                    
                    $("#result_leverage").text(result_leverage);
                    $("#result_leverage_1").val(result_leverage);
                    
                    $("#result_equity_total").text(result_equity_total);
                    $("#result_equity_total_1").val(result_equity_total);
                   
                    }
                
                  $("#dupont_sales").keyup(function(){
                    dupont();
                }); 
                  $("#dupont_net_income").keyup(function(){
                    dupont();
                }); 
                
                $("#dupont_total_assets").keyup(function(){
                    dupont();
                });
                $("#dupont_total_equity").keyup(function(){
                    dupont();
                });
            <!---------------------- End ------------------------->  
                            
                        
                        
                        
                  });
                  
                  
          
                  
                  </script>



@endsection
