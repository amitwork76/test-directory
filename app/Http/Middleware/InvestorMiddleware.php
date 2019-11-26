<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Response;

class InvestorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(!empty($request->user()))
        {
            if ($request->user() && $request->user()->type != 'investor')
    		{
    		 return redirect('admin/dashboard');
    		}
            return $next($request);
        }else{
            return redirect('login');
        }
    }
}
