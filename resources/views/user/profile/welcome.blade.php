<x-app-layout>

<style>
 
</style>
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="\storage\picture\1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="\storage\picture\2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="\storage\picture\3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="\storage\picture\4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="\storage\picture\5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>



<div class="p-8">  
    <div class="flex felx-col items-center justify-center">    
        <span      class="rounded-full bg-indigo-500 px-2 py-1 text-white uppercase text-sm"    >      Insight    </span>  
    </div>  
    <h1 class="text-4xl font-medium text-gray-700 text-center mt-6">   BRGY. BAIKINGON  </h1>
      <p class="text-center mt-6 text-lg font-light text-gray-500">    KABAG-UHAN SA ATONG BARANGAY ANAA NA </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3">  
        <div class="p-8">    
        <div class="w-screen h-screen flex justify-center items-center">
  <div class="container mx-auto max-w-sm rounded-lg overflow-hidden shadow-lg my-2 bg-white">
    <div class="relative z-10" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 calc(100% - 5vw));">
      <img class="w-full" src="\storage\orgoffice\1.jpg" alt="Profile image" />
      <div class="text-center absolute w-full" style="bottom: 4rem">
        <p class="text-yellow-100 tracking-wide uppercase text-lg font-bold">Brgy. Baikingon, Cagayan de Oro City</p>
        <p><a href="https://web.facebook.com/profile.php?id=100092327452691&sk=about" target="_blank" class="text-green-100 text-sm hover:text-green-400">@brgy.Baikingon</a></p>
      </div>
    </div>
    <div class="relative flex justify-between items-center flex-row px-6 z-50 -mt-10">
      <!-- <p class="flex items-center text-gray-400"><span class="inline-block w-3 h-3 bg-green-500 rounded-full mr-2"></span>online</p> -->
      <button class="p-4 hidden bg-red-600 rounded-full hover:bg-red-500 focus:bg-red-700 transition ease-in duration-200 focus:outline-none">
        <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6">
          <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                  C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                  C15.952,9,16,9.447,16,10z" />
        </svg>
      </button>
    </div>
    <div class="pt-6 pb-8 text-gray-600 text-center">
    <p>@Brgy.Baikingon</p>
      <p class="text-sm">be such a beautiful soul that people crave your vibes.</p>
    </div>

    <!-- <div class="pb-10 uppercase text-center tracking-wide flex justify-around">
      <div class="posts">
        <p class="text-gray-400 text-sm">Posts</p>
        <p class="text-lg font-semibold text-blue-300">76</p>
      </div>
      <div class="followers">
        <p class="text-gray-400 text-sm">Followers</p>
        <p class="text-lg font-semibold text-blue-300">964</p>
      </div>
      <div class="following">
        <p class="text-gray-400 text-sm">Following</p>
        <p class="text-lg font-semibold text-blue-300">34</p>
      </div>
    </div> -->
  </div>
</div>
<p class="text-center text-sm my-2"><a class="text-gray-400 hover:text-gray-700" href="https://tailwindcomponents.com/u/ravisankarchinnam" target="_blank"></a></p>
                            </div>  
                            <div class="p-8">    
                            <div class="w-screen h-screen flex justify-center items-center">
  <div class="container mx-auto max-w-sm rounded-lg overflow-hidden shadow-lg my-2 bg-white">
    <div class="relative z-10" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 calc(100% - 5vw));">
      <img class="w-full" src="\storage\orgoffice\2.jpg" alt="Profile image" />
      <div class="text-center absolute w-full" style="bottom: 4rem">
      <p class="text-yellow-100 tracking-wide uppercase text-lg font-bold">Brgy. Baikingon, Cagayan de Oro City</p>
      <p><a href="https://web.facebook.com/profile.php?id=100092327452691&sk=about" target="_blank" class="text-green-100 text-sm hover:text-green-400">@brgy.Baikingon</a></p>
      </div>
    </div>
    <div class="relative flex justify-between items-center flex-row px-6 z-50 -mt-10">
      <!-- <p class="flex items-center text-gray-400"><span class="inline-block w-3 h-3 bg-green-500 rounded-full mr-2"></span>online</p> -->
      <button class="p-4 hidden bg-red-600 rounded-full hover:bg-red-500 focus:bg-red-700 transition ease-in duration-200 focus:outline-none">
        <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6">
          <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                  C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                  C15.952,9,16,9.447,16,10z" />
        </svg>
      </button>
    </div>
    <div class="pt-6 pb-8 text-gray-600 text-center">
    <p>@Brgy.Baikingon</p>
      <p class="text-sm">be such a beautiful soul that people crave your vibes.</p>
    </div>

    <!-- <div class="pb-10 uppercase text-center tracking-wide flex justify-around">
      <div class="posts">
        <p class="text-gray-400 text-sm">Posts</p>
        <p class="text-lg font-semibold text-blue-300">76</p>
      </div>
      <div class="followers">
        <p class="text-gray-400 text-sm">Followers</p>
        <p class="text-lg font-semibold text-blue-300">964</p>
      </div>
      <div class="following">
        <p class="text-gray-400 text-sm">Following</p>
        <p class="text-lg font-semibold text-blue-300">34</p>
      </div>
    </div> -->
  </div>
</div>
<p class="text-center text-sm my-2"><a class="text-gray-400 hover:text-gray-700" href="https://tailwindcomponents.com/u/ravisankarchinnam" target="_blank"></a></p>
                                                </div>
                                                <div class="p-8">    
                            <div class="w-screen h-screen flex justify-center items-center">
  <div class="container mx-auto max-w-sm rounded-lg overflow-hidden shadow-lg my-2 bg-white">
    <div class="relative z-10" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 calc(100% - 5vw));">
      <img class="w-full" src="\storage\orgoffice\3.jpg" alt="Profile image" />
      <div class="text-center absolute w-full" style="bottom: 4rem">
      <p class="text-yellow-100 tracking-wide uppercase text-lg font-bold">Brgy. Baikingon, Cagayan de Oro City</p>
      <p><a href="https://web.facebook.com/profile.php?id=100092327452691&sk=about" target="_blank" class="text-green-100 text-sm hover:text-green-400">@brgy.Baikingon</a></p>
      </div>
    </div>
    <div class="relative flex justify-between items-center flex-row px-6 z-50 -mt-10">
      <!-- <p class="flex items-center text-gray-400"><span class="inline-block w-3 h-3 bg-green-500 rounded-full mr-2"></span>online</p> -->
      <button class="hidden p-4 bg-red-600 rounded-full hover:bg-red-500 focus:bg-red-700 transition ease-in duration-200 focus:outline-none">
        <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 ">
          <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                  C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                  C15.952,9,16,9.447,16,10z" />
        </svg>
      </button>
    </div>
    <div class="pt-6 pb-8 text-gray-600 text-center">
      <p>@Brgy.Baikingon</p>
      <p class="text-sm">be such a beautiful soul that people crave your vibes.</p>
    </div>

    <!-- <div class="pb-10 uppercase text-center tracking-wide flex justify-around">
      <div class="posts">
        <p class="text-gray-400 text-sm">Posts</p>
        <p class="text-lg font-semibold text-blue-300">76</p>
      </div>
      <div class="followers">
        <p class="text-gray-400 text-sm">Followers</p>
        <p class="text-lg font-semibold text-blue-300">964</p>
      </div>
      <div class="following">
        <p class="text-gray-400 text-sm">Following</p>
        <p class="text-lg font-semibold text-blue-300">34</p>
      </div>
    </div> -->
  </div>
</div>
<p class="text-center text-sm my-2"><a class="text-gray-400 hover:text-gray-700" href="https://tailwindcomponents.com/u/ravisankarchinnam" target="_blank"></a></p>
                                                </div>
                                                </div>


    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Barangay</span>
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


</x-app-layout>