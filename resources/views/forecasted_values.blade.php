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
</style>
  <div class="container-fluid pt-1">
<!--model input-Forecasted-Values form-->

  <div id="form-step-7">
    
    <form action="{{ url('/add_step_6') }}" method="POST">
          
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
        <input type="hidden" name="project_id" value="{{ collect(request()->segments())->last() }}" >
    
        <div class="row m-3 pl-0 pr-0">
          <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
          <div class="col-md-9 pl-0 pr-0 pb-5" style="background:white;">
            <div class="row">
              <div class="col-md-12 pl-0 pr-0">
                <div class="border-bottom ml-3 mr-3">
                  <h5 class="p-2 ml-3 mt-3 font-weight-bold" style="font-size: inherit;">Forecasted Values</h5>
                </div>

                
                
                <div class="row ml-3 mr-3">
                  <?php for($i=0; $i < 4; $i++){ ?>
                      <div class="col-md-6  border-bottom">
                        <div class="">
                          <div class="mt-3">
                            <label class="container" style="color:black !important;"><?php echo $get_model_values[$i]->model_value_name; ?>
                              <input type="checkbox" name="model_values_id[]" value="<?php echo $get_model_values[$i]->id; ?>" >
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                  <?php } ?>
                  
                </div>
                
                
                
                <div class="form-row ml-4 mt-4 mr-4 text-center">
                    <div class="col-md-3 pr-0 text-left" style="max-width:20% !important;">
                        <label class="mt-3 ml-0 mr-0" style="font-size: 13px;">Product Name:</label>
                    </div>
                    <div class="col-md-8 pl-0 text-left">
                      <input type="text" name="product_name" class="form-control" required>
                    </div>
                </div>
                <div class="form-row ml-4 mt-4 mr-4 text-center">
                  <div class="col-md-3 pr-0 text-left" style="max-width:20% !important;">
                      <label class="mt-3 ml-0 mr-0" style="font-size: 13px;">Sales of Actual Amount:</label>
                  </div>
                  <div class="col-md-8 pl-0 text-left">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                            <img src="https://img.icons8.com/ios/14/000000/percentage.png">
                        </div>
                      </div>
                      <input type="text" name="sales_of_actual_amount" class="form-control" aria-label="Text input with checkbox" required>
                    </div>
                  </div>
                </div>
                
                
                <div class="row ml-3 mr-3">
                  <?php for($j=4; $j < count($get_model_values); $j++){ ?>
                      <div class="col-md-6  border-bottom">
                        <div class="">
                          <div class="mt-3">
                            <label class="container" style="color:black !important;"><?php echo $get_model_values[$j]->model_value_name; ?>
                              <input type="checkbox" name="model_values_id[]" value="<?php echo $get_model_values[$j]->id; ?>" >
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                  <?php } ?>
                  
                </div>
                

                
                
                
                <div class="mt-5 pt-5 fmrs">
                  <div class="form-row ml-3 mr-3 border-top">
                    <div class="col-md-6 mt-4 pl-3">
                        <button type="button" class="bnt-20 w-25">Previous</button>
                    </div>
                    <div class="col-md-6 mt-4 pr-3 text-right">
                        <button type="submit" class="bnt-21 w-25" id="btn-1-6">Next</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
  </div>

</div>


<script>
    $(function(){
        $("#btn-1-6").click(function(){
            if($('[type="checkbox"]').is(":checked"))
            {
                // alert("Congratulations!");
                return true;
            }
            else
            {
                alert("Sorry! Please Select one Forecasted Value");
                return false;
            }
        });
    });
</script>




@endsection
