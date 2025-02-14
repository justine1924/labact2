<x-app-layout>
<div class="p-2 sm:ml-64">
   <div class="p-1 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <div class=" gap-8 p-4 max-w-md">

      <div>
<form id="logosetting" >
<label for="dropzone-file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logo</label>
<div class="flex items-center justify-center max-w-sm">
    <label for="dropzone-file" style="border:2px solid black;background: url('/storage/logo/logo.jpg');background-repeat: no-repeat;background-size: cover;background-position: center top;" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div id="preview-container" class="flex flex-col items-center h-auto justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload LOGO</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input id="dropzone-file" type="file" name="logoset" class="hidden" required />
    </label>
</div> 
<button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
    Save</button>
</form>
</div>
<div class="gap-8 mt-14">
<form id='gcashsetting' >
    
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div class="col-span-1 sm:col-span-1">
            <label for="gcashnumsetting"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gcash #number</label>
            <input type="number" id="gcashnumsetting" name="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Gcash number" required="true" />
        </div>
        <div class="col-span-1 sm:col-span-1">
            <label for="paymentsetting" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment</label>
            <input type="number" id="paymentsetting" name="pay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Payment" required />
        </div>
       
        <button id="btnewres" onclick="numberin()" type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        Save</button>

</form>

</div>
</div>
</div>
</div>
</x-app-layout>
<script>
   const phoneInput = document.getElementById("gcashnumsetting");
  const form = document.getElementById("phoneForm");

  phoneInput.addEventListener("input", () => {
    phoneInput.value = phoneInput.value.replace(/\D/g, '').slice(0, 11);
    if (phoneInput.value.length !== 11) {
      $('#btnewres').prop('disabled', true);
    }else{
        $('#btnewres').prop('disabled', false);
    }
  });

  function numberin(){
    if (phoneInput.value.length !== 11) {
        $('#btnewres').prop('disabled', true);
      alert("must be 11 degit!!!!!");
    }else{
        $('#btnewres').prop('disabled', false);
    }
  }
   
 

const dropzoneFile = document.getElementById('dropzone-file');
    const previewContainer = document.getElementById('preview-container');
    const defaultText = document.getElementById('default-text');

    dropzoneFile.addEventListener('change', function (event) {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                // Remove the default text and SVG
                previewContainer.innerHTML = '';

                // Create an image element and set the source
                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = 'Uploaded Image';
                img.className = 'w-full h-full object-contain rounded-lg';

                // Append the image to the preview container
                previewContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    });

    function serializeForm(form) {
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    return data;
}
$('#gcashsetting').submit(function(event) {
    event.preventDefault();

    var form = document.getElementById('gcashsetting');  
    var formData = new FormData(form);  
    console.log(formData);
    
    $.ajax({
        url: '/settingGcash',
        method: 'POST',
        data: formData,
        processData: false,  
        contentType: false,
        success: function(response) {
            console.log(response);
            alert("Succesfull changes");
            insertdis();
        }
    });
});

    $('#logosetting').submit(function(event) {
    event.preventDefault();

    var form = document.getElementById('logosetting');  
    var formData = new FormData(form);  
    console.log(formData);
    
    $.ajax({
        url: '/settinglogoupload',
        method: 'POST',
        data: formData,
        processData: false,  
        contentType: false,
        success: function(response) {
            console.log(response);
            alert("Succesfull changes");
            insertdis();
        }
    });
});

insertdis();
    function insertdis(){
                $.ajax({
                    url: '{{ route("settingall") }}', 
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {
                        document.getElementById("gcashnumsetting").value=response.gnumber;
                        document.getElementById("paymentsetting").value=response.pay;
                    },
                    error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }
</script>