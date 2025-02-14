<?php

namespace App\Http\Middleware;


use App\Models\User;
use App\Http\Controllers\Datab;
use App\Models\Resident;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Log;
use Closure;
class TrackUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    
        // if (Datab::mayvalue()) {
        //     DB::table('users')
        //       ->where('id', '2')
        //       ->update([
        //         'name' => "online"
        //     ]);
        // }else{
        //     DB::table('users')
        //       ->where('id', '2')
        //       ->update([
        //         'name' => $userName = Auth::user() ? Auth::user()->name : 'Guest'
        //     ]);
        // }
        
        return $next($request);
    }
}
