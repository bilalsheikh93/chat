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

      <div class="container-fluid pt-1">
          <div class="row m-4">
            <div class="col-12 bg-white h-100">
            <div class="row" style="background:white; height:100vh;">
              <div class="col-md-12 pt-3">
                  <h5 class="font-weight-bold h6 p-3">My Assignments</h5>
                  
                    <label class="container ml-3">Revenue <span class="text-danger ml-5">In-progress - due on 1/1/19</span>
                        <input type="checkbox" name="">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container ml-3">COGS <span class="text-danger ml-5">In-progress - due on 1/1/19</span>
                        <input type="checkbox" name="">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container ml-3">SG&A <span class="text-danger ml-5">In-progress - due on 1/1/19</span>
                        <input type="checkbox" name="">
                        <span class="checkmark"></span>
                    </label>
                    
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>
@endsection