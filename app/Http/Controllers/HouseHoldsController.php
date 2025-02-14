<?php

namespace App\Http\Controllers;

use App\Models\HouseHolds;
use App\Models\Resident;
use App\Models\User;
use App\Models\addmemberHousehold;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;
use Auth;

class HouseHoldsController extends Controller
{
    function homeaddmember(){
        $user = User::where('varified', 'Verified')->first();
        if (!$user) {
            return redirect('/')->with('error', 'Invalid or Unvarified.');
        }
        $addmemberlist = Resident::where('user_id', Auth::user()->id)
                         ->where('familyRoles', 'member')
                         ->get();
        $member = DB::table('house_holds')
    ->where('Resident_id', Auth::user()->id)
    ->select(
        'member',
        'HouseHoldname',
    )
    ->first();
        return view('user.profile.addmember',['member'=> $member,'memberlist' => $addmemberlist]);
    }

    /////addmember
    function addmemberHousehold(Request $reqaddmember){
        $auth = Auth::user()->id;
        $householdcount = DB::table('residents')->where('user_id', $auth)->count(); 
        $member = DB::table('house_holds')->where('Resident_id', Auth::user()->id)->select('member')->first();
        if(intval($householdcount) >= 1 && intval($householdcount) <= intval($member->member)){
        $resi = new Resident();
        $resi->user_id = Auth::user()->id;
        $resi->status = "member"; 
        $resi->familyRoles = "member"; 
        $resi->name = $reqaddmember->firstname;
        $resi->lastname = $reqaddmember->lastname;
        $resi->middlename = $reqaddmember->middleinitial;
        $resi->alias = $reqaddmember->alias;
        $resi->birthday = $reqaddmember->birthday;
        $resi->age = $reqaddmember->age;
        $resi->placeofbirth = $reqaddmember->placeofbirth;
        $resi->email = $reqaddmember->Email;
        $resi->mother = $reqaddmember->Mother;
        $resi->father = $reqaddmember->Father;
        $resi->height = $reqaddmember->height;
        $resi->weight = $reqaddmember->weight;
        $resi->Gender = $reqaddmember->Genders;
        $resi->VoterStatus = $reqaddmember->VoterStatus;
        $resi->CivilStatus = $reqaddmember->CivilStatus;
        $resi->Citizenship = $reqaddmember->Citizenship;
        $resi->Telephone = $reqaddmember->Telephone;
        $resi->Mobile = $reqaddmember->Mobile;
        $resi->purok = $reqaddmember->Purok;
        $resi->desability = $reqaddmember->disab;

        $resi->physical_disability = $reqaddmember->physical_disability == 'yes' ? 1 : 0;
        $resi->visual_impairment = $reqaddmember->visual_impairment == 'yes' ? 1 : 0;
        $resi->hearing_impairment = $reqaddmember->hearing_impairment == 'yes' ? 1 : 0;
        $resi->cognitive_disability = $reqaddmember->cognitive_disability == 'yes' ? 1 : 0;
        $resi->mental_health_condition = $reqaddmember->mental_health_condition == 'yes' ? 1 : 0;
        $resi->neurological_condition = $reqaddmember->neurological_condition == 'yes' ? 1 : 0;
        $resi->speech_impairment = $reqaddmember->speech_impairment == 'yes' ? 1 : 0;
        $resi->chronic_illness = $reqaddmember->chronic_illness == 'yes' ? 1 : 0;
        $resi->autism_spectrum = $reqaddmember->autism_spectrum == 'yes' ? 1 : 0;
        $resi->other_checkbox = $reqaddmember->other_checkbox == 'yes' ? 1 : 0;
        $resi->other_condition = $reqaddmember->other_condition;
        $resi->save();

        $limitvar = 'Success Added Member Family';
        return Response()->json(array('member'=> $resi,  'limit' => $limitvar), 200);
   
    }else{
        $limitvar = 'Im Sorry You are In Limit';
            return Response()->json(array('member'=> $reqaddmember , 'limit' => $limitvar), 200);
    }
    }
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

function updateaddmemberpost(Request $resi_update){
        $dir = "profile-photos";
       
        if(isset($resi_update->pprofile)){
            DB::table('residents')
            ->where('id', $resi_update->idusera)
            ->update([
              'profile' => "$dir/$resi_update->pprofile",
          ]);
          
        }
                DB::table('residents')
                      ->where('id', $resi_update->idusera)
                      ->update([
                        'name' => $resi_update->pfirstname,
                        'lastname' =>$resi_update->plastname, 
                        'middlename' =>$resi_update->pmiddleinitial, 
                        'alias'=>$resi_update->palias, 
                        'birthday'=>$resi_update->pbirthday, 
                        'age'=>$resi_update->page, 
                        'placeofbirth'=>$resi_update->pplaceofbirth, 
                        'email'=>$resi_update->pEmail, 
                        'mother'=>$resi_update->pMother, 
                        'father'=>$resi_update->pFather, 
                        'height'=>$resi_update->pheight, 
                        'weight'=>$resi_update->pweight, 
                        'Gender'=>$resi_update->pGenders, 
                        'VoterStatus'=>$resi_update->pVoterStatus, 
                        'CivilStatus'=>$resi_update->pCivilStatus, 
                        'Citizenship'=>$resi_update->pCitizenship, 
                        'Telephone'=>$resi_update->pTelephone, 
                        'Mobile'=>$resi_update->pMobile,

                        "physical_disability" => $resi_update->physical_disability == 'yes' ? 1 : 0,
                        "visual_impairment" => $resi_update->visual_impairment == 'yes' ? 1 : 0,
                        "hearing_impairment" => $resi_update->hearing_impairment == 'yes' ? 1 : 0,
                        "cognitive_disability" => $resi_update->cognitive_disability == 'yes' ? 1 : 0,
                        "mental_health_condition" => $resi_update->mental_health_condition == 'yes' ? 1 : 0,
                        "neurological_condition" => $resi_update->neurological_condition == 'yes' ? 1 : 0,
                        "speech_impairment" => $resi_update->speech_impairment == 'yes' ? 1 : 0,
                        "chronic_illness" => $resi_update->chronic_illness == 'yes' ? 1 : 0,
                        "autism_spectrum" => $resi_update->autism_spectrum == 'yes' ? 1 : 0,
                        "other_checkbox" => $resi_update->other_checkbox == 'yes' ? 1 : 0,
                        "other_condition" => $resi_update->other_condition
                    
                    ]);
                    if(isset($resi_update->pprofile)){
                    if (!Storage::disk('public')->exists($dir)) {
                        Storage::disk('public')->makeDirectory($dir);
                    }
                    $path = "$dir/$resi_update->pprofile";
                    
                Storage::disk('public')->move("images/$resi_update->pprofile", "$dir/$resi_update->pprofile");
                    }
                return Response()->json($resi_update, 200);
            }
    //////
    function HouseHome(){
        $varif = DB::table('users')
    ->where('id', Auth::user()->id)
    ->select(
        'varified'
    )
    ->first();
        return view('user.profile.formHousehold',['varify1'=>$varif]);
        
    }
    function updateHouse(Request $request){
        DB::table('house_holds')
        ->where('Resident_id', $request->idre)
              ->update([
                "HouseHoldname" => $request->famname,
                "member" => $request->coloredradio,
                "address" => $request->Address,
                "PrimaryPhone" => $request->PrimaryPhone,
                "email" => $request->Email,
                "name" => $request->name,
                "birthdates" => $request->Birthdates,
                "Relationshiphead" => $request->Relationshiphead,
                "PrimaryHousehold" => $request->PrimaryHousehold,
            ]);
        
        return Response()->json(array('id'=> $request->all()), 200);
       
    }
    function housefild(Request $data){
        DB::table('house_holds')
        ->where('id', Auth::user()->id)
              ->update([
                "HouseHoldname" => $data->famname,
                "member" => $data->coloredradio,
                "address" => $data->Address,
                "PrimaryPhone" => $data->PrimaryPhone,
                "email" => $data->Email,
                "name" => $data->name,
                "birthdates" => $data->Birthdates,
                "Relationshiphead" => $data->Relationshiphead,
                "PrimaryHousehold" => $data->PrimaryHousehold,
            ]);
        
           
        return Response()->json(array('id'=> Auth::user()->id), 200);
    }


    ///////admin
    function householdAdmin(){
        $housedata = DB::table('house_holds')
        ->select(
            "HouseHoldname",
            "member",
            "address",
            "PrimaryPhone",
            "email",
            "name",
            "birthdates",
            "Relationshiphead",
            "PrimaryHousehold"
        )
        ->get(); // Retrieve all records
    
            
        
    return view('HouseHolds', ['housedata' => $housedata]);
    }
    function display(){
        $house = HouseHolds::all();
        $addmember = Resident::all();
        $residentd =Resident::all();
        return response()->json(array('datainfo'=>$house,'memberlist'=>$addmember,'resident'=>$residentd));
    }
    function HouseHomeAPIget(){
        $houseGET = HouseHolds::where('Resident_id', Auth::user()->id)->first();
        return response()->json($houseGET);
    }
    function gethouseholdP(){
        $house = HouseHolds::all();
        return response()->json($houseGET);
    }
    function updateaddmember(){
        $residentupdateGET = Resident::where('user_id', Auth::user()->id)->get();
        return response()->json($residentupdateGET);
    }
}
