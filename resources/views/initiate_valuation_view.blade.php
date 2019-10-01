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
    <div class="row m-4" id="form-step">
      <div class="col-12 pl-0 ml-0 pr-0 mr-0 bg-white h-100">
        <h5 class="p-2 ml-3 mt-2 font-weight-bold" style="font-size: inherit;">Select a Transaction</h5>
        <div class="row pl-0 ml-0 pr-0 mr-0  border-top" style="border-top: 1px solid #f7f7f7 !important;">
          <div class="col-md-2 text-center" style="background:#f2fbed; border-bottom: 1px solid white;">
              <a href="" class="acqust mt-4 pt-2">Merge  with or Acquire a company</a>
          </div>
          <div class="col-md-7 pb-2">
            <p class="pt-4 pera-7 ml-5">Initiate this valuation if your company is interested in orchestrating an Acquisition, using either equity of cash.</p>
          </div>
          <div class="col-md-3">
            <button class="bnt-20 mt-4" id="form-step-1"><a href="{{ url('/step_1') }}" style="width: 100%;height: 100%;margin-top: 10px;">START</a></button>
          </div>
        </div>
        <div class="row pl-0 ml-0 pr-0 mr-0  border-top" style="border-top: 1px solid #f7f7f7 !important;">
            <div class="col-md-2" style="background:#eefafb; border-bottom: 1px solid white;">
                <a href="" class="merger mt-4 pt-2 text-center">Leveraged Buy Out</a>
            </div>
            <div class="col-md-7 pb-2">
              <p class="pt-4 pera-7 ml-5" >Select this transaction if you are a private equity firm that is interested in using leverage But out.</p>
            </div>
            <div class="col-md-3">
              <button class="bnt-20 mt-4" id="form-step-1">START</button>
            </div>
          </div>
          <div class="row pl-0 ml-0 pr-0 mr-0  border-top" style="border-top: 1px solid #f7f7f7 !important;">
            <div class="col-md-2 text-center" style="background:#fce4f3; border-bottom: 1px solid white;">
                <a href="" class="dive mt-2 pb-3 pt-2">Divest a Business Unit</a>
            </div>
            <div class="col-md-7 pb-2">
              <p class="pt-4 pera-7 ml-5">Determine the potential values of a business Unit that you intend to divest.</p>
            </div>
            <div class="col-md-3">
              <button class="bnt-20 mt-4" id="form-step-1">START</button>
            </div>
          </div>
          <div class="row pl-0 ml-0 pr-0 mr-0  border-top" style="border-top: 1px solid #f7f7f7 !important;">
            <div class="col-md-2" style="background:#fcf7ef; border-bottom: 1px solid white;">
                <a href="" class="sale mt-4 pt-2 text-left">Sell my Interprise</a>
            </div>
            <div class="col-md-7 pb-2">
              <p class="pt-4 pera-7 ml-5">No idea what your business cloud be worth? Estimate it by selecting the transaction type.</p>
            </div>
            <div class="col-md-3">
              <button class="bnt-20 mt-4" id="form-step-1">START</button>
            </div>
          </div>
          <div class="row pl-0 ml-0 pr-0 mr-0  border-top" style="border-top: 1px solid #f7f7f7 !important;">
            <div class="col-md-2" style="background:#ebeff8; border-bottom: 1px solid white;">
                <a href="" class="value mt-4 pt-2">Joint Venture</a>
            </div>
            <div class="col-md-7 pb-2">
              <p class="pt-4 pera-7 ml-5">Select this transaction if you are interested in understanding the value of a joint Venture between your enterprise another one.</p>
            </div>
            <div class="col-md-3">
              <button class="bnt-20 mt-4" id="form-step-1">START</button>
            </div>
          </div>
      </div>
    </div>
</div>

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
                             } else {
                               alert("Sorry!! Can't remove first row!");
                             }
                        });
                  });      
                  </script>



@endsection
