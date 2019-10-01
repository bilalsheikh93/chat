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
        /*float: left;*/
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
    <!--user step compeleted-->

    <div id="form-step-3">
      <form action="{{ url('/next_step_3') }}" method="POST">
          
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
          <input id="project_id" type="hidden" name="project_id" value="{{ collect(request()->segments())->last() }}" >



        <div class="row m-3">
          <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
          <div class="col-md-9 pl-0 pr-0" style="background:white;">
            <div class="border-bottom">
              <h5 class="p-2 ml-3 mt-2 font-weight-bold" style="font-size: inherit;">User Assignments</h5>
            </div>
            <div class="mt-4 fmrs">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <div class="form-row  mt-4">
                    <div class="col-md-3 pr-0 text-left">
                        <label class="mt-2 ml-4 mr-0" id="lbls-1" style="font-size: 13px;">User:</label>
                        <label class="mt-2 ml-4 mr-0" id="lbls" style="font-size: 13px;">Assign selected items to:</label>
                    </div>
                    <div class="col-md-7">
                        <select name="user_id" id="seltd" class="form-control">
                          <option value="" selected="selected">Please Select</option>
                           @for($k=0; $k < count($data_array['company_user']); $k++)
                                <option value="{{ $data_array['company_user'][$k]->id }}" id="{{ $data_array['company_user'][$k]->name }}">{{ $data_array['company_user'][$k]->name }}</option>
                            @endfor
                        </select>
                      
                    </div>
                    <div>

                    </div>
                  </div>
                
                <div id="assignments_value"></div>  
                  
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

$(document).ready(function (){

        $('#seltd').change(function(){
    
            var van="{{ url('/') }}";
            $.ajax({
                url:van+'/get_assignments',
                async:false,
                success: function(result)
                {
                    $("#assignments_value").html(result);
                }

            });
            
      });
});


</script>



<script>
    $(function(){
        $("#btn-1-2").click(function(){
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
            alert("asdadas");
            return false;
        });
    });
</script>

@endsection
