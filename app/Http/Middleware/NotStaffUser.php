<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class NotStaffUser
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
		if (Auth::user()->role =='staff_user' ||  Auth::user()->role =='appcrates') {

			abort(403, 'Unauthorized action.');

		}

		return $next($request);
	}
}
