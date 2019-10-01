<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use Illuminate\Support\Facades\Auth;

class Contributor
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
// 		if (Auth::user()->role =='contributor' || Auth::user()->role =='contributor') {

// 		}
// 		else{
// 			abort(403, 'Unauthorized action.');
// 		}


 $actions=array(
	            'logout',
                'changePassword',
                'send_pass_var',
                'message',
                'profile',
                'update_profile',
                'get_assignments',
                'send_message',
                'chat',
                'chat_user_ajax_load', 
                'notifications_ajax_load', 
		);
		
		      //$url = $request->url();
// echo    $action=homeFlag();
$home=list(, $action) = explode('@', Route::getCurrentRoute()->getActionName());
$action = $home[1];

// echo $action;
// 		die;
		
		if (Auth::user()->role =='contributor' && in_array($action,$actions) ) {
echo "bilal";
		}
		else{
		    echo "not bilal";
			abort(403, 'Unauthorized action.');
		}
die;

		return $next($request);
	}
}
