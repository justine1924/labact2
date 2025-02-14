<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notification;
use App\Models\Resident;
use App\Models\Verification;
use App\Models\User;
use App\Http\Controllers\NotificationController;
use DB;
use Auth;
use Carbon\Carbon;

class NotificationController extends Controller
{
    function getnotifya(){
        $user = User::all();
        $notify = notification::all();
        return Response()->json(array('notify'=> $notify,'userlist'=>$user), 200);
    }
    function getnotifySeener(Request $seen){
        $currentDate = Carbon::now()->format('l, F j, Y');
        $notify = notification::where('status', null)
        ->where('resedent_id', Auth::user()->id)
        ->where('id', $seen->id)
        ->update(['status' => $currentDate]);
        return Response()->json(array('notify'=> $notify), 200);
    }
    public static function msg($what,$discreption){
        $currentDate = Carbon::now()->format('l, F j, Y'); // Format: Day, Month day, Year

        if(Auth::check() && Auth::user()->UserAdmin == "admin"){
            $msg = "thank you for cooparative now you cant claim it this  $currentDate we give $what";
            return $msg;
        }else if(Auth::check() && Auth::user()->UserAdmin == "user"){
            $msg = "i like to get a $what for $discreption";
            return $msg;
        }else{
            $msg = "$what $discreption";
            return $msg;
        }
    }
    public static function usertype($id){
        if(Auth::check() && Auth::user()->UserAdmin == "admin"){
            return $id;
        }else if(Auth::check() && Auth::user()->UserAdmin == "user"){
            $id = 1;
            return $id;
        }else{
            return $id;
        }
    }
    public static function notify($Authid,$id,$what,$discreption){
        $message = NotificationController::msg($what,$discreption);
        $id = NotificationController::usertype($id);
        $userData = DB::table('residents')
    ->where('user_id', $Authid)
    ->select(
        'name',
        'lastname',
        'profile',
        'middlename',
        'alias',
        'birthday',
        'age',
        'placeofbirth',
        'email',
        'mother',
        'father',
        'height',
        'weight',
        'Gender',
        'VoterStatus',
        'CivilStatus',
        'Citizenship',
        'Telephone',
        'Mobile',
        'purok',
        'status',
    )
    ->first();
        
            $notify = new notification();
            $notify->resedent_id = $id;
            $notify->profile = $userData->profile;
            $notify->name = "$userData->name $userData->lastname";
            $notify->message = $message;
            $notify->email = $userData->email;
            $notify->save();
  
        
        //feeback
        // $systemmsg="Thank you for dedicating your time and energy into this.";
        // $notify = new notification();
        // $notify->resedent_id = Auth::user()->id;
        // $notify->profile = Auth::user()->profile_photo_path;
        // $notify->name = "$userData->name $userData->lastname";
        // $notify->message = $systemmsg;
        // $notify->email = Auth::user()->email;
        // $notify->save();

    }
}
