<x-app-layout>
 <style>
    
    .card1{
        height: 40vh;
        width: 50vh;
    }
 </style>
 
<div class="p-6 flex gap-12">


<div class="card1  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="\storage\servecelogo\pay.jpg" alt="" />
    </a>
    <div class="p-1">
        <div class="p-1 gap-2 flex">
    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">Fees: {{$pay}}</span>
                    </div>
                    <div class="p-1 gap-2 flex">
    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">Gcash# {{$gnumber}}</span>
                    </div>
    </div>
</div>
<div class="formfilesd relative w-full max-w-2xl max-h-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<!-- Modal header -->
<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 id="tittle" class="text-lg font-semibold text-gray-900 dark:text-white">
                    BARANGAY {{$type}}
                </h3>
                </div>
<form id="payment" class="p-4 md:p-5" >
                <div class="grid gap-4 mb-4 grid-cols-2">
                <input hidden readOnly type="text" value="{{$type}}" name="want" id="want" class="hide" placeholder="">
                    
                    <div class="col-span-2">
                        <label for="track" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tracking code</label>
                        <input readOnly type="text" name="track" id="track" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tracking devices" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                        <input value="{{ucfirst($resedent->lastname)}} {{ucfirst($resedent->name)}} {{ucfirst($resedent->middlename)}}" type="text" name="fname" id="fname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your name" required="">
                    </div>
                    <div class="col-span-2">
    <label for="myimg" class="block mb-2 text-sm text-center font-medium text-gray-900 dark:text-white">
        Zone Clearance
        <img id="preview-image" class="h-auto max-w-lg mx-auto" src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" alt="image description">
    </label>
    <!-- Initially hidden file input -->
   <input type="file" name="myimg" id="myimg" class="hidden" accept="image/*">
</div>
                    

                    <div class="col-span-2 sm:col-span-1">
                        <label for="pmethod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Method</label>
                        <select onclick="gcash()" id="pmethod" name="pmethod" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                            <option selected value="" disabled>Select payment Method</option>
                            <option value="CPU">Cash on Pick-up</option>
                            <option value="gcash">Gcash</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="refer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reference No(for Gcash Payment Only)</label>
                        <input type="text" name="refer" id="refer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter Gcash Reference No">
                    </div>
                    
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Purpose</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write Purpose here"></textarea>                    
                    </div>
                </div>
           
                <x-button>
                {{ __('Submit') }}
            </x-button>
            </form>
            </div>
</div>
<script>
   $('#myimg').on('change', function(event) {
    var fileInput = event.target;
    var file = fileInput.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            // Uppicsd the image src with the selected image
            $('#preview-image').attr('src', e.target.result);
        };
        reader.readAsDataURL(file);
    }
});
</script>
<script>




    function generateCode() {
  let code = '';
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    
  // Generate 6 groups of 5 characters
  for (let i = 0; i < 6; i++) {
    let group = '';
    for (let j = 0; j < 5; j++) {
      const randomIndex = Math.floor(Math.random() * characters.length);
      group += characters[randomIndex];
    }
    code += group;
    if (i < 5) code += '-';  // Add a dash after each group except the last one
  }

  return code;
}

// Generate and log the code to the console
console.log(generateCode());
document.querySelector('#track').value = generateCode();

function serializeForm(form) {
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    return data;
}
gcash();
function gcash(){
    var form = document.getElementById('payment');
    var formData = serializeForm(form);
    if(formData.pmethod=="gcash"){
        document.getElementById('refer').removeAttribute("disabled");
        document.getElementById('refer').setAttribute("required", "");
        document.getElementById('refer').placeholder="Enter Gcash Reference No";
    }else{
        document.getElementById('refer').setAttribute("disabled", "true");
        document.getElementById('refer').removeAttribute("required");
        document.getElementById('refer').value="";
        document.getElementById('refer').placeholder="N/A";
    }
    
}

 $('#payment').submit(function(event) {
    event.preventDefault();

    var form = document.getElementById('payment');  // Get the form element
    var formData = new FormData(form);  // Create a FormData object from the form
    console.log(formData);
    
    $.ajax({
        url: '/PayServicesRequest',
        method: 'POST',
        data: formData,
        processData: false,  // Do not process the data
        contentType: false, // Don't process the data, let FormData handle it
        success: function(response) {
            console.log(response);
            document.getElementById("payment").reset();
            window.location.href = "{{ config('app.url', 'Resident') }}/thankyou";
        }
    });
});



</script>
</x-app-layout>
