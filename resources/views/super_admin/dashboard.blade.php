@extends('layouts.superadminapp')

@section('content')

@extends('layouts.superadminnav')
  <style>
      
/* Start statis */

    .statis {
      color: #EEE;
      margin-top: 15px;
    }
    .statis .box {
      position: relative;
      padding: 15px;
      overflow: hidden;
      border-radius: 3px;
      margin-bottom: 25px;
    }
    .statis .box h3:after {
      content: "";
      height: 2px;
      width: 70%;
      margin: auto;
      background-color: rgba(255, 255, 255, 0.12);
      display: block;
      margin-top: 10px;
    }
    .statis .box i {
      position: absolute;
      height: 70px;
      width: 70px;
      font-size: 22px;
      padding: 15px;
      top: -25px;
      left: -25px;
      background-color: rgba(255, 255, 255, 0.15);
      line-height: 60px;
      text-align: right;
      border-radius: 50%;
    }

    /*chart*/
    .chrt3 {
      padding-bottom: 50px;
    }
    .chrt3 .chart-container {
      height: 350px;
      padding: 15px;
      margin-top: 25px;
    }
    .chrt3 .box {
      padding: 15px;
    }
    .main-color {
      color: #ffc107
    }
    .warning {background-color: #f0ad4e}
    .danger {    background: linear-gradient(70deg, #fe9960, #ffd747) !important;}
    .success {background-color: #5cb85c}
    .inf {background-color: #5bc0de}


    @media (max-width: 767px) {
      #contents {
        margin: 0 !important
      }
      .statistics .box {
        margin-bottom: 25px !important;
      }
    }

  </style>
      <div class="container-fluid pt-1">
          <div class="row m-4">
            <div class="col-sm-12 bg-white h-100">
                <section id="contents">
                    <section class='statis text-center'>
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="box" style="background-image: linear-gradient(180deg, #823ff7, #678fed);">
                              <i class="fa fa-building text-white"></i>
                              <h3 class="text-white"><?php echo $data_array['total_companies'][0]->total_companies; ?></h3>
                              <p class="lead font-weight-bold text-white">TOTAL COMPANIES</p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="box danger">
                              <i class="fa fa-user-o text-white"></i>
                              <h3 class="text-white"><?php echo $data_array['total_users'][0]->total_users; ?></h3>
                              <p class="lead font-weight-bold text-white">TOTAL USER</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection
