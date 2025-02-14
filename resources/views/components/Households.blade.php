


<!-- Modal toggle -->
<button hidden data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="" type="button">
  Toggle modal
</button>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="crudmodal1 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full flex items-center justify-center h-screen top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    HouseHold
                </h3>
                
                <button data-modal-hide="crud-modal" onclick="hideinfo()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                
            </div>

    

            <!-- Modal body -->
            <form id="form1house" class="p-4 md:p-5">
    
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="famname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Household Name</label>
                        <input  type="text" name="famname" id="famname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Family or Primary Name" required="">
                    </div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="people">Member Household<button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg><span class="sr-only">Show information</span></button></label>
                    
<div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
    <div class="p-3 space-y-2">
        <h3 class="font-semibold text-gray-900 dark:text-white">Re Maximum people in household</h3>
        <p>can only accommodate information for a maximum of 10 persons. If there are more than ten (10).</p>
        <h3 class="font-semibold text-gray-900 dark:text-white">SURVEY </h3>
        <p>Household membership comprises the head of the household, relatives living with him such as his or her spouse, children, parent, brother or sister, son-in-law.</p>
        <a href="#" class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
  </svg></a>
    </div>
    <div data-popper-arrow></div>
</div>

<div id='people' class="flex flex-wrap col-span-2">
<div class="flex items-center me-4">
        <input id="red-radio" type="radio" value="1" name="coloredradio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="red-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1 Member</label>
    </div>
    <div class="flex items-center me-4">
        <input id="green-radio" type="radio" value="2" name="coloredradio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="green-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2 Member</label>
    </div>
    <div class="flex items-center me-4">
        <input id="purple-radio" type="radio" value="3" name="coloredradio" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="purple-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3 Member</label>
    </div>
    <div class="flex items-center me-4">
        <input id="teal-radio" type="radio" value="4" name="coloredradio" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="teal-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4 Member</label>
    </div>
    <div class="flex items-center me-4">
        <input id="yellow-radio" type="radio" value="5" name="coloredradio" class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="yellow-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5 Member</label>
    </div>
    <div class="flex items-center me-4">
        <input id="orange-radio" type="radio" value="6" name="coloredradio" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="orange-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6 Member</label>
    </div>
    <div class="flex items-center me-4">
        <input id="red-radio7" type="radio" value="7" name="coloredradio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="red-radio7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">7 Member</label>
    </div>
    <div class="flex items-center me-4">
        <input id="green-radio8" type="radio" value="10" name="coloredradio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="green-radio8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">10 Member</label>
    </div>
</div>

<div class="col-span-2 ">
                        <label for="Address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" name="Address" id="Address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Street, City, State, Zip Code" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        
                        <label for="PrimaryPhone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primary Phone Number</label>
                        <input type="text" name="PrimaryPhone" id="PrimaryPhone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Phone Number" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                        <input type="email" name="Email" id="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email Address" required="">
                    </div>
                    <!-- <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div> -->
                    
                </div>
                <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Name" required="">
                    </div>
                    <div class="col-span-2 ">
                        <label for="Birthdates" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthdates</label>
                        <input type="date" name="Birthdates" id="Birthdates" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Birthday" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        
                        <label for="Relationshiphead" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relationship to Head of Household</label>
                        <input type="text" name="Relationshiphead" id="Relationshiphead" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Head HouseHold relationship" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        
                        <label for="PrimaryHousehold" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primary Household Member</label>
                        <input type="text" name="PrimaryHousehold" id="PrimaryHousehold" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Usually the person responsible for managing the household" required="">
                    </div>
                    <!-- <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div> -->
                    
                </div>
                <div class="w-full space-x-8 justify-between flex mt-32 md:mt-0 md:justify-center">
                <!-- data-modal-hide="crud-modal" data-modal-target="householdfield1" data-modal-toggle="householdfield1" -->
                <button onclick="hideinfo()" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Update
                </button>
                </div>
            </form>
        </div>
    </div>
</div> 
