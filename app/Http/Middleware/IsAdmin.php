<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if (auth()->check() && auth()->user()->UserAdmin == "user") {
            
            if($request == "dashboard"){
                return redirect('/404');
            }else if($request == "Resident"){
                return redirect('/404');
            }
            return redirect('/home');
        }
        if (auth()->check() && auth()->user()->UserAdmin == "admin") {
            return $next($request);
        }


        
        return redirect('/404');
        
        

    }
}
