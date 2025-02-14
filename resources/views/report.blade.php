<x-app-layout>

  
<div id="extralarge-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Services Request
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="extralarge-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="mt-4 p-4 flex items-center justify-between gap-4 max-w-full ">
                

  <!-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label> -->
  <select onclick="insertdis()" id="servicestypeselect" class="max-w-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected value="" >All</option>
    <option  value="CLEARANCE">CLEARANCE</option>
    <option  value="CEDULA">CEDULA</option>
    <option  value="INDIGENCY">INDIGENCY</option>
  </select>


            <div class="relative max-w-sm">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
        </div>
        
        <input type="text" id="msimple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
    </div>
    </div>
   
<table id="search-table" class="tabletotal">
    <thead>
        <tr>
            <th>
                <span class="flex items-center">
                    Name
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Type
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    pay
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    total
                </span>
            </th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white"></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>


            </div>
            <!-- Modal footer -->
            <!-- <div class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="extralarge-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="extralarge-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div> -->
        </div>
        </div>

<div class="p-2 sm:ml-64">
   <div class="p-1 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <div class="">
      <button type="button" data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
      Services report</button>
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
<table id="default-table" class="table23">
    <thead>
        <tr>
            <th>
                <span class="flex items-center">
                    Select Report
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            <th data-type="date" data-format="YYYY/DD/MM">
                <span class="flex items-center">
                    Release Date & Time
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Download/printed
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
            </th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">BrgyClearance</td>
            <td>2021/25/09</td>
            <td><div class="w-12 justify-between flex "><a href="http://127.0.0.1:8000/generate-word" target="_blank" rel="noopener noreferrer"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
</svg></a>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
</svg></div></td>
        </tr>
        <tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">BrgyCertificate</td>
            <td>2021/25/09</td>
            <td><div class="w-12 justify-between flex "><a href="" target="_blank" rel="noopener noreferrer"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
</svg></a>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
</svg></div></td>
        </tr>
    </tbody>
</table>
</div></div></div>
<script>
    if (document.getElementById("search-table") && typeof simpleDatatables.DataTable !== 'undefined') {
    const dataTable = new simpleDatatables.DataTable("#search-table", {
        searchable: false,
        sortable: false,
        perPageSelect: false
    });
}
document.querySelector('#simple-search').addEventListener('input', function() {
    display();
});
document.querySelector('#msimple-search').addEventListener('input', function() {
    displaytotal();
});
if (document.getElementById("default-table") && typeof simpleDatatables.DataTable !== 'undefined') {
    const dataTable = new simpleDatatables.DataTable("#default-table", {
        searchable: false,
        perPageSelect: false
    });
}
let arrReport= [];
displayDatabase();
function displayDatabase(){
    
    @foreach ($report as $disRE)
    arrReport.push({
        "names" : "{{$disRE->name}}",
        "idli" : "{{$disRE->updated_at}}"
    });
    @endforeach
    display();
    
}
function display(){
    let serva = document.querySelector('#simple-search').value;
    
    let table1 = document.querySelector('.table23');
    table1.querySelector('tbody').innerHTML = "";
    
    for (let i = arrReport.length- 1; i >= 0; i--) {
        if(arrReport[i].names.toLowerCase().startsWith(serva) || arrReport[i].idli.toLowerCase().startsWith(serva)){

            table1.querySelector('tbody').innerHTML += `<tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">${arrReport[i].names}</td>
            <td>${arrReport[i].idli}</td>
            <td><div class="w-12 justify-between flex "><a href="http://127.0.0.1:8000/generate-word/${arrReport[i].names}" target="_blank" rel="noopener noreferrer"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
</svg></a>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
</svg></div></td>
        </tr>`;
        
    }
}
}






function displaytotal(){
    let serva = document.querySelector('#msimple-search').value;
    let table1 = document.querySelector('.tabletotal');
    table1.querySelector('tbody').innerHTML = "";
    for (let i = totalarr.length- 1; i >= 0; i--) {
        if(totalarr[i].want.toLowerCase().startsWith(serva) ){
            table1.querySelector('tbody').innerHTML += `<tr>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">${totalarr[i].name}</td>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">${totalarr[i].want}</td>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">100</td>
            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">${i == 0 ? totalarr[i].pay : i*totalarr[i].pay }</td>
        </tr>`;
}
}
}

let totalarr = [];
insertdis();
    function insertdis(){
                $.ajax({
                    url: '{{ route("Servicesreport") }}', 
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {
                        let service = document.querySelector('#servicestypeselect').value;
                   
                        const clearanceRequests = response.datainfo.filter(item => item.want === service);
                        if(service===""){
                            totalarr =response.datainfo;
                            console.log(service);
                        }else{
                            totalarr =clearanceRequests;
                            console.log(service);
                        }
                        
                       
                     
                        displaytotal();
                    },
                    error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }
</script>
</x-app-layout>