<style>
.fild{
    position: absolute;
    top:150;
    width: 100%;
    display: flex!important;
    justify-content: center!important;
    align-items: center!important;
    
}
.pd{
    margin-top:20;
}
.headrd{
    position: relative;
    height: 40%;
    text-align:center;
   
    
}
.headrd p{
    position: relative;
    top:23;

}
.logoserv{
    display: flex!important;
    justify-content: center!important;
    align-items: center!important;
    width: 100%;
    height: 30vh;

}
.centd{
    text-align:center;
}

</style>
<x-app-layout>
    <div class=" mr-7 gap-4 headrd w-full bg-green-600">
    <p>PERSONAL INFO</p>

<!-- <div class="max-w-sm p-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<form class="max-w-sm mx-auto">
  <label for="memberselect" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
  <select onclick="memberid()" id="memberselect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected value="" disabled>Choose a Member</option>
    <?php $a=0 ?>
    @foreach ($memberdis as $member)
    <option {{Auth::user()->id == $member->id ? 'selected' : '' }} userid='{{ isset($member->name) ? $member->id : "Member Slot" }}' value="{{$a++}}">{{ isset($member->name) ? $member->name : "Member Slot" }}</option>
@endforeach
   
  </select>
</form>
    <a href="#">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Member</h5>
    </a>
    


    
</div> -->


    </div>
<div  class="z-35 grid fild gap-6 mb-4 grid-cols-1">
  
                

<div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    

<div class="max-w-2xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<form id='personal' class="p-4 md:p-5">
             <div class="grid gap-4 mb-4 grid-cols-2">
             
            <!--<div class="col-span-1">
            <div class="flex items-center justify-center w-mb">
           
    <label id="ldropzone-file" for="dropzone-file" style=" padding: 25px;background-repeat: no-repeat;background-size: cover;" class="z-50 imgpp flex flex-col items-center justify-center w-mb h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
    <div class="flex flex-col items-center justify-center pt-5 pb-6">  
    <svg class="z-1 w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (MAX. 800x400px)</p>
        </div>
        <input id="dropzone-file" type="file" accept="image/*" class="hidden" />
    </label>
</div> 
</div> -->

<div class="col-span-1 ">
                <label for="lastname" id="llastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Last Name" required="">
            </div>
<div class="col-span-1 ">
                <label for="firstname" id="lfirstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="First Name" required="">
            </div>
            <div class="col-span-2 ">
                <label for="middleinitial" id="lmiddleinitial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Initial</label>
                <input type="middleinitial" name="middleinitial" id="middleinitial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Middle Initial" required="">
            </div>
            <div class="col-span-2 ">
                <label for="alias" id="lalias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alias</label>
                <input type="text" name="alias" id="alias" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alias Name" required="">
            </div>

            <div class="col-span-3">
            <p>Disability </p>
            <div class="flex items-center me-4">
        <input id="physical_disability" name="physical_disability" type="checkbox" value="yes" class="ms-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="physical_disability" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Physical Disability (mobility issues, wheelchair use)</label>
    </div>

    <div class="flex items-center me-4">
        <input id="visual_impairment" name="visual_impairment" type="checkbox" value="yes" class="ms-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="visual_impairment" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visual Impairment (blindness, low vision)</label>
    </div>

    <div class="flex items-center me-4">
        <input id="hearing_impairment" name="hearing_impairment" type="checkbox" value="yes" class="ms-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="hearing_impairment" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hearing Impairment (deaf, hard of hearing)</label>
    </div>

    <div class="flex items-center me-4">
        <input id="cognitive_disability" name="cognitive_disability" type="checkbox" value="yes" class="ms-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="cognitive_disability" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cognitive Disability (learning disabilities, developmental disorders)</label>
    </div>

    <div class="flex items-center me-4">
        <input id="mental_health_condition" name="mental_health_condition" type="checkbox" value="yes" class="ms-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="mental_health_condition" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mental Health Condition (depression, anxiety, PTSD)</label>
    </div>

    <div class="flex items-center me-4">
        <input id="neurological_condition" name="neurological_condition" type="checkbox" value="yes" class="ms-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="neurological_condition" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Neurological Condition (epilepsy, multiple sclerosis)</label>
    </div>

    <div class="flex items-center me-4">
        <input id="speech_impairment" name="speech_impairment" type="checkbox" value="yes" class="ms-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="speech_impairment" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Speech Impairment (speech disorders, aphasia)</label>
    </div>

    <div class="flex items-center me-4">
        <input id="chronic_illness" name="chronic_illness" type="checkbox" value="yes" class="ms-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="chronic_illness" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Chronic Illness (diabetes, chronic fatigue syndrome)</label>
    </div>

    <div class="flex items-center me-4">
        <input id="autism_spectrum" name="autism_spectrum" type="checkbox" value="yes" class="ms-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="autism_spectrum" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Autism Spectrum Disorder</label>
    </div>

    <!-- "Other" checkbox -->
    <div class="flex items-center me-4">
        <input onclick="othercondition()" id="other_checkbox" name="other_checkbox" type="checkbox" value="yes" class="ms-2 w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="other_checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other (please specify):</label>
        <div class="flex items-center me-4" id="other_condition_input" style="display: none;">
        <input id="other_condition" name="other_condition" type="text" placeholder="Specify other condition" class="other ms-2 w-full mt-1 p-2 text-sm border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-gray-900">
    </div>
    </div>
    </div> 
</div><!-- end profile -->
                
                
                <button id="btnewres" data-modal-toggle="g"  type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <div id="loadingSpinner" role="status"  style="display: none;">
    <svg aria-hidden="true" class="inline me-2 w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-green-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
    
</div>    
<span class="textsub">Save</span>
                </button>
            
</div>

</div> 
<div class="p-4 max-w-2xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<div class="grid gap-4 mb-4 grid-cols-2">
                <!-- ///col1  -->
                <div class=" grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-1 ">
                        <label for="birthday" id="lbirthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
                        <input type="date" name="birthday" id="birthday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div class="col-span-1 ">
                        <label for="age" id="lage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                        <input type="number" name="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Age" required="">
                    </div>
        
                    
                    <div class="col-span-2 ">
                        <label for="placeofbirth" id="lplaceofbirth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blace Of Birth</label>
                        <input type="text" name="placeofbirth" id="placeofbirth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Place of Birth" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="Gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <div class="flex items-center mb-4">
    <input id="male" type="radio" name="Genders" value="male" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
    <label for="male" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
      Male
    </label>
  </div>

  <div class="flex items-center mb-4">
    <input id="female" type="radio" name="Genders" value="female" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
    <label for="female" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
      Female
    </label>
  </div>

                    </div>
                    <div class="col-span-1">
                        <label for="VoterStatus" id="lVoterStatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Voter Status</label>
                        <select id="VoterStatus" name="VoterStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option disabled selected value="">Voter Status</option>
                            <option value="Registered">Registered</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Canceled">Canceled</option>
                            <option value="none">none</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="CivilStatus" id="lCivilStatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civil Status</label>
                        <select id="CivilStatus" name="CivilStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option disabled selected value="">Civil Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Singlep">Single Parent </option>
                          
                        
                        </select>
                    </div>
                    <div class="col-span-2 ">
                        <label id="lCitizenship" for="Citizenship" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship</label>
                        <input type="text" name="Citizenship" id="Citizenship" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Filipino" required="">
                    </div>
                    <div class="col-span-1 ">
                        <label id="lTelephone" for="Telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone</label>
                        <input type="number" name="Telephone" id="Telephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12345678" required="">
                    </div>
                    <div class="col-span-1 ">
                        <label id="lMobile" for="Mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile</label>
                        <input type="number" name="Mobile" id="Mobile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="09123456789" required="">
                    </div>
                    
                </div>
                <!-- ///col2 -->
                <div class=" grid-cols-2 grid gap-4 mb-4">
                <div class="col-span-1">
                        <label id="lheight" for="height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Height cm</label>
                        <input type="text" name="height" id="height" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Height" required="">
                    </div>
                    <div class="col-span-1">
                        <label id="lweight" for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">weight</label>
                        <input type="text" name="weight" id="weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Weight" required="">
                    </div>
                    <!-- <div class="col-span-2">
                        <label id="lotheraccount" for="otheraccount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Account</label>
                        <input type="text" name="otheraccount" id="otheraccount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ane Account" required="">
                    </div> -->
                    <div class="col-span-2">
                        <label id="Purokh" for="Purok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Purok</label>
                        <input type="text" name="Purok" id="Purok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Purok" required="">
                    </div>
                    <div class="col-span-2">
                        <label id="lEmail" for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="Email" id="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email@gmail.com" required="">
                    </div>
                    <div class="col-span-2">
                        <label id="lMother" for="Mother" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother</label>
                        <input type="text" name="Mother" id="Mother" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Mother" required="">
                    </div>
                    <div class="col-span-2">
                        <label id="lFather" for="Father" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father</label>
                        <input type="text" name="Father" id="Father" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Father" required="">
                    </div>
                    <div class="col-span-2 space-x-4  flex ">
                    
                    </div>
                    
                </div>
                </div>
</div>
</form>
</div>
                 
                    </div>
                    <script>
                         function othercondition(){
                if(document.getElementById('other_checkbox').checked){
                $('#other_condition_input').show();
            }else{
                $('#other_condition_input').hide();
            }
            }

            
            function serializeForm(form) {
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    return data;
}




$('#personal').submit(function(event) {
    event.preventDefault();
    var form = document.getElementById('personal');
    var formData = serializeForm(form);
    console.log(formData);
    $.ajax({
        url: '/personalAPI',
        method: 'POST',
        data: formData,
        success: function(response) {
            setTimeout(function() {
                $('#loadingSpinner').hide();
                $('.textsub').show();
                $('#btnewres').prop('disabled', false);
                window.location.href = "{{ config('app.url', 'Resident') }}/Residentp/{{Auth::user()->email}}";
                    
}, 3000);
            console.log(response);
            // document.getElementById("personal").reset();
            // window.location.href = "{{ config('app.url', 'Resident') }}/thankyou";
        },beforeSend: function(xhr) {
       
       $('#loadingSpinner').show();
       $('.textsub').hide();
       
       
       $('#btnewres').prop('disabled', true);


       
       xhr.setRequestHeader("Authorization", "Bearer your-token-here");
   },
    });
});

insertGET();
    function insertGET(){
                $.ajax({
                    url: '{{ route("personalAPIget") }}', 
                    type: 'GET',  
                    dataType: 'json',
                    success: function(response) {
                        var form = document.getElementById('personal');
                        var formData = serializeForm(form);
                        document.getElementById('lastname').value = response.lastname;
                        document.getElementById('firstname').value = response.name;
                        document.getElementById('middleinitial').value = response.middlename;
                        document.getElementById('alias').value = response.alias;
                        document.getElementById('birthday').value = response.birthday;
                        document.getElementById('age').value = response.age;
                        document.getElementById('placeofbirth').value = response.placeofbirth;
                        response.Gender === "male" ? (document.getElementById('male').checked = true, document.getElementById('female').checked = false) : (document.getElementById('female').checked = true, document.getElementById('male').checked = false);
                        document.getElementById('VoterStatus').value = response.VoterStatus;
                        document.getElementById('CivilStatus').value = response.CivilStatus;
                        document.getElementById('Citizenship').value = response.Citizenship;
                        document.getElementById('Telephone').value = response.Telephone;
                        document.getElementById('Mobile').value = response.Mobile;
                        document.getElementById('height').value = response.height;
                        document.getElementById('weight').value = response.weight;
                        document.getElementById('Purok').value = response.purok;
                        document.getElementById('Email').value = response.email;
                        document.getElementById('Mother').value = response.mother;
                        document.getElementById('Father').value = response.father;
                        
                        document.getElementById('physical_disability').checked = response.physical_disability === 0 ? false : true;
                        document.getElementById('visual_impairment').checked = response.visual_impairment === 0 ? false : true;
                        document.getElementById('hearing_impairment').checked = response.hearing_impairment === 0 ? false : true;
                        document.getElementById('cognitive_disability').checked = response.cognitive_disability === 0 ? false : true;
                        document.getElementById('mental_health_condition').checked = response.mental_health_condition === 0 ? false : true;
                        document.getElementById('neurological_condition').checked = response.neurological_condition === 0 ? false : true;
                        document.getElementById('speech_impairment').checked = response.speech_impairment === 0 ? false : true;
                        document.getElementById('chronic_illness').checked = response.chronic_illness === 0 ? false : true;
                        document.getElementById('autism_spectrum').checked = response.autism_spectrum === 0 ? false : true;

                        // For "Other" checkbox and input field
                        document.getElementById('other_checkbox').checked = response.other_checkbox === 0 ? false : true;

                        // If "Other" checkbox is checked, show the input for other condition
                        if (response.other_checkbox === 1) {
                            document.getElementById('other_condition_input').style.display = 'block';
                            document.getElementById('other_condition').value = response.other_condition || ''; // Set value to input if exists
                        } else {
                            document.getElementById('other_condition_input').style.display = 'none';
                        }
                       
                    },
                    error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }
           </script>         
</x-app-layout>
