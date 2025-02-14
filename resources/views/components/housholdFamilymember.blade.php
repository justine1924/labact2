

<!-- Modal toggle -->
<button hidden data-modal-target="Householdfamily" data-modal-toggle="Householdfamily" class="" type="button">
  Toggle modal
</button>

<!-- Main modal -->
<div id="Householdfamily" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Household Member Information
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="Householdfamily">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Status</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Health Information</button>
        </li>
        
    </ul>
</div>


            <!-- Modal body -->
            <x-householdDrawer />
            <form class="p-4 md:p-5">
            <div id="default-styled-tab-content">
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-700" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2 sm:col-span-1">
                <label for="lastname" id="llastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Last Name" required="">
            </div>
<div class="col-span-2 sm:col-span-1 ">
                <label for="firstname" id="lfirstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="First Name" required="">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="middleinitial" id="lmiddleinitial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Initial</label>
                <input type="middleinitial" name="middleinitial" id="middleinitial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Middle Initial" required="">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="alias" id="lalias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alias</label>
                <input type="text" name="alias" id="alias" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alias Name" required="">
            </div>
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
    <input id="malesp" type="radio" name="Genders" value="male" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
    <label for="malesp" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
      Male
    </label>
  </div>

  <div class="flex items-center mb-4">
    <input id="femalesp" type="radio" name="Genders" value="female" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
    <label for="femalesp" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
      Female
    </label>
  </div>

    </div>
                     
                </div>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-700" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2 sm:col-span-1">
                <label for="lastname" id="llastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relationship to Head of Household</label>
                <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="spouse, child, relative" required="">
            </div>
<div class="col-span-2 sm:col-span-1 ">
                <label for="firstname" id="lfirstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Social Security Number (SSN)</label>
                <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="for tax and financial purposes" required="">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="middleinitial" id="lmiddleinitial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Occupation/Employment Status</label>
                <input type="middleinitial" name="middleinitial" id="middleinitial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="alias" id="lalias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Education Level</label>
                <input type="text" name="alias" id="alias" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
            </div>
            <div class="col-span-1 ">
                        <label for="birthday" id="lbirthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                        <input type="number" name="birthday" id="birthday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div class="col-span-1 ">
                        <label for="age" id="lage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                        <input type="email" name="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div>
        
                    
                    </div>
                   
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-700" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
    <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2 sm:col-span-1">
                <label for="lastname" id="llastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medical conditions</label>
                <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
            </div>
<div class="col-span-2 sm:col-span-1 ">
                <label for="firstname" id="lfirstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">allergies</label>
                <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="middleinitial" id="lmiddleinitial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">medications</label>
                <input type="middleinitial" name="middleinitial" id="middleinitial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="alias" id="lalias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">primary care physician</label>
                <input type="text" name="alias" id="alias" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
            </div>
            <div class="col-span-2 ">
                        <label for="birthday" id="lbirthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Emergency Contact Information</label>
                        <input type="text" name="birthday" id="birthday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    
        
                    
                    </div> 
    </div>
    
</div>
            
                
                <!-- <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add new product
                </button> -->
            </form>
        </div>
    </div>
    <x-householdeButton />
</div> 
