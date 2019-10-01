@extends('layouts.app')



@section('content')



<style type="text/css">

.coin_dropdown .dropdown-menu{
  padding:20px;
}

.coin_dropdown .btn.dropdown{
  background:none;
  padding:0px;
  font-size:13px;
}

</style>

   <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                <div class="col-sm-12">
              <section class="panel">
            
             <header class="panel-heading">

                  All Users

                  <div class="btn-holder" style="float: right;">

                  </div>

              </header>
                    
              <div class="panel-body">
              @if(Session::has('message'))

                  <div class="alert-box success">

                      <h2>{{ Session::get('message') }}</h2>

                  </div>

              @endif
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                <th width="25px">Sr</th>
                <th>Name</th>
                <th>Image</th>
                <th>Phone Number</th>
                <th>Referral Code</th>
                <th width="50px">Rewarded Coins</th>
                <th>Strikes</th>
                <th>Score</th>
                <th width="42px">No. of Deals</th>
                <th width="42px">No. of Orders</th>
                <th>Ratings</th>
                <th>Current Status</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php for ($i=0; $i <count($users); $i++) { ?>

                    <?php 
                        if($users[$i]->status == '1')
                        {
                            $user_status = "Active User";
                        }
                        elseif($users[$i]->status == '0')
                        {
                            $user_status = "Blocked User";
                        }
                        else
                        {
                            $user_status = "";   
                        }
                    ?>
                    
                    <tr>
                        <td><?php echo $users[$i]->id; ?></td>
                        <td><?php echo $users[$i]->name; ?></td>
                        <td><img src="<?php echo $users[$i]->image; ?>" alt="<?php echo $users[$i]->name; ?>"  width="80"/></td>
                        <td><?php echo $users[$i]->phone; ?></td>
                        <td><?php echo $users[$i]->reference_code; ?></td>
                        <td><?php echo $users[$i]->coins; ?></td>
                        <td><?php echo $users[$i]->strikes; ?></td>
                        <td><?php echo $users[$i]->my_score; ?></td>
                        <td>{{ App\DealPayment::where([['user_id', $users[$i]->id], ['status', 1]])->count() }}</td>
                        <td>{{ App\OrderInformation::where('user_id', $users[$i]->id)->count() }}</td>
                        <td>
                            
                            <?php 
                            
                            if($users[$i]->my_score >= 120000){
                                echo "Super User";
                            }
                            else if(($users[$i]->my_score >= 60000) && ($users[$i]->my_score <= 119999)){
                                echo "Average User";
                            }
                            else if($users[$i]->my_score < 60000){
                                echo "Basic User";
                            }
                            
                            ?>
                        </td>
                        <td><?php echo $user_status; ?></td>
                        <td>
                            <?php if($users[$i]->status != '0') { ?>
                            <a href="<?php echo url('/'); ?>/block_user/<?php echo $users[$i]->id; ?>"><i class="fa fa-lock"></i> Block</a> || 
                            <?php } else { ?>
                            <a href="<?php echo url('/'); ?>/un_block_user/<?php echo $users[$i]->id; ?>"><i class="fa fa-unlock"></i> Unblock</a> || 
                            <?php } ?>
                            <a href="<?php echo url('/'); ?>/delete_user/<?php echo $users[$i]->id; ?>"><i class="far fa-trash-alt"></i> Delete</a> ||

                            <a href="<?php echo url('/'); ?>/order_detail/<?php echo $users[$i]->id; ?>"><i class="fa fa-eye"></i> Order History</a> ||
                            <div class="dropdown coin_dropdown">
                                <button class="btn dropdown text-capitalize" data-toggle="dropdown"><i class="fa fa-money"></i> Give Coins <i class="fa fa-caret-down"></i></button>
                                <div class="dropdown-menu">
                                    <form action="{{ url('/') }}/give_coins" method="post" class="update_form" accept-charset="utf-8">
                                        @csrf
                                        <label>Give Coins:</label>
                                        <input type="hidden" name="user_id" value="<?php echo $users[$i]->id; ?>">
                                        <div class="form-group">
                                            <input type="number" name="coins" class="form-control" />
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block">Update</button>
                                    </form>
                                </div><!-- end dropdown-menu -->
                            </div><!-- end dropdown -->
                        </td>
                       
                    </tr>

                
                <?php } ?>

                  
              
              </tbody>
              </table>
              </div>
              </div>

              </section>
              </div>
              </div>
              
            
          </section>
      </section>
@endsection





