<x-app-layout>
<!DOCTYPE html>
<style>
     @tailwind base;
@tailwind components;
@tailwind utilities;
    body{
        background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
</style>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Resident Profile</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CDN -->
</head>

<body class="bg-gray-100">

<div id="processing" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full flex items-center justify-center h-screen top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button hidden type="button" class="hidden absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="processing">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center ">
                
            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Patience and trust in the process will lead to extraordinary results</h3>    
<div class="flex items-center justify-center w-full h-full rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700">

<div role="status">
        <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
        <span class="sr-only">Loading...</span>
    </div>
</div>
                <button type="button" onclick="closemodal()" class="mt-4 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Back</button>
            </div>
        </div>
    </div>
</div>


<div id="popupmodal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full flex items-center justify-center h-screen top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button hidden type="button" class="hidden absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popupmodal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Fill up your account details</h3>
                <button onclick="Gotoalert()" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Go to</button>
                <button onclick="closemodal()" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, Back</button>
            </div>
        </div>
    </div>
</div>




<!-- Main modal -->
<div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full flex items-center justify-center h-screen top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Verify Your Account
                </h3>
                <button type="button" onclick="closemodal()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
             <form id="verefiy">
            <div class="p-4 md:p-5 space-y-4">
            <div class="grid gap-4 mb-4 grid-cols-4">
            <div class="col-span-2">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <input value="{{ucfirst($verify->name)}}" type="text" name="name" id="name" class="bg-gray-50 border border-gray-700 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your name" required>
    </div>

    <!-- Date of Birth Input -->
    <div class="col-span-2">
        <label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
        <input value="{{ucfirst($verify->birthday)}}" type="date" name="dob" id="dob" class="bg-gray-50 border border-gray-700 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
    </div>

    <!-- Address Input -->
    <div class="col-span-2 ">
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
        <input value="{{ucfirst($verify->purok)}} {{ucfirst($verify->placeofbirth)}}" type="text" name="address" id="address" class="bg-gray-50 border border-gray-700 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your address" required>
    </div>

    <!-- Contact Number Input -->
    <div class="col-span-2 ">
        <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Number</label>
        <input value="{{ucfirst($verify->Mobile)}}" type="tel" name="contact" id="contact" class="bg-gray-50 border border-gray-700 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your contact number" required>
    </div>

    <!-- Email Address Input -->
    <div class="col-span-4 ">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
        <input value="{{ucfirst($verify->email)}}" type="email" name="email" id="email" class="bg-gray-50 border border-gray-700 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your email address" required>
    </div>
    <div class="col-span-4 ">
    <label for="Valididoption" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
  <select id="Valididoption" name="Valididoption" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
    <option selected disabled value="">Attach a clear copy of a valid ID </option>
    <option value="passport">passport</option>
    <option value="driverslicense">drivers license</option>
    <option value="nationalID">national ID</option>
  </select>
  </div>
  <div class="col-span-2 ">
  <input type="file" id="imageUpload" name="picimg" class="hidden" accept="image/*">
    
    <!-- Label to trigger file input and display image -->
    <label for="imageUpload" class="cursor-pointer">
        <img id="imagePreview" class="h-auto max-w-sm w-full rounded-lg" 
             src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" 
             alt="image description">
    </label>
    <p align="center">BACK</p>
</div>
<div class="col-span-2 ">
  <input type="file" id="imageUpload1" name="picimgback" class="hidden" accept="image/*">
    
    <!-- Label to trigger file input and display image -->
    <label for="imageUpload1" class="cursor-pointer">
        <img id="imagePreview1" class="h-auto max-w-sm w-full rounded-lg" 
             src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" 
             alt="image description">
    </label>
    <p align="center">FRONT</p>
</div>
                    </div>

                
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
            <x-button onclick="submitedvarit()" >
                {{ __('Submit') }}
            </x-button>
                <button onclick="closemodal()" data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">back</button>
            </div>
            
        </div>
        </form>
    </div>
</div>


<!-- end modal -->

    <div class="h-full bg-gray-200 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div x-data="{ openSettings: false }" class="absolute right-12 mt-4 rounded">
                <button @click="openSettings = !openSettings" class="border border-gray-400 p-2 rounded text-gray-300 hover:text-gray-300 bg-gray-100 bg-opacity-10 hover:bg-opacity-20" title="Settings">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                    </svg>
                </button>
                <div x-show="openSettings" @click.away="openSettings = false" class="bg-white absolute right-0 w-40 py-2 mt-1 border border-gray-200 shadow-2xl" style="display: none;">
                    <div class="py-2 border-b">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Settings</p>
                        <button class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                            <span class="text-sm text-gray-700">Share Profile</span>
                        </button>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
                            </svg>
                            <span class="text-sm text-gray-700">Block User</span>
                        </button>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-700">More Info</span>
                        </button>
                    </div>
                    <div class="py-2">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Feedback</p>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                            <span class="text-sm text-gray-700">Report</span>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="w-full rounded-tl-lg bg-green-900 h-[250px]">
                <!-- <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg" class="w-full h-full rounded-tl-lg rounded-tr-lg"> -->
            </div>
          
            <div class="flex flex-col items-center -mt-20">
           
@if(isset($verify->profile))
    <img src="/storage/{{ $verify->profile }}" class="w-40 h-40 border-4 border-white rounded-full">
@else
<img src="https://ui-avatars.com/api/?name={{ucfirst(mb_substr($verify->name, 0, 1))}}&color=7F9CF5&background=EBF4FF" class="w-40 h-40 border-4 border-white rounded-full">
@endif
<div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl">{{ucfirst($verify->name)}}</p>
                    <?php if($verify->status !=="Verified"){ ?>
                    
                    <!-- <button  onclick="modalverify()" data-popover-target="popover-description" class="w-10 h-5 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
Verify
</span>
</button> -->
<?php }else{ ?>
    <span class="bg-blue-500 rounded-full p-1" title="Verified">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </span>
    <?php } ?>
                    
                </div>
                <p class="text-gray-700">Senior Software Engineer at Tailwind CSS</p>
                <p class="text-sm text-gray-500">New York, USA</p>
            </div>
            <div class="flex-1 flex flex-col items-center lg:items-end justify-end px-8 mt-2">
                <div class="flex items-center space-x-4 mt-2">
                <?php if($verify->status !=="Verified"){ ?>
                    <button  onclick="modalverify()" data-popover-target="popover-description" class="max-w-md h-auto relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
Verify
</span>
</button>
                    <?php } ?>
                    <!-- <button class="flex items-center bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                        </svg>
                        <span></span>
                    </button> -->
                    <!-- <button class="flex items-center bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Edit</span>
                    </button> -->
                </div>
            </div>
        </div>

        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl flex text-gray-900 font-bold">Personal Info <a href="{{ config('app.url', 'HouseHold') }}/formPersonal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square ml-2 mt-2" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a></h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Full name:</span>
                            <span class="text-gray-700">{{ucfirst($verify->name)}} {{ucfirst(mb_substr($verify->middlename, 0, 1))}}. {{ucfirst($verify->lastname)}} </span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Birthday:</span>
                            <span class="text-gray-700">{{ucfirst($verify->birthday)}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Gender:</span>
                            <span class="text-gray-700">{{ucfirst($verify->Gender)}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Mobile:</span>
                            <span class="text-gray-700">{{ucfirst($verify->Mobile)}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Email:</span>
                            <span class="text-gray-700">{{ucfirst($verify->email)}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Location:</span>
                            <span class="text-gray-700">{{ucfirst($verify->purok)}} {{ucfirst($verify->placeofbirth)}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Civil Status:</span>
                            <span class="text-gray-700">{{ucfirst($verify->CivilStatus)}}</span>
                        </li>
                        <li class="flex items-center border-b py-2 space-x-2">
                            <span class="font-bold w-24">Elsewhere:</span>
                            <a href="#" title="Facebook">
                                <svg class="w-5 h-5" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.86 506.86"><defs><style>.cls-1{fill:#1877f2;}.cls-2{fill:#fff;}</style></defs><path class="cls-1" d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z"></path><path class="cls-2" d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z"></path></svg>
                            </a>
                            <a href="#" title="Twitter">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm90493 110539c-6654 2976-13822 4953-21307 5835 7669-4593 13533-11870 16333-20535-7168 4239-15133 7348-23574 9011-6787-7211-16426-11694-27105-11694-20504 0-37104 16610-37104 37101 0 2893 320 5722 949 8450-30852-1564-58204-16333-76513-38806-3285 5666-5022 12109-5022 18661v4c0 12866 6532 24246 16500 30882-6083-180-11804-1876-16828-4626v464c0 17993 12789 33007 29783 36400-3113 845-6400 1313-9786 1313-2398 0-4709-247-7007-665 4746 14736 18448 25478 34673 25791-12722 9967-28700 15902-46120 15902-3006 0-5935-184-8860-534 16466 10565 35972 16684 56928 16684 68271 0 105636-56577 105636-105632 0-1630-36-3209-104-4806 7251-5187 13538-11733 18514-19185l17-17-3 2z" fill="#1da1f2"></path></svg>
                            </a>
                            <a href="#" title="LinkedIn">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z" fill="#0077b5"></path></svg>
                            </a>
                            <a href="#" title="Github">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="0" height="0" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640"><path d="M319.988 7.973C143.293 7.973 0 151.242 0 327.96c0 141.392 91.678 261.298 218.826 303.63 16.004 2.964 21.886-6.957 21.886-15.414 0-7.63-.319-32.835-.449-59.552-89.032 19.359-107.8-37.772-107.8-37.772-14.552-36.993-35.529-46.831-35.529-46.831-29.032-19.879 2.209-19.442 2.209-19.442 32.126 2.245 49.04 32.954 49.04 32.954 28.56 48.922 74.883 34.76 93.131 26.598 2.882-20.681 11.15-34.807 20.315-42.803-71.08-8.067-145.797-35.516-145.797-158.14 0-34.926 12.52-63.485 32.965-85.88-3.33-8.078-14.291-40.606 3.083-84.674 0 0 26.87-8.61 88.029 32.8 25.512-7.075 52.878-10.642 80.056-10.76 27.2.118 54.614 3.673 80.162 10.76 61.076-41.386 87.922-32.8 87.922-32.8 17.398 44.08 6.485 76.631 3.154 84.675 20.516 22.394 32.93 50.953 32.93 85.879 0 122.907-74.883 149.93-146.117 157.856 11.481 9.921 21.733 29.398 21.733 59.233 0 42.792-.366 77.28-.366 87.804 0 8.516 5.764 18.473 21.992 15.354 127.076-42.354 218.637-162.274 218.637-303.582 0-176.695-143.269-319.988-320-319.988l-.023.107z"></path></svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl flex text-gray-900 font-bold">Member Info <a href="{{ config('app.url', 'HouseHold') }}/AddMemberHouseHold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square ml-2 mt-2" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a></h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Name:</span>
                            <span class="text-gray-700">{{ucfirst($verify->name)}} {{ucfirst(mb_substr($verify->middlename, 0, 1))}}. {{ucfirst($verify->lastname)}} </span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Birthday:</span>
                            <span class="text-gray-700">{{ucfirst($verify->birthday)}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Gender:</span>
                            <span class="text-gray-700">{{ucfirst($verify->Gender)}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Mobile:</span>
                            <span class="text-gray-700">{{ucfirst($verify->Mobile)}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Email:</span>
                            <span class="text-gray-700">{{ucfirst($verify->email)}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Location:</span>
                            <span class="text-gray-700">{{ucfirst($verify->purok)}} {{ucfirst($verify->placeofbirth)}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Civil Status:</span>
                            <span class="text-gray-700">{{ucfirst($verify->CivilStatus)}}</span>
                        </li>
                        <li class="flex items-center border-b py-2 space-x-2">
                            <span class="font-bold w-24">Elsewhere:</span>
                            <a href="#" title="Facebook">
                                <svg class="w-5 h-5" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.86 506.86"><defs><style>.cls-1{fill:#1877f2;}.cls-2{fill:#fff;}</style></defs><path class="cls-1" d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z"></path><path class="cls-2" d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z"></path></svg>
                            </a>
                            <a href="#" title="Twitter">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm90493 110539c-6654 2976-13822 4953-21307 5835 7669-4593 13533-11870 16333-20535-7168 4239-15133 7348-23574 9011-6787-7211-16426-11694-27105-11694-20504 0-37104 16610-37104 37101 0 2893 320 5722 949 8450-30852-1564-58204-16333-76513-38806-3285 5666-5022 12109-5022 18661v4c0 12866 6532 24246 16500 30882-6083-180-11804-1876-16828-4626v464c0 17993 12789 33007 29783 36400-3113 845-6400 1313-9786 1313-2398 0-4709-247-7007-665 4746 14736 18448 25478 34673 25791-12722 9967-28700 15902-46120 15902-3006 0-5935-184-8860-534 16466 10565 35972 16684 56928 16684 68271 0 105636-56577 105636-105632 0-1630-36-3209-104-4806 7251-5187 13538-11733 18514-19185l17-17-3 2z" fill="#1da1f2"></path></svg>
                            </a>
                            <a href="#" title="LinkedIn">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z" fill="#0077b5"></path></svg>
                            </a>
                            <a href="#" title="Github">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="0" height="0" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640"><path d="M319.988 7.973C143.293 7.973 0 151.242 0 327.96c0 141.392 91.678 261.298 218.826 303.63 16.004 2.964 21.886-6.957 21.886-15.414 0-7.63-.319-32.835-.449-59.552-89.032 19.359-107.8-37.772-107.8-37.772-14.552-36.993-35.529-46.831-35.529-46.831-29.032-19.879 2.209-19.442 2.209-19.442 32.126 2.245 49.04 32.954 49.04 32.954 28.56 48.922 74.883 34.76 93.131 26.598 2.882-20.681 11.15-34.807 20.315-42.803-71.08-8.067-145.797-35.516-145.797-158.14 0-34.926 12.52-63.485 32.965-85.88-3.33-8.078-14.291-40.606 3.083-84.674 0 0 26.87-8.61 88.029 32.8 25.512-7.075 52.878-10.642 80.056-10.76 27.2.118 54.614 3.673 80.162 10.76 61.076-41.386 87.922-32.8 87.922-32.8 17.398 44.08 6.485 76.631 3.154 84.675 20.516 22.394 32.93 50.953 32.93 85.879 0 122.907-74.883 149.93-146.117 157.856 11.481 9.921 21.733 29.398 21.733 59.233 0 42.792-.366 77.28-.366 87.804 0 8.516 5.764 18.473 21.992 15.354 127.076-42.354 218.637-162.274 218.637-303.582 0-176.695-143.269-319.988-320-319.988l-.023.107z"></path></svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Activity log</h4>
                    <div class="relative px-4">
                        <div class="absolute h-full border border-dashed border-opacity-20 border-secondary"></div>

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Profile informations changed.</p>
                                <p class="text-xs text-gray-500">3 min ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">
                                    Connected with <a href="#" class="text-blue-600 font-bold">?</a>.</p>
                                <p class="text-xs text-gray-500">15 min ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Invoice <a href="#" class="text-blue-600 font-bold">#4563</a> was created.</p>
                                <p class="text-xs text-gray-500">57 min ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">
                                    Message received from <a href="#" class="text-blue-600 font-bold">?</a>.</p>
                                <p class="text-xs text-gray-500">1 hour ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">New order received <a href="#" class="text-blue-600 font-bold">#OR9653</a>.</p>
                                <p class="text-xs text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">
                                    Message received from <a href="#" class="text-blue-600 font-bold">?</a>.</p>
                                <p class="text-xs text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->
                    </div>
                </div>
            </div>
            <div hidden class="hidden flex flex-col w-full 2xl:w-2/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-900 font-bold">About</h4>
                    <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptates obcaecati numquam error et ut fugiat asperiores. Sunt nulla ad incidunt laboriosam, laudantium est unde natus cum numquam, neque facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magni odio magnam commodi sunt ipsum eum! Voluptas eveniet aperiam at maxime, iste id dicta autem odio laudantium eligendi commodi distinctio!</p>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Statistics</h4>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-4">
                        <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-sm text-indigo-600">Total Revenue</span>
                                <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">7 days</span>
                            </div>
                            <div class="flex items-center justify-between mt-6">
                                <div>
                                    <svg class="w-12 h-12 p-2.5 bg-indigo-400 bg-opacity-20 rounded-full text-indigo-600 border border-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-end">
                                        <span class="text-2xl 2xl:text-3xl font-bold">$8,141</span>
                                        <div class="flex items-center ml-2 mb-1">
                                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                            <span class="font-bold text-sm text-gray-500 ml-0.5">3%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-sm text-green-600">New Orders</span>
                                <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">7 days</span>
                            </div>
                            <div class="flex items-center justify-between mt-6">
                                <div>
                                    <svg class="w-12 h-12 p-2.5 bg-green-400 bg-opacity-20 rounded-full text-green-600 border border-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-end">
                                        <span class="text-2xl 2xl:text-3xl font-bold">217</span>
                                        <div class="flex items-center ml-2 mb-1">
                                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                            <span class="font-bold text-sm text-gray-500 ml-0.5">5%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-sm text-blue-600">New Connections</span>
                                <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">7 days</span>
                            </div>
                            <div class="flex items-center justify-between mt-6">
                                <div>
                                    <svg class="w-12 h-12 p-2.5 bg-blue-400 bg-opacity-20 rounded-full text-blue-600 border border-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-end">
                                        <span class="text-2xl 2xl:text-3xl font-bold">54</span>
                                        <div class="flex items-center ml-2 mb-1">
                                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                            <span class="font-bold text-sm text-gray-500 ml-0.5">7%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <canvas id="verticalBarChart" style="display: block; box-sizing: border-box; height: 414px; width: 828px;" width="1656" height="828"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="bg-white rounded-lg shadow-xl p-8">
            <div class="flex items-center justify-between">
                <h4 class="text-xl text-gray-900 font-bold">Connections (532)</h4>
                <a href="#" title="View All">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-8 gap-8 mt-8">
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection1.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Diane Aguilar</p>
                    <p class="text-xs text-gray-500 text-center">UI/UX Design at Upwork</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection2.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Frances Mather</p>
                    <p class="text-xs text-gray-500 text-center">Software Engineer at Facebook</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection3.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Carlos Friedrich</p>
                    <p class="text-xs text-gray-500 text-center">Front-End Developer at Tailwind CSS</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection4.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Donna Serrano</p>
                    <p class="text-xs text-gray-500 text-center">System Engineer at Tesla</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection5.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Randall Tabron</p>
                    <p class="text-xs text-gray-500 text-center">Software Developer at Upwork</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection6.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">John McCleary</p>
                    <p class="text-xs text-gray-500 text-center">Software Engineer at Laravel</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection7.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Amanda Noble</p>
                    <p class="text-xs text-gray-500 text-center">Graphic Designer at Tailwind CSS</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection8.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Christine Drew</p>
                    <p class="text-xs text-gray-500 text-center">Senior Android Developer at Google</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection9.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Lucas Bell</p>
                    <p class="text-xs text-gray-500 text-center">Creative Writer at Upwork</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection10.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Debra Herring</p>
                    <p class="text-xs text-gray-500 text-center">Co-Founder at Alpine.js</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection11.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Benjamin Farrior</p>
                    <p class="text-xs text-gray-500 text-center">Software Engineer Lead at Microsoft</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection12.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Maria Heal</p>
                    <p class="text-xs text-gray-500 text-center">Linux System Administrator at Twitter</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection13.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Edward Ice</p>
                    <p class="text-xs text-gray-500 text-center">Customer Support at Instagram</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection14.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Jeffery Silver</p>
                    <p class="text-xs text-gray-500 text-center">Software Engineer at Twitter</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection15.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Jennifer Schultz</p>
                    <p class="text-xs text-gray-500 text-center">Project Manager at Google</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600" title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection16.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Joseph Marlatt</p>
                    <p class="text-xs text-gray-500 text-center">Team Lead at Facebook</p>
                </a>
            </div>
        </div> -->
        </div>
        <div class="hidden blacksrs bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>
   



<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
    </div>
</footer>



</body>

</html>
<script>

const DATA_SET_VERTICAL_BAR_CHART_1 = [68.106, 26.762, 94.255, 72.021, 74.082, 64.923, 85.565, 32.432, 54.664, 87.654, 43.013, 91.443];

const labels_vertical_bar_chart = ['January', 'February', 'Mart', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October', 'November', 'December'];

const dataVerticalBarChart= {
    labels: labels_vertical_bar_chart,
    datasets: [
        {
            label: 'Revenue',
            data: DATA_SET_VERTICAL_BAR_CHART_1,
            borderColor: 'rgb(54, 162, 235)',
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
        }
    ]
};
const configVerticalBarChart = {
    type: 'bar',
    data: dataVerticalBarChart,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Last 12 Months'
            }
        }
    },
};

var verticalBarChart = new Chart(
    document.getElementById('verticalBarChart'),
    configVerticalBarChart
);
</script>

<script>
// Get the file input and the image preview element
$('#imageUpload1').change(function(event) {
        const file = event.target.files[0];  // Get the selected file
        if (file) {
            const reader = new FileReader();  // Create a new FileReader instance
            
            // When file is successfully read
            reader.onload = function(e) {
                $('#imagePreview1').attr('src', e.target.result);  // Update image src
            };
            
            // Read the selected file as a data URL
            reader.readAsDataURL(file);
        }
    });
// Get the file input and the image preview element
$('#imageUpload').change(function(event) {
        const file = event.target.files[0];  // Get the selected file
        if (file) {
            const reader = new FileReader();  // Create a new FileReader instance
            
            // When file is successfully read
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result);  // Update image src
            };
            
            // Read the selected file as a data URL
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







if(!"{{$hasEmptyFields}}"){
    if("{{$verify->status}}"!=="Verified"){
        setTimeout(function() {
            if("{{count($checking)==1}}"){
    $('#processing').show();
$('.blacksrs').show();
}else{
    $('#static-modal').show();
    $('.blacksrs').show();
}
},5000)
    }
    
}else{
    setTimeout(function() {
        $('#popupmodal').show();
    $('.blacksrs').show();
    },2000)
    
}


function Gotoalert() {
    $('#popupmodal').hide();
    $('.blacksrs').hide();
    window.location.href = "{{ config('app.url', 'Resident') }}/formPersonal";
}

function modalverify() {
    if("{{count($checking)==1}}"){
    $('#processing').show();
$('.blacksrs').show();
}else{
    $('#static-modal').show();
    $('.blacksrs').show();
}
    
}
function submitedvarit(){
    let valid = document.getElementById('Valididoption');
    if(valid.value!==""){
    $('#static-modal').hide();
    $('.blacksrs').hide();
    }
}
function closemodal() {
    $('#static-modal').hide();
    $('#popupmodal').hide();
    $('#processing').hide();
    $('.blacksrs').hide();
   
}

$('#verefiy').submit(function(event) {
    event.preventDefault();  // Prevent the default form submission

    var form = document.getElementById('verefiy');  // Get the form element
    var formData = new FormData(form);  // Create a FormData object from the form

    console.log(formData);  // Log the FormData to check if it's correct

    // Send the form data via AJAX
    $.ajax({
        url: '/verfying',  // Your server endpoint
        method: 'POST',  // Request method
        data: formData,  // Send the FormData object directly
        processData: false,  // Do not process data (because FormData handles it)
        contentType: false,  // Do not set content type (FormData will set it correctly)
        success: function(response) {
            console.log(response);  // Handle successful response
            // Reset the form if needed: document.getElementById("verefiy").reset();
            // Redirect after success: window.location.href = "/thankyou";
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);  // Handle errors
        }
    });
});


           </script>       
</x-app-layout>