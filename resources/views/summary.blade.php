@extends('layouts.app')

@section('content')

@extends('layouts.nav')

<style>
    select{
        color: #d5d5d5;
        font-size: 12px !important;
    }
</style>
<div class="container-fluid">
    <div class="row m-3 pl-0 pr-0">
        <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
        <div class="col-md-9 pl-0 pr-0" style="background:white;">
            <div class="row">
                <div class="col-md-12 pl-0 pr-0">
                    <div class="border-bottom ml-3 mr-3">
                    <h5 class="p-2 ml-2 mt-3 font-weight-bold" style="font-size: inherit;">Summary</h5>
                    </div>
                    <div class="ml-3 mr-3 border-bottom">
                        <h6 class="ml-3 pt-1 assin float-left" style="width:4% !important">Users</h6>
                        <button class="ml-2 mb-2 bnt-26">Edit</button>
                    </div>
                    <div class="row ml-3 mr-3 mt-4">
                        <div class="col-md-2 pl-3 mt-2">
                            <label for="" class="font-weight-bold" style="font-size:12px;">Name:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" style="height: calc(2.1rem + 2px) !important;" name="" id="">
                        </div>
                    </div>
                    <div class="row ml-3 mr-3 mt-4">
                        <div class="col-md-2 pl-3 mt-2">
                            <label for="" class="font-weight-bold" style="font-size:12px;">Email Address:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="row ml-3 mr-3 mt-4">
                        <div class="col-md-2 pl-3 mt-2">
                            <label for="" class="font-weight-bold" style="font-size:12px;">Phone Number:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="row ml-3 mr-3 mt-4 mb-5">
                        <div class="col-md-2 pl-3 mt-2">
                            <label for="" class="font-weight-bold" style="font-size:12px;">Role:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="ml-3 mr-3 border-bottom pt-4">
                        <h6 class="ml-3 pt-1 assin float-left" style="width:7% !important">Overview</h6>
                        <button class="ml-2 mb-2 bnt-26">Edit</button>
                    </div>
                    <div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Project Name:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Target Name:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Target's Sector:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Target's Industry:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pr-0 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Target Location:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Participants:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pr-0 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Valuation Start Date:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4 mb-5">
                            <div class="col-md-2 pr-0 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Valuation End Date:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                    </div>
                    <div class="ml-3 mr-3 border-bottom pt-4">
                        <h6 class="ml-3 pt-1 assin float-left" style="width:10% !important">Methodology</h6>
                        <button class="ml-2 mb-2 bnt-26">Edit</button>
                    </div>
                    <div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Method Name:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                    </div>
                    <div class="ml-3 mr-3 border-bottom pt-4">
                        <h6 class="ml-3 pt-1 assin float-left" style="width:10% !important">Model Inputs</h6>
                        <button class="ml-2 mb-2 bnt-26">Edit</button>
                    </div>
                    <div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Scenario Name:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pr-0 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;letter-spacing:-0.5px;">Scenario Description:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Forecast Impact:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pr-0 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Impact Description:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Please Select:</label>
                            </div>
                            <div class="col-md-4">
                                <select name="" style="height: calc(2.1rem + 2px) !important;"  class="form-control" id="">
                                    <option value="">Please Select</option>
                                </select>
                                {{-- <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id=""> --}}
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">%Delta:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 pt-4 mt-4" style="border-top:1px solid #eeeded;">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Exhibt:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                            <div class="col-md-2">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                            <div class="col-md-4">
                                <textarea name="" class="form-control" id="" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 pt-4 mt-4" style="border-top:1px solid #eeeded;">
                            <div class="col-md-2 pl-3 pt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Exhibt:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                            <div class="col-md-2">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                            <div class="col-md-4">
                                <textarea name="" class="form-control" id="" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ml-3 mr-3 border-bottom pt-4">
                        <h6 class="ml-3 pt-1 assin float-left" style="width:18% !important">Cost of Capital Calclator</h6>
                        <button class="ml-2 mb-2 bnt-26">Edit</button>
                    </div>
                    <div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Risk Free Rate:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Beta:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Market Premium:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Cost of Equity:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Cost of Debt:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Cost of Capital:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                    </div>
                    <div class="ml-3 mr-3 border-bottom pt-4">
                        <div class="row ml-0">
                            <div class="col-md-6">
                                <h6 class="ml-1 pt-5 assin float-left" style="width:34% !important">Actual Values - GOGS</h6>
                                <button class="ml-2 mb-2 bnt-26" style="width:12% !important; margin-top:53px;">Edit</button>
                            </div>
                            <div class="col-md-6">
                                <h6 class="ml-3 pt-5 assin float-left" style="width:26% !important">Forecast - GOGS</h6>
                                <button class="ml-2 mb-2 bnt-26" style="width:12% !important; margin-top:53px;">Edit</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="p-2 ml-4 mt-3" style="font-size: 13px;">Product</h5>
                            <div class="row ml-3 mr-3 mt-4">
                                <div class="col-md-5 pl-3 mt-2">
                                    <label for="" class="font-weight-bold" style="font-size:12px;">Product Name:</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                                </div>
                            </div>
                            <div class="row ml-3 mr-3 mt-4">
                                <div class="col-md-5 pr-0 pl-3 mt-2">
                                    <label for="" class="font-weight-bold" style="font-size:12px;">Sales of Actual Amount:</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="p-2 ml-4 mt-3" style="font-size: 13px;">Product</h5>
                            <div class="row ml-3 mr-3 mt-4">
                                <div class="col-md-5 pl-3 mt-2">
                                    <label for="" class="font-weight-bold" style="font-size:12px;">Product Name:</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                                </div>
                            </div>
                            <div class="row ml-3 mr-3 mt-4">
                                <div class="col-md-5 pr-0 pl-3 mt-2">
                                    <label for="" class="font-weight-bold" style="font-size:12px;">Sales of Actual Amount:</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ml-3 mr-3 border-bottom pt-4">
                        <h6 class="ml-3 pt-1 assin float-left" style="width:5.5% !important">Exhibits</h6>
                        <button class="ml-2 mb-2 bnt-26">Edit</button>
                    </div>
                    <div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pr-0 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Name:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pr-0 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Description:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="row ml-3 mr-3 mt-4">
                            <div class="col-md-2 pr-0 pl-3 mt-2">
                                <label for="" class="font-weight-bold" style="font-size:12px;">Review:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="height: calc(2.1rem + 2px) !important;" class="form-control" name="" id="">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 p-4">
                    <button class="bnt-27 mt-4">Calculate Company Values</button>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
