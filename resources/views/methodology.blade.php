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
<!--Methodology step -->

    <div id="form-step-4">
              <form action="{{ url('/add_step_3') }}" method="POST">
          
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
          <input type="hidden" name="project_id" value="{{ collect(request()->segments())->last() }}" >


          <div class="row m-3">
            <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
            <div class="col-md-9 pb-5" style="background:white;">
              <div class="row">
                <div class="col-md-8 pl-0 pr-0">
                  <div class="border-bottom">
                    <h5 class="p-2 ml-3 mt-3 font-weight-bold" style="font-size: inherit;">Methodology</h5>
                  </div>
                </div>
                <div class="col-md-4 pl-0 pr-0 border-left">
                  <div class="border-bottom">
                    <h5 class="ml-3 mt-1 font-weight-bold" style="font-size: inherit; padding:18.5px 0px 9px 3px;">Benchmarks <img src="{{ URL('/public') }}/public_site_assets/img/close.png" class="rounded-circle" alt=""></h5>
                  </div>
                </div>
              </div>
              
              
                @for($j=0; $j < count($data_array['methodology']); $j++)
                    <div class="row border-bottom">
                        <div class="col-md-8 mt-3">
                          <label class="container">{{ $data_array['methodology'][$j]->methodology_name }}
                            <input type="checkbox" name="methodology_id[]" id="methodology_{{ $data_array['methodology'][$j]->id }}" value="{{ $data_array['methodology'][$j]->id }},1%">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="col-md-4 border-left">
                           <div class="text-center pt-2">
                                <div class="slidecontainer">
                                    <span class="text-success float-left">1%</span>
                                    <span class="text-warning">Calculate</span>
                                    <output id="rangevalue{{$j}}" class="float-right text-danger">200%</output>
                                    <input type="range" min="1" max="200" onchange="changeApplicationStatus(rangevalue{{$j}}.value=value+'%', 'methodology_{{ $data_array['methodology'][$j]->id }}' )" class="slider" id="myRange" value="0">
                                    
                                  </div>
                          </div>
                        </div>
                    </div>
                    
                @endfor
              
              <div class="mt-4 fmrs">
                  <div class="form-row">
                    <div class="col-md-6 pl-5 mt-4">
                        <button type="button" class="bnt-20 w-25">Previous</button>
                    </div>
                    <div class="col-md-6 mt-4 pr-5 text-right">
                        <button type="submit" class="bnt-21 w-25" id="btn-13">Next</button>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        
        </form>
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
