@extends('layouts.app')

@section('content')

@extends('layouts.nav')

      <div class="container-fluid pt-1">
          <div class="row m-4">
            <div class="col-12 bg-white h-100">
            <div class="row" style="background:white;">
              <div class="col-md-12 p-4 tab-1">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All<span>36</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Saved<span>3</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Completed<span>4</span></a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><table class="table">
                      <thead class="tab-1-table">
                        <tr>
                          <th scope="col" style="border-top:0px !improtant">SAVED VALUATION</th>
                          <th scope="col"class="text-center">STARTED</th>
                          <th scope="col"class="text-center">STATUS</th>
                          <th scope="col"class="text-center">ACTIONS</th>
                        </tr>
                      </thead>
                      <tbody class="tab-1-table2">
                        <tr>
                          <th class="table-heading" scope="row">
                            <img src="{{ URL('/public') }}/public_site_assets/img/icon.png" class="mr-2" style="width: 50px;height:50px;">
                             Acquisition</th>
                          <td class="table-heading">01/16/2018</td>
                          <td>
                            <button type="button" class="btn btn-success btn-sm w-50 pt-0 pb-0 pl-1 rounded pr-3 font-weight-light" style="font-size:11px;">IN PROGRESS</button></td>
                          <td style="color:#882ef9;font-weight: 600;"><a href="" style="color:#882ef9 !important;">Continue <i class="fa fa-arrow-right"></i></a></td>
                        </tr>
                        <tr>
                          <th class="table-heading" scope="row"><img src="{{ URL('/public') }}/public_site_assets/img/icon.png" class="mr-2" style="width: 50px;height:50px;"> Acquisition</th>
                          <td class="table-heading">01/16/2018</td>
                          <td><button type="button" class="btn btn-primary btn-sm w-50 pt-0 pb-0 pl-1 pr-1 rounded font-weight-light" style="font-size:11px;">COMPLETED</button></td>
                          <td style="color:#882ef9;font-weight: 600;"><a href="" style="color:#882ef9 !important;">View</a></td>
                        </tr>
                        <tr>
                          <th class="table-heading" scope="row"><img src="{{ URL('/public') }}/public_site_assets/img/icon.png" class="mr-2" style="width: 50px;height:50px;"> Value</th>
                          <td class="table-heading">01/16/2018</td>
                          <td><button type="button" class="btn btn-success btn-sm w-50 pt-0 pb-0 pl-1 rounded pr-3 font-weight-light" style="font-size:11px;">IN PROGRESS</button></td>
                          <td style="color:#882ef9;font-weight: 600;"><a href="" style="color:#882ef9 !important;">Continue <i class="fa fa-arrow-right"></i></a></td>
                        </tr>
                        <tr>
                          <th class="table-heading" scope="row"><img src="{{ URL('/public') }}/public_site_assets/img/icon.png" class="mr-2" style="width: 50px;height:50px;"> Divestiture</th>
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
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>
@endsection
