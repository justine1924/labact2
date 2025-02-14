<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Resident;
use App\Models\Reports;
use App\Models\HouseHolds;
use App\Models\Payment;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Element\Text;
use PhpOffice\PhpWord\Element\TextRun;
use Illuminate\Support\Facades\Log;
use App\Models\Service_Request;
use Carbon\Carbon;

class ResidentController extends Controller
{
    

    function Resident(){
        if(isset(Auth::user()->id)){
            
        $data = Resident::all();
        return view('Resident',['Resident' => $data]);
    }else{
        return view('auth.login');
    }
    }
    function updateRes(Request $resi_update){
$name = $resi_update->name;
$lastname = $resi_update->lastname;
$middle =$resi_update->middlename;
$age = 23;
$amount = 43;


$templatePath = public_path('template.docx');  

if (!file_exists($templatePath)) {
    return response()->json(['error' => 'Template file not found.'], 404);
}

$phpWord = IOFactory::load($templatePath);

foreach ($phpWord->getSections() as $section) {
    foreach ($section->getElements() as $element) {

        if ($element instanceof TextRun) {
            foreach ($element->getElements() as $textElement) {
 
                if ($textElement instanceof Text) {
                    $text = $textElement->getText();
                    
        
                    $text = preg_replace('/\{amount\}/', $amount, $text);
                    $text = preg_replace('/\{lastname\}/', $lastname, $text);
                    $text = preg_replace('/\{middle\}/', $middle, $text);
                    $text = preg_replace('/\{\{name\}\}/', $name, $text);
                    $text = preg_replace('/\{\{age\}\}/', $age, $text);
                    $text = preg_replace('/\{name\}/', $name, $text);  // Handle single curly braces as well
                    $text = preg_replace('/\{age\}/', $age, $text);    // Handle single curly braces as well

                    // Set the updated text back to the element
                    $textElement->setText($text);
                }
            }
        }
        // If the element is just a simple Text element (not part of a TextRun)
        elseif ($element instanceof Text) {
            $text = $element->getText();

            // Replace placeholders with actual values (both {{name}} and {name})
           
            $text = preg_replace('/\{\{name\}\}/', $name, $text);
            $text = preg_replace('/\{\{age\}\}/', $age, $text);
            $text = preg_replace('/\{name\}/', $name, $text);  // Handle single curly braces as well
            $text = preg_replace('/\{age\}/', $age, $text);    // Handle single curly braces as well

            // Set the updated text back to the element
            $element->setText($text);
        }
    }
}

// Save the modified document
$fileName = "$resi_update->name$resi_update->id.docx";
$filePath = storage_path("app/public/docx/$fileName");


// Save the modified document in Word2007 format
$phpWord->save($filePath, 'Word2007');

$report = new Reports();
$report->name = "$resi_update->name$resi_update->id.docx";
$report->idlink	= "app/public/docx/$fileName";
$report->save();
// Return a response to download the generated document

// return response()->download($filePath);


        $dir = "profile-photos";
        
if(isset($resi_update->profile)){
    DB::table('residents')
    ->where('id', $resi_update->id)
    ->update([
      'profile' => "$dir/$resi_update->profile",
  ]);
  DB::table('users')
    ->where('id', $resi_update->id)
    ->update([
      'profile_photo_path' => "$dir/$resi_update->profile",
  ]);
}

        DB::table('residents')
              ->where('id', $resi_update->id)
              ->update([
                'name' => $resi_update->name,
                'lastname' =>$resi_update->lastname, 
                'middlename' =>$resi_update->middlename, 
                'alias'=>$resi_update->alias, 
                'birthday'=>$resi_update->birthday, 
                'age'=>$resi_update->age, 
                'placeofbirth'=>$resi_update->placeofbirth, 
                'email'=>$resi_update->email, 
                'mother'=>$resi_update->mother, 
                'father'=>$resi_update->father, 
                'height'=>$resi_update->height, 
                'weight'=>$resi_update->weight, 
                'Gender'=>$resi_update->Gender, 
                'VoterStatus'=>$resi_update->VoterStatus, 
                'CivilStatus'=>$resi_update->CivilStatus, 
                'Citizenship'=>$resi_update->Citizenship, 
                'Telephone'=>$resi_update->Telephone, 
                'Mobile'=>$resi_update->Mobile
            
            ]);
            if(isset($resi_update->profile)){
            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }
            $path = "$dir/$resi_update->profile";
            
        Storage::disk('public')->move("images/$resi_update->profile", "$dir/$resi_update->profile");
            }
        return Response()->json(array('id' => $resi_update->id,'idarry'=>$resi_update->arryidd,'profile' => $path,'name' => $resi_update->name,
                'lastname' =>$resi_update->lastname, 
                'middlename' =>$resi_update->middlename, 
                'alias'=>$resi_update->alias, 
                'birthday'=>$resi_update->birthday, 
                'age'=>$resi_update->age, 
                'placeofbirth'=>$resi_update->placeofbirth, 
                'email'=>$resi_update->email, 
                'mother'=>$resi_update->mother, 
                'father'=>$resi_update->father, 
                'height'=>$resi_update->height, 
                'weight'=>$resi_update->weight, 
                'Gender'=>$resi_update->Gender, 
                'VoterStatus'=>$resi_update->VoterStatus, 
                'CivilStatus'=>$resi_update->CivilStatus, 
                'Citizenship'=>$resi_update->Citizenship, 
                'Telephone'=>$resi_update->Telephone, 
                'Mobile'=>$resi_update->Mobile), 200);
    }
    function addResident(Request $resi_input){
        
        $i=0;
        $aunt = Auth::user()->id;
        $dir = "profiles";
        $resi = new Resident();
        $resi->profile = $resi_input->profile;
        $resi->name = $resi_input->name;
        $resi->lastname = $resi_input->lastname;
        $resi->middlename = $resi_input->middlename;
        $resi->alias = $resi_input->alias;
        $resi->birthday = $resi_input->birthday;
        $resi->age = $resi_input->age;
        $resi->placeofbirth = $resi_input->placeofbirth;
        $resi->email = $resi_input->email;
        $resi->mother = $resi_input->mother;
        $resi->father = $resi_input->father;
        $resi->height = $resi_input->height;
        $resi->weight = $resi_input->weight;
        $resi->Gender = $resi_input->Gender;
        $resi->VoterStatus = $resi_input->VoterStatus;
        $resi->CivilStatus = $resi_input->CivilStatus;
        $resi->Citizenship = $resi_input->Citizenship;
        $resi->Telephone = $resi_input->Telephone;
        $resi->Mobile = $resi_input->Mobile;
        $resi->save();
        // DB::insert("INSERT INTO `residents`(`profile`, `name`, `lastname`, `middlename`, `alias`, `birthday`, `age`, `placeofbirth`, `email`, `mother`, `father`, `height`, `weight`, `Gender`, `VoterStatus`, `CivilStatus`, `Citizenship`, `Telephone`, `Mobile`) VALUES 
        // ('$resi_input->profile','$resi_input->name','$resi_input->lastname','$resi_input->middlename','$resi_input->alias','$resi_input->birthday','$resi_input->age','$resi_input->placeofbirth','$resi_input->email',
        // '$resi_input->mother','$resi_input->father','$resi_input->height','$resi_input->weight','$resi_input->Gender','$resi_input->VoterStatus',
        // '$resi_input->CivilStatus','$resi_input->Citizenship','$resi_input->Telephone','$resi_input->Mobile')");
        $iddb = DB::select("SELECT residents.id FROM `residents` WHERE profile = '$resi_input->profile';");
        
        if (!Storage::disk('public')->exists($dir)) {
            Storage::disk('public')->makeDirectory($dir);
        }
        
        $path = "$dir/$resi_input->profile";
        Storage::disk('public')->move("images/$resi_input->profile", "$dir/$resi_input->profile");
        return Response()->json(array('pf' => $path,'id'=> $iddb[0]->id), 200);
    }
    function Residentdelete(Request $resi_delete){
        DB::table('residents')->where('id', $resi_delete->id)->delete();
        return Response()->json(array('id'=> $resi_delete->id), 200);
    }


    public function generateWordDocument($urls)
    {
        // Save the modified document
        
        $filePath = storage_path("app/public/docx/$urls");
        // Return a response to download the generated document
     
        return response()->download($filePath);
    }
    
    public function report(){
        if(isset(Auth::user()->id)){
            
        
        $data = Reports::all();
        return view('report',['report' => $data]);
    }else{
        return view('auth.login');
    }
    }
    
   function fetchData(){
    $data = [
        'name' => 'John Doe',
        'age' => 30,
        'location' => 'New York'
    ];

    // Return the data as JSON (which AJAX can consume)
    return response()->json($data)->header('Cache-Control', 'public, max-age=3600');
   }




   //admin
   function updateresid(Request $resi_inpupdate){

    DB::table('residents')
    ->where('id', $resi_inpupdate->id_user)
    ->update([
        'lastname' => $resi_inpupdate->plastname,
        'name' => $resi_inpupdate->pfirstname,
        'middlename' => $resi_inpupdate->pmiddleinitial,
        'alias' => $resi_inpupdate->palias,
        'birthday' => $resi_inpupdate->pbirthday,
        'age' => $resi_inpupdate->page,
        'placeofbirth' => $resi_inpupdate->pplaceofbirth,
        'Gender' => $resi_inpupdate->pGenders,
        'VoterStatus' => $resi_inpupdate->pVoterStatus,
        'CivilStatus' => $resi_inpupdate->pCivilStatus,
        'Citizenship' => $resi_inpupdate->pCitizenship,
        'Telephone' => $resi_inpupdate->pTelephone,
        'Mobile' => $resi_inpupdate->pMobile,
        'height' => $resi_inpupdate->pheight,
        'weight' => $resi_inpupdate->pweight,
        'purok' => $resi_inpupdate->purok,
        'email' => $resi_inpupdate->pEmail,
        'mother' => $resi_inpupdate->pMother,
        'father' => $resi_inpupdate->pFather,
    ]);

    return Response()->json(array('id'=> $resi_inpupdate->user_id), 200);
   }

   function servicereportadd(Request $reportservices){
    $pameyType =Payment::all();
    
    return response()->json(array('datainfo'=>$pameyType));
   }

   function Residentgetadataall(){
    $residentd =Resident::all();
    return response()->json($residentd);
   }

   function Residentinfo(){
    $house = HouseHolds::all();
    $residentd =Resident::all();
    return response()->json(array('datainfo'=>$house,'resident'=>$residentd));
   }
   function settingallget(){
    $defaultValue = DB::selectOne("
    SELECT COLUMN_DEFAULT
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = 'payments'
    AND COLUMN_NAME = 'pay'
    AND TABLE_SCHEMA = DATABASE()
");
$gcashnumber = DB::selectOne("
    SELECT COLUMN_DEFAULT
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = 'payments'
    AND COLUMN_NAME = 'Gcashnum'
    AND TABLE_SCHEMA = DATABASE()
");
    return response()->json(array("pay"=>$defaultValue->COLUMN_DEFAULT,"gnumber"=>$gcashnumber->COLUMN_DEFAULT));
   }
}
