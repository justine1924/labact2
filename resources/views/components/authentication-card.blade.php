<style>
    .coverpho{
        position: absolute;
       left:0;

        background-repeat: no-repeat;
        background-size: cover;
   
    }
    div{
        z-index: 9999999!important;
    }
   
</style>
<img class="coverpho w-full h-full" src="/storage/coverphotoRegis/carmen.jpg" alt="d">
<div class="max-h-max flex flex-col sm:justify-center items-center pt-0 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full pt-0 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
