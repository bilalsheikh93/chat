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
use App\User;
use App\Contact;
use App\Device;
use Twilio\Rest\Client;
use Hash;
use Illuminate\Support\Facades\Session;


// date_default_timezone_set("Europe/Stockholm");

class SuperAdminDashboardController extends Controller
{
   
    public function index()
    {
        $total_users = DB::select("SELECT count(*) AS total_users from users WHERE status != '2' AND role != 'super_admin' ");
        $total_companies = DB::select("SELECT count(*) AS total_companies from users WHERE status != '2' AND parent_id = 0 ");
        
        $data_array = array('total_users' => $total_users,
                            'total_companies' => $total_companies
                            );

        // print_r($data_array);
        // die;

		return view('super_admin/dashboard',compact('data_array'));

        // return view('super_admin/dashboard');
    }


    public function changepassword()
    {
        return view('super_admin/changePassword');
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
                return  redirect('/super_admin/login');
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
        return view('super_admin/view_profile',compact('user'));
    }

    public function update_profile(Request $request)
    {
        $user = Auth::User();
        $image = $request->image;
        
        if($image)
        {
            $file = $request->file('image');
            $file_name = time().$file->getClientOriginalName();
    
            $location = app()->basePath('public/user_images');
            $file->move($location, $file_name);
    
            $data = array(
                'image' => $file_name
            );
            
        }
        else
        {
            Session::flash ( 'message', "Successfully update profile." );
            return redirect('/super_admin/profile');
        }
            
            
        $user = User::where('id', $user->id)->update($data);
        // echo "ok";
        // die;
        
        Session::flash ( 'message', "Successfully update profile." );
        return redirect('/super_admin/profile');
        
    }
    
    public function user()
    {
        $all_users = User::where([['status', '!=', '2'] , ['role', '!=', 'super_admin']])->paginate(10);
        return view('super_admin/user_view',compact('all_users'));
    }

    public function transaction()
    {
        return view('super_admin/transaction_view');
    }
    
    public function license()
    {
        return view('super_admin/license_view');
    }

    public function revenue()
    {
        return view('super_admin/revenue_view');

    }
    
    public function company()
    {
        $all_companies = User::where([['status', '!=', '2'] , ['role', '!=', 'super_admin'] , ['parent_id', 0] ])->paginate(10);
        return view('super_admin/company_view',compact('all_companies'));
    }
    
    
    
}
