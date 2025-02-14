

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
                    Household Family 
                </h3>
                <button type="button" onclick="hideinfo()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="extralarge-modalinfo">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                	
<div class="ScriptTop">
    
</div>

<header class="ScriptHeader">
    
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div id="picprofile" class="card-header bg-transparent text-center">
          <!-- ${arrayResident[i].profile==false ? `'<a href="https://ui-avatars.com/api/?name=${arrayResident[i].name.charAt(0)}&color=7F9CF5&background=EBF4FF" target="_blank" rel="noopener noreferrer">
            <img class="w-10 h-10 rounded-full" src="https://ui-avatars.com/api/?name=${arrayResident[i].name.charAt(0)}&color=7F9CF5&background=EBF4FF" alt="Rounded avatar">
        </a>'` : `'<a href="/storage/profile-photos/${arrayResident[i].profile}" target="_blank" rel="noopener noreferrer"><img class="w-10 h-10 rounded-full" src="/storage/profile-photos/${arrayResident[i].profile}" alt="Rounded avatar"></a>'`} -->
            <img class="profile_img" src="/storage/profile-photos/${arrayResident[i].profile}" alt="student dp">
            <h3></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Resident ID:</strong><span id="resiid">4dd</span></p>
            <p class="mb-0"><strong class="pr-1">Name:</strong><span id="resiname">4dd</span></p>
            <p class="mb-0"><strong class="pr-1">LastName:</strong><span id="resiLastname">4dd</span></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table id="household-info" class="table table-bordered">
            <tr>
                <th width="30%">FAMILY NAME</th>
                <td width="2%">:</td>
                <td id="familyname">23</td>
            </tr>
            <tr>
                <th width="30%">Member</th>
                <td width="2%">:</td>
                <td id="member">Male</td>
            </tr>
            <tr>
                <th width="30%">Address</th>
                <td width="2%">:</td>
                <td id="address">2020</td>
            </tr>
            <tr>
                <th width="30%">PrimaryPhone</th>
                <td width="2%">:</td>
                <td id="primaryphone">Male</td>
            </tr>
            <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td id="email">Group</td>
            </tr>
            <tr>
                <th width="30%">Name</th>
                <td width="2%">:</td>
                <td id="names">B+</td>
            </tr>
            <tr>
                <th width="30%">Birthdates</th>
                <td width="2%">:</td>
                <td id="birthdates">B+</td>
            </tr>
            <tr>
                <th width="30%">Relationshiphead</th>
                <td width="2%">:</td>
                <td id="relationshiphead">B+</td>
            </tr>
            <tr>
                <th width="30%">PrimaryHousehold</th>
                <td width="2%">:</td>
                <td id="primaryhousehold">B+</td>
            </tr>

            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Member List</h3>
          </div>
          <div class="card-body pt-0">
          <table id="membertable" class="table table-bordered">
            <thead>
                <th>
                    NAME
                </th>
                <th>
                    
                </th>
                <th>
                    AGE
                </th>
                <th>
                    GENDER
                </th>
            </thead>
            <tbody>
            
            <tr>
                <th width="30%">Member</th>
                <td width="2%">:</td>
                <td >Male</td>
                <td >Male</td>
            </tr>
           

            </tbody>
           
            </table>
    
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

           
    		</div>
		</div>
    </div>
</section>
     



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