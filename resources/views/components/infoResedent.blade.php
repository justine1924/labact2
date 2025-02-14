

<!-- Modal toggle -->
<button hidden data-modal-target="default-modal" data-modal-toggle="default-modal" class="" type="button">
  Toggle modal
</button>

<!-- Main modal -->
<div id="default-modal"  tabindex="-1" aria-hidden="true" class="mdlinfo hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

<div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Profile Info
                </h3>
                <button onclick="closebla()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
           
            <x-ResedentDrawer />




            <div class="p-4 md:p-5 space-y-4">
            <div class="p-16">

  <div class="grid grid-cols-1 md:grid-cols-3">
    <div class="grid grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
      <div>
        <p class="font-bold text-gray-700 text-xl">22</p>
        <p class="text-gray-400">Friends</p>
      </div>
      <div>
           <p class="font-bold text-gray-700 text-xl">10</p>
        <p class="text-gray-400">Photos</p>
      </div>
          <div>
           <p class="font-bold text-gray-700 text-xl">89</p>
        <p class="text-gray-400">Comments</p>
      </div>
    </div>
    <div class="relative">
      <div class="infopf w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl relative inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">

      </div>
    </div>

    <div class="hidden absolute w-full space-x-8 justify-between flex mt-32 md:mt-0 md:justify-center">
        <div></div>
        <div class=" space-x-8">
<button
  class="text-white py-2 px-4 uppercase rounded bg-blue-400 hover:bg-blue-500 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5"
>
  Connect
</button>
    <button
  class="text-white py-2 px-4 uppercase rounded bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5"
>
  Message
</button>
</div>
    </div>
  </div>

  <div class="py-20 px-20 mt-20 text-center border-b pb-12">
    <h1  class="text-4xl font-medium text-gray-700"><span id="ipfirstname" class="text-gray-900 dark:text-white">Jessica</span> <span id="iplastname" class="text-gray-900 dark:text-white">Jones</span>, <span id="ipage" class="font-light text-gray-500">27</span></h1>
    <p class="font-light text-gray-600 mt-3">Bucharest, Romania</p>

    <p class="mt-8 text-gray-500">Solution Manager - Creative Tim Officer</p>
    <p class="mt-2 text-gray-500">University of Computer Science</p>
  </div>

  <!-- <div class="mt-12 flex flex-col justify-center">
    <p class="text-gray-600 text-center font-light lg:px-16">An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p>
    <button
  class="text-indigo-500 py-2 px-4  font-medium mt-4"
>
  Show more
</button>
  </div> -->

</div>

            </div>
            <!-- Modal footer -->
            <!-- <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div> -->
        </div>
    </div>
    
</div>
