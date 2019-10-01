<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use Illuminate\Support\Facades\Auth;

class CompanyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     
	public function handle($request, Closure $next, $guard = null)
	{
	    if(Auth::user()->role =='admin')
	    {
	        $actions=array(
    	            'get_logout',
                    'changePassword',
                    'sendPasswordVar',
                    'index',
                    'initiate_valuation',
                    'step_1',
                    'step_2',
                    'step_3',
                    'step_4',
                    'step_5',
                    'step_6',
                    'step_7',
                    'step_8',
                    'step_9',
                    'step_10',
                    'team',
                    'update_team',
                    'delete_team',
                    'company_new_user',
                    'approve_user',
                    'saved',
                    'message',
                    'revenue_rate', 
                    'cost_of_gold_sold',
                    'taxes', 
                    'amortization', 
                    'depreciation', 
                    'sales', 
                    'interest_expense', 
                    'capital_expenditures', 
                    'working_capital', 
                    'investments', 
                    'transaction_execution_costs',
                    'debt_pay_off_schedule', 
                    'assets',
                    'add_step_1',
                    'add_step_2',
                    'add_step_3',
                    'add_step_4',
                    'add_step_5',
                    'add_step_6',
                    'add_step_7',
                    'profile',
                    'update_profile',
                    'get_assignments', 
                    'get_sectors',
                    'delete_assignment_user',
                    'next_step_3', 
                    'change_credit_card_info', 
                    'update_card_info', 
                    'change_plan',
                    'update_plan',
                    'send_message',
                    'chat',
                    'chat_user_ajax_load', 
                    'notifications_ajax_load',
                    'methodology_inner',
                    'legend_inner',
                    'scenarios_inner_one',
                    'scenarios_inner_two',
                    'send_invite_participant'
    		);
    		$home=list(, $action) = explode('@', Route::getCurrentRoute()->getActionName());
            $action = $home[1];
            
            if (in_array($action,$actions) ) 
            {
                // echo "admin";
    		}
    		else
    		{
    		  //  echo "not admin";
    			abort(403, 'Unauthorized action.');
    // 			die;
    		}
	    }
	    elseif(Auth::user()->role =='contributor')
	    {
	         $actions_con=array(
    	            'get_logout',
                    'changePassword',
                    'sendPasswordVar',
                    'message',
                    'profile',
                    'update_profile',
                    'my_assignment',
                    'send_message',
                    'chat',
                    'chat_user_ajax_load', 
                    'notifications_ajax_load', 
    		);
    		
    // 		print_r($actions_con);
    // 		die;
    		$con_home=list(, $con_action) = explode('@', Route::getCurrentRoute()->getActionName());
           $con_action = $con_home[1];
        //   echo $con_action;
            // die;
            
            if (in_array($con_action,$actions_con) ) 
            {
                // echo "contribute";
    		}
    		else
    		{
    		  //  echo "not contribute";
    			abort(403, 'Unauthorized action.');
    // 			die;
    		}
	    }
	    elseif(Auth::user()->role =='super_contributor')
	    {
	         $actions_super_con=array(
    	            'get_logout',
                    'changePassword',
                    'sendPasswordVar',
                    'message',
                    'profile',
                    'saved',
                    'update_profile',
                    'my_assignment',
                    'send_message',
                    'chat',
                    'chat_user_ajax_load', 
                    'notifications_ajax_load', 
    		);
    		
    // 		print_r($actions_super_con);
    // 		die;
    		$super_con_home=list(, $super_con_action) = explode('@', Route::getCurrentRoute()->getActionName());
           $super_con_action = $super_con_home[1];
        //   echo $super_con_action;
            // die;
            
            if (in_array($super_con_action,$actions_super_con) ) 
            {
                // echo "super_contributor";
    		}
    		else
    		{
    		  //  echo "not super_contributor";
    			abort(403, 'Unauthorized action.');
    // 			die;
    		}
	    }
	    else
	    {
	        echo "not";
	        abort(403, 'Unauthorized action.');
	    }
	   // die;
	    
	    
		
		      //$url = $request->url();
// echo    $action=homeFlag();


// echo $action;
// 		die;
		
// 		if (Auth::user()->role =='admin' && in_array($action,$actions) ) {
// // echo "bilal";
// 		}
// 		else{
// 		  //  echo "not bilal";
// 			abort(403, 'Unauthorized action.');
// 		}
// die;
		return $next($request);
	}
}
