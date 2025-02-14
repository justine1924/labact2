<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Features\SupportFormObjects\Form;
use Illuminate\Support\Facades\Storage;
use App\Models\Resident;
use App\Models\Payment;
use App\Models\Reports;
use App\Models\HouseHolds;
use DB;
use Auth;

class Datab extends Controller
{
    function logoupdate(Request $logo){
        $dir="logo";
        $defaultFileName = 'logo.jpg';
        if (!Storage::disk('public')->exists($dir)) {
            Storage::disk('public')->makeDirectory($dir);
        }
        $filePath = $dir . '/' . $defaultFileName;

    // Check if the file exists and delete it
    
        if ($logo->hasFile('logoset')) {
            if (Storage::disk('public')->exists($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
            $imageBack = $logo->file('logoset');
            $imagePath1 = Storage::disk('public')->putFileAs($dir, $imageBack,$defaultFileName);
        

            return Response()->json(array('track' => $imagePath1), 200);
        }
        return response()->json(['error' => 'No file uploaded'], 400);
    }
    function homedashboardget(){
        $personalinfo = Resident::all();
        $Payment = Payment::all();
        $report = Reports::all();
        $femaleResidents = Resident::where('gender', 'female')->get();
        $pending = Resident::where('status', 'Pending')->get();
        $Verified = Resident::where('status', 'Verified')->get();
        $maleResidents = Resident::where('gender', 'male')->get();
        return response()->json(array('payment'=>$Payment,
        'report'=>$report,
        'resident'=>$personalinfo,
        "femalec"=>$femaleResidents,
        'pending'=>$pending,
        'verified'=>$Verified,
        'malec'=>$maleResidents), 200);
    }
 static function mayvalue()
    {
        if(Auth::check()){
            return true;
        }else{
            return false;
        }
        
    }
    function darkmode(){
        $aunt = Auth::user()->id;
        // DB::table('users')
        //       ->where('id', $aunt)
        //       ->update(['darkmode' => 'Dark']);
        // DB::select("SELECT darkmode FROM `users` WHERE id = {$aunt}");
        $darkmode = 'dark';
        return Response()->json(array('darkmode' => $darkmode), 200);
    }
    
    function Users($URL_GET){   
       
        if(isset(Auth::user()->id)){
        $data = User::all();
        $user = User::where('id' , '=', $URL_GET)->orWhere('name', $URL_GET)->firstOrFail();
        return View('UserTable',['users' => $data]);
    }else{
        return view('auth.login');
    }
    }
    //Usertable
    
    public function updates(Request $req) { 
        $id = $req->user_id;
        $name = $req->user_name;
        $email = $req->user_email;
        DB::table('users')
              ->where('id', $id)
              ->update([
                'name' => $name,
                'email' => $email
            ]);
        $name = DB::select("SELECT name FROM `users` WHERE id = {$id}");
        $email = DB::select("SELECT email FROM `users` WHERE id = {$id}");
        return Response()->json(array('id'=> $id,'name'=> $name,'email'=> $email), 200);
     }

     public function deletes(Request $req) { 
        $aunt = Auth::user()->id;
        $id = $req->user_id;
        $countl = $req->count_list;
        
        if(number_format($id) !== number_format($aunt)){
            DB::table('users')->where('id', $id)->delete();
        }
    
        return Response()->json(array('id'=> $id,'count' => $countl), 200);
     }


     ////upload IMG
     public function upload(Request $request)
    {
        $aunt = Auth::user()->id;
        $folderName = "images";
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        
if (!Storage::disk('public')->exists($folderName)) {
    Storage::disk('public')->makeDirectory($folderName);
    
}else{
    $files = Storage::disk('public')->files($folderName);
            
    foreach ($files as $file) {
        Storage::disk('public')->delete($file); // Delete each file
    }
}
        
        if ($request->file('image')) {
            $path = $request->file('image')->store($folderName, 'public');
            return response()->json(['url' => Storage::url($path),'img'=> str_replace("images/","",$path)], 200);
            
        }

        return response()->json(['error' => 'Image not uploaded'], 400);
    }



   
}
