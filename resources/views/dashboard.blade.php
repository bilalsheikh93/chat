@extends('layouts.app')

@section('content')



      <div class="container-fluid pt-1">
          <div class="row m-4">
            <div class="col-12 bg-white h-100">
            <div class="row" style="background:white;">
              <div class="col-md-9 p-4 tab-1">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All<span>36</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">In Progress<span>3</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Completed<span>4</span></a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><table class="table">
                      <thead class="tab-1-table">
                        <tr>
                          <th scope="col" style="border-top:0px !improtant">VALUATION TYPE</th>
                          <th scope="col"class="text-center">STARTED</th>
                          <th scope="col"class="text-center">STATUS</th>
                          <th scope="col"class="text-center">ACTIONS</th>
                        </tr>
                      </thead>
                      <tbody class="tab-1-table2">
                        <tr>
                          <th class="table-heading" scope="row">
                            <img src="{{ URL('/') }}/public_site_assets/img/icon.png" class="mr-2" style="width: 50px;height:50px;">
                             Acquisition</th>
                          <td class="table-heading">01/16/2018</td>
                          <td>
                            <button type="button" class="btn btn-success btn-sm w-50 pt-0 pb-0 pl-1 rounded pr-3 font-weight-light" style="font-size:11px;">IN PROGRESS</button></td>
                          <td style="color:#882ef9;font-weight: 600;"><a href="" style="color:#882ef9 !important;">Continue <i class="fa fa-arrow-right"></i></a></td>
                        </tr>
                        <tr>
                          <th class="table-heading" scope="row"><img src="{{ URL('/') }}/public_site_assets/img/icon.png" class="mr-2" style="width: 50px;height:50px;"> Acquisition</th>
                          <td class="table-heading">01/16/2018</td>
                          <td><button type="button" class="btn btn-primary btn-sm w-50 pt-0 pb-0 pl-1 pr-1 rounded font-weight-light" style="font-size:11px;">COMPLETED</button></td>
                          <td style="color:#882ef9;font-weight: 600;"><a href="" style="color:#882ef9 !important;">View</a></td>
                        </tr>
                        <tr>
                          <th class="table-heading" scope="row"><img src="{{ URL('/') }}/public_site_assets/img/icon.png" class="mr-2" style="width: 50px;height:50px;"> Value</th>
                          <td class="table-heading">01/16/2018</td>
                          <td><button type="button" class="btn btn-success btn-sm w-50 pt-0 pb-0 pl-1 rounded pr-3 font-weight-light" style="font-size:11px;">IN PROGRESS</button></td>
                          <td style="color:#882ef9;font-weight: 600;"><a href="" style="color:#882ef9 !important;">Continue <i class="fa fa-arrow-right"></i></a></td>
                        </tr>
                        <tr>
                          <th class="table-heading" scope="row"><img src="{{ URL('/') }}/public_site_assets/img/icon.png" class="mr-2" style="width: 50px;height:50px;"> Divestiture</th>
                          <td class="table-heading">01/16/2018</td>
                          <td><button type="button" class="btn btn-success btn-sm w-50 pt-0 pb-0 pl-1 rounded pr-3 font-weight-light" style="font-size:11px;">IN PROGRESS</button></td>
                          <td style="color:#882ef9;font-weight: 600;"><a href="" style="color:#882ef9 !important;">Continue <i class="fa fa-arrow-right"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                </div>
                <div class="row ml-0 mr-0 pr-0 pl-0 pt-5">
                  <div class="col-md-6">
                    <img src="{{ URL('/') }}/public_site_assets/img/undraw_segmentation_uioo.png" class="ml-4" alt="">
                  </div>
                  <div class="col-md-6 pl-5">
                    <p class="ml-4 mt-md-5 mt-0 pt-4 w-100 pr-3" style="color:gray; font-size:14px;">"Start a new valuation project right here" If a one-time subscribtion user tries to initiate another valuation,
                    based on their profile, send them to the screen after the "Sign Up" screen that allows them to pay for another subscribtion..</p>
                    <a href="{{ url('/initiate_valuation') }}" class="ml-4 bnt-30">INITIATE A VALUATION</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 p-0 tab-2" style="margin-top:14px;">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home2" role="tab" aria-controls="pills-home" aria-selected="true">All Conversations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile" aria-selected="false">Archived</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact" aria-selected="false">Starred</a>
                  </li>
                </ul>
                  <div class="tab-content mt-4" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
                          <span class="ml-4 mb-3" style="color: #b7b5b5;font-weight: 500;font-size: 14px;">Teams</span>
                          <div class="row pl-0 ml-0 pr-0 mr-0 active pt-4" id="box-12">
                            <div class="col-md-2 p-0">
                              <img src="{{ URL('/') }}/public_site_assets/img/37px.png" class=" ml-4">
                            </div>
                            <div class="col-md-10 pl-0 pr-0 mr-0">
                              <h6 style="font-size: 12px;"class="mt-2 ml-4">Office Managers
                                <span class="text-success" style="font-size:7px;">
                                  <i class="fa fa-circle"></i>
                                  </span>
                                  <span class="float-right mr-4" style="text-align: right;color: gray;font-size: 11px;">05:52 Am</span>
                              </h6>
                              <p style="color: gray;font-size: 11px;" class="ml-4">We have lake-front vacations rental.No specific liability waiver for that,but...</p>
                            </div>
                          </div>
                          <div class="row pl-0 ml-0 pr-0 mr-0 pt-4" id="box-12">
                            <div class="col-md-2 p-0">
                              <img src="{{ URL('/') }}/public_site_assets/img/37px.png" class=" ml-4">
                            </div>
                            <div class="col-md-10 pl-0 pr-0 mr-0">
                              <h6 style="font-size: 12px;"class="mt-2 ml-4">Finance Team
                                <span class="text-success" style="font-size:7px;">
                                  </span>
                                  <span class="float-right mr-4" style="text-align: right;color: gray;font-size: 11px;">05:52 Am</span>
                              </h6>
                              <p style="color: gray;font-size: 11px;" class="ml-4">We have lake-front vacations rental.No specific liability waiver for that,but...</p>
                            </div>
                          </div>
                          <p class="pl-4 pt-3 pb-3 mb-3 border-top border-bottom" style="color: #b7b5b5;font-weight: 500;font-size: 12px;">PERSONAL</p>
                          <div class="row pl-0 ml-0 pr-0 mr-0 mb-3 pt-2" id="box-12">
                            <div class="col-md-2 p-0">
                              <img src="{{ URL('/') }}/public_site_assets/img/37px.png" class=" ml-4">
                            </div>
                            <div class="col-md-10 pl-0 pr-0 mr-0">
                              <h6 style="font-size: 12px;"class="mt-2 ml-4">Ivan Copeland
                                <span class="text-success" style="font-size:7px;">
                                  <i class="fa fa-circle"></i>
                                  </span>
                                  <span class="float-right mr-4" style="text-align: right;color: gray;font-size: 11px;">05:52 Am</span>
                              </h6>
                              <p style="color: gray;font-size: 11px;" class="ml-4">We have lake-front vacations rental.No specific liability waiver for that,but...</p>
                              <div class="ml-4 mr-3 border-top">
                                  <img src="{{ URL('/') }}/public_site_assets/img/Pic.png" class="mt-0" alt="">
                                  <span class="pt-3 ml-2 text-secondary" style="font-size:12px;">Bauhaus Archive</span>
                              </div>
                            </div>
                          </div>
                          <div class="row pl-0 ml-0 pr-0 mr-0 mb-3 pt-3 border-top" id="box-12">
                            <div class="col-md-2 p-0">
                              <img src="{{ URL('/') }}/public_site_assets/img/37px.png" class=" ml-4">
                            </div>
                            <div class="col-md-10 pl-0 pr-0 mr-0">
                              <h6 style="font-size: 12px;"class="mt-2 ml-4">Delia Saunders
                                <span class="text-success" style="font-size:7px;">
                                  <i class="fa fa-circle"></i>
                                  </span>
                                  <span class="float-right mr-4" style="text-align: right;color: gray;font-size: 11px;">05:52 Am</span>
                              </h6>
                              <p style="color: gray;font-size: 11px;" class="ml-4">We have lake-front vacations rental.No specific liability waiver for that,but...</p>
                              <div class="ml-4 mr-3 border-top">
                                  <img src="{{ URL('/') }}/public_site_assets/img/Pic.png" class="mt-0" alt="">
                                  <span class="pt-3 ml-2 text-secondary" style="font-size:12px;">Bauhaus Archive</span>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                      <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                  </div>
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>
@endsection
