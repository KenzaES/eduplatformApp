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
        href="javascript:void(0)"
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
