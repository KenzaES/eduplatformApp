
<!-- component -->
<x-guest-layout> 
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div
        class="custom-gradient">
        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
    </div>
    <div
        class="relative   min-h-screen  sm:flex sm:flex-row  justify-center bg-transparent rounded-3xl shadow-xl">
        <div class="flex-col flex  self-center lg:px-14 sm:max-w-4xl xl:max-w-md  z-10">
            
            <div class="self-start hidden lg:flex flex-col  text-gray-300">
                <img class="w-full md:w-4/5 z-50"src="{{ asset('images/Security-cuate.svg') }}" >
                <h1 class="my-3 font-semibold text-4xl">Welcome back</h1>
                
            </div>
        </div>
        <div class="flex justify-center self-center  z-10">
            
            <div class=" p-12 bg-white mx-auto rounded-3xl w-96 borderlog">
                <div class="mb-7">
                    <h3 class="font-semibold text-2xl text-gray-800">Sign In </h3>
                    <p class="text-gray-400">Don'thave an account? <a href="{{ route('register') }}"
                            class="text-sm text-purple-700 hover:text-purple-700">Sign Up</a></p>
                </div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
    
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
                <form method="POST" action="{{ route('login') }}">
                    @csrf
        
                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />
        
                        <x-input id="email" class="text-sm text-gray-700 px-4 py-3 rounded-lg w-full bg-gray-200 focus:bg-gray-100 border border-gray-200 focus:outline-none focus:border-blue-500" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
        
                        <x-input id="password" class="text-sm text-gray-700 px-4 py-3 rounded-lg w-full bg-gray-200 focus:bg-gray-100 border border-gray-200 focus:outline-none focus:border-blue-500"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>
        
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
        
                        <x-button class="w-full flex justify-center bg-indigo-500 py-4 hover:bg-purple-700 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
                    
            </div>
        </div>
      
    <svg class="absolute bottom-0 left-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,0L40,42.7C80,85,160,171,240,197.3C320,224,400,192,480,154.7C560,117,640,75,720,74.7C800,75,880,117,960,154.7C1040,192,1120,224,1200,213.3C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>  
        </div>	 
    
    </x-guest-layout>
    