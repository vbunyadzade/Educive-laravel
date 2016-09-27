<?php

namespace App\Http\Middleware;

use Closure;

class CompanyCheck
{
	/**
	* Handle an incoming request.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \Closure  $next
	* @return mixed
	*/
	public function handle($request, Closure $next)
	{
		$user = $request->user();

		if( $user && $user->type == 'company'){
			return $next($request);
		}

		return "You are not a company. You don't have permission to see this page";
	}
}