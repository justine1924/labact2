<x-guest-layout>
    <!-- component -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <x-authentication-card hidden>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="flex opacity-50% items-center justify-center w-full dark:bg-gray-950">
	<div class="bg-white dark:bg-gray-900 rounded-lg px-8 py-4 w-full ">
		<h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-700">Welcome to BHIMS!</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <x-label for="email" value="{{ __('Email') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2" />
                <x-input id="email" placeholder="your@email.com" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
			<div class="mb-4">
                <x-label for="password" value="{{ __('Password') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2" />
                <span id="eyse" class="flex justify-end">
                <x-input id="password" placeholder="Enter your password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password" required autocomplete="current-password" />
                <img id="eyeshide" onclick="openeyes()" class="w-8 h-8 mt-1 mr-1 absolute" src="storage\eyes\eyebrow.png" alt="eyese"></span>
            @if (Route::has('password.request'))
                    <a class="text-xs text-gray-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                
         

            </div>
			<div class="flex items-center justify-between mb-4">
				<div class="flex items-center">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 focus:outline-none" id="remember_me" name="remember" />
                    <span class="ml-2 block text-sm text-gray-700 dark:text-gray-300">{{ __('Remember me') }}</span>
                </label>
                </div>
				<a href="{{ config('app.url', 'HouseHold') }}/register"
					class="text-xs text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create
					Account</a>
			</div>
                <x-button class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Log in') }}
                </x-button>
            
        </form>
        </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
<script>
    function openeyes(){
        document.querySelector("#password").type = "text";
        document.querySelector("#eyeshide").setAttribute('src', 'storage/eyes/eye.png');
        document.querySelector("#eyeshide").setAttribute('onclick', 'openclose()');
    }
    function openclose(){
        document.querySelector("#password").type = "password";
        document.querySelector("#eyeshide").setAttribute('src', 'storage/eyes/eyebrow.png');
        document.querySelector("#eyeshide").setAttribute('onclick', 'openeyes()');
    }
</script>