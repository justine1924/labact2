<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\Resident;
use App\Models\addmemberHousehold;
use App\Http\Controllers\PersonalInfoController;
use DB;
use Auth;

class PersonalInfoController extends Controller
{
    function ResidentpView($user){
        $userData = DB::table('residents')
    ->where('email', $user)
    ->select(
        'name',
        'lastname',
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
        'status'
        
    )
    ->first();
    $userDatads = DB::table('residents')
    ->where('email', $user)
    ->select(
        'name',
        'lastname',
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
        'profile',
        'status'
        
    )
    ->first();
    $checking = Verification::where('Resident_id', Auth::user()->id)->get();
    $hasEmptyFields = $this->checkIfAnyFieldIsEmpty((array)$userData);

    // Return the view with the data and the empty field flag
    return view('user.profile.Profile_Resident', [
        'verify' => $userDatads,
        'hasEmptyFields' => $hasEmptyFields,
        'checking'=>$checking
    ]);
    }
    private function checkIfAnyFieldIsEmpty($userData)
    {
        // Loop through each attribute in the object
        foreach ($userData as $field => $value) {
            // Check if the field is empty or null
            if (is_null($value) || trim($value) === '') {
                return true; // If any field is empty or null, return true
            }
        }
        return false; // All fields are filled if we reach here
    }

    function verfyingresident(Request $request){
        // Validate the request
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'picimg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure picimg is valid
    ]);
    $userData = DB::table('residents')
    ->where('id', Auth::user()->id)
    ->select(
        'name',
        'lastname',
        'middlename',
        'alias',
        'profile',
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
        'desability',
        'status'
    )
    ->first();
    // Handle the file upload if it's present
    if (!Storage::disk('public')->exists("uploads/images")) {
        Storage::disk('public')->makeDirectory("uploads/images");
    }
    if ($request->hasFile('picimg')) {
        $imageBack = $request->file('picimgback');
        $imagePath1 = Storage::disk('public')->putFile('uploads/images', $imageBack);
        $image = $request->file('picimg');
        $imagePath = Storage::disk('public')->putFile('uploads/images', $image);
        
        // Save the file path or use it as needed
        $vailed = new Verification();
        $vailed->Status = $userData->status;
        $vailed->ValidateType = $request->Valididoption;
        $vailed->contact = $request->contact;
        $vailed->Birthday = $request->dob;
        $vailed->name = $request->name;
        $vailed->email = $request->email;
        $vailed->id_pic = $imagePath;  // Store image path
        $vailed->id_pic2 = $imagePath1;
        $vailed->Resident_id = Auth::user()->id;
        $vailed->save();

        return response()->json(['id' => $request->input('email')], 200);
    }

    return response()->json(['error' => 'No file uploaded'], 400);
    }
    function personalinfo(Request $data){

        DB::table('residents')
              ->where('id', Auth::user()->id)
              ->update([
                'name' => $data->firstname,
                'lastname' =>$data->lastname, 
                'middlename' =>$data->middleinitial, 
                'alias'=>$data->alias, 
                'birthday'=>$data->birthday, 
                'age'=>$data->age, 
                'placeofbirth'=>$data->placeofbirth, 
                'email'=>$data->Email, 
                'mother'=>$data->Mother, 
                'father'=>$data->Father, 
                'height'=>$data->height, 
                'weight'=>$data->weight, 
                'Gender'=>$data->Genders, 
                'VoterStatus'=>$data->VoterStatus, 
                'CivilStatus'=>$data->CivilStatus, 
                'Citizenship'=>$data->Citizenship, 
                'Telephone'=>$data->Telephone, 
                'Mobile'=>$data->Mobile,
                'purok'=>$data->Purok,
                'desability'=>$data->disab,

                "physical_disability" => $data->physical_disability == 'yes' ? 1 : 0,
                "visual_impairment" => $data->visual_impairment == 'yes' ? 1 : 0,
                "hearing_impairment" => $data->hearing_impairment == 'yes' ? 1 : 0,
                "cognitive_disability" => $data->cognitive_disability == 'yes' ? 1 : 0,
                "mental_health_condition" => $data->mental_health_condition == 'yes' ? 1 : 0,
                "neurological_condition" => $data->neurological_condition == 'yes' ? 1 : 0,
                "speech_impairment" => $data->speech_impairment == 'yes' ? 1 : 0,
                "chronic_illness" => $data->chronic_illness == 'yes' ? 1 : 0,
                "autism_spectrum" => $data->autism_spectrum == 'yes' ? 1 : 0,
                "other_checkbox" => $data->other_checkbox == 'yes' ? 1 : 0,
                "other_condition" => $data->other_condition
               
               
            ]);
        
           
        return Response()->json(array('id'=> Auth::user()->id), 200);
    }

    function confirmvarify(Request $data){

        DB::table('verifications')
        ->where('Resident_id', $data->id)
              ->update([
                'Status' => 'Verified'
            ]);
        DB::table('users')
            ->where('id', $data->id)
                  ->update([
                    'varified' => 'Verified'
                ]);
            DB::table('residents')
        ->where('id', $data->id)
              ->update([
                'status' => 'Verified'
            ]);
        return Response()->json(array('id'=> $data->id), 200);
    }
    
    function Cancelvarify(Request $data){
        DB::table('verifications')
        ->where('Resident_id', $data->id)
              ->update([
                'Status' => 'UnVerified'
            ]);
            DB::table('users')
            ->where('id', $data->id)
                  ->update([
                    'varified' => 'UnVerified'
                ]);
            DB::table('residents')
            ->where('id', $data->id)
                  ->update([
                    'status' => 'UnVerified'
                ]);
        return Response()->json(array('id'=> $data->id), 200);
    }

    function display(){
        $varify = Verification::all();
        return response()->json($varify);
    }
    function homeformPersonal(){
        
       $datamember = addmemberHousehold::where('resident_id', Auth::user()->id)->get();
       $resident = Resident::where('user_id', Auth::user()->id)->get();
        return view('user.profile.formPersonal',['memberdis'=>$resident]);
           
    }
    public static function postformPersonal(Request $data){
        return $data->id;
    }
    function displayGet(){
        $personalinfo = Resident::where('id', Auth::user()->id)->first();
        return response()->json($personalinfo);
    }
    function varifInfo(){
        $personalinfo = Resident::all();
        $varify = Verification::all();
        return response()->json(array('varifyinfoget'=>$varify,'resident'=>$personalinfo));
    }
}
