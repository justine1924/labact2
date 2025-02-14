

<!-- Modal toggle -->
<button hidden data-modal-target="DocumentAttachment" data-modal-toggle="DocumentAttachment" class="" type="button">
  Toggle modal
</button>

<!-- Main modal -->
<div id="DocumentAttachment" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 ">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Document Attachment
                
                </h3>
                <button onclick="closebla()" data-bs-dismiss="DocumentAttachment" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="DocumentAttachment">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
             



             
            <x-ResedentDrawer />
            
            <form class="p-4 md:p-5">
            <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            
                <th  class="px-6 py-3">
                    Document name
                </th>
                <th  class="px-6 py-3">
                    Description
                </th>
                <th  class="px-6 py-3">
                    Path ( Dbl-Click Box To Select File )
                </th>
                <th  class="px-6 py-3">
                    Click to Open
                </th>
            
        </thead>
        
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    doko
                </td>
                <td class="px-6 py-4">
                    note
                </td>
                <td class="px-6 w-2 py-4">
                    /df/d//addddd
                </td>
                <td class="px-6 py-4">
                <button onclick="alert('ok')" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
Open!
</span>
</button>
                </td>
            </tr>
            
            

    </table>
</div>
            </form>
        </div>
    </div>
    <x-side_bar_button />
</div> 


<script>
    
  
</script>