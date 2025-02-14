<x-app-layout>
<div class="p-2 sm:ml-64">
   <div class="p-1 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <div class="">
<div id="linked">

</div>    
   

    <?php $faker = Faker\Factory::create(); ?>
  <x-Households />
  <x-householdinfo />
  
<!-- <table id="pagination-table"> -->
<div class="mt-4 flex justify-end items-start gap-4 max-w-full ">
  <!-- <label for="selectpersonages" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sorted Select</label> -->
  <div class="relative max-w-sm">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
    </div>
    </div>
<table class="householdtable sorting-table pagination-table" >
    <thead>
        <tr>
            <th>
            <span class="flex items-center">
                <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </span>
            </th>
            <th>
                    Action
            </th>
            <th>
                <span class="flex items-center">
                    Family
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Zone
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    People
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Years
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
        </tr>
    </thead>
    <tbody>
    
        <tr>
        <td class="px-4 py-2"><div class="flex items-center justify-between">
       
       <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
  </td>
            <td class="px-4 py-2"><div class="flex items-center justify-between">
       
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
   </td>
            <td class="px-4 py-2"><div class="flex items-center justify-between">
       
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
   </td>
                <td class="px-4 py-2"><div class="flex items-center justify-between">

        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
    </td>
                <td class="px-4 py-2"><div class="flex items-center justify-between">
                 <div class="flex items-center justify-between">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
        
    </div></td>
                <td class="px-4 py-2"><div class="flex items-center justify-between">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
       
    </div></td>
        </tr>
   
    </tbody>
</table>

<div class="hidden blacksrs bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>
</div>
</div>
</div>
<script>

// if (document.querySelector(".pagination-table") && typeof simpleDatatables.DataTable !== 'undefined') {
//     const dataTable = new simpleDatatables.DataTable(".pagination-table", {
//         paging: true,
//         perPage: 5,
//         perPageSelect: [5, 10, 15, 20, 25],
//         sortable: true
//     });
// }
document.querySelector('#simple-search').addEventListener('input', function() {
    displaPay();
});
arrayHousehold = [];
if (document.querySelector(".sorting-table") && typeof simpleDatatables.DataTable !== 'undefined') {
    const dataTable = new simpleDatatables.DataTable(".sorting-table", {
        paging: true, 
        searchable: false,
        perPageSelect: false,
        sortable: true

    });
}
function displaPay(){
    let serva = document.querySelector('#simple-search').value;
    let table = document.querySelector('.householdtable');
    table.querySelector('tbody').innerHTML="";
     for (let i = arrayHousehold.length- 1; i >= 0; i--) {
        if(arrayHousehold[i].email !== "admin@gmail.com")
        {
            if(arrayHousehold[i].name.toLowerCase().startsWith(serva) || arrayHousehold[i].HouseHoldname.toLowerCase().startsWith(serva) || arrayHousehold[i].address.toLowerCase().startsWith(serva) || arrayHousehold[i].member.startsWith(serva) || categorizeResidentAge(arrayHousehold[i].birthdates).startsWith(serva)){

        table.querySelector('tbody').innerHTML +=`<tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white"><input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"></td>
            <td>
             <svg onclick="modalediet(${arrayHousehold[i].Resident_id})" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
</svg>
            </td>
            <td onclick="showinfo(${arrayHousehold[i].Resident_id})">${arrayHousehold[i].HouseHoldname}</td>
            <td onclick="showinfo(${arrayHousehold[i].Resident_id})">${arrayHousehold[i].address}</td>
            <td onclick="showinfo(${arrayHousehold[i].Resident_id})">${arrayHousehold[i].member}</td>
            <td onclick="showinfo(${arrayHousehold[i].Resident_id})">${arrayHousehold[i].birthdates}</td>
        </tr>
        <div onclick="closebla()" class="hidden blacksrs bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40">
         `;
        
     }
    }
}
}



let var_id=0;
function modalediet(val_id){
    var_id = val_id;
    $('.blacksrs').show();
    $('#crud-modal').show();
    document.getElementById('linked').innerHTML ="";
        insertdis(val_id);
}
function skeleton(){
    let table = document.querySelector('.householdtable');
    table.querySelector('tbody').innerHTML="";
    
    for (let i = arrayHousehold.length- 1; i >= 0; i--) {
        if(arrayHousehold[i].email !== "admin@gmail.com")
        {
    table.querySelector('tbody').innerHTML +=`<tr>
    <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white"><input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"></td>
            <td>
             <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
</svg></td>
                <td class="px-4 py-2"><div class="flex items-center justify-between">
       
        <div class="flex items-center justify-between">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
        
    </div>
   </td>
                <td class="px-4 py-2"><div class="flex items-center justify-between">
<div class="flex items-center justify-between">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
        
    </div>
        
    </td>
                <td class="px-4 py-2"><div class="flex items-center justify-between">
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div></td>
                <td class="px-4 py-2"><div class="flex items-center justify-between">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
       
    </div></td>
                `
        }
    }
}
insertdis();
arraymember=[];
arrayresident=[];
function memberlist(valuemem) {
    let table1 = document.querySelector('#membertable');
    table1.querySelector('tbody').innerHTML="";
    
    for (let i = 0; i < arraymember.length; i++) {
        if(arraymember[i].user_id == valuemem && arraymember[i].familyRoles == 'member' ){
            table1.querySelector('tbody').innerHTML +=`<tr>
                <th width="30%">${arraymember[i].name}</th>
                <td width="2%">:</td>
                <td >${arraymember[i].age}</td>
                <td >${arraymember[i].Gender}</td>
            </tr>`;
        }
   }
}

    function insertdis(value){
                $.ajax({
                    url: '{{ route("HouseHoldDispla") }}', 
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {
                        arrayHousehold =response.datainfo;
                        arraymember=response.memberlist;
                        arrayresident =response.resident;
                        
                        console.log(arrayresident);
                        
                        let result = value - 1;
                        if (result >= 0) {
                        
                      
                        document.getElementById('famname').value = arrayHousehold[result].HouseHoldname;
                        document.getElementById('Address').value = arrayHousehold[result].address;
                        document.getElementById('PrimaryPhone').value = arrayHousehold[result].PrimaryPhone;
                        document.getElementById('Email').value = arrayHousehold[result].email;
                        document.getElementById('name').value = arrayHousehold[result].name;
                        document.getElementById('Birthdates').value = arrayHousehold[result].birthdates;
                        document.getElementById('Relationshiphead').value = arrayHousehold[result].Relationshiphead;
                        document.getElementById('PrimaryHousehold').value = arrayHousehold[result].PrimaryHousehold;

                        document.getElementById('familyname').innerHTML = arrayHousehold[result].HouseHoldname;
                        document.getElementById('member').innerHTML = arrayHousehold[result].member;
                        document.getElementById('address').innerHTML = arrayHousehold[result].address ;
                        document.getElementById('primaryphone').innerHTML = arrayHousehold[result].PrimaryPhone ;
                        document.getElementById('email').innerHTML = arrayHousehold[result].email ;
                        document.getElementById('names').innerHTML = arrayHousehold[result].name ;
                        document.getElementById('birthdates').innerHTML = arrayHousehold[result].birthdates;
                        document.getElementById('relationshiphead').innerHTML = arrayHousehold[result].Relationshiphead;
                        document.getElementById('primaryhousehold').innerHTML = arrayHousehold[result].PrimaryHousehold;
                        
                        document.getElementById('resiid').innerHTML = arrayresident[result].user_id;
                        document.getElementById('resiname').innerHTML = arrayresident[result].name;
                        document.getElementById('resiLastname').innerHTML = arrayresident[result].lastname;
                        document.getElementById('picprofile').innerHTML =arrayresident[result].profile == null ? `<img class="profile_img" src="https://ui-avatars.com/api/?name=${arrayresident[result].name}&color=7F9CF5&background=EBF4FF" alt="studentg dp" style="width: 300px; height: 200px;">` : `<img class="profile_img" src="/storage/${arrayresident[result].profile}" alt="student dp">`;
                        
                        
                        
                        let validmember = arrayHousehold[result].Resident_id
                        memberlist(validmember);
                        
                    
                        switch(arrayHousehold[result].member) {
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
                                
                        }else{
                            skeleton()
                        }
                        setTimeout(function() {
                        displaPay();
                       
                        
                        
                            }, 3000)
                    },
                    error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }
     
</script>
<script>
            function serializeForm(form) {
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    return data;
}
// function id(id) {
//     return id;
// }

function hideinfo() {
    $('#extralarge-modalinfo').hide();
    $('.blacksrs').hide();
    $('#crud-modal').hide();
    document.getElementById('linked').innerHTML ="";
   
}

function showinfo(ids) {
    let linked =`<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>`
;
document.getElementById('linked').innerHTML =linked;
    const val = ids;
    console.log(val);
    $('#extralarge-modalinfo').show();
    $('.blacksrs').show();
    insertdis(val);
   
}

 $('#form1house').submit(function(event) {
    console.log(var_id);
    let array2 = {idre : var_id}
    event.preventDefault();
    var form = document.getElementById('form1house');
    var formData = serializeForm(form);
    let mergedObject = Object.assign({}, array2, formData);
    console.log(mergedObject);
    $.ajax({
        url: '/householUpate',
        method: 'POST',
        data: mergedObject,
        success: function(response) {
            insertdis();
                $('#loadingSpinner').hide();
                $('.textsub').show();
                $('#btnewres').prop('disabled', false);      

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


           </script>
</x-app-layout>