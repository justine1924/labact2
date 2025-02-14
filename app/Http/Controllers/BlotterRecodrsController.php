<?php

namespace App\Http\Controllers;
use App\Models\blotter_recodrs;
use DB;
use Auth;
use Illuminate\Http\Request;

class BlotterRecodrsController extends Controller
{
    function addblotter(Request $blotter_input){
        $blotter = new blotter_recodrs;
        $blotter->name=$blotter_input->firstname;
        $blotter->lastname=$blotter_input->lastname;
        $blotter->middlename=$blotter_input->middleinitial;
        $blotter->alias=$blotter_input->alias;
        $blotter->birthday=$blotter_input->birthday;
        $blotter->age=$blotter_input->age;
        $blotter->placeofbirth=$blotter_input->placeofbirth;
        $blotter->Gender=$blotter_input->Genders;
        $blotter->VoterStatus=$blotter_input->VoterStatus;  
        $blotter->CivilStatus=$blotter_input->CivilStatus;
        $blotter->Citizenship=$blotter_input->Citizenship;
        $blotter->Telephone=$blotter_input->Telephone;
        $blotter->Mobile=$blotter_input->Mobile;
        $blotter->qualifier=$blotter_input->qualifier;
        $blotter->datereport=$blotter_input->datereport;
        $blotter->dateIncident=$blotter_input->dateIncident;
        $blotter->save();
        return Response()->json(array('pf' => $blotter->lastname), 200);
    }
}
