<?php

namespace App\Http\Middleware;

use Closure;

class Status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }
    
    public function handle($request, Closure $next)
    {
        // $user       = \App\Se::first();
        // $user = \App\User::where('email', $request->email)->first();
        // if ($user->emp_no == '') { 
        //     return redirect('/');
        // } 
        // elseif ($user->emp_no == 'rama') {
        //     return redirect('/admin');
        // }
        if (!$request->session()->exists('login')) {
            // user value cannot be found in session
            return redirect('/');
        }

        return $next($request);
    }
}
