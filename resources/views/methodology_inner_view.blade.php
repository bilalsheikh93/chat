@extends('layouts.app')

@section('content')

@extends('layouts.nav')


<style>
    ul.b {
        list-style-type: square-circle;
    }
    ul.a {
        list-style-type: circle;
    }
        
    
    .slidecontainer {
        width: 100%;
    }

    .slider {
    -webkit-appearance: none;
    width: 100%;
    height: 3px;
    background: #d3d3d3;
    outline: none;
    border-radius:10px;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
    }

    .slider:hover {
    opacity: 1;
    }

    .slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 12px;
    height:12px;
    background: #4CAF50;
    cursor: pointer;
    border-radius:50%;
    }

    .slider::-moz-range-thumb {
    width: 15px;
    height: 15px;
    background: #4CAF50;
    cursor: pointer;
    }
    .bnt-33{
        padding: 5px 50px;
        background: #a310c9;
        border: 1px solid #a310c9;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }
</style>
    
<div class="container_fliud">
    <div class="row m-3">
                  <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
        <div class="col-md-9 ml-auto " style="background:white;">
            <div class="row">
                <div class="col-md-5">
                    <ul class="b p-4">
                        <li class="mt-2 mb-2 font-weight-bold">Absolute Valuation Models</li>
                        <ul class="a ml-4">
                            <li class="mt-2">Dividend Discount Model</li>
                            <li class="mt-3">Free Cash Flow to Equity Model</li>
                            <li class="mt-3">Free Cash Flow to the Firm Mode</li>
                        </ul>
                        <li class="mt-2 mb-2 font-weight-bold">Relative Pricing Models</li>
                        <ul class="a ml-4">
                            <li class="mt-3">Price to Earnings</li>
                            <li class="mt-3">Price to Sales</li>
                            <li class="mt-3">Price to Bookings</li>
                        </ul>
                        <li class="mt-2 mb-2 font-weight-bold">Asset Purchase Models</li>
                        <ul class="a ml-4">
                            <li class="mt-3">Based on Assets Value</li>
                            <li class="mt-3">Based on Equity Value</li>
                        </ul>
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="text-center pt-2">
                        <h5 class="font-weight-normal" style="font-size:14px;">Discount Rates</h5>
                        <div class="slidecontainer mt-3">
                            <span class="text-success float-left">1%</span>
                            <span class="text-warning">Calculate</span>
                            <output id="rangevalue" class="float-right text-danger">200%</output>
                            <input type="range" min="1" max="200" onchange="changeApplicationStatus(rangevalue.value=value+'%')" class="slider" id="myRange" value="0">
                        </div>
                        <div class="slidecontainer mt-3">
                            <span class="text-success float-left">1%</span>
                            <span class="text-warning">Calculate</span>
                            <output id="rangevalue" class="float-right text-danger">200%</output>
                            <input type="range" min="1" max="200" onchange="changeApplicationStatus(rangevalue.value=value+'%')" class="slider" id="myRange" value="0">
                        </div>
                        <div class="slidecontainer mt-4">
                            <span class="text-success float-left">1%</span>
                            <span class="text-warning">Calculate</span>
                            <output id="rangevalue" class="float-right text-danger">200%</output>
                            <input type="range" min="1" max="200" onchange="changeApplicationStatus(rangevalue.value=value+'%')" class="slider" id="myRange" value="0">
                        </div>
                    </div>
                    <div class="text-center pt-4">
                        <h5 class="font-weight-normal" style="font-size:14px;">Multiples</h5>
                        <div class="slidecontainer mt-3">
                            <span class="text-success float-left">1%</span>
                            <span class="text-warning">Calculate</span>
                            <output id="rangevalue" class="float-right text-danger">200%</output>
                            <input type="range" min="1" max="200" onchange="changeApplicationStatus(rangevalue.value=value+'%')" class="slider" id="myRange" value="0">
                        </div>
                        <div class="slidecontainer mt-3">
                            <span class="text-success float-left">1%</span>
                            <span class="text-warning">Calculate</span>
                            <output id="rangevalue" class="float-right text-danger">200%</output>
                            <input type="range" min="1" max="200" onchange="changeApplicationStatus(rangevalue.value=value+'%')" class="slider" id="myRange" value="0">
                        </div>
                        <div class="slidecontainer mt-4">
                            <span class="text-success float-left">1%</span>
                            <span class="text-warning">Calculate</span>
                            <output id="rangevalue" class="float-right text-danger">200%</output>
                            <input type="range" min="1" max="200" onchange="changeApplicationStatus(rangevalue.value=value+'%')" class="slider" id="myRange" value="0">
                        </div>
                    </div>
                    <div class="text-center pt-4">
                        <h5 class="font-weight-normal" style="font-size:14px;">Premium above value</h5>
                        <div class="slidecontainer mt-2">
                            <span class="text-success float-left">1%</span>
                            <span class="text-warning">Calculate</span>
                            <output id="rangevalue" class="float-right text-danger">200%</output>
                            <input type="range" min="1" max="200" onchange="changeApplicationStatus(rangevalue.value=value+'%')" class="slider" id="myRange" value="0">
                        </div>
                        <div class="slidecontainer mt-3">
                            <span class="text-success float-left">1%</span>
                            <span class="text-warning">Calculate</span>
                            <output id="rangevalue" class="float-right text-danger">200%</output>
                            <input type="range" min="1" max="200" onchange="changeApplicationStatus(rangevalue.value=value+'%')" class="slider" id="myRange" value="0">
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-3">
                    <p class="text-danger mt-4" style="font-size:12px; font-weight:600;">Note:  Discount Rate is dependent on the WACC that is calculated.  It will fall in between the high and low of the range.
                    The Low and High range can be manually manipulated to create a sensitivity analysis. This number is a percentage.</p>
                    <p class="text-danger mt-5" style="font-size:12px; font-weight:600;">Note:  High and Low can be manipulated by the user. 
                    The median is auto calculated based on the range selected.  This number is a multiple.</p>
                    <p class="text-danger mt-5 pt-3" style="font-size:12px; font-weight:600;">Note:  High and Low can be manipulated by the user.
                    The median is auto calculated based on the range selected.This number is a percentage</p>
                </div> --}}
                
            </div>
            <div class="text-right mt-4">
                    <a href="{{ URL('/scenarios_inner_one') }}" class="bnt-33" style="text-decoration: none;color: white;">Next</a>
                </div>
        </div>
    </div>
</div>
<script>


        function changeApplicationStatus(value,id)
          {
              
              // alert(id);
              // alert(value);
              var checkbox_value = document.getElementById(id).value;
              // alert(checkbox_value.length);
              var nameArr = checkbox_value.split(',');
              // nameArr[0];
              // alert(nameArr[0]);
              var final_value = nameArr[0]+','+value;
              // alert(final_value);
              
              document.getElementById(id).value = final_value;
              // value = "";
              // final_value = " ";
          }
      
          $(function(){
              
              $("#btn-13").click(function(){
                  if($('[type="checkbox"]').is(":checked"))
                  {
                      // alert("Congratulations!");
                      return true;
                  }
                  else
                  {
                      alert("Sorry! Please Select one Methodology");
                      return false;
                  }
              });
          });
      </script>



@endsection
