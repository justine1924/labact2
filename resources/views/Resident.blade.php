<x-app-layout>


<div class="p-4 sm:ml-64">
   <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <div class="">
         
   
    <div id="linked"></div>
    <style>
        .sva:hover{
    color:red;
    
}
tr td{
    width: auto;

}
    </style>
<?php $faker = Faker\Factory::create(); ?>
    <x-newResident />
    <x-updateResident />
   <x-residentinfomodal />
   
  
    <br>
    <div>
    <button hidden data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">New Resident</button>
    </div>
<!-- <table id="pagination-table"> -->

<div class="flex items-center justify-between gap-4 max-w-full ">
<div class="w-full">
  <label for="selectpersonages" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CATEGORIES</label>
  <select onclick="sortedselect()" id="selectpersonages" class="bg-gray-50 max-w-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option value="">All</option>
    <option value="Infant">Infant</option>
    <option value="Toddler">Toddler</option>
    <option value="Preschooler">Preschooler</option>
    <option value="Child">Child</option>
    <option value="Tween">Tween</option>
    <option value="Teenager">Teenager</option>
    <option value="Young Adult">Young Adult</option>
    <option value="Adult">Adult</option>
    <option value="Senior">Senior</option>
  </select>
  </div>
  <div class="w-full">
  <label for="electpersoncivil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CIVIL STATUS</label>
  <select onclick="sortedselect()" id="selectpersoncivil" class="bg-gray-50 max-w-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option value="">All</option>
  <option value="Single">Single</option>
    <option value="Married">Married</option>
    <option value="Divorced">Divorced</option>
    <option value="Singlep">Single Parent </option>
  </select>
  </div>
  <div class="w-full">
  <label for="selectpersondisability" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DISSABILITIES</label>
  <select onclick="sortedselect()" id="selectpersondisability" class="bg-gray-50 w-auto border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option value="">All</option>
  <option value="1">physical_disability</option>
<option value="2">visual_impairment</option>
<option value="3">hearing_impairment</option>
<option value="4">cognitive_disability</option>
<option value="5">mental_health_condition</option>
<option value="6">neurological_condition</option>
<option value="7">speech_impairment</option>
<option value="8">chronic_illness</option>
<option value="9">autism_spectrum</option>

  </select>
  </div>
  <div class="relative w-full mt-7">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
    </div>
    </div>
<table class="tablemain sorting-table pagination-table" >
    <thead>
        <tr>
            <th>
            <span class="flex items-center">
                <input check id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </span>
            </th>
            <th>
                    Action
            </th>
            <th>
                    Profile
            </th>
            <th>
                <span class="flex items-center">
                    Name
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Last Name
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Middle Name
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Age
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            
            <th>
                <span class="flex items-center">
                    Civil Status
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    status
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
        </tr>
    </thead>
    <tbody>

    </tbody>
    
</table>

<div onclick="closebla()" class="hidden blacksrs bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>
</div>
   </div>
</div>
<script>
document.querySelector('#simple-search').addEventListener('input', function() {
    displaresi();
});

function sortedselect(){
    displaresi();
   
}

function categorizeResidentAge(age) {
  if (age >= 0 && age <= 1) {
    return "Infant";
  } else if (age >= 2 && age <= 3) {
    return "Toddler";
  } else if (age >= 4 && age <= 5) {
    return "Preschooler";
  } else if (age >= 6 && age <= 9) {
    return "Child";
  } else if (age >= 10 && age <= 12) {
    return "Tween";
  } else if (age >= 13 && age <= 17) {
    return "Teenager";
  } else if (age >= 18 && age <= 25) {
    return "Young Adult";
  } else if (age >= 26 && age <= 60) {
    return "Adult";
  } else if (age > 60) {
    return "Senior";
  } else {
    return "Invalid Age";
  }
//   displaresi();
  $('#updatecrud-modal').show();
    $('.blacksrs').show();
}


function globaldisa(val) {
    if(document.querySelector('#selectpersondisability').value == val ){
        return true
    }else{
        return false
    }
}
function displaresi(){
    globaldisa();
    console.log(document.querySelector('#selectpersondisability').value);
    let serva = document.querySelector('#simple-search').value;
    let table = document.querySelector('.tablemain');


    table.querySelector('tbody').innerHTML="";
    
     for (let i = arrayResident.length- 1; i >= 0; i--) {
      

        if(arrayResident[i].email !== "admin@gmail.com")
        {
            
        if(document.querySelector('#selectpersonages').value == ""? true : categorizeResidentAge(arrayResident[i].age) == document.querySelector('#selectpersonages').value){
            if(document.querySelector('#selectpersoncivil').value == ""? true : document.querySelector('#selectpersoncivil').value == arrayResident[i].CivilStatus){
                if(document.querySelector('#selectpersondisability').value == "1"? 1 == arrayResident[i].physical_disability : true ){ 
                    if(document.querySelector('#selectpersondisability').value == "2"? 1 == arrayResident[i].visual_impairment : true ){ 
                        if(document.querySelector('#selectpersondisability').value == "3"? 1 == arrayResident[i].hearing_impairment : true ){ 
                    if(document.querySelector('#selectpersondisability').value == "4"? 1 == arrayResident[i].cognitive_disability : true ){ 
                        if(document.querySelector('#selectpersondisability').value == "5"? 1 == arrayResident[i].mental_health_condition : true ){ 
                            if(document.querySelector('#selectpersondisability').value == "6"? 1 == arrayResident[i].neurological_condition : true ){ 
                                if(document.querySelector('#selectpersondisability').value == "7"? 1 == arrayResident[i].speech_impairment : true ){
                                    if(document.querySelector('#selectpersondisability').value == "8"? 1 == arrayResident[i].chronic_illness : true ){
                                        if(document.querySelector('#selectpersondisability').value == "9"? 1 == arrayResident[i].autism_spectrum : true ){
            if(arrayResident[i].name.toLowerCase().startsWith(serva) || arrayResident[i].lastname.toLowerCase().startsWith(serva) || arrayResident[i].middlename.toLowerCase().startsWith(serva) || categorizeResidentAge(arrayResident[i].age).toLowerCase().startsWith(serva) || arrayResident[i].status.toLowerCase().startsWith(serva)){

      
       

     
        table.querySelector('tbody').innerHTML +=`<tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white"><input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"></td>
            <td>
            <div class="flex w-12 justify-between  md:justify-center">
             <svg onclick="updateres('${i}','${arrayResident[i].user_id}')" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill hover:text-blue-800 focus:ring-blue-300 font-medium dark:focus:ring-blue-800 focus:ring-4 focus:outline-none" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
</svg>

<svg hidden onclick="getdelres('${i}','${arrayResident[i].user_id}')" data-modal-target="residdel-modal" data-modal-toggle="residdel-modal" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill sva hover:text-blue-800 focus:ring-Red-300 font-medium dark:bg-Red-600 dark:hover:bg-Red-700 dark:focus:ring-Red-800 focus:ring-4 focus:outline-none" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
  </svg>

          </div>
            </td>
            <td  >${arrayResident[i].profile ==null ? `<a href="https://ui-avatars.com/api/?name=${arrayResident[i].name.charAt(0)}&color=7F9CF5&background=EBF4FF" target="_blank" rel="noopener noreferrer"><img class="w-10 h-10 rounded-full" src="https://ui-avatars.com/api/?name=${arrayResident[i].name.charAt(0)}&color=7F9CF5&background=EBF4FF" alt="Rounded avatar"></a>` : `<a href="/storage/${arrayResident[i].profile}" target="_blank" rel="noopener noreferrer"><img class="w-10 h-10 rounded-full" src="/storage/${arrayResident[i].profile}" alt="Rounded avatar"></a>`}</td>
            <td onclick="showinfo('${i}','${arrayResident[i].user_id}')" data-modal-target="default-modal" data-modal-toggle="default-modal">${arrayResident[i].name}</td>
            <td onclick="showinfo('${i}','${arrayResident[i].user_id}')" data-modal-target="default-modal" data-modal-toggle="default-modal">${arrayResident[i].lastname}</td>
            <td onclick="showinfo('${i}','${arrayResident[i].user_id}')" data-modal-target="default-modal" data-modal-toggle="default-modal">${arrayResident[i].middlename}</td>
            <td onclick="showinfo('${i}','${arrayResident[i].user_id}')" data-modal-target="default-modal" data-modal-toggle="default-modal">${arrayResident[i].age}</td>
             <td onclick="showinfo('${i}','${arrayResident[i].user_id}')" data-modal-target="default-modal" data-modal-toggle="default-modal">${arrayResident[i].CivilStatus}</td>
           
            <td onclick="showinfo('${i}','${arrayResident[i].user_id}')" data-modal-target="default-modal" data-modal-toggle="default-modal">${arrayResident[i].status!=="Pending" ?`<span ${arrayResident[i].status !=="UnVerified" ? `class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400" `  : `class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400" `}>` + arrayResident[i].status + '</span>' : 
            `<span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300">`+ arrayResident[i].status +'</span>'}</td>
        </tr>
        <div onclick="closebla()" class="hidden blacksrs bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>`;
        
    }
}
}  
}  
}}}}}}}}}}
}


insertdis();
    function insertdis(){
                $.ajax({
                    url: '{{ route("Residentgetadata") }}', 
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {
                    
                        arrayResident =response;
                        displaresi();
                    },
                    error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }

            
    function serializeForm(form) {
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    return data;
}

let valid; 
 $('#newresident1').submit(function(event) {
    event.preventDefault();
    var form = document.getElementById('newresident1');
    var formData = serializeForm(form);
    let idjson = { id_user: valid };
    let merged = { ...idjson, ...formData };
    console.log(merged);
    $.ajax({
        url: '/Residentupdatedata',
        method: 'POST',
        data: merged,
        success: function(response) {
            insertdis();
            console.log(response);
//             setTimeout(function() {
//                 $('#loadingSpinner').hide();
//                 $('.textsub').show();
//                 $('#btnewres').prop('disabled', false);
//                 window.location.href = "{{ config('app.url', 'Resident') }}/Residentp/{{Auth::user()->email}}";
                    
// }, 3000);
        },beforeSend: function(xhr) {
       
       xhr.setRequestHeader("Authorization", "Bearer your-token-here");
   },
    });
});



    if (document.querySelector(".sorting-table") && typeof simpleDatatables.DataTable !== 'undefined') {
    const dataTable = new simpleDatatables.DataTable(".sorting-table", {
        paging: true, 
        searchable: false,
        perPageSelect: false,
        sortable: true

    });
}
let arrayresident = [];
let arrayHousehold = [];

function hideinfo() {
    $('#extralarge-modalinfo').hide();
    $('.blacksrs').hide();
    $('#crud-modal').hide(); 
    $('#updatecrud-modal').hide();
    document.getElementById('linked').innerHTML ="";
   
}
function updateres(val,id){
    $('#updatecrud-modal').show();
    $('.blacksrs').show();
    displayinfo(val,id);
}
function showinfo(val,id) {
 
    // const val = ids;
    let linked =`<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>`
;
document.getElementById('linked').innerHTML =linked;
    $('#extralarge-modalinfo').show();
    $('.blacksrs').show();
    // document.getElementById('linked').innerHTML ="";
    // insertdis(val);
    displayinfo(val,id);
   
}


    function displayinfo(id,iduse){
                $.ajax({
                    url: '{{ route("Residentinfo") }}', 
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {
                        arrayresident =response.resident;
                        arrayHousehold =response.datainfo;
                        let idarryget = id;
                        let homeids = iduse -1;
                        valid = iduse;
                        document.getElementById("plastname").value = arrayresident[idarryget].lastname;
                        arrayresident[idarryget].profile == null ? document.querySelector('.pimgpp').setAttribute('style',`border:2px solid black;background: url(https://ui-avatars.com/api/?name=${arrayresident[idarryget].name}&color=7F9CF5&background=EBF4FF);padding: 25px;background-repeat: no-repeat;background-size: cover;background-position: center top;`) : document.querySelector('.pimgpp').setAttribute('style',`border:2px solid black;background: url(${arrayresident[idarryget].profile});padding: 25px;background-repeat: no-repeat;background-size: cover;background-position: center top;`);
                        document.getElementById("pfirstname").value = arrayresident[idarryget].name;
                        document.getElementById("pmiddleinitial").value = arrayresident[idarryget].middlename;
                        document.getElementById("palias").value = arrayresident[idarryget].alias;
                        document.getElementById("pbirthday").value = arrayresident[idarryget].birthday;
                        document.getElementById("page").value = arrayresident[idarryget].age;
                        document.getElementById("pplaceofbirth").value = arrayresident[idarryget].placeofbirth;
                        arrayresident[idarryget].Gender == "male" ? document.getElementById("pmale").checked = true : document.getElementById("pfemale").checked = true ;
                        document.getElementById("pVoterStatus").value = arrayresident[idarryget].VoterStatus;
                        document.getElementById("pCivilStatus").value = arrayresident[idarryget].CivilStatus;
                        document.getElementById("pCitizenship").value = arrayresident[idarryget].Citizenship;
                        document.getElementById("pTelephone").value = arrayresident[idarryget].Telephone;
                        document.getElementById("pMobile").value = arrayresident[idarryget].Mobile;
                        document.getElementById("pheight").value = arrayresident[idarryget].height;
                        document.getElementById("pweight").value = arrayresident[idarryget].weight;
                        document.getElementById("purok").value = arrayresident[idarryget].purok;
                        document.getElementById("pEmail").value = arrayresident[idarryget].email;
                        document.getElementById("pMother").value = arrayresident[idarryget].mother;
                        document.getElementById("pFather").value = arrayresident[idarryget].father;
                        // document.getElementById("disabCHp").checked = arrayresident[idarryget].disability;
                        // document.getElementById("disabp").disabled = !arrayresident[idarryget].disability;
                        // Handling checkboxes (Disability Conditions) and displaying values in the table
                        document.getElementById('physical_disability_re').innerHTML = arrayresident[idarryget].physical_disability === 1 ? 'Yes' : 'No';
                        document.getElementById('visual_impairment_re').innerHTML = arrayresident[idarryget].visual_impairment === 1 ? 'Yes' : 'No';
                        document.getElementById('hearing_impairment_re').innerHTML = arrayresident[idarryget].hearing_impairment === 1 ? 'Yes' : 'No';
                        document.getElementById('cognitive_disability_re').innerHTML = arrayresident[idarryget].cognitive_disability === 1 ? 'Yes' : 'No';
                        document.getElementById('mental_health_condition_re').innerHTML = arrayresident[idarryget].mental_health_condition === 1 ? 'Yes' : 'No';
                        document.getElementById('neurological_condition_re').innerHTML = arrayresident[idarryget].neurological_condition === 1 ? 'Yes' : 'No';
                        document.getElementById('speech_impairment_re').innerHTML = arrayresident[idarryget].speech_impairment === 1 ? 'Yes' : 'No';
                        document.getElementById('chronic_illness_re').innerHTML = arrayresident[idarryget].chronic_illness === 1 ? 'Yes' : 'No';
                        document.getElementById('autism_spectrum_re').innerHTML = arrayresident[idarryget].autism_spectrum === 1 ? 'Yes' : 'No';

                        // Handling "Other" condition (only display if checked)
                        if (arrayresident[idarryget].other_checkbox === 1) {
                            document.getElementById('other_condition_row').style.display = 'table-row'; // Show "Other" row
                            document.getElementById('other_condition_re').innerHTML = arrayresident[idarryget].other_condition || 'Not Specified';
                        } else {
                            document.getElementById('other_condition_row').style.display = 'none'; // Hide "Other" row
                        }


                        document.getElementById("user_idre").innerText = arrayresident[idarryget].user_id;
                        document.getElementById('picprofile').innerHTML =arrayresident[idarryget].profile == null ? `<img class="profile_img rounded-lg" src="https://ui-avatars.com/api/?name=${arrayresident[idarryget].name}&color=7F9CF5&background=EBF4FF" alt="studentg dp" style="width: 300px; height: 200px;">` : `<img class="profile_img rounded-lg" src="/storage/${arrayresident[idarryget].profile}" alt="student dp">`;
                        document.getElementById("namere").innerText = arrayresident[idarryget].name;
                        document.getElementById("lastnamere").innerText = arrayresident[idarryget].lastname;
                        document.getElementById("namere1").innerText = arrayresident[idarryget].name;
                        document.getElementById("lastnamere1").innerText = arrayresident[idarryget].lastname;
                        document.getElementById("middlenamere").innerText = arrayresident[idarryget].middlename;
                        document.getElementById("aliasre").innerText = arrayresident[idarryget].alias;
                        document.getElementById("birthdayre").innerText = arrayresident[idarryget].birthday;
                        document.getElementById("agere").innerText = arrayresident[idarryget].age;
                        document.getElementById("placeofbirthre").innerText = arrayresident[idarryget].placeofbirth;
                        document.getElementById("emailre").innerText = arrayresident[idarryget].email;
                        document.getElementById("motherre").innerText = arrayresident[idarryget].mother;
                        document.getElementById("fatherre").innerText = arrayresident[idarryget].father;
                        document.getElementById("heightre").innerText = arrayresident[idarryget].height;
                        document.getElementById("weightre").innerText = arrayresident[idarryget].weight;
                        document.getElementById("Genderre").innerText = arrayresident[idarryget].Gender;
                        document.getElementById("VoterStatusre").innerText = arrayresident[idarryget].VoterStatus;
                        document.getElementById("CivilStatusre").innerText = arrayresident[idarryget].CivilStatus;
                        document.getElementById("Citizenshipre").innerText = arrayresident[idarryget].Citizenship;
                        document.getElementById("Telephonere").innerText = arrayresident[idarryget].Telephone;
                        document.getElementById("Mobilere").innerText = arrayresident[idarryget].Mobile;
                        document.getElementById("statusre").innerText = arrayresident[idarryget].status;
                        document.getElementById("purokre").innerText = arrayresident[idarryget].purok;
                        document.getElementById("desabilityre").innerText = arrayresident[idarryget].desability || "None";
                        document.getElementById("created_atre").innerText = arrayresident[idarryget].created_at;
                        document.getElementById("updated_atre").innerText = arrayresident[idarryget].updated_at;

                        document.getElementById('familyname').innerHTML = arrayHousehold[homeids].HouseHoldname;
                        document.getElementById('member').innerHTML = arrayHousehold[homeids].member;
                        document.getElementById('address').innerHTML = arrayHousehold[homeids].address ;
                        document.getElementById('primaryphone').innerHTML = arrayHousehold[homeids].PrimaryPhone ;
                        document.getElementById('email').innerHTML = arrayHousehold[homeids].email ;
                        document.getElementById('names').innerHTML = arrayHousehold[homeids].name ;
                        document.getElementById('birthdates').innerHTML = arrayHousehold[homeids].birthdates;
                        document.getElementById('relationshiphead').innerHTML = arrayHousehold[homeids].Relationshiphead;
                        document.getElementById('primaryhousehold').innerHTML = arrayHousehold[homeids].PrimaryHousehold;
                    },
                    error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }

   
</script>

</x-app-layout>
<!-- https://www.youtube.com/watch?v=CgR5k7MKL-g -->