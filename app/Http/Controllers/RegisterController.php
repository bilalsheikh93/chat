<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Saveuser;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Web_common;
use App\User;
use App\UserPaymentHistory;
use Illuminate\Support\Facades\Crypt;
use Stripe;
use Customer;
use Charge;
use Plan;
use Subscription;

class RegisterController extends Controller

{
    
    public function index()
    {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $end = explode('/', $actual_link);
        $check_value = array_search("super_admin",$end);
        // print_r($check_value);
        //die;
        if($check_value)
        {
            return view('super_admin/login');
        }
        else
        {
            return view('login');    
        }
        
    }
    
    public function login(Request $request) 
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $messages = array(
            'email.required' => 'Please enter email',
            'password.required' => 'Please enter password',
        );
        $rules = array(
            'email' => 'required|email',
            'password' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) 
        {
            return redirect('/login')->withErrors($validator)->withInput();
        }

        $data=array ( 'email' => $email,'password' => $password);
        if (Auth::attempt($data)) 
        {
            if (Auth::user()->role !='admin' ) 
            {
                if(Auth::user()->role == 'contributor' || Auth::user()->role == 'super_contributor')
                {
                    if(Auth::user()->status == '0')
                    {
                        Session::flash ( 'message', "Please verify your account." );
                        return redirect()->back();
                    }
                    elseif(Auth::user()->status == '1')
                    {
                        // return redirect( '/dashboard' );    
                        return redirect( '/my_assignment' );
                    }
                    elseif(Auth::user()->status == '2')
                    {
                        Session::flash ( 'message', "Your account is deleted." );
                        return redirect()->back();
                    }
                    elseif(Auth::user()->status == '3')
                    {
                        Session::flash ( 'message', "Your account is blocked." );
                        return redirect()->back();
                    }
                    else
                    {
                        //abort(403, 'Unauthorized action.');
                        Session::flash ( 'message', "Please verify your account." );
                        return redirect()->back();
                    }
                }
                else
                {
                    Session::flash ( 'message', "Please verify your account." );
                    return redirect()->back();    
                }
                //abort(403, 'Unauthorized action.');
                
	        }
	        return redirect( '/dashboard' );

        } 
        else 
        {
            Session::flash ( 'message', "Somthing seems to be wrong... please chech your log in Credentials" );
            return redirect()->back();
        }

    }
    
    
    public function superAdminLogin(Request $request) 
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $messages = array(
            'email.required' => 'Please enter email',
            'password.required' => 'Please enter password',
        );
        $rules = array(
            'email' => 'required|email',
            'password' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) 
        {
            return redirect('/super_admin/login')->withErrors($validator)->withInput();
        }

        $data=array ( 'email' => $email,'password' => $password);
        if (Auth::attempt($data)) 
        {
            if (Auth::user()->role !='super_admin' ) 
            {
                abort(403, 'Unauthorized action.');
	        }
	        else
	        {
	            return redirect( '/super_admin/dashboard' );    
	        }

        } 
        else 
        {
            Session::flash ( 'message', "Invalid Credentials , Please try again." );
            return redirect()->back();
        }

    }
    

    public function registration()
    {
        $get_companies_name = DB::select("SELECT company_name from users group by company_name ");
        // return $get_companies_name;
        // die;
        return view('registration', compact('get_companies_name'));
    }


    public function add_new_user(Request $request)
    {
        $full_name = $request->input('full_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');
        $company_name = $request->input('company_name');
// echo "Abdullah";
// die
        $check_email = User::where([['email',$email] ])->first();
// print_r($check_email);
// die;




        if($check_email)
        {
            Session::flash ( 'message', "Email already exist." );
            return redirect()->back();
        }
        else
        {
            $get_company_id = User::select('id')->where('company_name',$company_name)->first();

            // return $get_company_id;
            // die;
            
            if($get_company_id)
            {
                $company_id = $get_company_id->id;
            }
            else
            {
                $company_id = 0;
            }

//             echo $get_company_id;
// die;
            
            $user_array = array(
                        'name' => $full_name,
                        'email' => $email,
                        'password' => Hash::make($password),
                        'parent_id' => $company_id,
                        'role' => $role,
                        'is_verified' => '0',
                        'company_name' => $company_name
                    );

            // return $user_array;
            // die;

            $user = User::create($user_array);
    // echo $user->id;
    // die;
            
            if($user)
            {
                $user_id = $user->id;
                $encrypted = Crypt::encryptString($user_id);
            
                $url = url('/')."/verify_new_user/".$encrypted;
                // echo $url;
                // die;
                
                $to = $email;
                $subject = "Verification E-mail";

                $message = "<html>
                        <head>
                        <title>Verification E-mail</title>
                        </head>
                        <body>
                            <h2>Hi $full_name</h2>
                            <p>Thank you for registering with IncValuator, your tool to manage Corporate Development in your company. Please click on the link below to validate your account.</p>
                            <p>Thanks!</p>
                            <p>$url</p>
                            <br />
                            <p>If you have any questions, please contact us at: <a href='#'>support@incvaluator.com</a></p>
                        </body>
                        </html>";

                    // Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
                    // More headers
                    $headers .= 'From: bilal.sheikh@appcrates.com' . "\r\n";
            
                    mail($to, $subject, $message, $headers);
                    
                    
                             
                        
if($role == 'contributor')
{
    $email_string = "";
    $get_admin_email = User::select('email')->where([ ['status','!=','2'],['role','admin'],['parent_id',$get_company_id->id] ])->get();
    //  return $get_admin_email;
    // return $str = implode (",", $get_admin_email);
    for($e = 0; $e < count($get_admin_email); $e++)
    {
        $email_string .= $get_admin_email[$e]->email.",";
    }
    
    $email_string = rtrim($email_string, ',');

    // echo $email_string;
    
    $to1 = $email_string;
    $subject1 = "Request E-mail";

    $message1 = "<html>
                        <head>
                        <title>Request E-mail</title>
                        </head>
                        <body>
                            <p>Please accept the Contributor request</p>
                        </body>
                        </html>";

                    // Always set content-type when sending HTML email
                    $headers1 = "MIME-Version: 1.0" . "\r\n";
                    $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
                    // More headers
                    $headers1 .= 'From: bilal.sheikh@appcrates.com' . "\r\n";
            
                    mail($to1, $subject1, $message1, $headers1);

}

                    
                    $data11 = array ( 'email' => $email,'password' => $password);
                    Auth::attempt($data11);
                    $abc = Auth::user();
        // $data = $request->session()->all();

        // print_r($abc);
        // die;
                    Session::flash ( 'message', "Successfully Register Please check email." );
                    return redirect()->back();
            }
            else
            {
                Session::flash ( 'message', "Error! Please try again." );
                return redirect()->back();
            }
        }
        die;

    }


    public function verify_new_user($id)
    {
        $decrypted = Crypt::decryptString($id);
        // echo $decrypted;
        // die;
        // return view('register_payment_step',comp);
        $get_user_data = User::where([['id',$decrypted] ])->first();
        // print_r($get_user_data->role);
        // die;
        if($get_user_data->role == 'contributor' || $get_user_data->role == 'super_contributor')
        {
            if($get_user_data->status == '1')
            {
                $check_user_payment = User::where([['id',$decrypted],['status','1'] ])->first();
                // Session::flash ( 'message', "Successfully verify pleae login." );
                return redirect('/login');
            }
            else
            {
                Session::flash ( 'message', "Kindly contact your admin for approval." );
            return redirect('/login');    
            }
            
        }
        else
        {
            $check_user_payment = User::where([['id',$decrypted],['status','1'] ])->first();
            // print_r($check_user_payment);
            // die;
            if($check_user_payment)
            {
                // Session::flash ( 'message', "Successfully verify pleae login." );
                return redirect('/login');
            }
            else
            {
                Session::flash ( 'message', "You've been successfully registered. Please choose your plan and submit payment to activate your account on the next page." );
                return view('register_payment_step',compact('decrypted'));    
            }
        }
        
        
// die;
        // $verify_user = User::where('id',$decrypted)->first();
        // if(is_null($verify_user))
        // {
        //     Session::flash ( 'message', "Please try again." );
        //     return redirect('/login');
        // }
        // else
        // {
        //     $update_verify_user = User::where('id',$decrypted)->update(['status' => '1', 'is_verified' => '0', 'role' => 'admin']);
            
        //     Session::flash ( 'message', "Successfully verify pleae login." );
        //     return redirect('/login');
        // }


    }
    
    
    public function add_new_user_payment(Request $request)
    {
        Stripe\Stripe::setApiKey("sk_test_8bJtuF0Zzlsx5tOPnahbxCuQ");
        
        
        

// $plan = Stripe\Plan::create(array(
// 							  "amount" => 299,
// 							  "interval" => "month",
// 							  "name" => "Sliver Plan",
// 							  "currency" => "usd",
// 							  "id" => "one")
// 							);

// print_r($plan);
// die;


// $customer =  \Stripe\Customer::create(array(
//              "source" => $request->stripeToken,
//              "plan" => "unlimited",
//             "description" => "Example customer"
//             ));

//   print_r($customer);

// die;


//  $su = \Stripe\Subscription::create(array(
//   "customer" => "cus_FnrFaHjdB5WDTc",
//   "plan" => "unlimited",
//   "quantity"=>"1"
// ));

// print_r($su);

// die;


// $charge = \Stripe\Charge::create(array("amount" => 2000, // Amount in cents
// 							  "currency" => "usd",
// 							   "source" => $token,
// 							   "description" => "Example charge"
// 							));



// die;
        
        $user_id = $request->input('user_id');
        $plan_value = $request->input('plan_value');
        $plan_name = $request->input('plan_name');

        $check_user_payment = User::where([['id',$user_id],['status','1'] ])->first();
        // print_r($check_user_payment);
        // die;
        if($check_user_payment)
        {
            Session::flash ( 'message', "Successfully verify please login." );
            return redirect('/login');
        }
        else
        {
            //echo "else";
            // $charge =   Stripe\Charge::create ([
            //     "amount" => $plan_value * 100,
            //     "currency" => "usd",
            //     "source" => $request->stripeToken,
            //     "description" => "Test payment from itsolutionstuff.com." 
            // ]);
            
            $get_email = User::where([['id',$user_id] ])->first();
            // print_r($get_email->email);
            // die;
            
            $customer = Stripe\Customer::create(array(
                'email' => $get_email->email,
                // "plan" => $plan_name,
                'source'  => $request->stripeToken
            ));
            
            $subscription = \Stripe\Subscription::create(array(
                "customer" => $customer->id,
                "plan" => $plan_name
            ));
    
            $charge = Stripe\Charge::create(array(
                'customer' => $customer->id,
                "amount" => $plan_value * 100,
                "currency" => "usd",
                "description" => "Payment from incvaluatordev.appcrates.co" 
            ));
            
            // print_r($subscription);    
            // die;
            
            
            // $payment_array = array(
            //             'stripe_id' => $charge['id'],
            //             'plan_name' => $plan_name,
            //             'plan_value' => $plan_value,
            //             'status' => '1',
            //             // 'is_verified' => '0',
            //             'role' => 'admin'
            //         );
            
            if($get_email->parent_id == 0)
            {
                $update_verify_user = User::where('id',$user_id)->update(['status' => '1', 'stripe_id' => $charge['id'], 'role' => 'admin', 
                'plan_name' => $plan_name, 'plan_value' => $plan_value, 'stripe_customer_id' => $charge['customer'], 
                'stripe_customer_card_id' => $charge['source']['id'], 'plan_start_date' => date('Y-m-d'), 'stripe_plan_subscription_id' => $subscription['id'], 'parent_id' => $user_id ]);    
            }
            else
            {
                $update_verify_user = User::where('id',$user_id)->update(['status' => '1', 'stripe_id' => $charge['id'], 'role' => 'admin', 
                'plan_name' => $plan_name, 'plan_value' => $plan_value, 'stripe_customer_id' => $charge['customer'], 
                'stripe_customer_card_id' => $charge['source']['id'], 'plan_start_date' => date('Y-m-d'), 'stripe_plan_subscription_id' => $subscription['id'] ]);
            }
                    
            
            
            
            if($update_verify_user)
            {
                $payment_array = array(
                        'stripe_charge_id' => $charge['id'],
                        'amount' => $plan_value,
                        'customer_id' => $user_id,
                        'stripe_customer_id' => $charge['customer'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    );

                // return $user_array;
                // die;
    
                $user_payment_history = UserPaymentHistory::create($payment_array);
                Session::flash ( 'message', "Successfully Payment" );
                return redirect('/dashboard');
                // return redirect()->back();
            }
            else
            {
                Session::flash ( 'message', "Error! Please try again." );
                return redirect()->back();
            }
        }
        // die;
    }


    public function forgotpassword()
    {
        return view('forgotpassword');
    }
    
    
    public function email_send(Request $request)
    {
        $email_send=User::where('email',$request->email)->first();
        if(is_null($email_send))
        {
            Session::flash ( 'message', "We are sorry but we don't have an account associated with that e-mail address." );
            return redirect()->back();
        }
        else
        {
            $encrypted = Crypt::encryptString($email_send->id);
            $url = url('/')."/verify_forgotpassword/".$encrypted;
            
            // $hashed_random_password = str_random(8);
            // $email_submit=User::where('id',$email_send->id)->update(['password'=>Hash::make($hashed_random_password),]);
            
            $to = $request->email;
            $subject = "Password Reset";

            $message = "<html>
                <head>
                <title>HTML email</title>
                </head>
                <body>
                    <h2>Please click this link and update your password.</h2>
                    <p style=color:#f50000>$url</p>
                </body>
                </html>";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
            // More headers
            $headers .= 'From: bilal.sheikh@appcrates.com' . "\r\n";
    
            mail($to, $subject, $message, $headers);
            Session::flash ( 'message', "Please check your email." );
            return redirect()->back();
        }
    }
    
    public function verify_forgotpassword($id)
    {
        $decrypted = Crypt::decryptString($id);
        // echo $decrypted;
        // die;
        return view('forgotpassword_form', compact('decrypted'));
    }
    
    public function save_forgotpassword(Request $request)
    {
        // echo "hello world";
        // die;
        $user_id = $request->input('user_id');
        $new_password = $request->input('new_password');
        $confirm_password = $request->input('confirm_password');
        
        if($new_password == $confirm_password)
        {
            $email_submit = User::where('id',$user_id)->update(['password'=>Hash::make($new_password)]);
            
            $get_user_data = User::where('id',$user_id)->first();
            
            // print_r($get_user_data->role);
            // die;
            
            if($get_user_data->role == 'super_admin')
            {
                Session::flash ( 'message', "Successfully update your password please login." );
                return redirect('/super_admin/login');    
            }
            else
            {
                Session::flash ( 'message', "Successfully update your password please login." );
                return redirect('/login');    
            }
            
        }
        else
        {
            Session::flash ( 'message', "Password does not match." );
            return redirect()->back();
        }


    }

    
    // public function get_logout()
    // {
    //     Auth::logout();
    //     return redirect('login');
    // }
    
    
    public function get_logout()
    {
        if(Auth::user()->role == 'super_admin')
        {
            Auth::logout();
            return redirect('/super_admin/login');
        }
        else
        {
            Auth::logout();
            return redirect('login');    
        }
        
    }

   

}

