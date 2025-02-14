<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Resident;
use App\Models\HouseHolds;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use DB;
use Auth;
use Carbon\Carbon;
use App\Http\Controllers\NotificationController;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        $currentDate = Carbon::now()->format('l, F j, Y');
        $name = $input['name'];
        $email = $input['email'];

        // Validate the input fields
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();


        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        $resi = new Resident();
        $resi->name = $name;        
        $resi->email = $email;
        $resi->familyRoles = 'Head';    
        $resi->user_id = $user->id; 
        $resi->save();              
        $residentId = $resi->user_id;
        
        $houseHold = new HouseHolds();
        $houseHold->name = $name;                
        $houseHold->Resident_id = $residentId;   
        $houseHold->save();                
        $tosend = 1;
        $forwhat = "Welcome $currentDate" ;
        $description = "thankyou now let you may explore but you need to fill up and verify";
        NotificationController::notify($residentId,$tosend,$forwhat,$description);

        return $user;
    }
}
