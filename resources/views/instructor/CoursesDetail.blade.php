@php
    use Cohensive\OEmbed\Facades\OEmbed;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        

    </head>
    <body >
        
<div
  x-data="{ userDropdownOpen: false, notificationsDropdownOpen: false, mobileNavOpen: false }"
>
  <!-- Page Container -->
  <div
    id="page-container"
    class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col bg-zinc-100/75"
  >
    <!-- Page Header -->
    <header id="page-header" class="mx-auto w-full flex-none xl:max-w-7xl">
      <div class="container mx-auto px-4 sm:px-0">
        <div class="flex justify-between py-7">
          <!-- Left Section -->
          <div class="flex items-center gap-2 lg:gap-6">
            <!-- Logo -->
            
            <x-application-logo />
            <!-- END Logo -->
          </div>
<div class="flex items-center gap-4">
    <!-- Desktop Navigation -->
    <nav class="hidden items-center gap-2 lg:flex">
      <a
        href="dashboard"
        class="group flex items-center gap-2 rounded-lg bg-purple-100 px-4 py-2 text-sm font-medium text-purple-950"
      >
        <span>Dashboard</span>
      </a>
      <a
        href="javascript:void(0)"
        class="group flex items-center gap-2 rounded-lg px-4 py-2 text-sm font-medium text-zinc-800 hover:bg-purple-100 hover:text-purple-950 active:bg-purple-200/75"
      >
        <span>Home</span>
      </a>
      
     
    </nav>
    <nav class="hidden items-center gap-2 lg:flex">
        <a href="{{ route('show.courses') }}" class="group flex items-center gap-2 rounded-lg bg-purple-100 px-4 py-2 text-sm font-medium text-purple-950"
        >
          <span class="sr-only">Course List</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(2 ,132,199);transform: ;msFilter:;" class="h-6 w-6"><path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z"></path></svg>
        </a>
        <a href="{{ route('instructor.dashboard') }}" class="group flex items-center gap-2 rounded-lg bg-purple-100 px-4 py-2 text-sm font-medium text-purple-950"
        >
          <span class="sr-only">Dashboard</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
        </a>
        <a href="{{ route('create.courses') }}" class="group flex items-center gap-2 rounded-lg bg-purple-100 px-4 py-2 text-sm font-medium text-purple-950"
        >
          <span class="sr-only">Create Course</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(2 ,132,199);transform: ;msFilter:;" class="h-6 w-6"><path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z"></path><path d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z"></path></svg>
        </a>
        <a href="#" class="group flex items-center gap-2 rounded-lg bg-purple-100 px-4 py-2 text-sm font-medium text-purple-950"
        >
          <span class="sr-only">Media</span>
          
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="rgb(2 ,132,199)" class="h-6 w-6"><path d="M300-180v-200l160 100-160 100Zm220-380q-50 0-85-35t-35-85q0-50 35-85t85-35h50v60h-50q-25 0-42.5 17.5T460-680q0 25 17.5 42.5T520-620h50v60h-50Zm110 0v-60h50q25 0 42.5-17.5T740-680q0-25-17.5-42.5T680-740h-50v-60h50q50 0 85 35t35 85q0 50-35 85t-85 35h-50Zm-110-90v-60h160v60H520Zm124 250v-80h196v-360H360v360h-80v-360q0-33 23.5-56.5T360-920h480q33 0 56.5 23.5T920-840v360q0 33-23.5 56.5T840-400H644ZM120-40q-33 0-56.5-23.5T40-120v-320q0-33 23.5-56.5T120-520h480q33 0 56.5 23.5T680-440v320q0 33-23.5 56.5T600-40H120Zm0-80h480v-320H120v320Zm480-540ZM360-280Z"/></svg>
        </a>
        <a href="{{ route('show.cards') }}" class="group flex items-center gap-2 rounded-lg bg-purple-100 px-4 py-2 text-sm font-medium text-purple-950"
        >
          <span class="sr-only">Home</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(2 ,132,199);transform: ;msFilter:;"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"></path>
        </svg>
      </a>
      </nav>
    <!-- END Desktop Navigation -->

    <!-- Extra -->
    <div class="flex items-center gap-1.5 sm:gap-3">
      <!-- Notifications -->
      <div class="relative inline-block">
        <!-- Dropdown Toggle Button -->
        <button
          x-on:click="notificationsDropdownOpen = !notificationsDropdownOpen"
          x-bind:aria-expanded="notificationsDropdownOpen"
          type="button"
          id="dropdown-notifications"
          class="inline-flex items-center justify-center gap-1 rounded-lg border border-zinc-200 px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
          aria-haspopup="true"
        >
          <div class="absolute -end-2 -top-2">
            <span
              class="rounded-full bg-purple-600 px-1.5 py-0.5 text-xs font-semibold text-white"
            >
              2
            </span>
          </div>
          <svg
            class="hi-outline hi-bell-alert inline-block h-5 w-5"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            aria-hidden="true"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5"
            />
          </svg>
        </button>
        <!-- END Dropdown Toggle Button -->

        <!-- Dropdown -->
        <div
          x-cloak
          x-show="notificationsDropdownOpen"
          x-transition:enter="transition ease-out duration-100"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition ease-in duration-100"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          x-on:click.outside="notificationsDropdownOpen = false"
          role="menu"
          aria-labelledby="dropdown-notifications"
          class="absolute -end-20 z-10 mt-2 w-64 rounded-lg shadow-xl lg:w-80 ltr:origin-top-right rtl:origin-top-left"
        >
          <div
            class="rounded-lg bg-white py-2.5 ring-1 ring-black/5"
          >
            <a
              role="menuitem"
              href="javascript:void(0)"
              class="group block gap-1.5 px-4 py-2 text-sm text-zinc-700 hover:bg-zinc-100 hover:text-zinc-950"
            >
              <div class="text-xs font-medium text-purple-600">
                Just now
              </div>
              <h5 class="mb-0.5 font-semibold">
                <span class="text-purple-500">&bull;</span>
                DNS updated for example.com
              </h5>
              <p
                class="text-xs font-medium leading-relaxed text-zinc-500"
              >
                New TXT record was added.
              </p>
            </a>
            <a
              role="menuitem"
              href="javascript:void(0)"
              class="group block gap-1.5 px-4 py-2 text-sm text-zinc-700 hover:bg-zinc-100 hover:text-zinc-950"
            >
              <div class="text-xs font-medium text-purple-600">
                2 hours ago
              </div>
              <h5 class="mb-0.5 font-semibold">
                <span class="text-purple-500">&bull;</span>
                example2.com was added
              </h5>
              <p
                class="text-xs font-medium leading-relaxed text-zinc-500"
              >
                A new domain was connected to projects-main server.
                Check out all your available options.
              </p>
            </a>
            <hr class="my-2.5 border-zinc-100" />
            <div class="px-4 py-1.5">
              <a
                href="javascript:void(0)"
                class="inline-flex w-full items-center justify-center gap-1 rounded-lg border border-zinc-200 bg-white px-2 py-1.5 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
              >
                <svg
                  class="hi-mini hi-bell-alert inline-block h-4 w-4 opacity-50"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    d="M4.214 3.227a.75.75 0 00-1.156-.956 8.97 8.97 0 00-1.856 3.826.75.75 0 001.466.316 7.47 7.47 0 011.546-3.186zM16.942 2.271a.75.75 0 00-1.157.956 7.47 7.47 0 011.547 3.186.75.75 0 001.466-.316 8.971 8.971 0 00-1.856-3.826z"
                  />
                  <path
                    fill-rule="evenodd"
                    d="M10 2a6 6 0 00-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 00.515 1.076 32.94 32.94 0 003.256.508 3.5 3.5 0 006.972 0 32.933 32.933 0 003.256-.508.75.75 0 00.515-1.076A11.448 11.448 0 0116 8a6 6 0 00-6-6zm0 14.5a2 2 0 01-1.95-1.557 33.54 33.54 0 003.9 0A2 2 0 0110 16.5z"
                    clip-rule="evenodd"
                  />
                </svg>
                <span>All notifications</span>
              </a>
            </div>
          </div>
        </div>
        <!-- END Dropdown -->
      </div>
      <!-- END Notifications -->

      <!-- User Dropdown -->
<div class="relative inline-block">
  <!-- Dropdown Toggle Button -->
  <button
      x-on:click="userDropdownOpen = !userDropdownOpen"
      x-bind:aria-expanded="userDropdownOpen"
      type="button"
      id="dropdown-user"
      class="inline-flex items-center justify-center gap-1 rounded-lg border border-zinc-200 px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
      aria-haspopup="true"
  >
      <!-- SVG Icon for Small Screens -->
      @if(Auth::check() && Auth::user()->profile_picture)
          <img
              src="{{ Storage::url(Auth::user()->profile_picture) }}"
              alt="Profile Picture"
              class="inline-block h-5 w-5 rounded-full sm:hidden"
          />
      @else
          <svg
              class="hi-mini hi-user-circle inline-block h-5 w-5 sm:hidden"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              aria-hidden="true"
          >
              <path
                  fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
                  clip-rule="evenodd"
              />
          </svg>
      @endif
      
      <!-- User Name and Profile Picture for Larger Screens -->
      @auth
          <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
          @if(Auth::user()->profile_picture)
              <img
                  src="{{ Storage::url(Auth::user()->profile_picture) }}"
                  alt="Profile Picture"
                  class="hidden sm:inline-block h-5 w-5 rounded-full"
              />
          @else
              <!-- Fallback if no profile picture is available -->
              <svg
                  class="hi-mini hi-chevron-down hidden h-5 w-5 opacity-40 sm:inline-block"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
              >
                  <path
                      fill-rule="evenodd"
                      d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                      clip-rule="evenodd"
                  />
              </svg>
          @endif
      @endauth
  </button>
  <!-- END Dropdown Toggle Button -->



        <!-- Dropdown -->
        <div
          x-cloak
          x-show="userDropdownOpen"
          x-transition:enter="transition ease-out duration-100"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition ease-in duration-100"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          x-on:click.outside="userDropdownOpen = false"
          role="menu"
          aria-labelledby="dropdown-user"
          class="absolute end-0 z-10 mt-2 w-32 rounded-lg shadow-xl ltr:origin-top-right rtl:origin-top-left"
        >
          <div
            class="rounded-lg bg-white py-2.5 ring-1 ring-black/5"
          >
            <a
              role="menuitem"
              href="javascript:void(0)"
              class="group flex items-center justify-between gap-1.5 px-4 py-1.5 text-sm font-medium text-zinc-700 hover:bg-zinc-100 hover:text-zinc-950"
            >
              <span class="grow">Profile</span>
            </a>
            <a
              role="menuitem"
              href="javascript:void(0)"
              class="group flex items-center justify-between gap-1.5 px-4 py-1.5 text-sm font-medium text-zinc-700 hover:bg-zinc-100 hover:text-zinc-950"
            >
              <span class="grow">Settings</span>
            </a>
            <hr class="my-2.5 border-zinc-100" />
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-dropdown-link>
          </form>
          </div>
        </div>
        <!-- END Dropdown -->
      </div>
      <!-- END User Dropdown -->

      <!-- Toggle Mobile Navigation -->
      <div class="lg:hidden">
        <button
          x-on:click="mobileNavOpen = !mobileNavOpen"
          type="button"
          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
        >
          <svg
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
            class="hi-solid hi-menu inline-block h-5 w-5"
          >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
      </div>
      <!-- END Toggle Mobile Navigation -->
    </div>
    <!-- END Extra -->
  </div>
  <!-- END Right Section -->
</div>

<!-- Mobile Navigation -->
<div x-cloak x-show="mobileNavOpen" class="lg:hidden">
  <nav class="flex flex-col gap-2 border-t border-zinc-200 py-4">
    <a
      href="javascript:void(0)"
      class="group flex items-center gap-2 rounded-lg bg-purple-100 px-4 py-2 text-sm font-medium text-purple-950"
    >
      <span>Dashboard</span>
    </a>
    <a
      href="javascript:void(0)"
      class="group flex items-center gap-2 rounded-lg px-4 py-2 text-sm font-medium text-zinc-800 hover:bg-purple-100 hover:text-purple-950 active:bg-purple-200/75"
    >
      <span>Servers</span>
    </a>
    <a
      href="javascript:void(0)"
      class="group flex items-center gap-2 rounded-lg px-4 py-2 text-sm font-medium text-zinc-800 hover:bg-purple-100 hover:text-purple-950 active:bg-purple-200/75"
    >
      <span>Domains</span>
    </a>
    <a
      href="javascript:void(0)"
      class="group flex items-center gap-2 rounded-lg px-4 py-2 text-sm font-medium text-zinc-800 hover:bg-purple-100 hover:text-purple-950 active:bg-purple-200/75"
    >
      <span>Account</span>
    </a>
  </nav>
</div>
<!-- END Mobile Navigation -->
</div>
</header>


      <main>
          <!-- Course Header Section -->
          <section class="custom-gradientReg text-white py-8">
              <div class="container mx-auto">
                  <div class="flex flex-col md:flex-row items-center">
                      <div class="md:w-2/3">
                          <h1 class="text-4xl font-bold mb-2">{{ $course->title }}</h1>
                          <p class="text-xl mb-4">{{ $course->category }}</p>
                          <p class="leading-relaxed">{{ $course->description }}</p>
                      </div>
                      <div class="md:w-1/3 text-center md:text-right mt-4 md:mt-0">
                          <img class="rounded-lg shadow-xl" src="{{ asset('images/' . $course->course_image) }}" alt="{{ $course->title }}">
                      </div>
                  </div>
              </div>
          </section>
      
          <!-- Course Overview Section -->
<section class="grid-row-1 bg-white py-8 mx-4">
  <div class="grid grid-cols-3 mx-auto max-w-7xl item-center">
      <!-- First Column -->
      <div class="bg-white shadow-xl">
          <div class="p-6 border ">
              <h2 class="text-3xl font-bold mb-6">{{ $course->complexity }}</h2>
              <p class="leading-relaxed">{{ $course->language }}</p>
          </div>
      </div>

      <!-- Second Column -->
      <div class="bg-white shadow-xl">
          <div class="p-6 border ">
              <h2 class="text-3xl font-bold mb-6">{{ $course->category }}</h2>
              <p class="leading-relaxed">{{ $course->language }}</p>
          </div>
      </div>

      <!-- Third Column -->
      <div class="bg-white shadow-xl">
          <div class="p-6 border ">
              <h2 class="text-3xl font-bold mb-6">{{ $course->price }}$</h2>
              <p class="leading-relaxed">{{ $course->requirement }}</p>
          </div>
      </div>
  </div>
</section>

      
          <!-- Instructor Information Section -->
          <section class="bg-gray-100 py-8 ml-8">
              <div class="container mx-auto">
                  <h2 class="text-3xl font-bold mb-6">Instructor</h2>
                  <div class="flex items-center">
                      <img class="w-20 h-20 rounded-full mr-4" src="{{ Storage::url(Auth::user()->profile_picture) }}" alt="{{ Auth::user()->name }}">
                      <div>
                          <h3 class="text-xl font-semibold">{{ Auth::user()->name }}</h3>
                          <p class="text-gray-600">Specialist in {{ Auth::user()->category }}</p>
                      </div>
                  </div>
                  <div class="flex items-center">
                    <img class="w-20 h-20 rounded-full mr-4" src="{{ Storage::url(Auth::user()->profile_picture) }}" alt="{{ Auth::user()->name }}">
                    <div>
                        
                        <p class="text-gray-600">{{ Auth::user()->bio }}</p>
                    </div>
                </div>
              </div>
          </section>
      
          <!-- Syllabus Section -->
          <section class="bg-white py-8">
              <div class="container mx-auto">
                  <h1 class="text-3xl font-bold mb-6">Course Content</h1>
                  <div class=" pl-5">
                      @foreach ($modules as $module)
                          <div class="mb-4">
                            <h2 class="text-xl font-bold">Module{{ $module->moduleNumber }}</h2>
                              <h3 class="text-xl font-semibold italic">{{ $module->title }}</h3>
                              <p class="leading-relaxed">{{ $module->description }}</p>
                              <div class="">
                                {!! $module->video !!}
                            </div>
                          </div>
                      @endforeach
                        </div>
              </div>
          </section>
      
          <!-- Reviews Section -->
          {{-- <section class="bg-gray-100 py-8">
              <div class="container mx-auto">
                  <h2 class="text-3xl font-bold mb-6">Reviews</h2>
                  @foreach ($reviews as $review)
                      <div class="mb-6">
                          <h3 class="text-xl font-semibold">{{ $review->user->name }}</h3>
                          <p class="leading-relaxed">{{ $review->content }}</p>
                      </div>
                  @endforeach
              </div>
          </section> --}}
      
          <!-- Enrollment Section -->
          {{-- <section class="bg-indigo-800 text-white py-8">
              <div class="container mx-auto text-center">
                  <h2 class="text-3xl font-bold mb-4">Enroll in this Course</h2>
                  <a href="{{ route('enroll', $course->id) }}" class="bg-white text-indigo-800 font-semibold py-2 px-4 rounded">Enroll Now</a>
              </div>
          </section> --}}
      </main>
     
      
       
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
   </script>   
    
  </body>
</html>