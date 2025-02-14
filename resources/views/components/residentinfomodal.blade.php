

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
    
	    <link rel="stylesheet" href="css/style.css">
        <!-- Extra Large Modal -->
<div id="extralarge-modalinfo" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-7xl max-h-full ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Resident Profile
                </h3>
                <button type="button" onclick="hideinfo()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="extralarge-modalinfo">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="grid gap-4 mb-4 grid-cols-3 p-4">
            <div class="card shadow-sm row-span-2 ">
          <div id="picprofile" class="card-header bg-transparent text-center">
          <!-- ${arrayResident[i].profile==false ? `'<a href="https://ui-avatars.com/api/?name=${arrayResident[i].name.charAt(0)}&color=7F9CF5&background=EBF4FF" target="_blank" rel="noopener noreferrer">
            <img class="w-10 h-10 rounded-full" src="https://ui-avatars.com/api/?name=${arrayResident[i].name.charAt(0)}&color=7F9CF5&background=EBF4FF" alt="Rounded avatar">
        </a>'` : `'<a href="/storage/profile-photos/${arrayResident[i].profile}" target="_blank" rel="noopener noreferrer"><img class="w-10 h-10 rounded-full" src="/storage/profile-photos/${arrayResident[i].profile}" alt="Rounded avatar"></a>'`} -->
        <img class="rounded w-full h-auto" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Extra large avatar">
            <h3></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Resident ID:</strong><span id="user_idre">4dd</span></p>
            <p class="mb-0"><strong class="pr-1">Name:</strong><span id="namere">4dd</span></p>
            <p class="mb-0"><strong class="pr-1">LastName:</strong><span id="lastnamere">4dd</span></p>
          </div>
        </div>
            
         
            <div class="col-lg-18 col-span-2 ">
       
        <div class="card row shadow-sm flex">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body col-lg-18 ">
            <table id="household-info" class="table table-bordered">
    <tr>
        <th width="30%">Name</th>
        <td width="2%">:</td>
        <td id="namere1">John</td>
    </tr>
    <tr>
        <th width="30%">Last Name</th>
        <td width="2%">:</td>
        <td id="lastnamere1">Tabios</td>
    </tr>
    <tr>
        <th width="30%">Middle Name</th>
        <td width="2%">:</td>
        <td id="middlenamere">Quiraban</td>
    </tr>
    <tr>
        <th width="30%">Alias</th>
        <td width="2%">:</td>
        <td id="aliasre">Pogi</td>
    </tr>
    <tr>
        <th width="30%">Birthday</th>
        <td width="2%">:</td>
        <td id="birthdayre">2</td>
    </tr>
    <tr>
        <th width="30%">Age</th>
        <td width="2%">:</td>
        <td id="agere"></td>
    </tr>
    <tr>
        <th width="30%">Place of Birth</th>
        <td width="2%">:</td>
        <td id="placeofbirthre"></td>
    </tr>
    <tr>
        <th width="30%">Email</th>
        <td width="2%">:</td>
        <td id="emailre">goy1@gmail.com</td>
    </tr>
    <tr hidden>
        <th width="30%">Mother's</th>
        <td width="2%">:</td>
        <td id="motherre">23</td>
    </tr>
    <tr hidden>
        <th width="30%">Father's</th>
        <td width="2%">:</td>
        <td id="fatherre">23</td>
    </tr>
    <tr>
        <th width="30%">Height</th>
        <td width="2%">:</td>
        <td id="heightre">53</td>
    </tr>
    <tr>
        <th width="30%">Weight</th>
        <td width="2%">:</td>
        <td id="weightre">23</td>
    </tr>
    <tr>
        <th width="30%">Gender</th>
        <td width="2%">:</td>
        <td id="Genderre">Male</td>
    </tr>
    <tr>
        <th width="30%">Voter Status</th>
        <td width="2%">:</td>
        <td id="VoterStatusre">Canceled</td>
    </tr>
    <tr>
        <th width="30%">Civil Status</th>
        <td width="2%">:</td>
        <td id="CivilStatusre">Widowed</td>
    </tr>
    <tr>
        <th width="30%">Citizenship</th>
        <td width="2%">:</td>
        <td id="Citizenshipre">Filipino</td>
    </tr>
    <tr hidden>
        <th width="30%">Telephone</th>
        <td width="2%">:</td>
        <td id="Telephonere">222</td>
    </tr>
    <tr>
        <th width="30%">Mobile</th>
        <td width="2%">:</td>
        <td id="Mobilere">222</td>
    </tr>
    <tr>
        <th width="30%">Status</th>
        <td width="2%">:</td>
        <td id="statusre">Verified</td>
    </tr>
    <tr>
        <th width="30%">Purok</th>
        <td width="2%">:</td>
        <td id="purokre">P-4</td>
    </tr>
    <tr>
        <th width="30%">Disability</th>
        <td width="2%">:</td>
        <td id="desabilityre">None</td>
    </tr>
    <tr>
        <th width="30%">Physical Disability</th>
        <td width="2%">:</td>
        <td id="physical_disability_re"></td>
    </tr>
    <tr>
        <th width="30%">Visual Impairment</th>
        <td width="2%">:</td>
        <td id="visual_impairment_re"></td>
    </tr>
    <tr>
        <th width="30%">Hearing Impairment</th>
        <td width="2%">:</td>
        <td id="hearing_impairment_re"></td>
    </tr>
    <tr>
        <th width="30%">Cognitive Disability</th>
        <td width="2%">:</td>
        <td id="cognitive_disability_re"></td>
    </tr>
    <tr>
        <th width="30%">Mental Health Condition</th>
        <td width="2%">:</td>
        <td id="mental_health_condition_re"></td>
    </tr>
    <tr>
        <th width="30%">Neurological Condition</th>
        <td width="2%">:</td>
        <td id="neurological_condition_re"></td>
    </tr>
    <tr>
        <th width="30%">Speech Impairment</th>
        <td width="2%">:</td>
        <td id="speech_impairment_re"></td>
    </tr>
    <tr>
        <th width="30%">Chronic Illness</th>
        <td width="2%">:</td>
        <td id="chronic_illness_re"></td>
    </tr>
    <tr>
        <th width="30%">Autism Spectrum Disorder</th>
        <td width="2%">:</td>
        <td id="autism_spectrum_re"></td>
    </tr>

    <!-- Other condition row -->
    <tr id="other_condition_row" hidden>
        <th width="30%">Other Condition</th>
        <td width="2%">:</td>
        <td id="other_condition_re"></td>
    </tr>
    <tr>
        <th width="30%">Created At</th>
        <td width="2%">:</td>
        <td id="created_atre">2024-11-29T07:50:09.000000Z</td>
    </tr>
    <tr>
        <th width="30%">Updated At</th>
        <td width="2%">:</td>
        <td id="updated_atre">2024-11-29T07:50:09.000000Z</td>
    </tr>

            </table>
          </div>
        </div>
        </div>
        
        <div class="col-lg-18 col-span-3">
        <div class="card shadow-sm flex">
          <div align="center" class="card-header bg-transparent border-0">
            <h3 class="mb-0">HOUSEHOLD INFO</h3>
          </div>
          <div class="card-body col-lg-18 ">
            <table id="household-info" class="table table-bordered">
            <tr>
                <th width="30%">FAMILY NAME</th>
              
                <td id="familyname">23</td>
            </tr>
            <tr>
                <th width="30%">Member</th>
                
                <td id="member">Male</td>
            </tr>
            <tr>
                <th width="30%">Address</th>
                
                <td id="address">2020</td>
            </tr>
            <tr>
                <th width="30%">PrimaryPhone</th>
               
                <td id="primaryphone">Male</td>
            </tr>
            <tr>
                <th width="30%">Email</th>
                
                <td id="email">Group</td>
            </tr>
            <tr>
                <th width="30%">Name</th>
                
                <td id="names">B+</td>
            </tr>
            <tr>
                <th width="30%">Birthdates</th>
                
                <td id="birthdates">B+</td>
            </tr>
            <tr>
                <th width="30%">Relationshiphead</th>
                
                <td id="relationshiphead">B+</td>
            </tr>
            <tr>
                <th width="30%">PrimaryHousehold</th>
                
                <td id="primaryhousehold">B+</td>
            </tr>

            </table>
          </div>
          
        </div>
        </div>
        </div>  
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                <!-- <button data-modal-hide="extralarge-modalinfo" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="extralarge-modalinfo" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button> -->
            </div>
        </div>
    </div>
</div>
    <br>
    <div>
    <button hidden id="pressbth" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="hide focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add HouseHold</button>

    </div>