<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\User;
use App\Models\notification;
use App\Http\Controllers\NotificationController;
use App\Models\Verification;
use App\Models\Resident;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Element\Text;
use PhpOffice\PhpWord\Element\TextRun;
use Illuminate\Support\Facades\Log;
use App\Models\Reports;
use App\Models\HouseHolds;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
class PaymentController extends Controller
{
    function settingGcashupdate(Request $gcashsetting){
        DB::statement("ALTER TABLE payments ALTER COLUMN pay SET DEFAULT '$gcashsetting->pay'");
        DB::statement("ALTER TABLE payments ALTER COLUMN Gcashnum SET DEFAULT '$gcashsetting->number'");
        $defaultValue = DB::selectOne("
    SELECT COLUMN_DEFAULT
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = 'payments'
    AND COLUMN_NAME = 'pay'
    AND TABLE_SCHEMA = DATABASE()
");
        return Response()->json($defaultValue, 200);
    }
    function usertrackerdata(){
        $usertracker = DB::table('payments')
    ->where('Resident_id', Auth::user()->id)
    ->select(
        'name',
        'want',
        'Request_date',
        'created_at',
        'Status',
    )
    ->get();
        return Response()->json($usertracker, 200);
    }
    function searbartrack(Request $track){
        $trackData = DB::table('payments')
    ->where('track', $track->search)
    ->select(
        'name',
        'want',
        'Request_date',
        'created_at',
        'Status',
    )
    ->first();
        return Response()->json($trackData, 200);
    }
    function servicess(){
        $varif = DB::table('users')
    ->where('id', Auth::user()->id)
    ->select(
        'varified'
    )
    ->first();
        return view('user.profile.Service',['verifycheck' => $varif]);
    }
    function payHome($type){
        $user = User::where('varified', 'Verified')->first();
        if (!$user) {
            return redirect('varifypage')->with('error', 'Invalid or Unvarified.');
        }
        $trackData = DB::table('residents')
    ->where('user_id', Auth::user()->id)
    ->select(
        'name',
        'lastname',
        'middlename'
    )
    ->first();
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
        return view('user.profile.proceed.payfiledClearance',['type'=> $type,'resedent'=> $trackData,"pay"=>$defaultValue->COLUMN_DEFAULT,"gnumber"=>$gcashnumber->COLUMN_DEFAULT]);
    }
    function Request1(Request $req){
        // $user = User::where('email', $request->email)->first();

        $req->validate([
            'myimg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if (!Storage::disk('public')->exists("uploads/images")) {
            Storage::disk('public')->makeDirectory("uploads/images");
        }
        if ($req->hasFile('myimg')) {
            $imageBack = $req->file('myimg');
            $imagePath1 = Storage::disk('public')->putFile('uploads/images', $imageBack);
            
            $paying = new Payment();
            $paying->name = $req->fname;
            $paying->track = $req->track;
            $paying->reference = $req->refer;
            $paying->purpose = $req->description;
            $paying->Request_date = $imagePath1;
            $paying->PaymentMethod = $req->pmethod;
            $paying->Resident_id = Auth::user()->id;
            $paying->want = $req->want;
            $paying->save();

            $usertracker = DB::table('payments')
            ->where('Resident_id', Auth::user()->id)
            ->select(
                'name',
                'want',
                'Request_date',
                'created_at',
                'Status',
                'purpose'
            )
            ->first();
                $tosend = Auth::user()->id;
                $forwhat =  $req->want;
                $description = $req->description;
                NotificationController::notify(Auth::user()->id,$tosend,$forwhat,$description);
    
            return Response()->json(array('track' => $req->track), 200);
        }
        
        return response()->json(['error' => 'No file uploaded'], 400);
       
    }

    /////ADMIN
    function payment(){
        $pay = Payment::all();
        return view('payment',['payment' => $pay]);
    }
    
    function confirmpayment(Request $data){
        $usertracker = DB::table('payments')
    ->where('Resident_id', $data->Resident_id)
    ->where('id', $data->id)
    ->select(
        'name',
        'want',
        'Request_date',
        'created_at',
        'Status',
        'purpose'
    )
    ->first();
        $tosend = $data->Resident_id;
        $forwhat =  $usertracker->want;
        $description = $usertracker->purpose;
        NotificationController::notify(Auth::user()->id,$tosend,$forwhat,$description);

        DB::table('payments')
        ->where('id', $data->id)
              ->update([
                'Status' => 'Approved'
            ]);
            $userData = DB::table('residents')
            ->where('user_id', $data->Resident_id)
            ->select(
                'id',
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
            $name = $userData->name;
$lastname = $userData->lastname;
$middle =$userData->middlename;
$age = 23;
$amount = 43;

// Correct path to template file located in the public folder
$templatePath = public_path('template.docx');  // Path to the template in public/

// Check if the template file exists
if (!file_exists($templatePath)) {
    return response()->json(['error' => 'Template file not found.'], 404);
}

// Load the template .docx file using IOFactory
$phpWord = IOFactory::load($templatePath);

// Iterate over all sections and replace the placeholders with actual values
foreach ($phpWord->getSections() as $section) {
    foreach ($section->getElements() as $element) {
        // If the element is a TextRun, we need to iterate over its individual Text elements
        if ($element instanceof TextRun) {
            foreach ($element->getElements() as $textElement) {
                // Check if the element is a Text element
                if ($textElement instanceof Text) {
                    $text = $textElement->getText();
                    
                    // Replace placeholders with actual values (both {{name}} and {name})
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
$fileName = "$userData->name$userData->id.docx";
$filePath = storage_path("app/public/docx/$fileName");


// Save the modified document in Word2007 format
$phpWord->save($filePath, 'Word2007');

$report = new Reports();
$report->name = "$userData->name$userData->id.docx";
$report->idlink	= "app/public/docx/$fileName";
$report->save();

        return Response()->json(array('id'=> $data), 200);
    }
    function Cancelpayment(Request $data){
        DB::table('payments')
        ->where('id', $data->id)
              ->update([
                'Status' => 'Declined'
            ]);
        return Response()->json(array('id'=> $data->id), 200);
    }

    function display(){
        $pay = Payment::all();
        return response()->json($pay);
    }
    function payGetInfo(){
        $personalinfo = Resident::all();
        $Payment = Payment::all();
        return response()->json(array('paymentdata'=>$Payment,'resident'=>$personalinfo));
    }
    
}
