<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use App\Web_common;
use App\Common;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReplyMail;
use Illuminate\Support\Facades\Input;
Use DB;
use App\Message;
use App\Conversation;
use App\User;
use App\Project;
use App\UserAssignAssignment;
use App\ProjectAssignMethodology;
use App\ProjectAssignActualValues;
use App\ProjectAssignForecastedValues;
use App\ProjectAssignExhibits;
use App\CostOfCapital;
use App\UserPaymentHistory;
use App\Contact;
use App\Blog;
use App\Device;
use Twilio\Rest\Client;
use Hash;
use Illuminate\Support\Facades\Session;
use Stripe;
use Customer;
use Illuminate\Support\Facades\Crypt;
// use Stripe\Charge;




// date_default_timezone_set("Europe/Stockholm");

class DashboardController extends Controller
{
   
    public function index()
    {
        if(Auth::user()->role =='super_admin')
        {
            return view('super_admin/dashboard');
            // return redirect( '/super_admin/dashboard' );
        }
        else
        {
            return view('dashboard');
        }
        
    }

    public function get_logout()
    {
        if(Auth::user()->role == 'super_admin')
        {
            Auth::logout();
            return redirect()->intended('/super_adminlogin');
        }
        else
        {
            Auth::logout();
            return redirect()->intended('/');
        }
        
    }

   

    public function changepassword()
    {
        return view('changePassword');
    } 

    public function sendPasswordVar()
    {
        $data=Input::all();
        $oldpassword = $data['oldPassowrd'];
        $newpassword = $data['newPassowrd'];
        $confermpassword = $data['confermPassowrd'];

        $user = Auth::User();
        if($newpassword == $confermpassword)
        {
            $current_password = $user->password;    
            if (Hash::check($oldpassword, $current_password))
            {
                $newpassword = Hash::make($newpassword);
                $user_id = $user->id;
                $data=array("password"=> $newpassword);
                $newpassword = Web_common::newpassword($user_id,$data,"users");
                return  redirect('/login');
            }
            else
            {
                return  redirect()->back()->with('ch_message', 'Old Password is Incorect..!');
            }
        }
        else
        {
            return  redirect()->back()->with('ch_message', 'Your Password In Not Match..!');
        }
        
     } 


    public function profile()
    {
        $user = Auth::User();
        $user_payment_history = UserPaymentHistory::select('created_at')->where('stripe_charge_id', $user->stripe_id)->first();
        
        // return $user_payment_history;
        // die;
        if($user->role == 'admin')
        {
            $time = strtotime($user_payment_history->created_at);
            $final = date("d/m/Y", strtotime("+1 month", $time));    
        }
        else
        {
            $final = "";            
        }

        
        // echo $final;
        // die;
        
        return view('view_profile',compact('user','final'));
    }

    public function update_profile(Request $request)
    {
        // echo "Dasdasds";
        // die;
    
        // $email = $request->input('email');
        $user = Auth::User();
        $company_name = $request->input('company_name');
        $image = $request->image;
        
        if($image)
        {
            $file = $request->file('image');
            $file_name = time().$file->getClientOriginalName();
    
            $location = app()->basePath('public/user_images');
            $file->move($location, $file_name);
    
            $data = array(
                'image' => $file_name,
                'company_name' => $company_name
            );
            
        }
        else
        {
            $data = array('company_name' => $company_name);
        }
            
            
        $user = User::where('id', $user->id)->update($data);
        // echo "ok";
        // die;
        
        Session::flash ( 'message', "Successfully update profile." );
        return redirect('/profile');
        
    }
    
    public function initiate_valuation()
    {
        return view('initiate_valuation_view');
    }    
    
    public function step_1()
    {
        $get_industries = DB::select("SELECT id,industries_name from industries where status = 1 ");
        // print_r($get_industries);
        // die;
        
        $overview_data_array = array('overview' => $get_industries);
        // return $overview_data_array;
        // die;
        
        return view('overview',compact('overview_data_array'));
        // return view('overview');
    }
    
    public function step_2()
    {
        $user = Auth::User();
        // return $user;
        // die;
        $get_company_user = DB::select("SELECT id,name from users where status = '1' AND role != 'admin' AND parent_id = $user->id ");
        // print_r($get_company_user);
        // die;
        $get_assignments = DB::select("SELECT id,assignment_name from assignments where status = 1 ");
        // print_r($get_assignments);
        // die;
        
        $data_array = array(
                        'login_user' => $user,
                        'company_user' => $get_company_user,
                        'assignments' => $get_assignments,
                        );
        // return $data_array;
        // die;
        
        return view('project_users',compact('data_array'));
        
    }
    
    
    public function step_3()
    {
        $user = Auth::User();
        // return $user;
        // die;
        $get_methodology = DB::select("SELECT id,methodology_name from methodologies where status = 1 ");
        // print_r($get_methodology);
        // die;
        
        $data_array = array(
                        'login_user' => $user,
                        'methodology' => $get_methodology
                        );
        // return $data_array;
        // die;
        
        return view('methodology',compact('data_array'));
        
    }
    
    public function step_4()
    {
        return view('cast_of_capital_calclator');
    }
    
    public function step_5()
    {
        $get_model_values = DB::select("SELECT id,model_value_name from model_values where status = 1 ");
        // print_r($get_model_values);
        // die;
        
        return view('actual_values',compact('get_model_values'));
        
        // return view('actual_values');
    }
    
    public function step_6()
    {
        $get_model_values = DB::select("SELECT id,model_value_name from model_values where status = 1 ");
        // print_r($get_model_values);
        // die;
        
        return view('forecasted_values',compact('get_model_values'));
        // return view('forecasted_values');
    }
    
    public function step_7()
    {
        $get_model_values = DB::select("SELECT id,model_value_name from model_values where status = 1 ");
        // print_r($get_model_values);
        // die;
        
        return view('exhibits',compact('get_model_values'));
        // return view('exhibits');
    }
    
    public function step_8()
    {
        return view('scenarios');
    }
    
    
    public function add_step_1(Request $request)
    {
        $user = Auth::User();
        
        // $data=Input::all();
        
        $project_name = $request->input('project_name');
        $target_name = $request->input('target_name');
        $target_sector = $request->input('target_sector');
        $target_industry = $request->input('target_industry');
        $target_description = $request->input('target_description');
        $target_location = $request->input('target_location');
        $valuation_start_date = $request->input('valuation_start_date');
        $valuation_end_date = $request->input('valuation_end_date');
        $period_options = $request->input('period_options');
        
        // echo "DASdasdas";
        // print_r($data);
        // die;
        
        
        $project_array = array(
                        'project_type' => 1,
                        'project_name' => $project_name,
                        'target_name' => $target_name,
                        'target_sector' => $target_sector,
                        'target_industry' => $target_industry,
                        'target_description' => $target_description,
                        'target_location' => $target_location,
                        'valuation_start_date' => date("Y-m-d", strtotime($valuation_start_date)),
                        'valuation_end_date' => date("Y-m-d", strtotime($valuation_end_date)),
                        'period_options' => $period_options,
                        'created_by' => $user->id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    );

                // return $project_array;
                // die;

            $project = Project::create($project_array);
    // echo $project->id;
    // die;
            
            if($project)
            {
                $project_id = $project->id;
                Session::flash ( 'message', "Successfully Save." );
                return redirect('/step_2/'.$project_id);
            }
            else
            {
                Session::flash ( 'message', "Error! Please try again." );
                return redirect()->back();
            }
        
        
    }
    
    public function add_step_2(Request $request)
    {
        $user = Auth::User();
        
        // return $request->user_id;
        // die;
        
        // $user_id = $request->input('user_id');
        // $assignments_id = $request->input('assignments_id');
        // $project_id = $request->input('project_id');
        
        // for($s=0; $s < count($assignments_id); $s++)
        // {
        //     $user_assignment_array[] = array(
        //                             'user_id' => $user_id,
        //                             'assignments_id' => $assignments_id[$s],
        //                             'project_id' => $project_id,
        //                             'created_by' => $user->id,
        //                             'created_at' => Carbon::now(),
        //                             'updated_at' => Carbon::now(),
        //                         );
        // }
        
        
        $user_assignment_array = array(
                                    'user_id' => $request->user_id,
                                    'assignments_id' => $request->assignments_id,
                                    'project_id' => $request->project_id,
                                    'created_by' => $user->id,
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                );
        
        // return $user_assignment_array;
        // die;
        $user_assignment = DB::table('user_assign_assignments')->insert($user_assignment_array);
            
        // if($user_assignment)
        // {
        //     Session::flash ( 'message', "Successfully Save." );
        //     return redirect('/step_3/'.$project_id);
        // }
        // else
        // {
        //     Session::flash ( 'message', "Error! Please try again." );
        //     return redirect()->back();
        // }
        
    }
    
    public function delete_assignment_user(Request $request)
    {
        // return $request->user_id;
        // die;
        $where = array("user_id" => $request->user_id,"assignments_id" => $request->assignments_id,"project_id" => $request->project_id);
        $result = Common::delete_record($where, "user_assign_assignments");
    }
    
    
    public function add_step_3(Request $request)
    {
        $user = Auth::User();
        
        $methodology_id = $request->input('methodology_id');
        // return $methodology_range = $request->input('methodology_range');
        // die;
        $project_id = $request->input('project_id');
        
        for($m=0; $m < count($methodology_id); $m++)
        {
            $str_arr = explode (",", $methodology_id[$m]);  

            $methodology_array[] = array(
                                    'methodology_id' => $str_arr[0],
                                    'methodology_range' => substr_replace($str_arr[1], "", -1),
                                    'project_id' => $project_id,
                                    'created_by' => $user->id,
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                );
        }
        
        // print_r($methodology_array);
        // die;
        
        $project_methodology = DB::table('project_assign_methodologies')->insert($methodology_array);
            
        if($project_methodology)
        {
            Session::flash ( 'message', "Successfully Save." );
            return redirect('/step_4/'.$project_id);
        }
        else
        {
            Session::flash ( 'message', "Error! Please try again." );
            return redirect()->back();
        }
        
    }
    
    public function add_step_4(Request $request)
    {
        $user = Auth::User();
        
        $project_id = $request->input('project_id');
        
        $cost_of_debt_type = $request->input('cost_of_debt_type');              // array
        $cost_of_debt_amount = $request->input('cost_of_debt_amount');          // array
        $cost_of_debt_rate = $request->input('cost_of_debt_rate');              // array
        
        $total_debt_amount = $request->input('total_debt_amount');
        $total_debt_weighted_interest_rate = $request->input('total_debt_weighted_interest_rate');
        $cost_of_equity_type = $request->input('cost_of_equity_type');
        
        $cost_of_equity_description = $request->input('cost_of_equity_description');            // array
        $cost_of_equity_amount = $request->input('cost_of_equity_amount');                      // array
        $cost_of_equity_rate = $request->input('cost_of_equity_rate');                          // array
        
        $total_equity_amount = $request->input('total_equity_amount');
        $total_equity_weighted_interest_rate = $request->input('total_equity_weighted_interest_rate');
        $cost_of_equity_risk_rate = $request->input('cost_of_equity_risk_rate');
        $cost_of_equity_market_premium = $request->input('cost_of_equity_market_premium');
        $cost_of_equity_company_classification = $request->input('cost_of_equity_company_classification');
        $cost_of_equity_beta = $request->input('cost_of_equity_beta');
        $total_cost_capm = $request->input('total_cost_capm');
        $cost_of_equity_sale = $request->input('cost_of_equity_sale');
        $cost_of_equity_net_income = $request->input('cost_of_equity_net_income');
        $cost_of_equity_total_assets = $request->input('cost_of_equity_total_assets');
        $cost_of_equity_total_equity = $request->input('cost_of_equity_total_equity');
        $total_cost_dupont = $request->input('total_cost_dupont');
        $total_cost_of_capital = $request->input('total_cost_of_capital');
        
        $cost_of_exhibit_description = $request->input('cost_of_exhibit_description');              // array
        
        
        $cost_of_capital_array = array(
                        'total_debt_amount' => $total_debt_amount,
                        'total_debt_weighted_interest_rate' => $total_debt_weighted_interest_rate,
                        'total_equity_amount' => $total_equity_amount,
                        'total_equity_weighted_interest_rate' => $total_equity_weighted_interest_rate,
                        'total_cost_capm' => $total_cost_capm,
                        'total_cost_dupont' => $total_cost_dupont,
                        'total_cost_of_capital' => $total_cost_of_capital,
                        'project_id' => $project_id,
                        'created_by' => $user->id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    );

                // return $project_array;
                // die;

            $cost_of_capital = CostOfCapital::create($cost_of_capital_array);
            $cost_id = $cost_of_capital->id;
            // echo $cost_id;
            // die;
            
            for($cda=0; $cda < count($cost_of_debt_amount); $cda++)
            {
                $cost_of_debt_amount_array[] = array(
                                        'cost_of_debt_type' => $cost_of_debt_type[$cda],
                                        'cost_of_debt_amount' => $cost_of_debt_amount[$cda],
                                        'cost_of_debt_rate' => $cost_of_debt_rate[$cda],
                                        'cost_id' => $cost_id,
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    );
            }
            
            $cost_of_debt = DB::table('cost_of_debts')->insert($cost_of_debt_amount_array);
            
            
            if($cost_of_equity_type == 'estimation')
            {
                for($cea=0; $cea < count($cost_of_equity_amount); $cea++)
                {
                    $cost_of_equity_array[] = array(
                                                'cost_of_equity_description' => $cost_of_equity_description[$cea],
                                                'cost_of_equity_amount' => $cost_of_equity_amount[$cea],
                                                'cost_of_equity_rate' => $cost_of_equity_rate[$cea],
                                                'cost_of_equity_type' => $cost_of_equity_type,
                                                'cost_id' => $cost_id,
                                                'created_at' => Carbon::now(),
                                                'updated_at' => Carbon::now(),
                                            );
                }
            }
            elseif($cost_of_equity_type == 'capm')
            {
                $cost_of_equity_array = array(
                        'cost_of_equity_risk_rate' => $cost_of_equity_risk_rate,
                        'cost_of_equity_market_premium' => $cost_of_equity_market_premium,
                        'cost_of_equity_company_classification' => $cost_of_equity_company_classification,
                        'cost_of_equity_beta' => $cost_of_equity_beta,
                        'cost_of_equity_type' => $cost_of_equity_type,
                        'cost_id' => $cost_id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    );
            }
            elseif($cost_of_equity_type == 'dupont')
            {
                $cost_of_equity_array = array(
                        'cost_of_equity_sale' => $cost_of_equity_sale,
                        'cost_of_equity_net_income' => $cost_of_equity_net_income,
                        'cost_of_equity_total_assets' => $cost_of_equity_total_assets,
                        'cost_of_equity_total_equity' => $cost_of_equity_total_equity,
                        'cost_of_equity_type' => $cost_of_equity_type,
                        'cost_id' => $cost_id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    );
            }
            else
            {
                $cost_of_equity_array = array();
                echo "not value";
                die;
            }
            
            $cost_of_equity = DB::table('cost_of_equities')->insert($cost_of_equity_array);
            
            
    		$exhibit_image = $request->file( 'cost_of_exhibit_file' );
    		
    		if($exhibit_image)
    		{
    		    for( $img = 0; $img < count( $exhibit_image ); $img ++ ) 
                {
                    if ( isset( $exhibit_image[ $img ] ) ) 
                    {
        			    $image           = $exhibit_image[ $img ];
            			$filename2       = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            			$destinationPath = public_path( '/exhibit_images' );
            			$image->move( $destinationPath, $filename2 );
            		}
            		
            		$cost_of_exhibits_array[] = array(
                                                'cost_of_exhibit_description' => $cost_of_exhibit_description[$img],
                                                'cost_of_exhibit_file' => $filename2,
                                                'cost_id' => $cost_id,
                                                'created_at' => Carbon::now(),
                                                'updated_at' => Carbon::now(),
                                            );
                                            
                }
    
                $cost_of_exhibits = DB::table('cost_of_exhibits')->insert($cost_of_exhibits_array);

    		}
    
            
            
        //     print_r($cost_of_exhibits_array);
                    
        //     die;
            
            
        // echo "ok";
        // die;
        
        return redirect('/step_5/'.$project_id);
    }
    
    public function add_step_5(Request $request)
    {
        
        $user = Auth::User();
        
        $model_values_id = $request->input('model_values_id');
        $product_name = $request->input('product_name');
        $sales_of_actual_amount = $request->input('sales_of_actual_amount');
        $project_id = $request->input('project_id');
        
        for($mv=0; $mv < count($model_values_id); $mv++)
        {
            $actual_values_array[] = array(
                                    'model_values_id' => $model_values_id[$mv],
                                    'project_id' => $project_id,
                                    'created_by' => $user->id,
                                    'product_name' => $product_name,
                                    'sales_of_actual_amount' => $sales_of_actual_amount,
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                );
        }
        
        $actual_values = DB::table('project_assign_actual_values')->insert($actual_values_array);
            
        if($actual_values)
        {
            Session::flash ( 'message', "Successfully Save." );
            return redirect('/step_6/'.$project_id);
        }
        else
        {
            Session::flash ( 'message', "Error! Please try again." );
            return redirect()->back();
        }

    }
    
    public function add_step_6(Request $request)
    {
        $user = Auth::User();
        
        $model_values_id = $request->input('model_values_id');
        $product_name = $request->input('product_name');
        $sales_of_actual_amount = $request->input('sales_of_actual_amount');
        $project_id = $request->input('project_id');
        
        for($mvf=0; $mvf < count($model_values_id); $mvf++)
        {
            $forecasted_values_array[] = array(
                                    'model_values_id' => $model_values_id[$mvf],
                                    'project_id' => $project_id,
                                    'created_by' => $user->id,
                                    'product_name' => $product_name,
                                    'sales_of_actual_amount' => $sales_of_actual_amount,
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                );
        }
        
        $forecasted_values = DB::table('project_assign_forecasted_values')->insert($forecasted_values_array);
            
        if($forecasted_values)
        {
            Session::flash ( 'message', "Successfully Save." );
            return redirect('/step_7/'.$project_id);
        }
        else
        {
            Session::flash ( 'message', "Error! Please try again." );
            return redirect()->back();
        }
        
        
    }
    
    public function add_step_7(Request $request)
    {
        // $user = Auth::User();
        // $project_id = $request->input('project_id');
        // return redirect('/step_8/'.$project_id);
        
        $user = Auth::User();
        
        $model_values_id = $request->input('model_values_id');
        $exhibit_name = $request->input('exhibit_name');
        $exhibit_description = $request->input('exhibit_description');
        $project_id = $request->input('project_id');
        
        for($mvf=0; $mvf < count($model_values_id); $mvf++)
        {
            $exhibits_array[] = array(
                                    'model_values_id' => $model_values_id[$mvf],
                                    'project_id' => $project_id,
                                    'created_by' => $user->id,
                                    'exhibit_name' => $exhibit_name,
                                    'exhibit_description' => $exhibit_description,
                                    'created_at' => Carbon::now(),
                                    'updated_at' => Carbon::now(),
                                );
        }
        
        $exhibits = DB::table('project_assign_exhibits')->insert($exhibits_array);
            
        if($exhibits)
        {
            Session::flash ( 'message', "Successfully Save." );
            return redirect('/step_8/'.$project_id);
        }
        else
        {
            Session::flash ( 'message', "Error! Please try again." );
            return redirect()->back();
        }
        
     
     
    }
    
    public function step_9()
    {
        return view('summary');
    }
    
    public function step_10()
    {
        return view('completed');
    }
    
    
    
    public function saved()
    {
        return view('saved_view');

    }
    
    public function change_credit_card_info()
    {
        return view('change_credit_card_info');

    }
    public function change_plan()
    {
        return view('change_plan_view');

    }
    
    public function get_assignments()
    {
        // echo collect(request()->segments());
        // die;
        
        $get_assignments = DB::select("SELECT id,assignment_name from assignments where status = 1 ");
        
        // print_r($get_assignments);
        // die;
        
        $data_array = array('assignments' => $get_assignments);
        // return $data_array;
        // die;
        
        return view('assignments_view',compact('data_array'));
        // echo "ok";
        // die;
    }
    
    public function get_sectors($industry_id)
    {
        
        $get_sector_options = DB::select("SELECT id,sector_option_name from sector_options where status = 1 AND industry_id = $industry_id ");
        
        // print_r($get_sector_options);
        // die;
        
        $data_array = array('sector_option' => $get_sector_options);
        // return $data_array;
        // die;
        
        return view('sector_view',compact('data_array'));
        // echo "ok";
        // die;
    }
    
    public function next_step_3(Request $request)
    {
        $user = Auth::User();
        $project_id = $request->input('project_id');
        return redirect('/step_3/'.$project_id);
    }
    
    
    public function update_card_info(Request $request)
    {
        Stripe\Stripe::setApiKey("sk_test_8bJtuF0Zzlsx5tOPnahbxCuQ");
        
        $user = Auth::User();
        
        // print_r($user);
        // die;
        // echo $request->stripeToken;
        
        $name = $request->input('name');
        $exp_month = $request->input('exp_month');
        $exp_year = $request->input('exp_year');
        $stripe_customer_id = $user->stripe_customer_id;
        $stripe_customer_card_id = $user->stripe_customer_card_id;
        
        // echo $name
        // echo $exp_month
        // echo $exp_year
        // echo $stripe_customer_id;
        // echo $stripe_customer_card_id;
        // die;
      
        $cu = \Stripe\Customer::updateSource(
                $stripe_customer_id,
                $stripe_customer_card_id,
                [
                    'exp_month' => $exp_month,
                    'exp_year'  => $exp_year,
                    'name' => $name
                ]
  
        );
        
        // print_r($cu);
        // die;
        
        Session::flash ( 'message', "Successfully Update Credit Card." );
        return redirect('/profile');

    }
    
    public function update_plan(Request $request)
    {
        Stripe\Stripe::setApiKey("sk_test_8bJtuF0Zzlsx5tOPnahbxCuQ");
        
        $plan_value = $request->input('plan_value');
        $plan_name = $request->input('plan_name');
        
        $user = Auth::User();
        $get_user_data = User::where([ ['id',$user->id] ])->first();
        // print_r($get_user_data);
        // die;
        
        $stripe_customer_id = $get_user_data->stripe_customer_id;
        $stripe_plan_subscription_id = $get_user_data->stripe_plan_subscription_id;
        
        // echo $request->stripeToken;
        // die;
        
        $sub = \Stripe\Subscription::retrieve($stripe_plan_subscription_id);
        $sub->cancel();
            
        $subscription = \Stripe\Subscription::create(array(
            "customer" => $stripe_customer_id,
            "plan" => $plan_name
        ));

        $charge = Stripe\Charge::create(array(
            'customer' => $stripe_customer_id,
            "amount" => $plan_value * 100,
            "currency" => "usd",
            "description" => "Payment from incvaluatordev.appcrates.co" 
        ));
            
        // print_r($subscription);    
        // die;
        
        
        $update_verify_user = User::where('id',$user->id)->update([ 'stripe_id' => $charge['id'], 
            'plan_name' => $plan_name, 'plan_value' => $plan_value,
            'plan_start_date' => date('Y-m-d'), 'stripe_plan_subscription_id' => $subscription['id'] ]);
            
            
        if($update_verify_user)
        {
            $payment_array = array(
                        'stripe_charge_id' => $charge['id'],
                        'amount' => $plan_value,
                        'customer_id' => $user->id,
                        'stripe_customer_id' => $stripe_customer_id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    );

            // return $user_array;
            // die;

            $user_payment_history = UserPaymentHistory::create($payment_array);
            
            Session::flash ( 'message', "Successfully Update Profile" );
            return redirect('/profile');
            // return redirect()->back();
        }
        else
        {
            Session::flash ( 'message', "Error! Please try again." );
            return redirect()->back();
        }
 
        
        
    }
    
    
    public function team()
    {
        $user = Auth::User();
        
        // echo $user->id;
        // die;
        //return view('view_profile',compact('user'));
        // print_r($user);
        // die;
        
        // if($user->role == 'admin' && $user->parent_id == 0)
        // {
        //     $company_user = User::where([['parent_id', $user->id],['is_verified','0'],['status','!=','2'] ])->paginate(10);            
        // }
        // else
        // {
        //   $user_id = $user->parent_id; 
        //   $company_user = User::where([['parent_id', $user_id],['is_verified','0'],['status','!=','2'] ])->paginate(10);            
        // }

        $company_user = User::where([['parent_id', $user->parent_id],['status','1'],['id', '!=', $user->id] ])->paginate(10);

        // return $company_user;
        // die;
        return view('team_view',compact('company_user'));
        //return view('team_view');
    }
    
    public function update_team(Request $request)
    {
        $id = $request->id;
        $role = $request->role;
        // echo $role;
        // die;
        $data = array('role' => $role);
        $user = User::where('id', $id)->update($data);
        
        Session::flash ( 'message', "Successfully update user role." );
        return redirect('team');
    }
    
    public function delete_team($id)
    {
        $data = array('status' => '2');
        $user = User::where('id', $id)->update($data);
        
        Session::flash ( 'message', "Successfully delete user." );
        return redirect('team');
    }
    
    
    
    
    public function revenue_rate()
    {
        return view('revenue');
    }
    public function cost_of_gold_sold()
    {
        return view('cost_of_gold_sold_view');
    }
    public function taxes()
    {
        return view('taxes_view');
    }
    
    
    public function amortization()
    {
        return view('amortization_view');
    }
    public function depreciation()
    {
        return view('depreciation_view');
    }
    public function sales()
    {
        return view('sales_view');
    }
    
    public function interest_expense()
    {
        return view('interest_expense_view');
    }
    public function capital_expenditures()
    {
        return view('capital_expenditures_view');
    }
    
     public function working_capital()
    {
        return view('working_capital_view');
    }
    public function investments()
    {
        return view('investments_view');
    }
    public function transaction_execution_costs()
    {
        return view('transaction_execution_costs_view');
    }
    public function debt_pay_off_schedule()
    {
        return view('debt_pay_off_schedule_view');
    }
    public function assets()
    {
        return view('assets_view');
    }
    
    
    
    

    
    
    
    
    public function company_new_user()
    {
        $user = Auth::User();
        // echo $user->id;
        // die;
        //return view('view_profile',compact('user'));
        // if($user->role == 'admin' && $user->parent_id == 0)
        // {
        //     $company_user = User::where([['parent_id', $user->id],['is_verified','1'],['role','contributor'] ])->paginate(10);
        // }
        // else
        // {
        //   $user_id = $user->parent_id; 
           
        //   $company_user = User::where([['parent_id', $user_id],['is_verified','0'],['status','!=','2'] ])->paginate(10);            
        // }
        
        $company_user = User::where([['parent_id', $user->parent_id],['status','0'],['role','contributor'],['id', '!=', $user->id] ])->paginate(10);
        // $company_user = User::where([['parent_id', $user->parent_id],['is_verified','0'],['status','!=','2'],['id', '!=', $user->id] ])->paginate(10);
        
        
        // return $company_user;
        // die;
        return view('company_new_user_view',compact('company_user'));
        // return view('company_new_user_view');
    }
    
    
    public function approve_user($id)
    {
        $data = array('is_verified' => '0','status' => '1');
        $update_user = User::where('id', $id)->update($data);
        
        $user = User::where('id',$id)->first();
        // print_r($user->email);
        // die;
        
        $to = $user->email;
        $subject = "Accept Request E-mail";
        $message = "<html>
                        <head>
                        <title>Accept Request E-mail</title>
                        </head>
                        <body>
                            <p>Your account is verified</p>
                        </body>
                        </html>";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
        // More headers
        $headers .= 'From: bilal.sheikh@appcrates.com' . "\r\n";
            
        mail($to, $subject, $message, $headers);
        
        Session::flash ( 'message', "Successfully approve user." );
        return redirect('company_new_user');
        
    }
    

public function message()
    {
        $user_data = Auth::User();
        
        $user = $user_data->id;
        $parent_id = $user_data->parent_id;
        
        
        
        $get_new_users = DB::select("SELECT DISTINCT `users`.`name`
    , `users`.`email`
    , `users`.`id` AS user_id
FROM
    `users`
    LEFT OUTER JOIN `messages` 
        ON (`users`.`id` = `messages`.`receiver_id`) 
        WHERE `users`.`parent_id`= ".$parent_id." AND users.`id` 
        NOT IN(  SELECT DISTINCT id FROM 
        (SELECT receiver_id AS id FROM messages WHERE sender_id=".$user." 
			UNION ALL 
			SELECT sender_id AS id FROM messages WHERE receiver_id = ".$user."
			) AS t) AND users.`id` != ".$user." ");
			
// 			print_r($get_new_users);
// 			die;

        // $messages = DB::select("SELECT DISTINCT `users`.`name`
        //     , `users`.`email`
        //     , `users`.`id`
        //     , `users`.`image`
        // FROM `users` Inner JOIN `conversations` ON (`users`.`id` = `conversations`.`sender_id`) WHERE `conversations`.sender_id= ".$user." or `conversations`.receiver_id = ".$user." ORDER BY conversations.id DESC ");



        $messages = DB::table('conversations')
            ->join('users', 'conversations.sender_id', '=', 'users.id') 
            ->join('users as users_1', 'conversations.receiver_id', '=', 'users_1.id')            
            ->select('conversations.id as cnv_id','users.image as s_image','users.name as s_name','users.id as s_id','users_1.name as r_name','users_1.image as r_image','users_1.id as r_id','conversations.last_message','conversations.updated_at')
            ->whereRaw('conversations.sender_id='.$user.' OR conversations.receiver_id='.$user.'')
            ->orderBy('conversations.updated_at', 'desc')
            ->get();


        // $messages = Conversation::where('sender_id', $user)->orWhere('receiver_id', $user)->get();



        // $messages = DB::table('messages')
        // ->join('users', 'users.id', '=', 'messages.sender_id')
        // ->select('users.id', 'users.name', 'users.image', DB::raw('max(messages.created_at) as created_at'), 'users.email')
        // ->where('messages.receiver_id', $user)
        // ->orwhere('messages.sender_id', $user)
        // ->orderBy('messages.id', 'DESC')
        // ->groupBy('messages.sender_id')
        // ->tosql();
        
        // return $messages;
        // die;
        
        return view('meesage_view', compact('messages','get_new_users'));
    }

//     public function chat($id){
//         // $user = Auth::user()->id;

//         $user_data = Auth::User();
        
//         $chat = DB::table('messages')
//         ->join('users', 'users.id', '=', 'messages.sender_id')
//         ->select('users.id', 'users.name', 'users.image', 'messages.created_at', 'messages.sender_id', 'messages.receiver_id', 'messages.message', 'users.email')
//         ->where([['messages.conversation_id', $id]])
//         ->orderBy('messages.id', 'ASC')
//         ->get();
        
//         $chat_message = "";
        
//         foreach($chat as $message){
            
//             // echo $message->image;
        
//         if($message->image)
//         {
//             $img = url('/')."/public/user_images/$message->image";
//         }
//         else
//         {
//             $img = url('/')."/public/public_site_assets/img/User.png";
//         }
        
//         // $img = url('/')."/public/user_images/$message->image";
	
// 	if($message->sender_id != Auth::user()->id){
// 	$chat_message .= "<li class='left clearfix'>
// 	  <span class='chat-img1 float-left'>
// 	    <img src='$img' alt='User Avatar' class='img-circle'>
// 	  </span>
// 	  <div class='chat-body11 clearfix'>
// 	      <p>".$message->message."</p>
// 	      <div class='chat_time'>".$message->created_at.'</div>
// 	  </div>
// 	</li>';
// 	}else{
// 	$chat_message .="<li class='left clearfix admin_chat'>
// 	    <span class='chat-img1 float-right'>
// 	    <img src='$img' alt='User Avatar' class='img-circle'>
// 	    </span>
// 	    <div class='chat-body1 clearfix'>
// 	        <p>".$message->message."</p>
// 	        <div class='chat_time1'>".$message->created_at."</div>
// 	    </div>
// 	</li>";
//     }
    
// }

//     echo $chat_message;
//         // return $chat;
//         die;

//         // return view('chat', compact('chat'));
//     }



public function chat($id){
        // $user = Auth::user()->id;

        $user_data = Auth::User();
        $user = $user_data->id;
        
        $chat = DB::table('messages')
        ->join('users', 'users.id', '=', 'messages.sender_id')
        ->select('users.id', 'users.name', 'users.image', 'messages.created_at', 'messages.sender_id', 'messages.receiver_id', 'messages.message', 'users.email')
        ->where([['messages.conversation_id', $id]])
        ->orderBy('messages.id', 'ASC')
        ->get();
        
        $chat_message = "";
        
        foreach($chat as $message){
            
            // echo $message->image;
        
        if($message->image)
        {
            $img = url('/')."/public/user_images/$message->image";
        }
        else
        {
            $img = url('/')."/public/public_site_assets/img/User.png";
        }
        
        // $img = url('/')."/public/user_images/$message->image";
	
	if($message->sender_id != Auth::user()->id){
	$chat_message .= "<li class='left clearfix'>
	  <span class='chat-img1 float-left'>
	    <img src='$img' alt='User Avatar' class='img-circle'>
	  </span>
	  <div class='chat-body11 clearfix'>
	      <p>".$message->message."</p>
	      <div class='chat_time'>".$message->created_at.'</div>
	  </div>
	</li>';
	}else{
	$chat_message .="<li class='left clearfix admin_chat'>
	    <span class='chat-img1 float-right'>
	    <img src='$img' alt='User Avatar' class='img-circle'>
	    </span>
	    <div class='chat-body1 clearfix'>
	        <p>".$message->message."</p>
	        <div class='chat_time1'>".$message->created_at."</div>
	    </div>
	</li>";
    }
    
}

        
        
        $messages = DB::table('conversations')
            ->join('users', 'conversations.sender_id', '=', 'users.id') 
            ->join('users as users_1', 'conversations.receiver_id', '=', 'users_1.id')            
            ->select('conversations.id as cnv_id','users.image as s_image','users.name as s_name','users.id as s_id','users_1.name as r_name','users_1.image as r_image','users_1.id as r_id','conversations.last_message','conversations.updated_at')
            ->whereRaw('conversations.sender_id='.$user.' OR conversations.receiver_id='.$user.'')
            ->orderBy('conversations.updated_at', 'desc')
            ->get();

        $user_list = "";
        
        foreach($messages as $message){

            if($message->r_id == Auth::user()->id){

              $chat_user_id = $message->s_id;
              $chat_user_name = $message->s_name;
              $chat_user_image = $message->s_image;
            }
            else if($message->s_id == Auth::user()->id){

              $chat_user_id = $message->r_id;
              $chat_user_name = $message->r_name;
              $chat_user_image = $message->r_image;
            }
            else
            {
            }

            $user_list .= "<li class='left clearfix user_chat_link' data-user-id='".$chat_user_id."' data-conv-id='".$message->cnv_id."' data-user-name='".$chat_user_name."'>
            <span class='chat-img float-left'>";
            if ($chat_user_image){
                $user_list .= "<img src='".url('/').'/public/user_images/'.$chat_user_image."' class='img-circle'>";
            }
            else{
                $user_list .= "<img src='".url('/').'/public/public_site_assets/img/User.png'."' class='img-circle'>";
            }
            $user_list .= "</span>
            <div class='chat-body clearfix'>
              <div class='header_sec'>
                  <strong class='primary-font'>".$chat_user_name."</strong>
                  <strong class='float-right'>
                 </strong>
              </div>
              <div class='contact_sec'>
                  <strong class='primary-font'>".$message->last_message."</strong>
                  <span class='badge float-right'></span>
              </div>
            </div>
            </li>";
        }
    $array = array('chat_message' => $chat_message, 'user_list' => $user_list);
    return $array;
        // return $chat;
        die;

        // return view('chat', compact('chat'));
    }

    public function send_message(Request $request){

        // return $request->all();
        // die;
        $check_conversation = Conversation::where([['sender_id', $request->sender_id], ['receiver_id', $request->receiver_id]])->orWhere([['sender_id', $request->receiver_id], ['receiver_id', $request->sender_id]])->first();

        if($check_conversation){

            Message::create(['sender_id' => $request->sender_id, 'receiver_id' => $request->receiver_id, 'message' => $request->message, 'conversation_id' => $check_conversation->id]);

            $check_conversation->last_message = $request->message;
            $check_conversation->save();
        }
        else{
            Conversation::create(['sender_id' => $request->sender_id, 'receiver_id' => $request->receiver_id, 'last_message' => $request->message]);

            $get_latest_coversation = Conversation::orderBy('id', 'DESC')->first();
            Message::create(['sender_id' => $request->sender_id, 'receiver_id' => $request->receiver_id, 'message' => $request->message, 'conversation_id' => $get_latest_coversation->id]);

        }

        // return  redirect('/message');

    }

    public function notifications_ajax_load($user_id)
    {
        
        $notifications = DB::table('messages')
        ->join('users', 'users.id', '=', 'messages.sender_id')
        ->select('users.id', 'users.name', 'messages.created_at', 'users.email')
        ->where('messages.receiver_id', $user_id)
        ->orderBy('messages.id', 'DESC')
        ->get();
        
        echo json_encode($notifications);
    }

    
    public function chat_user_ajax_load()
    {
        $user_data = Auth::User();
        
        $user = $user_data->id;
        $parent_id = $user_data->parent_id;
        
        
        
        $messages = DB::table('conversations')
            ->join('users', 'conversations.sender_id', '=', 'users.id') 
            ->join('users as users_1', 'conversations.receiver_id', '=', 'users_1.id')            
            ->select('conversations.id as cnv_id','users.image as s_image','users.name as s_name','users.id as s_id','users_1.name as r_name','users_1.image as r_image','users_1.id as r_id','conversations.last_message','conversations.updated_at')
            ->whereRaw('conversations.sender_id='.$user.' OR conversations.receiver_id='.$user.'')
            ->orderBy('conversations.updated_at', 'desc')
            ->get();

        $chat_message = "";
        
        foreach($messages as $message){

            if($message->r_id == Auth::user()->id){

              $chat_user_id = $message->s_id;
              $chat_user_name = $message->s_name;
              $chat_user_image = $message->s_image;
            }
            else if($message->s_id == Auth::user()->id){

              $chat_user_id = $message->r_id;
              $chat_user_name = $message->r_name;
              $chat_user_image = $message->r_image;
            }
            else
            {
            }

            $chat_message .= "<li class='left clearfix user_chat_link' data-user-id='".$chat_user_id."' data-conv-id='".$message->cnv_id."' data-user-name='".$chat_user_name."'>
            <span class='chat-img float-left'>";
            if ($chat_user_image){
                $chat_message .= "<img src='".url('/').'/public/user_images/'.$chat_user_image."' class='img-circle'>";
            }
            else{
                $chat_message .= "<img src='".url('/').'/public/public_site_assets/img/User.png'."' class='img-circle'>";
            }
            $chat_message .= "</span>
            <div class='chat-body clearfix'>
              <div class='header_sec'>
                  <strong class='primary-font'>".$chat_user_name.' '.$chat_user_id."</strong>
                  <strong class='float-right'>
                 </strong>
              </div>
              <div class='contact_sec'>
                  <strong class='primary-font'>".$message->last_message."</strong>
                  <span class='badge float-right'></span>
              </div>
            </div>
            </li>";
        }

        print_r($chat_message);
        die;

    }
    
     
    public function my_assignment()
    {
        return view('my_assignment_view');    
    }
    
    public function methodology_inner()
    {
        return view('methodology_inner_view');
    }
    
    public function legend_inner()
    {
        return view('legend_inner_view');
    }
    
    public function scenarios_inner_one()
    {
        return view('scenarios_inner_one_view');
    }
    
    public function scenarios_inner_two()
    {
        return view('scenarios_inner_two_view');
    }
    
    
    public function send_invite_participant(Request $request)
    {
        // $invite_members = array();
        $f_name = $request->input('f_name');
        $l_name = $request->input('l_name');
        $email = $request->input('email');
        $role = $request->input('role');
        $invite_members = $request->invite_members;
        // // echo "popup";
        // print_r($invite_members);
        // die;
        if(!isset($request->invite_members))
            {
                // echo "if";
                // die;
                $check_email = User::where([['email',$email] ])->first();
                if($check_email)
                {
                    Session::flash ( 'message', "Email already exist." );
                    return redirect()->back();
                }
                else
                {
                        
                $hashed_random_password = str_random(8);
                
                $invite_array = array(
                                'name' => $f_name." ".$l_name,
                                'email' => $email,
                                'role' => $role,
                                'is_verified' => '0',
                                'status' => '1',
                                'password'=>Hash::make($hashed_random_password),
                                'parent_id' => Auth::user()->id,
                                'company_name' => Auth::user()->company_name,
                                'created_by' => Auth::user()->id,
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            );
        
                    // return $invite_array;
                    // die;
                    
                    
                    $invite_array = User::create($invite_array);
                    // echo $invite_array->id;
                    // die;
                    
                    $encrypted = Crypt::encryptString($invite_array->id);
                    $url = url('/')."/verify_new_user/".$encrypted;
        
                        
                        $to = $email;
                        
                        $subject = "Invite Participants";
                    
                        $message = "<html>
                            <head>
                            <title></title>
                            </head>
                            <body>
                                <h2>Please click this link.</h2>
                                <p style=color:#f50000>$url</p>
                                <h2>Your New Password!</h2>
                                <h1 style=color:#f50000>$hashed_random_password</h1>
                                <p>INITIATE FOR VALUATION</p>
                            </body>
                            </html>";
            
                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                        // More headers
                        $headers .= 'From: bilal.sheikh@appcrates.com' . "\r\n";
                
                        mail($to, $subject, $message, $headers); 
                        return redirect()->back();
                    
                }
            }
            else
            {
        // echo "else";
        //         die;
                // print_r($invite_members);
                // die;
                $email_string = "";
                // for($e = 0; $e < count($invite_members); $e++)
                // {
                //     $email_string .= $invite_members[$e].",";
                // }
                
                // $email_string = rtrim($email_string, ',');
                $email_string = join(',',$invite_members);
                // die;
                
                $to = $email_string;
                $subject = "Invite Participants";
            
                $message = "<html>
                    <head>
                    <title></title>
                    </head>
                    <body>
                        <h2>Invite for VALUATION</h2>
                    </body>
                    </html>";
    
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
                // More headers
                $headers .= 'From: bilal.sheikh@appcrates.com' . "\r\n";
        
                mail($to, $subject, $message, $headers);    
                return redirect()->back();
                
            }
            
            // $subject = "Invite Participants";
            
            // $message = "<html>
            //     <head>
            //     <title>HTML email</title>
            //     </head>
            //     <body>
            //         <h2>Please click this link and update your password.</h2>
            //         <p style=color:#f50000>$url</p>
            //         <h2>Your New Password!</h2>
            //         <h1 style=color:#f50000>$hashed_random_password</h1>
            //     </body>
            //     </html>";

            // // Always set content-type when sending HTML email
            // $headers = "MIME-Version: 1.0" . "\r\n";
            // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
            // // More headers
            // $headers .= 'From: bilal.sheikh@appcrates.com' . "\r\n";
    
            // mail($to, $subject, $message, $headers);

    }
    
    
}
