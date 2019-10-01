@extends('layouts.app')

@section('content')

@extends('layouts.nav')

<style>
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
          .bnt-33{
            padding: 5px 50px;
            background: #a310c9;
            border: 1px solid #a310c9;
            border-radius: 5px;
            color: white;
            cursor: pointer;
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
                        <input type="text" class="form-control" placeholder="Scenarios Name" name="" id="">                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <textarea name="" id="" class="form-control" style="border-radius:20px;" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 mt-2">
                        <p class="text-info">Please select which value levers you intend to modify</p>
                        <label class="container ml-3">Revenue
                            <input type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container ml-3">COGS
                            <input type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container ml-3">SG&A
                            <input type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                </div>
                <div class="text-right mt-4">
                    <a href="{{ URL('/scenarios_inner_two') }}" class="bnt-33" style="text-decoration: none;color: white;">Next</a>
                </div>
            </form> 
        </div>
    </div>
</div>

@endsection