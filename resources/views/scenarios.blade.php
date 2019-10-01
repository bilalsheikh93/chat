@extends('layouts.app')

@section('content')

@extends('layouts.nav')


<script>

$(document).ready(function (){

    $('select').on('change', function() {
        $('select').css({'color':'#823adb','font-weight':'500'});
        $("#lbls").css({'dispaly': 'block'});
        $("#lbls-1").hide();
        $("#lbls").show();
        $("#assis").css({'dispaly': 'block'});
          $("#assis").show();
      });
});


</script>
<style>
  $theme:       #454cad;
  $dark-text:   #5f6982;
  .uploader {
    display: block;
    clear: both;
    margin: 0 auto;
    width: 100%;
    max-width: 600px;

  file-drag {
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


</style>
<div id="">
    <form action="">
        <div class="row m-4 pl-0 pr-0">
          <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
          <div class="col-md-9 pl-0 pr-0 pb-5" style="background:white;">
            <div class="row">
              <div class="col-md-12 pl-0 pr-0">
                <div class="row border-bottom ml-3 mr-3">
                  <div class="col-md-7">
                     <h5 class="p-2 mt-3 font-weight-bold" style="font-size: inherit;">Scenarios</h5>
                  </div>
                 <div class="col-md-5">
                   <div class="row">
                     <div class="col-md-4 border-left p-3">
                       <div class="htrh mt-1 ml-2" style="color:#ab39fa !important; font-weight:600;">
                          <i class="fa fa-print"></i>
                          <span>Print</span>
                       </div>
                    </div>
                    <div class="col-md-4 border-left p-3">
                      <div class="htrh mt-1 ml-2" style="color:#ab39fa !important; font-weight:600;">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                      </div>
                    </div>
                    <div class="col-md-4 border-left p-3">
                      <div class="htrh mt-1 ml-2" style="color:#b9c5d2 !important; font-weight:600;">
                        <i class="fa fa-trash"></i>
                        <span>Delete</span>
                      </div>
                    </div>
                   </div>
                 </div>
                </div>
                <div class="form-row text-center p-2" style="background: #f4f7fa;">
                  <div class="col-md-9 pl-4 ml-2 mt-1 pt-1 text-left">
                      <a href="#" data-toggle="modal" data-target="#exampleModal-1" class="htrh font-weight-bold" style="color:#ab39fa !important;font-size: 13px;">
                        <i class="fa fa-plus-circle"></i> Add Scenarios </a>
                  </div>
                </div>
                <div class="pl-4">
                  <h5 class="p-2 mt-3 font-weight-bold" style="font-size: inherit;">Scenarios Name</h5>
                  <p class="p-2 pera-7 w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi laudantium officiis aliquam debitis illo rerum inventore 
                    pariatur provident ratione minus optio, dolorem nemo vel. Fugit at in ex temporibus nobis.</p>
                </div>
                <div class="form-row text-center p-2" style="background: #f4f7fa;">
                </div>
                <div>
                  <h5 class="p-2 mt-3 ml-4 font-weight-bold" style="font-size: 13px;">Which levers do you want to change for this scenario?</h5>
                  <div class="row ml-3 mr-3 border-bottom">
                    <div class="col-md-4">
                      <div class="">
                        <div class="mt-1">
                          <label class="container" style="color:black !important;">Revenue
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <div class=" mt-1">
                          <label class="container" style="color:black !important;">Assets
                            <input type="checkbox">
                              <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ml-3 mr-3 border-bottom">
                    <div class="col-md-4">
                      <div class="">
                        <div class="mt-1">
                          <label class="container" style="color:black !important;">Cost of Good Sold
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <div class=" mt-1">
                          <label class="container" style="color:black !important;">Liabilities
                            <input type="checkbox">
                              <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ml-3 mr-3 border-bottom">
                    <div class="col-md-4">
                      <div class="">
                        <div class="mt-1">
                          <label class="container" style="color:black !important;">Sales, General and Admin 
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <div class=" mt-1">
                          <label class="container" style="color:black !important;">Capital Expenditures
                            <input type="checkbox">
                              <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ml-3 mr-3 border-bottom">
                    <div class="col-md-4">
                      <div class="">
                        <div class="mt-1">
                          <label class="container" style="color:black !important;">Taxes
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <div class=" mt-1">
                          <label class="container" style="color:black !important;">Investiments                         
                            <input type="checkbox">
                              <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ml-3 mr-3 border-bottom">
                    <div class="col-md-4">
                      <div class="">
                        <div class="mt-1">
                          <label class="container" style="color:black !important;">Interest Expense
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <div class=" mt-1">
                          <label class="container" style="color:black !important;">Debt Pay Off Schedule
                            <input type="checkbox">
                              <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ml-3 mr-3 border-bottom">
                    <div class="col-md-4">
                      <div class="">
                        <div class="mt-1">
                          <label class="container" style="color:black !important;">Description
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <div class=" mt-1">
                          <label class="container" style="color:black !important;">Working Capital
                            <input type="checkbox">
                              <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ml-3 mb-5 mr-3">
                    <div class="col-md-4">
                      <div class="">
                        <div class="mt-1">
                          <label class="container" style="color:black !important;">Amortization
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center pt-3 pl-3 pr-3" style="background: #f4f7fa;">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card pb-4 border-0" style="">
                        <div class="card-body pl-0 pr-0 text-left">
                          <h6 class="card-subtitle mb-2 pt-3 pb-3 pl-4 revn">Revenue-Related Items</h6>
                          <h5 class="bdrs pl-4 pr-4 pb-4 pt-4">Product A <span class="float-right pt-1 revn-1 font-italic">Basline</span></h5>
                          <div class="pl-4 pr-4 pt-4">
                            <span class="revn-1" style="font-size:14px;">Volume</span>
                            <span class="float-right font-weight-bold" style="font-size:12px;">10,000</span>
                          </div>
                          <div class="pl-4 pr-4 pt-4">
                            <span class="revn-1" style="font-size:14px;">Price</span>
                            <span class="float-right font-weight-bold" style="font-size:12px;">10,000</span>
                          </div>
                          <div class="pl-4 pr-4 pt-4 pb-4">
                            <span class="revn-1 font-weight-bold" style="font-size:14px;color:#882ef9 !important;">Total</span>
                            <span class="float-right font-weight-bold" style="font-size:12px;color:#882ef9 !important;">100,000,000</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card pb-5 border-0" style="">
                        <div class="card-body pl-0 pr-0 text-left">
                          <h6 class="card-subtitle mb-2 pt-3 pb-3 pl-4 revn">forecast impact</h6>
                          <div class="form-row text-center p-3 ml-3 mr-3 mt-4 mb-3  rounded" style="background: #fbf8ff;">
                            <div class="row">
                              <div class="col-md-4 mt-2">
                                <button class="bnt-22 pt-1" type="button" name="">Increase</button>
                              </div>
                              <div class="col-md-4 pr-0 text-right">
                                <span class="revn-1 pb-2 pl-4" style="font-size:14px;color:#ae82e3 !important;">%</span>
                                <span class="revn-1" style="font-size:14px;color:#ae82e3 !important;">Value</span>
                              </div>
                              <div class="col-md-4 pr-3 text-right">
                                <span class="font-weight-bold pb-2 pl-4" style="font-size:12px;">10</span>
                                <span class="font-weight-bold pt-1" style="font-size:12px;">10,000</span>
                              </div>
                            </div>
                          </div>
                          <div class="pb-2">
                            <div class="form-row text-center p-3 ml-3 mr-3 mt-2 mb-2 rounded" style="background: #fbf8ff;">
                              <div class="row">
                                <div class="col-md-4 mt-2">
                                  <button class="bnt-22 pt-1" type="button" name="">Increase</button>
                                </div>
                                <div class="col-md-4 pr-0 text-right">
                                  <span class="revn-1 pb-2 pl-4" style="font-size:14px;color:#ae82e3 !important;">%</span>
                                  <span class="revn-1" style="font-size:14px;color:#ae82e3 !important;">Value</span>
                                </div>
                                <div class="col-md-4 pr-3 text-right">
                                  <span class="font-weight-bold pb-2 pl-4" style="font-size:12px;">10</span>
                                  <span class="font-weight-bold pt-1" style="font-size:12px;">10,000</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card pb-5 border-0" style="">
                        <div class="card-body pb-5 pl-0 pr-0 text-left">
                          <h6 class="card-subtitle mb-2 pt-3 pb-3 pl-4 revn">delta</h6>
                          <div class="pl-4 pb-4 pt-5">
                            <p class="revn-1" style="color:black !important;">1,100,000 units</p>
                            <p class="revn-1" style="color:black !important;">$1.10/units</p>
                            <p class="revn-1 font-weight-bold" style="font-size:14px;color:#882ef9 !important;">$1,210,000</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
                <div>
                  <h6 class="card-subtitle mb-2 pt-4 mt-2 ml-3 pb-3 pl-4 revn">impact Description</h6>
                  <p class="w-100 pera-7 pl-4 pr-5 ml-3" style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus ullam laborum perferendis nostrum, doloremque, tenetur fugit autem quam fugiat quibusdam reprehenderit unde delectus dolorem, voluptate aspernatur. Magni, pariatur mollitia?</p>
                  <div class="row">
                    <div class="col-md-3 pl-5 mt-3">
                      <div id="file-upload-form" class="uploader">
                          <input id="file-upload" type="file" name="fileUpload" accept="image/*" style="display:none" />
                          <label for="file-upload" id="file-drag">
                            <img id="file-image" src="{{ URL('/public') }}/public_site_assets/img/upload.png" class="w-100" height="65px" alt="Preview" class="hidden">
                            <div id="start" class="" style="display:none;">
                              <i class="fa fa-download" aria-hidden="true"></i>
                              <div>Select a file or drag here</div>
                              <div id="notimage" class="hidden">Please select an image</div>
                              <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                            </div>
                            <div id="response" class="hidden">
                              <div id="messages"></div>
                              
                            </div>
                          </label>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3 pl-2 frms">
                      <textarea name="" id="" class="form-control" rows="2" placeholder="Exhibt Description"></textarea>
                    </div>
                    <div class="col-md-3 mt-3 pl-2">
                      <button type="submit" class="bnt-23">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
    
  </div>
  <!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="">   
    <div class="modal fade right" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog right" role="document">
        <button type="button" style="font-size: 2.5rem;" class="float-left close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <div class="modal-content right">
          <div class="modal-header pb-0 pl-2" style="border-bottom: 2px solid #fcf9f9 !important;">
            <h5 class="modal-title" id="exampleModalLabel">
              <button type="button" class="bnt-24 pt-3">Model Input</button>
              <button type="button" class="bnt-25 pt-3" style="">Cost of Capital Calculator</button>
              
            </h5>
            <button class="bnt-24 pt-2 mt-2" style="padding: 2px 9px !important; border-radius:5px !important;" type="button">Save</button>  
          </div>
          <div class="modal-body">
            <form action="" class="frmssss">
              <div class="row">
                <div class="col-md-4 mt-2 pr-0">
                  <label for="" style="font-size:13px;">Discount forecast Period:</label>
                </div>
                <div class="col-md-8 pl-2">
                  <input type="text" class="form-control" style="height: calc(2.1rem + 2px) !important;" placeholder="CurrentData" name="" id="">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-4 pr-0">
                  <label class="mt-3" style="font-size: 13px;">Risk Free Rate:</label>
                </div>
                <div class="col-md-8 pl-2 text-left">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="background-color: #f5f7f8 !important;">
                          <img src="https://img.icons8.com/ios/14/000000/percentage.png">
                      </div>
                    </div>
                    <input type="text" class="form-control  border-left-0" style="height: calc(2.1rem + 2px) !important;" aria-label="Text input with checkbox">
                  </div>
                </div>
              </div>
              <div class="row mt-1">
                <div class="col-md-4 pr-0">
                  <label class="mt-3" style="font-size: 13px;">Market Permium:</label>
                </div>
                <div class="col-md-8 pl-2 text-left">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="background-color: #f5f7f8 !important;">
                          <img src="https://img.icons8.com/ios/14/000000/percentage.png">
                      </div>
                    </div>
                    <input type="text" class="form-control  border-left-0" style="height: calc(2.1rem + 2px) !important;" aria-label="Text input with checkbox">
                  </div>
                </div>
              </div>
              <div class="row fmrs mt-2">
                <div class="col-md-4 mt-2 pr-0">
                  <label for="" style="font-size:13px;">Risk Profile of the Target:</label>
                </div>
                <div class="col-md-8 pl-2">
                  <select  class="form-control seclt" style="height: calc(2.1rem + 2px) !important;" name="" id="">
                    <option value="">CurrentData</option>
                  </select>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-4 mt-2 pr-0">
                  <label for="" style="font-size:13px;">Beta:</label>
                </div>
                <div class="col-md-8 pl-2">
                  <input type="text" class="form-control" style="height: calc(2.1rem + 2px) !important;" placeholder="CurrentData" name="" id="">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-6 pr-0">
                  <label class="mt-3" style="font-size: 13px;letter-spacing: -0.7px;">Your company's Current Net Income Margin:</label>
                </div>
                <div class="col-md-6 pl-3 text-left">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="background-color: #f5f7f8 !important;">
                          <img src="https://img.icons8.com/ios/14/000000/percentage.png">
                      </div>
                    </div>
                    <input type="text" class="form-control  border-left-0" style="height: calc(2.1rem + 2px) !important;" aria-label="Text input with checkbox">
                  </div>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-5 mt-2 pr-0">
                  <label for="" style="font-size:13px;">Your company's Current Sale:</label>
                </div>
                <div class="col-md-7 pl-2">
                  <input type="text" class="form-control" style="height: calc(2.1rem + 2px) !important;" placeholder="CurrentData" name="" id="">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-5 mt-2 pr-0">
                  <label for="" style="font-size:13px;">Your company's Total Assets:</label>
                </div>
                <div class="col-md-7 pl-2">
                  <input type="text" class="form-control" style="height: calc(2.1rem + 2px) !important;" placeholder="CurrentData" name="" id="">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-5 mt-2 pr-0">
                  <label for="" style="font-size:13px;">Your company's Equity Balnce:</label>
                </div>
                <div class="col-md-7 pl-2">
                  <input type="text" class="form-control" style="height: calc(2.1rem + 2px) !important;" placeholder="CurrentData" name="" id="">
                </div>
              </div>
              <div class="form-row mt-4 text-center p-2" style="background: #f4f7fa;">
                <div class="row mt-2">
                    <div class="col-md-6 mt-2 pr-0">
                        <Label class="font-weight-bold" style="font-size:13px;">Required Rate of Return - CAPM:</Label>
                    </div>
                    <div class="col-md-6 pl-2">
                      <input type="text" class="form-control border-0" style="height: calc(2.1rem + 2px) !important;background: #f4f7fa;" placeholder="" name="" id="">
                    </div>
                  </div>
              </div>
              <div class="form-row mt-1 text-center p-2" style="background: #f4f7fa;">
                <div class="row mt-2">
                    <div class="col-md-6 mt-2 pr-0">
                        <Label class="font-weight-bold" style="font-size:13px;">Required Rate of Return - Dupont:</Label>
                    </div>
                    <div class="col-md-6 pl-2">
                      <input type="text" class="form-control border-0" style="height: calc(2.1rem + 2px) !important;background: #f4f7fa;" placeholder="" name="" id="">
                    </div>
                  </div>
              </div>
              <div class="row fmrs mt-5">
                <div class="col-md-5 mt-2 pr-0">
                  <label for="" style="font-size:13px;">Select the appropriate method:</label>
                </div>
                <div class="col-md-7 pl-2">
                  <select  class="form-control seclt" style="height: calc(2.1rem + 2px) !important;" name="" id="">
                    <option value="">CurrentData</option>
                  </select>
                </div>
              </div>
              <div class="border-bottom mt-5">
                <h6 class="assin">Exhibits</h6>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <div id="file-upload-form" class="uploader">
                          <input id="file-upload" type="file" name="fileUpload" accept="image/*" style="display:none" />
                          <label for="file-upload" id="file-drag">
                            <img id="file-image" src="{{ URL('/public') }}/public_site_assets/img/upload.png" class="w-100" height="100px" alt="Preview" class="hidden">
                            <div id="start" class="" style="display:none;">
                              <i class="fa fa-download" aria-hidden="true"></i>
                              <div>Select a file or drag here</div>
                              <div id="notimage" class="hidden">Please select an image</div>
                              <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                            </div>
                            <div id="response" class="hidden">
                              <div id="messages"></div>
                              
                            </div>
                          </label>
                        </div>
                </div>
                <div class="col-md-6">
                  <textarea name="" class="form-control" id="" rows="3" placeholder="CurrentData"></textarea>
                </div>
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
<script src='https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js'></script>
  <script>
 // File Upload
// 
function ekUpload(){
  function Init() {

    console.log("Upload Initialised");

    var fileSelect    = document.getElementById('file-upload'),
        fileDrag      = document.getElementById('file-drag'),
        submitButton  = document.getElementById('submit-button');

    fileSelect.addEventListener('change', fileSelectHandler, false);

    // Is XHR2 available?
    var xhr = new XMLHttpRequest();
    if (xhr.upload) {
      // File Drop
      fileDrag.addEventListener('dragover', fileDragHover, false);
      fileDrag.addEventListener('dragleave', fileDragHover, false);
      fileDrag.addEventListener('drop', fileSelectHandler, false);
    }
  }

  function fileDragHover(e) {
    var fileDrag = document.getElementById('file-drag');

    e.stopPropagation();
    e.preventDefault();

    fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
  }

  function fileSelectHandler(e) {
    // Fetch FileList object
    var files = e.target.files || e.dataTransfer.files;

    // Cancel event and hover styling
    fileDragHover(e);

    // Process all File objects
    for (var i = 0, f; f = files[i]; i++) {
      parseFile(f);
      uploadFile(f);
    }
  }

  // Output
  function output(msg) {
    // Response
    var m = document.getElementById('messages');
    m.innerHTML = msg;
  }

  function parseFile(file) {

    console.log(file.name);
    output(
      '<strong>' + encodeURI(file.name) + '</strong>'
    );
    
    // var fileType = file.type;
    // console.log(fileType);
    var imageName = file.name;

    var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
    if (isGood) {
      document.getElementById('start').classList.add("hidden");
      document.getElementById('response').classList.remove("hidden");
      document.getElementById('notimage').classList.add("hidden");
      // Thumbnail Preview
      document.getElementById('file-image').classList.remove("hidden");
      document.getElementById('file-image').src = URL.createObjectURL(file);
    }
    else {
      document.getElementById('file-image').classList.add("hidden");
      document.getElementById('notimage').classList.remove("hidden");
      document.getElementById('start').classList.remove("hidden");
      document.getElementById('response').classList.add("hidden");
      document.getElementById("file-upload-form").reset();
    }
  }

  function setProgressMaxValue(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.max = e.total;
    }
  }

  function updateFileProgress(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.value = e.loaded;
    }
  }

  function uploadFile(file) {

    var xhr = new XMLHttpRequest(),
      fileInput = document.getElementById('class-roster-file'),
      pBar = document.getElementById('file-progress'),
      fileSizeLimit = 1024; // In MB
    if (xhr.upload) {
      // Check if file is less than x MB
      if (file.size <= fileSizeLimit * 1024 * 1024) {
        // Progress bar
        pBar.style.display = 'inline';
        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
        xhr.upload.addEventListener('progress', updateFileProgress, false);

        // File received / failed
        xhr.onreadystatechange = function(e) {
          if (xhr.readyState == 4) {
            // Everything is good!

            // progress.className = (xhr.status == 200 ? "success" : "failure");
            // document.location.reload(true);
          }
        };

        // Start upload
        xhr.open('POST', document.getElementById('file-upload-form').action, true);
        xhr.setRequestHeader('X-File-Name', file.name);
        xhr.setRequestHeader('X-File-Size', file.size);
        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
        xhr.send(file);
      } else {
        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
      }
    }
  }

  // Check for the various File API support.
  if (window.File && window.FileList && window.FileReader) {
    Init();
  } else {
    document.getElementById('file-drag').style.display = 'none';
  }
}
ekUpload();
</script>

@endsection
