{{-- <x-app-layout>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
  <x-app-layout>
    {{-- <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
  
    <div class="py-12">
  <section class="custom-gradientReg w-full h-full mx-auto text-center">
      <!-- (wave effect)-->
  <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#f8fafc">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    {{-- end wave effect --}}
        
      <div class="sm:flex sm:flex-row shadow-xl">
          <div class="ml-12">
              <img class="w-full min-h-screen md:w-11/12 z-50" src="{{ asset('images/Wall post-amico.svg') }}" >
              <p class="my-3 font-semibold text-4xl text-white">Welcome Admin! let's add new Members to our journey.</p>
                
          </div>
          <div class="w-full">
              <x-auth-card>
                  <x-slot name="logo">
                      <a href="/">
                          <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                      </a>
                  </x-slot>

                  <!-- Validation Errors -->
                  <x-auth-validation-errors class="mb-4" :errors="$errors" />

                  <form method="POST" action="{{ route('admin.register') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-7">
                        <h3 class="font-semibold text-2xl text-gray-800">Add User</h3>
                        
                    </div>
                      <!-- Name -->
                      <div>
                          <x-label for="name" :value="__('Name')" />
                          <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                      </div>

                      <!-- Email Address -->
                      <div class="mt-4">
                          <x-label for="email" :value="__('Email')" />
                          <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                      </div>

                      <!-- Password -->
                      <div class="mt-4">
                          <x-label for="password" :value="__('Password')" />
                          <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                      </div>

                      <!-- Confirm Password -->
                      <div class="mt-4">
                          <x-label for="password_confirmation" :value="__('Confirm Password')" />
                          <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                      </div>
                      <!-- Category -->
  <div class="col-span-2 mt-4">
    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        <option selected disabled>Select category</option>
        <option value="Math">Math</option>
        <option value="Web">Web Development</option>
        <option value="Cyber">Cybersecurity</option>
        <option value="IA">IA</option>
        <option value="Other">Other</option>
    </select>
</div>

<!-- Bio -->
<div class="col-span-2 mt-4">
    <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bio</label>
    <textarea id="bio" name="bio" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write profile description here"></textarea>
</div>
                      
                      <!-- Profile Picture -->
                      <div class="mt-4">
                          <x-label for="profile_picture" :value="__('Profile Picture')" />
                          <input id="profile_picture" type="file" class="block mt-1 w-full" name="profile_picture">
                          @if ($errors->has('profile_picture'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('profile_picture') }}</strong>
                              </span>
                          @endif
                      </div>

                      <!-- Role Selection -->
                      <div class="mt-4">
                          <x-label for="role" :value="__('Register as')" />
                          <div class="flex justify-around">
                              
                              <label>
                                  <input type="radio" name="role" value="instructor" required>
                                  <span>{{ __('Instructor') }}</span>
                              </label>
                              <label>
                                  <input type="radio" name="role" value="learner" required>
                                  <span>{{ __('Learner') }}</span>
                              </label>
                          </div>
                      </div>

                      <div class="mt-4">
                          
                          <x-button class="ml-4">
                              {{ __('Add User') }}
                          </x-button>
                      </div>
                  </form>
              </x-auth-card>
          </div>
      </div>
<svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
          ></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
          ></path>
        </g>
      </g>
    </svg>
  </section>
</x-app-layout>