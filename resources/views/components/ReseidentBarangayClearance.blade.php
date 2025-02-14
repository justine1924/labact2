
<!-- Modal toggle -->
<button hidden data-modal-target="BarangayCCert" data-modal-toggle="BarangayCCert" class="" type="button">
  Toggle modal
</button>

<!-- Main modal -->
<div id="BarangayCCert" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 ">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                BarangayClearance/Certificate
                </h3>
                <button onclick="closebla()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="BarangayCCert">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <x-ResedentDrawer />
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="grid gap-4 mb-4 grid-cols-2">
                <fieldset class="col-span-2 border border-gray-800 p-4 w-full max-w-2xl max-h-full">
                    <legend class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Manage Brgy Clearance</legend>
                    <a href="\storage\brgCrcrf\clearance.png" target="_blank" class="text-white w-full h-3 bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">View Clearance</a>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="CDI" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clearance Date Issue</label>
                        <input type="date" name="CDI" id="CDI" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="OrNu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">OR Number</label>
                        <input type="text" name="OrNu" id="OrNu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1234" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="OrDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Or Date</label>
                        <input type="date" name="OrDate" id="OrDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1234" required="">
                    </div>
                    </fieldset>
                    
                    </div>
                    

                    <div class="grid gap-4 mb-4 grid-cols-2">
                    <fieldset class="col-span-2 border border-gray-800 p-4 w-full max-w-2xl max-h-full">
                        
                    <legend class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Manage Brgy Certification</legend>
                    <a href="\storage\brgCrcrf\certificate.png" target="_blank" class="text-white w-full h-3 bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">View Certification</a>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="datef" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Certification Date Issue</label>
                        <input type="date" name="datef" id="datef" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Date Issue" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rest. Cert. No</label>
                        <input type="text" name="restcn" id="restcn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Rest. Cert. No" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="IssueAt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Issued at</label>
                        <input type="text" name="IssueAt" id="IssueAt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Issued" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="IssueOn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Issued On</label>
                        <input type="IssueOn" name="price" id="IssueOn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Issued" required="">
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Purpose</label>
                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Purpose"></textarea>                    
                    </div>
                    </fieldset>
                    </div>
                </div>
                <!-- <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add new product
                </button> -->
            </form>
        </div>
    </div>
    <x-side_bar_button />
</div> 


<script>
    
  
</script>