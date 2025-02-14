<?php

use Illuminate\Support\Facades\Route;
use Livewire\Features\SupportFormObjects\Form;
use App\Http\Controllers\Datab;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\HouseHoldsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BlotterRecodrsController;
use App\Http\Controllers\ResidentController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\NotificationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/varifypage', function () {
            return view('varifypage');
        })->name('varifypage');
        Route::get('/home', function () {
            return view('user.profile.welcome');
        })->name('home');
        Route::get('/Trackreq', function () {
            return view('user.profile.proceed.tracksearch');
        })->name('Trackreq');
        
        Route::get('usertracker',[PaymentController::class ,'usertrackerdata'])->name('usertracker');
        Route::post('searchtrack',[PaymentController::class ,'searbartrack'])->name('searchtrack');
        Route::get('Residentp/{user}',[PersonalInfoController::class ,'ResidentpView'])->name('Residentp');
        Route::get('/thankyou', function () {
            return view('user.profile.proceed.thankyou');
        })->name('thankyou');
        Route::get('Services',[PaymentController::class ,'servicess'])->name('Services');
        // Route::get('/PayServices', function () {
        //     return view('user.profile.proceed.payfiledClearance');
        // });
        Route::get('PayServices/{type}',[PaymentController::class ,'payHome']);
        Route::post('PayServicesRequest',[PaymentController::class ,'Request1'])->name('PayServicesRequest');
        Route::get('/profileForm', function () {
            return view('user.profile.profileForm');
        });
        // Route::get('/formPersonal', function () {
        //     return view('user.profile.formPersonal');
            
        // });
        Route::get('formPersonal',[PersonalInfoController::class ,'homeformPersonal'])->name('formPersonal');
        Route::post('formPersonalpost',[PersonalInfoController::class ,'postformPersonal'])->name('formPersonalpost');
        Route::get('personalAPIget',[PersonalInfoController::class ,'displayGet'])->name('personalAPIget');
        Route::post('personalAPI',[PersonalInfoController::class ,'personalinfo'])->name('personalAPI');
        Route::post('verfying',[PersonalInfoController::class ,'verfyingresident'])->name('verfying');
        
        // Route::get('/formHousehold', function () {
        //     return view('user.profile.formHousehold');
        // });
        // Route::get('/AddMemberHouseHold', function () {
        //     return view('user.profile.addmember');
        // });
        Route::post('/uploaduserimg', [HouseHoldsController::class, 'upload']);
        Route::get('AddMemberHouseupdate',[HouseHoldsController::class ,'updateaddmember'])->name('AddMemberHouseupdate');
        Route::post('AddMemberHouseupdatepost',[HouseHoldsController::class ,'updateaddmemberpost'])->name('AddMemberHouseupdatepost');
        Route::get('AddMemberHouseHold',[HouseHoldsController::class ,'homeaddmember'])->name('AddMemberHouseHold');
        Route::post('AddMemberHouseHoldpost',[HouseHoldsController::class ,'addmemberHousehold'])->name('AddMemberHouseHoldpost');
        Route::get('HouseholdInfoGET',[HouseHoldsController::class ,'HouseHomeAPIget'])->name('HouseholdInfoGET');
        Route::get('HouseholdInfo',[HouseHoldsController::class ,'HouseHome'])->name('HouseholdInfo');
        Route::post('househldAPI',[HouseHoldsController::class ,'housefild'])->name('househldAPI');

        Route::get('/getnotifysend',[NotificationController::class ,'getnotifya'])->name('getnotifysend');
        Route::post('/postseennotifysend',[NotificationController::class ,'getnotifySeener'])->name('postseennotifysend');

        Route::get('/404', function () {
            return view('restric404');
        });
Route::middleware(['auth', 'is_admin'])->group(function () {
Route::get('/', function () {
    return view('auth/login');
});
// Route::get('/HouseHold', function () {
//     return view('HouseHolds');
// })->name('HouseHold');

Route::get('HouseHold',[HouseHoldsController::class ,'householdAdmin'])->name('HouseHold');
Route::post('householUpate',[HouseHoldsController::class ,'updateHouse'])->name('householUpate');
Route::get('gethousehold',[HouseHoldsController::class ,'gethouseholdP'])->name('gethousehold');


// Route::post('householUpate',[HouseHoldsController::class ,'updatephp'])->name('householUpate');
Route::get('HouseHoldDispla',[HouseHoldsController::class ,'display'])->name('HouseHoldDispla');

Route::get('/aprovalResident', function () {
    return view('verification');
});
Route::get('/varificationInfo', [PersonalInfoController::class, 'varifInfo'])->name('varificationInfo');
Route::get('/displayVari', [PersonalInfoController::class, 'display'])->name('display.varify');
Route::post('/varifyapiconfirm', [PersonalInfoController::class, 'confirmvarify']);
Route::post('/varifyapicancel', [PersonalInfoController::class, 'Cancelvarify']);


// Route::get('/payment', function () {
//     return view('payment');
// });
Route::get('/paymentGetInfo', [PaymentController::class, 'payGetInfo'])->name('paymentGetInfo');
Route::get('/payment', [PaymentController::class, 'payment']);
Route::get('/displayPayment', [PaymentController::class, 'display'])->name('display.pay');
Route::post('/paymentapiconfirm', [PaymentController::class, 'confirmpayment']);
Route::post('/paymentapicancel', [PaymentController::class, 'Cancelpayment']);

Route::get('/org', function () {
    return view('org');
});

Route::get('/blotter', function () {
    return view('Blotter_records');
});
Route::get('/Messenger', function () {
    return view('Messenger');
});

Route::get('/setting', function () {
    return view('setting');
});
Route::post('/settinglogoupload', [Datab::class, 'logoupdate'])->name('settinglogoupload');
Route::post('/settingGcash', [PaymentController::class, 'settingGcashupdate'])->name('settingGcash');
Route::get('/settingall', [ResidentController::class, 'settingallget'])->name('settingall');

Route::get('/fetch-data', [ResidentController::class, 'fetchData'])->name('fetch.data');


Route::get('/report', [ResidentController::class, 'report']);
Route::get('/Servicesreport', [ResidentController::class, 'servicereportadd'])->name('Servicesreport');



Route::get('generate-word/{link}', [ResidentController::class, 'generateWordDocument']);



Route::post('/addblotter', [BlotterRecodrsController::class, 'addblotter']);

Route::get('Residentinfo',[ResidentController::class ,'Residentinfo'])->name('Residentinfo');
    Route::get('Resident',[ResidentController::class ,'Resident']);
    Route::get('Residentgetadata',[ResidentController::class ,'Residentgetadataall'])->name('Residentgetadata');
    Route::post('Residentupdatedata',[ResidentController::class ,'updateresid'])->name('Residentupdatedata');
    // Route::post('/addresidents', [ResidentController::class, 'addResident']);
    // Route::post('/updateResedent', [ResidentController::class, 'updateRes']);
    // Route::post('/Resedelete', [ResidentController::class, 'Residentdelete']);




Route::post('/upload-image', [Datab::class, 'upload']);
Route::get('user/{user}',[Datab::class ,'Users']);

Route::post('/updateuser',[Datab::class ,'updates']);
Route::post('/deleteuser',[Datab::class ,'deletes']);
Route::post('/darkmode',[Datab::class ,'darkmode']);

Route::get('/admin/user',[Datab::class ,'Usertable']);

Route::get('/dashboardget',[Datab::class ,'homedashboardget'])->name('dashboardget');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});
});
