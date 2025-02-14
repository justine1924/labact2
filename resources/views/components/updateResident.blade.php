

<!-- Modal toggle -->
<button hidden data-modal-target="updatecrud-modal" data-modal-toggle="updatecrud-modal" class="" type="button">
  Toggle modal
</button>
<style>
    .parent {
    position: relative;
    height: 300px; /* Example height */
    background-color: #f0f0f0;
  }

  .child {
    position: absolute;
    top: 33.33%; /* Position 1/3 down from the parent */
    left: 50%;
    transform: translateX(-50%); /* Center horizontally */
    background-color: #4CAF50;
    color: white;
    padding: 10px;
  }
</style>

<!-- Main modal -->
<div id="updatecrud-modal"  tabindex="-1" aria-hidden="true" class="mdl transform hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-7xl  max-h-full flex items-center justify-center h-screen top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Update
                </h3>
                <button onclick="hideinfo()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="updatecrud-modal" data-modal-toggle="updatecrud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
          

            <form id="newresident1" class="p-4 md:p-5">
            <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-1">
            <div class="flex items-center justify-center w-mb">
           
    <label id="pldropzone-file" for="pdropzone-file" style=" padding: 25px;background-repeat: no-repeat;background-size: cover;" class="z-50 pimgpp flex flex-col items-center justify-center w-mb h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
    <div class="flex flex-col items-center justify-center pt-5 pb-6">  
    <svg class="z-1 w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (MAX. 800x400px)</p>
        </div>
        <input id="pdropzone-file" type="file" accept="image/*" class="hidden" />
    </label>
</div> 
</div>
<div class="grid gap-4 mb-4 grid-cols-4">
<div class="col-span-2 ">
                <label for="plastname" id="pllastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input type="text" name="plastname" id="plastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Last Name" required="">
            </div>
<div class="col-span-2 ">
                <label for="pfirstname" id="plfirstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" name="pfirstname" id="pfirstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="First Name" required="">
            </div>
            <div class="col-span-2 ">
                <label for="pmiddleinitial" id="plmiddleinitial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Initial</label>
                <input type="middleinitial" name="pmiddleinitial" id="pmiddleinitial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Middle Initial" required="">
            </div>
            <div class="col-span-2 ">
                <label for="palias" id="plalias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alias</label>
                <input type="text" name="palias" id="palias" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alias Name" required="">
            </div>

            </div>
</div><!-- end profile -->
                <div class="grid gap-4 mb-4 grid-cols-2">
                <!-- ///col1  -->
                <div class=" grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-1 ">
                        <label for="pbirthday" id="plbirthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
                        <input type="date" name="pbirthday" id="pbirthday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div class="col-span-1 ">
                        <label for="page" id="plage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                        <input type="number" name="page" id="page" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Age" required="">
                    </div>
        
                    
                    <div class="col-span-2 ">
                        <label for="pplaceofbirth" id="plplaceofbirth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blace Of Birth</label>
                        <input type="text" name="pplaceofbirth" id="pplaceofbirth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Place of Birth" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="pGender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <div class="flex items-center mb-4">
    <input id="pmale" type="radio" name="pGenders" value="male" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
    <label for="pmale" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
      Male
    </label>
  </div>

  <div class="flex items-center mb-4">
    <input id="pfemale" type="radio" name="pGenders" value="female" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
    <label for="pfemale" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
      Female
    </label>
  </div>

                    </div>
                    <div class="col-span-1">
                        <label for="pVoterStatus" id="plVoterStatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Voter Status</label>
                        <select id="pVoterStatus" name="pVoterStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option disabled selected value="">Voter Status</option>
                            <option value="Registered">Registered</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Canceled">Canceled</option>
                            <option value="none">none</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="pCivilStatus" id="plCivilStatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civil Status</label>
                        <select id="pCivilStatus" name="pCivilStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option disabled selected value="">Civil Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Babaero">Babaero</option>
                        </select>
                    </div>
                    <div class="col-span-2 ">
                        <label id="plCitizenship" for="pCitizenship" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship</label>
                        <input type="text" name="pCitizenship" id="pCitizenship" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Filipino" required="">
                    </div>
                    <div class="col-span-1 ">
                        <label id="plTelephone" for="pTelephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone</label>
                        <input type="number" name="pTelephone" id="pTelephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12345678" required="">
                    </div>
                    <div class="col-span-1 ">
                        <label id="plMobile" for="pMobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile</label>
                        <input type="number" name="pMobile" id="pMobile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="09123456789" required="">
                    </div>
                    
                </div>
                <!-- ///col2 -->
                <div class=" grid-cols-2 grid gap-4 mb-4">
                <div class="col-span-1">
                        <label id="plheight" for="pheight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Height cm</label>
                        <input type="text" name="pheight" id="pheight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Height" required="">
                    </div>
                    <div class="col-span-1">
                        <label id="plweight" for="pweight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">weight</label>
                        <input type="text" name="pweight" id="pweight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Weight" required="">
                    </div>
                    <!-- <div class="col-span-2">
                        <label id="lotheraccount" for="otheraccount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Account</label>
                        <input type="text" name="otheraccount" id="otheraccount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ane Account" required="">
                    </div> -->
                    <div class="col-span-2">
                        <label id="ppurok" for="Purok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Purok</label>
                        <input type="text" name="purok" id="purok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Purok, zone , street" required="">
                    </div>
                    <div class="col-span-2">
                        <label id="plEmail" for="pEmail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="pEmail" id="pEmail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email@gmail.com" required="">
                    </div>
                    <div class="col-span-2">
                        <label id="plMother" for="pMother" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother</label>
                        <input type="text" name="pMother" id="pMother" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Mother" required="">
                    </div>
                    <div class="col-span-2">
                        <label id="plFather" for="pFather" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father</label>
                        <input type="text" name="pFather" id="pFather" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Father" required="">
                    </div>
                    <div class="col-span-2 space-x-4  flex ">
                    <label id="disabdp" for="disabp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    <input id="disabCHp" type="checkbox" value="" name="disabCHp" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    </label>
                    
                        <input disabled type="text" name="disabp" id="disabp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Person With Disability" required="">
                        
                    </div>
                    
                </div>
                </div>
                    
                <x-button onclick="hideinfo()">
                {{ __('Update') }}
            </x-button>
            </form>
        </div>
        
    </div>
  
</div> 
<script>
    document.querySelector('#pdropzone-file').addEventListener('change', puplode);
  function  puplode(){
    
    let imga = document.querySelector('#pdropzone-file').files[0].name;

    if(document.querySelector('#pdropzone-file').value==""){
        // document.querySelector('.imgpp').setAttribute('style',`background: url(${imga});padding: 25px;background-repeat: no-repeat;background-size: cover;`);
      
    }else{
        // document.querySelector('.imgpp').setAttribute('style',`background: url(${imga});padding: 25px;background-repeat: no-repeat;background-size: cover;`);
        puploadimgs();
        
    }
    }
    document.querySelector('#disabCHp').addEventListener('click', function(){
        if(document.querySelector('#disabCHp').checked){
   
        document.querySelector('#disabp').removeAttribute("disabled");
}
if(!document.querySelector('#disabCHp').checked){
   
    document.querySelector('#disabp').setAttribute("disabled","true");
}
    }); 
let pimgprofile='';
           function puploadimgs(){
                const pfileInput = document.querySelector('#pdropzone-file');
                const pformData = new FormData();
                
                if (pfileInput.files.length > 0) {
                    pformData.append('image', pfileInput.files[0]);

                    $.ajax({
                        url: '/upload-image',
                        type: 'POST',
                        data: pformData,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            // $('.imgpp').html('<img src="' + response.url + '" alt="Uploaded Image" style="max-width: 300px;">');
                            document.querySelector('.pimgpp').setAttribute('style',`border:2px solid black;background: url(${response.url});padding: 25px;background-repeat: no-repeat;background-size: cover;background-position: center top;`);
                            pimgprofile = response.img;
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            $('#response').html('<p>Error: ' + errorThrown + '</p>');
                        }
                    });
                } else {
                    alert('Please select an image to upload.');
                }
            };
            
</script>