<x-app-layout>
    
<button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
               <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
               <span class="ms-3">Personal</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
               <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
  <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
</svg>
               <span class="ms-3">HouseHold</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<div class="p-4 sm:ml-64">
   <div class="p-4 border-gray-200  rounded-lg dark:border-gray-700">
      <div class="grid grid-cols-3 gap-4 mb-4">
         
         

      <div class="col-span-3 grid grid-cols-1 gap-4 mb-4">
         <div class="flex items-center justify-center rounded bg-gray-50 h-auto dark:bg-gray-800">
         
   

<form class="p-4 md:p-5">
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

<div class="col-span-2 ">
                <label for="lastname" id="llastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Last Name" required="">
            </div>
<div class="col-span-2 ">
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

            
</div><!-- end profile -->
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
                            <option value="Widowed">Widowed</option>
                            <option value="Babaero">Babaero</option>
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
                        <label id="Purok" for="Purok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Purok</label>
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
                    <label id="disabd" for="disab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    <input id="disabCH" type="checkbox" value="" name="disabCH" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    </label>
                    
                        <input disabled type="text" name="disab" id="disab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Person With Disability" required="">
                        
                    </div>
                    
                </div>
                </div>
                
                <button id="btnewres" data-modal-toggle="g"  type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Save
                </button>
            </form>
         </div>
        
      </div>
   </div>
</div>

</x-app-layout>