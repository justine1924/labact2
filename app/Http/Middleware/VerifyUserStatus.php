<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class VerifyUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && !Auth::user()->verified) {
            return redirect('Services')->with('error', 'Your account is not verified.');
        }
        // if (auth()->check() && auth()->user()->UserAdmin == "admin") {
        //     return $next($request);
        // }

        
        return $next($request);
    }
}
