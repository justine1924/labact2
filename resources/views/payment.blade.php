<x-app-layout>
<div class="p-2 sm:ml-64">
   <div class="p-1 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <div class="">
<div id="linked"></div>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
    
	    <link rel="stylesheet" href="css/style.css">
        <!-- Extra Large Modal -->
<div id="extralargemodalinfo1" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-7xl max-h-full ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Resident Profile
                </h3>
                <button type="button" onclick="hideinfo()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="extralargemodalinfo1">
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
            <p class="mb-0"><strong class="pr-1">Resident ID:</strong><span id="user_idve">4dd</span></p>
            <p class="mb-0"><strong class="pr-1">Name:</strong><span id="nameve">4dd</span></p>
            <p class="mb-0"><strong class="pr-1">LastName:</strong><span id="lastnameve">4dd</span></p>
          </div>
        </div>
            
         
            <div class="col-lg-18 col-span-2 ">
       
        <div class="card row shadow-sm flex">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>PAYMENT INFO</h3>
          </div>
          <div class="card-body col-lg-18 ">
          <table id="household-info" class="table table-bordered">
                <tr>
            <th width="30%">Name</th>
            <td id="name">Buglat Goy Quiwe</td>
        </tr>
        <tr>
            <th width="30%">Tracking Number</th>
            <td id="track">HRIVQ-XY61L-GG7X3-TUVKF-MGX1I-XCRO5</td>
        </tr>
        <tr>
            <th width="30%">Status</th>
            <td id="status">Pending</td>
        </tr>
        <tr>
            <th width="30%">Reference</th>
            <td id="reference">N/A</td>
        </tr>
        <tr>
            <th width="30%">Purpose</th>
            <td id="purpose">N/A</td>
        </tr>
        <tr>
            <th width="30%">Payment Method</th>
            <td id="payment_method">CPU</td>
        </tr>
        <tr>
            <th width="30%">Type</th>
            <td id="want">CLEARANCE</td>
        </tr>
        <tr>
            <th width="30%">Resident ID</th>
            <td id="resident_id">2</td>
        </tr>
       
        <tr>
            <th width="30%">Created At</th>
            <td id="created_at">2024-12-01T04:00:41.000000Z</td>
        </tr>
        <tr>
            <th width="30%">Updated At</th>
            <td id="updated_at">2024-12-01T04:00:41.000000Z</td>
        </tr>
        <tr>
            <th width="30%">Zone Clearance</th>
            <td id="request_date">2024-12-01</td>
        </tr>
                    </table>
                </div>
                </div>
                </div>
                
                <div class="col-lg-18 col-span-3">
                <div class="card shadow-sm flex">
                <div align="center" class="card-header bg-transparent border-0">
                    <h3 class="mb-0">RESIDENT INFO</h3>
                </div>
                <div class="card-body col-lg-18 ">
                    <table id="household-info" class="table table-bordered">
                    <tr>
                        
                <th width="30%">Name</th>
                <td width="2%">:</td>
                <td id="nameve1">John</td>
            </tr>
            <tr>
                <th width="30%">Last Name</th>
                <td width="2%">:</td>
                <td id="lastnameve1">Tabios</td>
            </tr>
            <tr>
                <th width="30%">Middle Name</th>
                <td width="2%">:</td>
                <td id="middlenameve">Quiraban</td>
            </tr>
            <tr>
                <th width="30%">Alias</th>
                <td width="2%">:</td>
                <td id="aliasve">Pogi</td>
            </tr>
            <tr>
                <th width="30%">Birthday</th>
                <td width="2%">:</td>
                <td id="birthdayve1">2</td>
            </tr>
            <tr>
                <th width="30%">Age</th>
                <td width="2%">:</td>
                <td id="ageve"></td>
            </tr>
            <tr>
                <th width="30%">Place of Birth</th>
                <td width="2%">:</td>
                <td id="placeofbirthve"></td>
            </tr>
            <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td id="emailve">goy1@gmail.com</td>
            </tr>
            <tr>
                <th width="30%">Mother</th>
                <td width="2%">:</td>
                <td id="motherve">23</td>
            </tr>
            <tr>
                <th width="30%">Father</th>
                <td width="2%">:</td>
                <td id="fatherve">23</td>
            </tr>
            <tr>
                <th width="30%">Height</th>
                <td width="2%">:</td>
                <td id="heightve">53</td>
            </tr>
            <tr>
                <th width="30%">Weight</th>
                <td width="2%">:</td>
                <td id="weightve">23</td>
            </tr>
            <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td id="Genderve">Male</td>
            </tr>
            <tr>
                <th width="30%">Voter Status</th>
                <td width="2%">:</td>
                <td id="VoterStatusve">Canceled</td>
            </tr>
            <tr>
                <th width="30%">Civil Status</th>
                <td width="2%">:</td>
                <td id="CivilStatusve">Widowed</td>
            </tr>
            <tr>
                <th width="30%">Citizenship</th>
                <td width="2%">:</td>
                <td id="Citizenshipve">Filipino</td>
            </tr>
            <tr>
                <th width="30%">Telephone</th>
                <td width="2%">:</td>
                <td id="Telephoneve">222</td>
            </tr>
            <tr>
                <th width="30%">Mobile</th>
                <td width="2%">:</td>
                <td id="Mobileve">222</td>
            </tr>
            <tr>
                <th width="30%">Status</th>
                <td width="2%">:</td>
                <td id="statusve">Verified</td>
            </tr>
            <tr>
                <th width="30%">Purok</th>
                <td width="2%">:</td>
                <td id="purokve">P-4</td>
            </tr>
            <tr>
                <th width="30%">Disability</th>
                <td width="2%">:</td>
                <td id="desabilityve">None</td>
            </tr>
            <tr>
                <th width="30%">Created At</th>
                <td width="2%">:</td>
                <td id="cveated_atve">2024-11-29T07:50:09.000000Z</td>
            </tr>
            <tr>
                <th width="30%">Updated At</th>
                <td width="2%">:</td>
                <td id="updated_atve">2024-11-29T07:50:09.000000Z</td>
            </tr>   

            </table>
          </div>
          
        </div>
        </div>
        </div>  
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                <!-- <button data-modal-hide="extralargemodalinfo1" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="extralargemodalinfo1" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button> -->
            </div>
        </div>
    </div>
</div>
    <br>
    <div>
    <button hidden id="pressbth" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="hide focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add HouseHold</button>

    </div>

    <!-- ////start -table//// -->
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
<table class="tablemain sorting-table1 pagination-table" >
    <thead>
        <tr>
            <th>
                <span class="flex items-center">
                    name
                </span>
            </th>
            <th hidden>
                <span  class="flex items-center">
                    Date
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Services Type
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Gcash reference
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    purpose
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    action
                </span>
            </th>
        </tr>
    </thead>
    <tbody>
    <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        
    </tbody>
</table>
<div class="hidden blacksrs bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>
</div></div></div>
<script>
    document.querySelector('#simple-search').addEventListener('input', function() {
        displaPay();
});
if (document.querySelector(".sorting-table1") && typeof simpleDatatables.DataTable !== 'undefined') {
    const dataTable = new simpleDatatables.DataTable(".sorting-table1", {
        paging: true, 
        searchable: false,
        perPageSelect: false,
        sortable: true

    });
}


var paymentarray = [];
// DisdatabasePayment();
// function DisdatabasePayment(){
//     @foreach ($payment as $dispPay)
//     paymentarray.push({
//         'id' : {{$dispPay->id}},
//         'name': '{{$dispPay->name}}',
//         'date': '{{$dispPay->Request_date}}',
//         'clearance': '{{$dispPay->middlename}}',
//         'status': '{{$dispPay->Status}}',
//         'track': '{{$dispPay->track}}',
//         'want': '{{$dispPay->want}}',
//         'purpose': '{{$dispPay->purpose}}',
//         'reference': '{{$dispPay->reference}}',
//         'Status': '{{$dispPay->Status}}',
        
        
//     });

//     @endforeach
//     displaPay();
  
// }


function displaPay(){
    let serva = document.querySelector('#simple-search').value;
    let table = document.querySelector('.tablemain');
    table.querySelector('tbody').innerHTML="";
    
     for (let i = paymentarray.length- 1; i >= 0; i--) {
        if(paymentarray[i].Status == "Pending"){

            if(paymentarray[i].name.toLowerCase().startsWith(serva) || paymentarray[i].Request_date.toLowerCase().startsWith(serva) || paymentarray[i].want.toLowerCase().startsWith(serva) || paymentarray[i].reference.startsWith(serva) || categorizeResidentAge(paymentarray[i].purpose).toLowerCase().startsWith(serva)){

        table.querySelector('tbody').innerHTML +=`<tr>
            <td onclick="showinfo(${i},'${paymentarray[i].Resident_id}')" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">${paymentarray[i].name}</td>
            <td hidden onclick="showinfo(${i},'${paymentarray[i].Resident_id}')" >${paymentarray[i].Request_date}</td>
            <td onclick="showinfo(${i},'${paymentarray[i].Resident_id}')" >${paymentarray[i].want}</td>
            <td onclick="showinfo(${i},'${paymentarray[i].Resident_id}')">${paymentarray[i].reference}</td>
            <td onclick="showinfo(${i},'${paymentarray[i].Resident_id}')" >${paymentarray[i].purpose}</td>
            <td>
            <button  type="button" onclick="confirm('${paymentarray[i].id}','${paymentarray[i].Resident_id}')" class="btnupdate text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-5.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Confirm</button>
                    <button  type="button" onclick="cancel('${paymentarray[i].id}','${paymentarray[i].Resident_id}')" class="btndelete text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-5.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                        Cancel</button>
 
            </td>
        </tr>`;
        
    }
}  
     }
}

   function confirm(ids,residId){
    $.ajax({
        url: '/paymentapiconfirm',
        method: 'POST',
        data: {
            id : ids,
            Resident_id : residId
        },
        success: function(response) {
            insertdis();
          

        }
    });
    
};
function cancel(ids,residId){
    $.ajax({
        url: '/paymentapicancel',
        method: 'POST',
        data: {
            id: ids,
            Resident_id : residId
        },
        success: function(response) {
            insertdis();
          

        }
    });
    
};


function hideinfo() {
    $('#extralargemodalinfo1').hide();
    $('.blacksrs').hide();
    document.getElementById('linked').innerHTML ="";
   
}

function showinfo(ar,id) {

    // const val = ids;
    let linked =`<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>`
;
document.getElementById('linked').innerHTML =linked;
    $('#extralargemodalinfo1').show();
    $('.blacksrs').show();
    // document.getElementById('linked').innerHTML ="";
    modalshowInfo(ar,id);
    
   
}
function modalshowInfo(array,iduser1){
                $.ajax({
                    url: '{{ route("paymentGetInfo") }}', 
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {
                    personalInfo =response.resident;
                    paymentdatainfo =response.paymentdata;
                    let risedentid = iduser1 - 1;
                    const data = paymentdatainfo[array];
               
                    document.getElementById("user_idve").innerText = personalInfo[risedentid].user_id;
                        document.getElementById('picprofile').innerHTML =personalInfo[risedentid].profile == null ? `<img class="profile_img" src="https://ui-avatars.com/api/?name=${personalInfo[risedentid].name}&color=7F9CF5&background=EBF4FF" alt="studentg dp" style="width: 300px; height: 200px;">` : `<img class="profile_img" src="/storage/${personalInfo[risedentid].profile}" alt="student dp">`;
                        document.getElementById("nameve").innerText = personalInfo[risedentid].name;
                        document.getElementById("lastnameve").innerText = personalInfo[risedentid].lastname;
                        document.getElementById("nameve1").innerText = personalInfo[risedentid].name;
                        document.getElementById("lastnameve1").innerText = personalInfo[risedentid].lastname;
                        document.getElementById("middlenameve").innerText = personalInfo[risedentid].middlename;
                        document.getElementById("aliasve").innerText = personalInfo[risedentid].alias;
                        document.getElementById("birthdayve1").innerText = personalInfo[risedentid].birthday;
                        document.getElementById("ageve").innerText = personalInfo[risedentid].age;
                        document.getElementById("placeofbirthve").innerText = personalInfo[risedentid].placeofbirth;
                        document.getElementById("emailve").innerText = personalInfo[risedentid].email;
                        document.getElementById("motherve").innerText = personalInfo[risedentid].mother;
                        document.getElementById("fatherve").innerText = personalInfo[risedentid].father;
                        document.getElementById("heightve").innerText = personalInfo[risedentid].height;
                        document.getElementById("weightve").innerText = personalInfo[risedentid].weight;
                        document.getElementById("Genderve").innerText = personalInfo[risedentid].Gender;
                        document.getElementById("VoterStatusve").innerText = personalInfo[risedentid].VoterStatus;
                        document.getElementById("CivilStatusve").innerText = personalInfo[risedentid].CivilStatus;
                        document.getElementById("Citizenshipve").innerText = personalInfo[risedentid].Citizenship;
                        document.getElementById("Telephoneve").innerText = personalInfo[risedentid].Telephone;
                        document.getElementById("Mobileve").innerText = personalInfo[risedentid].Mobile;
                        document.getElementById("statusve").innerText = personalInfo[risedentid].status;
                        document.getElementById("purokve").innerText = personalInfo[risedentid].purok;
                        document.getElementById("desabilityve").innerText = personalInfo[risedentid].desability || "None";
                        document.getElementById("cveated_atve").innerText = personalInfo[risedentid].created_at;
                        document.getElementById("updated_atve").innerText = personalInfo[risedentid].updated_at;

                        document.getElementById("name").innerHTML = data.name;
                        document.getElementById("track").innerHTML = data.track;
                        document.getElementById("status").innerHTML = data.Status;
                        document.getElementById('request_date').innerHTML = data.Request_date == null ? `<img class="profile_img rounded-lg" src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" alt="studentg dp" style="width: 300px; height: 200px;">` : `<a href="/storage/${data.Request_date}" target="_blank" rel="noopener noreferrer"><img class="profile_img rounded-lg" src="/storage/${data.Request_date}" alt="student dp"></a>`;
                        document.getElementById("reference").innerHTML = data.reference ? data.reference : "N/A";
                        document.getElementById("purpose").innerHTML = data.purpose ? data.purpose : "N/A";
                        document.getElementById("payment_method").innerHTML = data.PaymentMethod;
                        document.getElementById("want").innerHTML = data.want;
                        document.getElementById("resident_id").innerHTML = data.Resident_id;
                        document.getElementById("created_at").innerHTML = data.created_at;
                        document.getElementById("updated_at").innerHTML = data.updated_at;

                   },beforeSend: function(xhr) {
                    $('#submitButton').prop('disabled', true);
                    displaPay();
                },error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }


insertdis();
    function insertdis(){
                $.ajax({
                    url: '{{ route("display.pay") }}', 
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {
                   
                     paymentarray =response;
                        displaPay();
                    },
                    error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }
</script>
</x-app-layout>