
<nav x-data="{ open: false }" style='position: sticky; top: 0;z-index: 31;' class="shadow bg-green-900 ">
<style>
  
    body{
        zoom: 95%;
        
    }
    .hide-scrollbar {
  -ms-overflow-style: none;  /* Internet Explorer 10+ */
  scrollbar-width: none;      /* Firefox */
}

.hide-scrollbar::-webkit-scrollbar {
  display: none;             /* Safari and Chrome */
}
</style>

    <!-- Primary Navigation Menu -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="gap-4  shrink-0 flex items-center">
                @if (Auth::user()->UserAdmin !== "user")
                <x-drawer />
                @endif
                @if (Auth::user()->UserAdmin == "user")
                
                    <a class="mr-full mr-4" href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                    <div class="hidden absolute pl-8 mt-14 pt-3  max-w-lg h-34  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="absolute inset-y-1 mt-2  start-0 flex items-center ps-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="text-gray-500 dark:text-gray-400 bi bi-arrow-left-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
</svg>
            
        </div>
                    <div class="relative ml-5 p-1 w-60 h-auto">
            
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            
        </div>
        <input type="search" id="default-search" class="block w-full h-9 p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
        <!-- <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button> -->
    </div>
    <div class="p-5">
        <p>sdd</p>
    </div>
</div>
                    @endif
                </div>

                <!-- Navigation Links -->
                 
                @if (Auth::user()->UserAdmin == "user")
                
                <div style='width: 900px;justify-content: end; ' class="flex justify-end hidden space-x-4 sm:-my-px sm:ms-10 sm:flex py-2 text-sm text-white dark:text-gray-200">

                <!-- <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link> -->
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('HOME') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('Residentp', ['user' => Auth::user()->email]) }}" :active="request()->routeIs('Residentp')">
                            {{ __('RESIDENT PROFILE') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('Services') }}" :active="request()->routeIs('Services')">
                        {{ __('SERVICES') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('HouseholdInfo') }}" :active="request()->routeIs('HouseholdInfo')">
                        {{ __('HOUSEHOLD INFO') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('Trackreq') }}" :active="request()->routeIs('Trackreq')">
                        {{ __('TRACK MY REQUEST') }}
                    </x-nav-link>
                    
                </div>
                @else
                <div style='width: 900px;justify-content: center; ' class=" hidden space-x-4 sm:-my-px sm:ms-10 sm:flex py-2 text-lg text-white dark:text-gray-200">
                    ADMINISTRATOR
            </div>
@endif
                
            </div>
  
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="flex space-x-4">
                            <x-notifyMsg />
                                <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    
                                </button>
                                
                                
                                <button hidden onclick="darkmode()" id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
</button>

</div>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}
                                        
                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
    
    <x-javascripts />
    <div id="msgbox" class=" w-full z-0 flex fixed justify-end items-end right-0 bottom-0 gap-4  bg-gray-900 h-0 border-l mr-6 border-gray-800">
    
                     
    
            
            </div>
</nav>

<script>
function getTimeAgo(createdAt) {
            const createdAtDate = new Date(createdAt);
            const now = new Date();

            const timeDiff = now - createdAtDate;
            const seconds = Math.floor(timeDiff / 1000);
            const minutes = Math.floor(seconds / 60);
            const hours = Math.floor(minutes / 60);
            const days = Math.floor(hours / 24);

            let timeAgo = '';

            if (seconds < 60) {
                timeAgo = 'A few moments ago';
            } else if (minutes < 60) {
                timeAgo = minutes === 1 ? '1 minute ago' : `${minutes} minutes ago`;
            } else if (hours < 24) {
                timeAgo = hours === 1 ? '1 hour ago' : `${hours} hours ago`;
            } else {
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                timeAgo = createdAtDate.toLocaleDateString(undefined, options); 
            }

            return timeAgo;
        }
        
let notifyarray= [];
function displaynotify_array(){
    document.querySelector('#notifysender').innerHTML ="";
    let count=1;
    for (let i = notifyarray.length- 1; i >= 0; i--) {
        if( notifyarray[i].resedent_id !==1 ? notifyarray[i].resedent_id == "{{Auth::user()->id}}" : notifyarray[i].resedent_id == "{{Auth::user()->UserAdmin}}"){
        if(notifyarray[i].status == null){
           
        
        document.querySelector('#notifycounted').innerHTML = `<div class="absolute block w-auto h-auto bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">${notifyarray[i].status!==null ? count-1 : count++}</div>`;
        

        document.querySelector('#notifysender').innerHTML += `<a onclick="seen(${notifyarray[i].id})"  href="#" class=" flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
      <div class="flex-shrink-0">
        <img class="rounded-full w-11 h-11" src="${notifyarray[i].profile == null ? `https://ui-avatars.com/api/?name=${notifyarray[i].name.charAt(0)}&color=7F9CF5&background=EBF4FF` : `/storage/${notifyarray[i].profile}`}" alt="Jese image">
        <div class="relative flex items-center  justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
          <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
            <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
            <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
          </svg>
        </div>
      </div>
      <div class="w-full ps-3">
          <div class=" ${notifyarray[i].status == null ? 'text-gray-900 font-bold' : `text-gray-500`} text-sm mb-1.5 dark:text-gray-400">${notifyarray[i].email == '{{Auth::user()->email}}' ? `Message me` : `Message from`} <span class="font-semibold text-gray-900 dark:text-white">${notifyarray[i].name}</span>: "${notifyarray[i].message}"</div>
          <div class="text-xs text-blue-600 dark:text-blue-500">${getTimeAgo(notifyarray[i].created_at)}</div>
      </div>
    </a>`
}
}
    }
    for (let i = notifyarray.length- 1; i >= 0; i--) {
        if( notifyarray[i].resedent_id !==1 ? notifyarray[i].resedent_id == "{{Auth::user()->id}}" : notifyarray[i].resedent_id == "{{Auth::user()->UserAdmin}}"){
        if(notifyarray[i].status !== null){

        document.querySelector('#notifysender').innerHTML += `<a onclick="seen(${notifyarray[i].id})"  href="#" class=" flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
      <div class="flex-shrink-0">
        <img class="rounded-full w-11 h-11" src="${notifyarray[i].profile == null ? `https://ui-avatars.com/api/?name=${notifyarray[i].name.charAt(0)}&color=7F9CF5&background=EBF4FF` : `/storage/${notifyarray[i].profile}`}" alt="Jese image">
        <div class="relative flex items-center  justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
          <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
            <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
            <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
          </svg>
        </div>
      </div>
      <div class="w-full ps-3">
          <div class=" ${notifyarray[i].status == null ? 'text-gray-900 font-bold' : `text-black-500`} text-sm mb-1.5 dark:text-gray-400">${notifyarray[i].email == '{{Auth::user()->email}}' ? `Message me` : `Message from`} <span class="font-semibold text-gray-900 dark:text-white">${notifyarray[i].name}</span>: "${notifyarray[i].message}"</div>
          <div class="text-xs text-blue-600 dark:text-blue-500">${getTimeAgo(notifyarray[i].created_at)}</div>
      </div>
    </a>`
}
}
    }
        
}


function msgboxglobal(valid){
   
    for (let i = notifyarray.length- 1; i >= 0; i--) {
       
              if(notifyarray[i].id==valid){


    document.querySelector('#msgbox').innerHTML += `<div id="${notifyarray[i].id}" class="hidden"><div  style="height: 80vh;" class=" z-31 flex relative top-0 flex-col max-w-sm bg-white flex-auto border-l mr-6 border-gray-800">
                <div class="chat-header px-6 py-4 flex flex-row flex-none justify-between items-center shadow">
                    <div class="flex">
                        <div class="w-12 h-12 mr-4 relative flex flex-shrink-0">
                            <img class="shadow-md rounded-full w-full h-full object-cover"
                                 src="${notifyarray[i].profile == null ? `https://ui-avatars.com/api/?name=${notifyarray[i].name.charAt(0)}&color=7F9CF5&background=EBF4FF` : `/storage/${notifyarray[i].profile}`}"
                                 alt=""
                            />
                        </div>
                        <div class="text-sm">
                            <p class="font-bold">${notifyarray[i].name}</p>
                            <p>Active 1h ago</p>
                        </div>
                    </div>
                                 
                    <div class="flex">
                        <a href="#" class="block rounded-full hover:bg-gray-700 bg-gray-800 w-10 h-10 p-2">
                            <svg viewBox="0 0 20 20" class="w-full h-full fill-current text-blue-500">
                                <path d="M11.1735916,16.8264084 C7.57463481,15.3079672 4.69203285,12.4253652 3.17359164,8.82640836 L5.29408795,6.70591205 C5.68612671,6.31387329 6,5.55641359 6,5.00922203 L6,0.990777969 C6,0.45097518 5.55237094,3.33066907e-16 5.00019251,3.33066907e-16 L1.65110039,3.33066907e-16 L1.00214643,8.96910337e-16 C0.448676237,1.13735153e-15 -1.05725384e-09,0.445916468 -7.33736e-10,1.00108627 C-7.33736e-10,1.00108627 -3.44283713e-14,1.97634814 -3.44283713e-14,3 C-3.44283713e-14,12.3888407 7.61115925,20 17,20 C18.0236519,20 18.9989137,20 18.9989137,20 C19.5517984,20 20,19.5565264 20,18.9978536 L20,18.3488996 L20,14.9998075 C20,14.4476291 19.5490248,14 19.009222,14 L14.990778,14 C14.4435864,14 13.6861267,14.3138733 13.2940879,14.7059121 L11.1735916,16.8264084 Z"/>
                            </svg>
                        </a>
                        <a href="#" class="block rounded-full hover:bg-gray-700 bg-gray-800 w-10 h-10 p-2 ml-4">
                            <svg viewBox="0 0 20 20" class="w-full h-full fill-current text-blue-500">
                                <path d="M0,3.99406028 C0,2.8927712 0.894513756,2 1.99406028,2 L14.0059397,2 C15.1072288,2 16,2.89451376 16,3.99406028 L16,16.0059397 C16,17.1072288 15.1054862,18 14.0059397,18 L1.99406028,18 C0.892771196,18 0,17.1054862 0,16.0059397 L0,3.99406028 Z M8,14 C10.209139,14 12,12.209139 12,10 C12,7.790861 10.209139,6 8,6 C5.790861,6 4,7.790861 4,10 C4,12.209139 5.790861,14 8,14 Z M8,12 C9.1045695,12 10,11.1045695 10,10 C10,8.8954305 9.1045695,8 8,8 C6.8954305,8 6,8.8954305 6,10 C6,11.1045695 6.8954305,12 8,12 Z M16,7 L20,3 L20,17 L16,13 L16,7 Z"/>
                            </svg>
                        </a>
                        <a  href="#" onclick="hidebox(${notifyarray[i].id})" class="block rounded-full hover:bg-gray-700 bg-gray-800 w-10 h-10 p-2 ml-4">
                            <svg viewBox="0 0 20 20" class="w-full h-full fill-current text-blue-500">
                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                        </svg>

                        </a>
                    </div>
                </div>
                <div class="chat-body p-4 flex-1 overflow-y-scroll">
                    ${masgaray.map(item => item.email == notifyarray[i].email || item.email == '{{Auth::user()->email}}'? `
                    <div class="flex flex-row ${item.email == '{{Auth::user()->email}}' ? `justify-end` : `justify-start`} pb-4">
                        <div class="${item.email == '{{Auth::user()->email}}' ? `hidden` : ``} w-8 h-8 relative flex flex-shrink-0 mr-4">
                            <img class="shadow-md rounded-full w-full h-full object-cover"
                                 src="${item.profile == null ? `https://ui-avatars.com/api/?name=${item.name.charAt(0)}&color=7F9CF5&background=EBF4FF` : `/storage/${item.profile}`}"
                                 
                                 alt=""
                            />
                        </div>
                        <div class="messages text-sm text-gray-700 grid grid-flow-row gap-2">
                            <div class="flex items-center group">
                                <p class="px-6 py-3 rounded-t-full rounded-r-full ${item.email == '{{Auth::user()->email}}' ? ` bg-blue-700` : ` bg-gray-800`}  max-w-xs lg:max-w-md text-gray-200">${item.message}</p>
                                <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                        <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                    </svg>
                                </button>
                                <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                        <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                    </svg>
                                </button>
                               
                            </div>
                            <!-- ////// -->
                        </div>
                    </div>
                    ` : '').join('')}
                 
                    <div  class="hidden flex flex-row justify-start">
                        <div class="w-8 h-8 relative flex flex-shrink-0 mr-4">
                            <img class="shadow-md rounded-full w-full h-full object-cover"
                                 src="https://randomuser.me/api/portraits/women/33.jpg"
                                 alt=""
                            />
                        </div>
                        <div class="messages text-sm text-gray-700 grid grid-flow-row gap-2">
                            <div class="flex items-center group">
                                <p class="px-6 py-3 rounded-t-full rounded-r-full bg-gray-800 max-w-xs lg:max-w-md text-gray-200">Hey!d How are you?</p>
                                <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                        <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                    </svg>
                                </button>
                                <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                        <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                    </svg>
                                </button>
                               
                            </div>
                            <!-- ////// -->
                            
                            
                            
                        </div>
                    </div>
                    <p class="hidden p-4 text-center text-sm text-gray-500">FRI 3:04 PM</p>
                    <div class="hidden flex flex-row justify-end">
                        <div class="messages text-sm text-white grid grid-flow-row gap-2">
                            <div class="flex items-center flex-row-reverse group">
                                <p class="px-6 py-3 rounded-t-full rounded-l-full bg-blue-700 max-w-xs lg:max-w-md">Hey! How are you?</p>
                                <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                        <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
	 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
	C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                    </svg>
                                </button>
                                <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                        <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                    </svg>
                                </button>
                               
                            </div>
                           
                            <!-- ///// -->
                        </div>
                    </div>
                    <p class="hidden p-4 text-center text-sm text-gray-500">SAT 2:10 PM</p>
                    
                    <p class="hidden p-4 text-center text-sm text-gray-500">12:40 PM</p>
                    <div class="hidden flex flex-row justify-end">
                        <div class="messages text-sm text-white grid grid-flow-row gap-2">
                            
                            <div class="flex items-center flex-row-reverse group">
                                <a class="block w-64 h-64 relative flex flex-shrink-0 max-w-xs lg:max-w-md" href="#">
                                    <img class="absolute shadow-md w-full h-full rounded-l-lg object-cover" src="https://unsplash.com/photos/8--kuxbxuKU/download?force=true&w=640" alt="hiking"/>
                                </a>
                                <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                        <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
	 M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
	C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                    </svg>
                                </button>
                                <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                        <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                    </svg>
                                </button>
                                <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                    <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                        <path
                                                d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                    </svg>
                                </button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="chat-footer flex-none">
                    <div class="flex flex-row items-center p-4">
                        <button type="button" class="flex flex-shrink-0 focus:outline-none mx-2 block text-blue-600 hover:text-blue-700 w-6 h-6">
                            <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                <path d="M10,1.6c-4.639,0-8.4,3.761-8.4,8.4s3.761,8.4,8.4,8.4s8.4-3.761,8.4-8.4S14.639,1.6,10,1.6z M15,11h-4v4H9  v-4H5V9h4V5h2v4h4V11z"/>
                            </svg>
                        </button>
                        <button type="button" class="flex flex-shrink-0 focus:outline-none mx-2 block text-blue-600 hover:text-blue-700 w-6 h-6">
                            <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                <path d="M11,13 L8,10 L2,16 L11,16 L18,16 L13,11 L11,13 Z M0,3.99406028 C0,2.8927712 0.898212381,2 1.99079514,2 L18.0092049,2 C19.1086907,2 20,2.89451376 20,3.99406028 L20,16.0059397 C20,17.1072288 19.1017876,18 18.0092049,18 L1.99079514,18 C0.891309342,18 0,17.1054862 0,16.0059397 L0,3.99406028 Z M15,9 C16.1045695,9 17,8.1045695 17,7 C17,5.8954305 16.1045695,5 15,5 C13.8954305,5 13,5.8954305 13,7 C13,8.1045695 13.8954305,9 15,9 Z" />
                            </svg>
                        </button>
                        <button type="button" class="flex flex-shrink-0 focus:outline-none mx-2 block text-blue-600 hover:text-blue-700 w-6 h-6">
                            <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                <path d="M0,6.00585866 C0,4.89805351 0.893899798,4 2.0048815,4 L5,4 L7,2 L13,2 L15,4 L17.9951185,4 C19.102384,4 20,4.89706013 20,6.00585866 L20,15.9941413 C20,17.1019465 19.1017876,18 18.0092049,18 L1.99079514,18 C0.891309342,18 0,17.1029399 0,15.9941413 L0,6.00585866 Z M10,16 C12.7614237,16 15,13.7614237 15,11 C15,8.23857625 12.7614237,6 10,6 C7.23857625,6 5,8.23857625 5,11 C5,13.7614237 7.23857625,16 10,16 Z M10,14 C11.6568542,14 13,12.6568542 13,11 C13,9.34314575 11.6568542,8 10,8 C8.34314575,8 7,9.34314575 7,11 C7,12.6568542 8.34314575,14 10,14 Z"/>
                            </svg>
                        </button>
                        <button type="button" class="flex flex-shrink-0 focus:outline-none mx-2 block text-blue-600 hover:text-blue-700 w-6 h-6">
                            <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                <path d="M9,18 L9,16.9379599 C5.05368842,16.4447356 2,13.0713165 2,9 L4,9 L4,9.00181488 C4,12.3172241 6.6862915,15 10,15 C13.3069658,15 16,12.314521 16,9.00181488 L16,9 L18,9 C18,13.0790094 14.9395595,16.4450043 11,16.9378859 L11,18 L14,18 L14,20 L6,20 L6,18 L9,18 L9,18 Z M6,4.00650452 C6,1.79377317 7.79535615,0 10,0 C12.209139,0 14,1.79394555 14,4.00650452 L14,8.99349548 C14,11.2062268 12.2046438,13 10,13 C7.790861,13 6,11.2060545 6,8.99349548 L6,4.00650452 L6,4.00650452 Z" />
                            </svg>
                        </button>
                        <div class="relative flex-grow">
                            <label>
                                <input class="rounded-full py-2 pl-3 pr-10 w-full border border-gray-800 focus:border-gray-700 bg-gray-800 focus:bg-gray-900 focus:outline-none text-gray-200 focus:shadow-md transition duration-300 ease-in"
                                       type="text" value="" placeholder="Aa"/>
                                <button type="button" class="absolute top-0 right-0 mt-2 mr-3 flex flex-shrink-0 focus:outline-none block text-blue-600 hover:text-blue-700 w-6 h-6">
                                    <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                        <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM6.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm7 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm2.16 3a6 6 0 0 1-11.32 0h11.32z" />
                                    </svg>
                                </button>
                            </label>
                        </div>
                        <button id="fetchDataBtn" type="button" class="flex flex-shrink-0 focus:outline-none mx-2 block text-blue-600 hover:text-blue-700 w-6 h-6">
                            
                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                <path d="M11.0010436,0 C9.89589787,0 9.00000024,0.886706352 9.0000002,1.99810135 L9,8 L1.9973917,8 C0.894262725,8 0,8.88772964 0,10 L0,12 L2.29663334,18.1243554 C2.68509206,19.1602453 3.90195042,20 5.00853025,20 L12.9914698,20 C14.1007504,20 15,19.1125667 15,18.000385 L15,10 L12,3 L12,0 L11.0010436,0 L11.0010436,0 Z M17,10 L20,10 L20,20 L17,20 L17,10 L17,10 Z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            </div>
            `;
            // for (let i = notifyarray.length- 1; i >= 0; i--) {
            //     document.querySelector('#'+notifyarray[i].id).innerHTML += ``
                
            // }
        }
        




    }
    
}



msgboxglobal();
function hidebox(val) {

    $('#'+val).hide();
   
}

function seen(ids){
    msgboxglobal(ids);
    $('#'+ids).show();
        
    
   
    $.ajax({
        url: '/postseennotifysend',
        method: 'POST',
        data: {
            id: ids
        },
        success: function(response) {
           
           

        }
    });
    
};
let arraysearhresedent = [];
let masgaray = [];
notifydisplay();
    function notifydisplay(){
                $.ajax({
                    url: '{{ route("getnotifysend") }}', 
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {
                        arraysearhresedent= response.userlist;
                     notifyarray =response.notify;
                     masgaray=response.notify;
                        console.log(notifyarray[0].message);
                        displaynotify_array();
                    },
                    error: function(xhr, status, error) {
                        console.log('error');
                    }
                });
            }


         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    </script>