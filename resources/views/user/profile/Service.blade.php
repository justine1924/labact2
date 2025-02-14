<style>
.fild{
    position: absolute;
    top:150;
    width: 100%;
    display: flex!important;
    justify-content: center!important;
    align-items: center!important;
    
}
.pd{
    margin-top:20;
}
.headrd{
    position: relative;
    height: 40%;
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
<x-app-layout>


<!-- Modal toggle -->


<!-- Main modal -->
<div id="staticmodal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full flex items-center justify-center h-screen top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Not Verify
                </h3>
                <button hidden type="button" class="hidden text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticmodal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Please fill up first form all requirement and Be guided Godbless   
                </p>
                
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button onclick="close1()"  type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Verify</button>
                <button onclick="back()"  type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Home</button>
            </div>
        </div>
    </div>
</div>


    <div class=" headrd w-full bg-green-600">
<p>ONLINE DOCUMENT OFFERED</p>
    </div>
<div  class="z-35 grid fild gap-6 mb-4 grid-cols-1">
  
                

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="logoserv">
    <a href="#">
    <img class="w-20 h-20 rounded-full" src="\storage\servecelogo\img.jpg" alt="Rounded avatar">
    </a>
    </div>
    <div class="centd p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BARANGAY CLEARANCE</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">View the requirement applied clearance now.</p>
        <?php
         
        ?>
        <a <?=$verifycheck->varified == "Pending"? 'on' : ''?>click="modalshowvarify()" <?=$verifycheck->varified == "Pending"? '' : 'hre'?>f="{{ config('app.url', 'Resident') }}/PayServices/CLEARANCE" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            PROCEED
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="logoserv">
    <a href="#">
    <img class="w-20 h-20 rounded-full" src="\storage\servecelogo\img.jpg" alt="Rounded avatar">
    </a>
    </div>
    <div class="centd p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BARANGAY CEDULA</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">View the requirement applied Cedula now.</p>
        <a <?=$verifycheck->varified == "Pending"? 'on' : ''?>click="modalshowvarify()" <?=$verifycheck->varified == "Pending"? '' : 'hre'?>f="{{ config('app.url', 'Resident') }}/PayServices/CEDULA" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            PROCEED
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="logoserv">
    <a href="#">
    <img class="w-20 h-20 rounded-full" src="\storage\servecelogo\img.jpg" alt="Rounded avatar">
    </a>
    </div>
    <div class="centd p-5">
        <a href="#">
            <h5  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BARANGAY INDIGENCY</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">View the requirement applied Indigency now.</p>
        <a <?=$verifycheck->varified == "Pending"? 'on' : ''?>click="modalshowvarify()" <?=$verifycheck->varified == "Pending"? '' : 'hre'?>f="{{ config('app.url', 'Resident') }}/PayServices/INDIGENCY" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            PROCEED
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>

    
</div>
                 
                    </div>
                    <div class="hidden blacksrs bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>
               <script>
                function modalshowvarify() {
                    $('#staticmodal').show();
                    $('.blacksrs').show();
                }
                function  back() {
                    $('#staticmodal').hide();
                    $('.blacksrs').hide();
                    
                }
                function close1() {
                    $('#staticmodal').hide();
                    $('.blacksrs').hide();
                    window.location.href = "{{ config('app.url', 'Resident') }}/Residentp/{{Auth::user()->email}}";
                }
               </script>
                    
</x-app-layout>