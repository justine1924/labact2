<x-app-layout>
<style>
   .cardss{
    position: absolute;
  

    right: center;
    width:100vh;
   }
   #table-container {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.5s ease-out, transform 0.5s ease-out;
}

#table-container.show {
    opacity: 1;
    transform: translateY(0);
}
.fild{
    position: absolute;
    top:150;
    width: 100%;
    display: flex!important;
    justify-content: center!important;
    align-items: center!important;
    
}
.field2{
    display: flex!important;
    justify-content: center!important;
    align-items: center!important;
    width: 100%;
}
.pd{
    margin-top:20;
}
.headrd{
    position: relative;
    height: 40vh;
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
<div class=" headrd w-full bg-green-600">
<p>TRACK REQUEST</p>
    </div>
    
<div class="field2">
<div class="cardss max-w-2xl p-6 item-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<form id="form1"class="flex items-center max-w-2xl mx-auto">   
    <label for="search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z"/>
            </svg>
        </div>
        <input type="text" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX" required />
        <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z"/>
            </svg>
        </button>
    </div>
    <div  >
    </div>
    
    <button type="submit" id="submitButton" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    <div id="loadingSpinner" role="status"  style="display: none;">
    <svg aria-hidden="true" class="inline me-2 w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-green-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
    <span class="sr-only">Loading...</span>
</div>
    <svg id="iconhid" style="display: block;" class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>Search
    </button>
    
</form>

<!-- Hidden Table (Initially hidden) -->
<div id="table-container" class="show mt-5">
    <table id="tablesearch" class="min-w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left">Name</th>
                <th class="px-4 py-2 text-left">Service Type</th>
               
                <th class="px-4 py-2 text-left">Date Requested</th>
                <th class="px-4 py-2 text-left">Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td class="px-4 py-2">Row 1, Column 1</td>
                <td class="px-4 py-2">Row 1, Column 2</td>
                <td class="px-4 py-2">Row 1, Column 3</td>
            </tr> -->
        </tbody>
    </table>
</div>
<div id="validd" class="hidden" align='center'>sorry we cant find please check tract Id</div>
</div>
</div>
<script>
    document.querySelector('#form1').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
    
    // Show the table with animation
    const tableContainer = document.getElementById('table-container');
    tableContainer.classList.remove('hidden');
    tableContainer.classList.add('show');
});

    function serializeForm(form) {
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    return data;
}
arraytracker = [];

function display(){
    let table = document.querySelector('#tablesearch');
    table.querySelector('tbody').innerHTML="";
    
    for (let i = 0; i < arraytracker.length; i++) {
    table.querySelector('tbody').innerHTML +=`<tr>
                <td class="px-4 py-2">${arraytracker[i].name}</td>
                <td class="px-4 py-2">${arraytracker[i].want}</td>
                <td class="px-4 py-2">${arraytracker[i].created_at}</td>
                <td class="px-4 py-2">${arraytracker[i].Status == "Pending" ? `<span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">${arraytracker[i].Status}</span>` : `<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">${arraytracker[i].Status}</span>` }</td>
            </tr>`
        }
}
function skeleton(){
    let table = document.querySelector('#tablesearch');
    table.querySelector('tbody').innerHTML="";
    
    for (let i = 0; i < arraytracker.length; i++) {
    table.querySelector('tbody').innerHTML +=`<tr>
                <td class="px-4 py-2"><div class="flex items-center justify-between">
       
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
   </td>
                <td class="px-4 py-2"><div class="flex items-center justify-between">

        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
    </td>
                
                <td class="px-4 py-2"><div class="flex items-center justify-between">
        <div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
            <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
       
    </div></td>
                <td class="px-4 py-2"><div class="flex items-center justify-between">
        
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
    </div></td>
            </tr>`
        }
}
 $('#form1').submit(function(event) {
    event.preventDefault();
    var form = document.getElementById('form1');
    var formData = serializeForm(form);
    console.log(formData);
    $.ajax({
        url: '/searchtrack',
        method: 'POST',
        data: formData,
        success: function(response) {   
            arraytracker = [response];
            skeleton();
            setTimeout(function() {
                $('#loadingSpinner').hide();
                $('#iconhid').show();
                $('#submitButton').prop('disabled', false);
                let table = document.querySelector('#tablesearch');
            
            console.log(response);
            typeof arraytracker[0].name =="string" ? display() : table.querySelector('tbody').innerHTML="";
                
}, 3000);
            
            // document.getElementById("form1").reset();
            // window.location.href = "{{ config('app.url', 'Resident') }}/thankyou";
        },
        beforeSend: function(xhr) {
       
        $('#loadingSpinner').show();
        $('#iconhid').hide();
        
        
        $('#submitButton').prop('disabled', true);


        
        xhr.setRequestHeader("Authorization", "Bearer your-token-here");
    },
    });
});

insertdis();
    function insertdis(){
                $.ajax({
                    url: '{{ route("usertracker") }}', 
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {
                        arraytracker =response;
                        skeleton();
                        setTimeout(function() {
                        
                        display();
                    }, 2000);
                    },
                    beforeSend: function(xhr) {
                        
                        
                        
                        
                        xhr.setRequestHeader("Authorization", "Bearer your-token-here");
                    
                    },
                    error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }

</script>
</x-app-layout>