<x-app-layout>
<div class="p-2 sm:ml-64">
   <div class="p-1 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <div class="">

<x-slot name="header">
        <h2 class="py-2 text-sm text-gray-700 dark:text-gray-200 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                <x-welcome />
                
            </div>
        </div>
    </div>
    
<x-footer/>
</div>
        </div>
    </div>
</x-app-layout>
