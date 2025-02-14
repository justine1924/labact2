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
    <!-- Main modal -->
<div id="staticmodal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full flex items-center justify-center h-screen top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Not Verify
                </h3>
                <button hidden type="button" class="hidden text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticmodal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Please fill up first form all requirement and Be guided Godbless   
                </p>
                
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button onclick="close1()"  type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Verify</button>
                <button onclick="back1()"  type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Home</button>
            </div>
        </div>
    </div>
</div>


    <div class=" headrd w-full bg-green-600">
<p>HOUSEHOLD INFO</p>
    </div>
<div  class="z-35 grid fild gap-6 mb-4 grid-cols-1">
  
       

<div class="max-w-2xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<form id="househld" class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="famname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Household Name</label>
                        <input type="text" name="famname" id="famname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Family or Primary Name" required="">
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
    <div  onclick="hideinpint()" class="flex items-center me-4">
        <input id="red-radio" type="radio" value="1" name="coloredradio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="red-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1 Member</label>
    </div>
    <div  onclick="hideinpint()" class="flex items-center me-4">
        <input id="green-radio" type="radio" value="2" name="coloredradio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="green-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2 Member</label>
    </div>
    <div  onclick="hideinpint()" class="flex items-center me-4">
        <input   id="purple-radio" type="radio" value="3" name="coloredradio" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label   for="purple-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3 Member</label>
    </div>
    <div  onclick="hideinpint()" class="flex items-center me-4">
        <input   id="teal-radio" type="radio" value="4" name="coloredradio" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label   for="teal-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4 Member</label>
    </div>
    <div  onclick="hideinpint()" class="flex items-center me-4">
        <input   id="yellow-radio" type="radio" value="5" name="coloredradio" class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label   for="yellow-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5 Member</label>
    </div>
    <div  onclick="hideinpint()" class="flex items-center me-4">
        <input   id="orange-radio" type="radio" value="6" name="coloredradio" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label   for="orange-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6 Member</label>
    </div>
    <div  onclick="hideinpint()" class="flex items-center me-4">
        <input id="red-radio7" type="radio" value="7" name="coloredradio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label  for="red-radio7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">7 Member</label>
    </div>
    <div class="flex items-center me-4">
        <input onclick="showinpint()" id="green-radio8" type="radio" value="10" name="coloredradio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="green-radio8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">More</label>
    </div>
    
</div>
<div class="col-span-2">
                        <label for="inputmore" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">input more</label>
                        <input type="text" value="10" name="inputmore" id="inputmore" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="placholder" required="">
                    </div>


             
                    
                </div>
                <div class="w-full space-x-8 justify-between flex mt-32 md:mt-0 md:justify-center">
                
                
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
<div class="gap-4 p-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                    </div>
                </div>
                
                
                   
                
                </form>     
                <div class="hidden blacksrs bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>       
</div>
</div>
           </div>
        
           <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('inputmore').addEventListener('input', function() {
                    hidemore()
});     
});          
function hidemore(){
   let radiobtn = document.getElementById('green-radio8');
   radiobtn.checked = true;
   radiobtn.value=document.getElementById('inputmore').value;
    
}
hideinpint();
function hideinpint(){
    $('#inputmore').hide();
    
}
function showinpint(){
    $('#inputmore').show();
    
}



            function serializeForm(form) {
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    return data;
}
    function modalshowvarify() {
                    $('#staticmodal').show();
                    $('.blacksrs').show();
                }
                function back1() {
                    $('#staticmodal').hide();
                    $('.blacksrs').hide();
                    
                }
    function close1() {
                    $('#staticmodal').hide();
                    $('.blacksrs').hide();
                    window.location.href = "{{ config('app.url', 'Resident') }}/Residentp/{{Auth::user()->email}}";
                }

 $('#househld').submit(function(event) {
    event.preventDefault();
    var form = document.getElementById('househld');
    var formData = serializeForm(form);
    console.log(formData);
    $.ajax({
        url: '/househldAPI',
        method: 'POST',
        data: formData,
        success: function(response) {
            setTimeout(function() {
                
                $('#loadingSpinner').hide();
                $('.textsub').show();
                $('#btnewres').prop('disabled', false);
                
                if("{{$varify1->varified}}"!=="Pending"){
                    window.location.href = "{{ config('app.url', 'Resident') }}/AddMemberHouseHold";
                }else{
                    $('#staticmodal').show();
                $('.blacksrs').show();
                }

                 
                
}, 3000);
            // console.log(response);
            // document.getElementById("househld").reset();
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
                    url: '{{ route("HouseholdInfoGET") }}', 
                    type: 'GET',  
                    dataType: 'json',
                    success: function(response) {
                        var form = document.getElementById('househld');
                        var formData = serializeForm(form);
                        console.log( response.HouseHoldname);
                        document.getElementById('famname').value = response.HouseHoldname;
                        document.getElementById('Address').value = response.address;
                        document.getElementById('PrimaryPhone').value = response.PrimaryPhone;
                        document.getElementById('Email').value = response.email;
                        document.getElementById('name').value = response.name;
                        document.getElementById('Birthdates').value = response.birthdates;
                        document.getElementById('Relationshiphead').value = response.Relationshiphead;
                        document.getElementById('PrimaryHousehold').value = response.PrimaryHousehold;
                        switch(response.member) {
                                        case "1":
                                            document.getElementById('red-radio').checked = true;
                                            break;
                                        case "2":
                                            document.getElementById('green-radio').checked = true;
                                            break;
                                        case "3":
                                            document.getElementById('purple-radio').checked = true;
                                            break;
                                        case "4":
                                            document.getElementById('teal-radio').checked = true;
                                            break;
                                        case "5":
                                            document.getElementById('yellow-radio').checked = true;
                                            break;
                                        case "6":
                                            document.getElementById('orange-radio').checked = true;
                                            break;
                                        case "7":
                                            document.getElementById('red-radio7').checked = true;
                                            break;
                                        case "10":
                                            document.getElementById('green-radio8').checked = true;
                                            break;
                                        default:
                                            // If none of the above match, you can set a default or handle this case
                                            break;
                                    }
                    },
                    error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }


           </script>
                    
</x-app-layout>



