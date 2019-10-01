@extends('layouts.app')

@section('content')

@extends('layouts.nav')


<div class="container-fluid">
    <div class="row m-3 pl-0 pr-0">
        <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
        <div class="col-md-9 pl-0 pr-0" style="background:white !important;">
            <div class="bg-image_s">
                <div class="border-bottom" style="background:white !important;">
                    <h5 class="p-2 ml-2 font-weight-bold" style="font-size: inherit;">Valuation Completed</h5>
                </div>
                <div class="bg-image_s">
                    <div class="bg-image_s-1">
                        <div class="bg-image_s-2 ">
                            <h1 class="ml-5 pt-5" style="color: #8b33f9;font-weight: 700;">Valuation Presentation</h1>
                        </div>
                    </div>
                    <div class="">
                        <div class="bg-colr">
                            <img src="{{ URL('/public') }}/public_site_assets/img/arrow-left.png" class="img-s" alt="">
                            <img src="{{ URL('/public') }}/public_site_assets/img/play.png" class="img-s"  alt="">
                            <img src="{{ URL('/public') }}/public_site_assets/img/arrow-right.png" class="img-s"  alt="">
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="row" style="background:#f4f7fa;">
                <div class="col-md-7 m-auto">
                    <div class="row text-center">
                        <div class="col-md-3 pt-3 mt-2 mb-2 pb-3 pl-2" style="">
                            <div class="htrh mt-1" style="color:#ab39fa !important; font-weight:600;">
                                <i class="fa fa-save"></i>
                                <span>Save</span>
                            </div>
                        </div>
                        <div class="col-md-3 pt-3 pb-3 mt-2" style="height: 58px;border-left: 1px solid #eeeeee;">
                            <div class="htrh mt-1" style="color:#ab39fa !important; font-weight:600;">
                                <i class="fa fa-print"></i>
                                <span>Print</span>
                            </div>
                        </div>
                        <div class="col-md-3 pt-3 pb-3 mt-2" style="height: 58px;border-left: 1px solid #eeeeee;">
                            <div class="htrh mt-1" style="color:#ab39fa !important; font-weight:600;">
                                <i class="fa fa-share"></i>
                                <span>Share</span>
                            </div>
                        </div>
                        <div class="col-md-3 pt-3 pb-3 mt-2" style="height: 58px;border-left: 1px solid #eeeeee;">
                            <div class="htrh mt-1" style="color:#b9c5d2 !important; font-weight:600;">
                                <i class="fa fa-trash"></i>
                                <span>Delete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="" style="background:white !important;">
                <h5 class="p-2 ml-2 mt-3 summary-1">SUMMARY</h5>
                <p class="pera-7 w-100 pl-3 pr-3 pt-3 pb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ea error? Ipsam officia iusto quibusdam necessitatibus quibusdam natus odio dolor tempore optio repudiandae possimus.</p>
                <p class="pera-7 w-100 pl-3 pr-3 pt-0 pb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam deserunt in, saepe tempora perferendis reiciendis facere reprehenderit dolore consectetur, provident ipsum voluptas repudiandae possimus nostrum harum quisquam soluta laudantium aliquid.</p>
            </div>
        </div>
    </div>

</div>


@endsection
