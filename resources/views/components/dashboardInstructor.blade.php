


    <!-- Page Content -->
    <main
      id="page-content"
      class="mx-auto flex w-full flex-auto flex-col border-y-8 border-zinc-200/60 bg-white sm:max-w-2xl sm:rounded-xl sm:border-8 md:max-w-3xl lg:max-w-5xl xl:max-w-7xl"
    >
      <!-- Page Heading -->
      <div class="container mx-auto px-4 pt-6 lg:px-8 lg:pt-8">
        <div
          class="flex flex-col gap-2 text-center sm:flex-row sm:items-center sm:justify-between sm:text-start"
        >
          <div class="grow">
            <h1 class="mb-1 text-xl font-bold">Dashboard</h1>
            <h2 class="text-sm font-medium text-zinc-500">
              Welcome, <strong>instructor</strong> {{ Auth::user()->name }} let's make a
              <strong>great</strong> Courses
              
              
            </h2>
          </div>
          <div
            class="flex flex-none items-center justify-center gap-2 rounded sm:justify-end"
          >
            <div class="relative">
              <div
                class="pointer-events-none absolute inset-y-0 start-0 my-px ms-px flex w-10 items-center justify-center rounded-l-lg text-zinc-500"
              >
                <svg
                  class="hi-mini hi-magnifying-glass inline-block h-5 w-5"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
              {{-- search bar --}}
              <input
                type="text"
                id="search"
                name="search"
                placeholder="Search.."
                class="block w-full rounded-lg border border-zinc-200 py-2 pe-3 ps-10 leading-6 placeholder-zinc-500 focus:border-purple-500 focus:ring focus:ring-purple-500/25"
              />
            </div>
          </div>
        </div>
      </div>
      <!-- END Page Heading -->

      <!-- Page Section -->
      <div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl">
        <div
          class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-12 lg:gap-8"
        >
          <!-- Quick Statistics -->
          <a
            href="javascript:void(0)"
            class="flex flex-col rounded-lg border border-zinc-200 bg-white hover:bg-zinc-50/50 active:border-purple-200 lg:col-span-3"
          >
            <div class="flex grow items-center justify-between p-5">
              <dl>
                <dt class="text-2xl font-bold">3</dt>
                <dd class="text-sm font-medium text-zinc-500">Instructors</dd>
              </dl>
              <div
                class="flex items-center text-sm font-medium text-zinc-300"
              >
              <svg fill="#afa7a7" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#afa7a7" class="hi-outline hi-server inline-block size-12">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier"> <g> <g> 
                  <path d="M384.267,247.983c-8.834,0-16.612,4.588-21.091,11.502c-3.951-1.907-8.423-2.951-13.113-2.951s-9.163,1.044-13.113,2.951 c-4.48-6.915-12.257-11.502-21.091-11.502c-13.851,0-25.119,11.268-25.119,25.119c0,13.851,11.268,25.119,25.119,25.119 c12.813,0,23.408-9.645,24.926-22.053c2.216-2.246,5.604-3.6,9.279-3.6c3.675,0,7.063,1.355,9.279,3.6 c1.518,12.409,12.113,22.053,24.926,22.053c13.851,0,25.119-11.268,25.119-25.119 C409.386,259.252,398.118,247.983,384.267,247.983z M315.858,282.188c-5.01,0-9.086-4.076-9.086-9.086 c0-5.01,4.076-9.086,9.086-9.086c5.01,0,9.086,4.076,9.086,9.086C324.944,278.112,320.868,282.188,315.858,282.188z M384.267,282.188c-5.01,0-9.086-4.076-9.086-9.086c0-5.01,4.076-9.086,9.086-9.086c5.01,0,9.086,4.076,9.086,9.086 C393.353,278.112,389.277,282.188,384.267,282.188z"></path> </g> </g> <g> <g> <path d="M485.634,397.631l-53.728-11.94l-10.416-15.625c-2.511-3.767-6.346-6.29-10.799-7.106 c-0.435-0.079-0.87-0.127-1.305-0.173v-20.371l4.219-3.516c7.959-6.631,13.188-15.927,14.725-26.172l11.94-79.595 c3.304-22.023-3.137-44.334-17.67-61.209c-12.225-14.196-29.109-23.272-47.418-25.805V59.324c0-18.566-15.105-33.67-33.67-33.67 H33.669C15.105,25.653,0,40.758,0,59.324v213.779c0,18.566,15.105,33.67,33.67,33.67h237.231l0.894,5.955 c1.537,10.245,6.766,19.54,14.725,26.172l4.219,3.516v20.371c-0.435,0.045-0.87,0.093-1.305,0.173 c-4.453,0.816-8.287,3.34-10.799,7.106l-10.416,15.625l-53.728,11.94c-15.523,3.451-26.365,16.968-26.365,32.87v30.729 c0,13.851,11.268,25.119,25.119,25.119h273.637c13.851,0,25.119-11.268,25.119-25.119v-30.729 C512,414.597,501.158,401.081,485.634,397.631z M213.244,470.313c-5.01,0-9.086-4.076-9.086-9.086v-30.729 c0-8.33,5.679-15.409,13.81-17.217l48.878-10.862l13.578,67.893H213.244z M238.898,68.409H136.284 c-23.281,0-42.221,18.941-42.221,42.221v68.409c0,23.281,18.941,42.221,42.221,42.221h102.614c7.37,0,14.303-1.904,20.34-5.237 c-0.427,5.657-0.24,11.39,0.618,17.109l2.228,14.85H125.879c-3.354-9.93-12.752-17.102-23.8-17.102s-20.446,7.172-23.8,17.102 H42.221c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h36.058c3.354,9.93,12.752,17.102,23.8,17.102 s20.446-7.172,23.8-17.102h138.609l4.008,26.722H33.67c-9.725,0-17.637-7.912-17.637-17.637V59.324 c0-9.725,7.912-17.637,17.637-17.637h307.841c9.725,0,17.637,7.912,17.637,17.637v86.046h-23.712 c-20.504,0-40.008,8.221-54.317,22.692V110.63C281.119,87.35,262.178,68.409,238.898,68.409z M265.086,110.63v68.409 c0,14.44-11.748,26.188-26.188,26.188H136.284c-14.44,0-26.188-11.748-26.188-26.188V110.63c0-14.44,11.748-26.188,26.188-26.188 h102.614C253.337,84.443,265.086,96.191,265.086,110.63z M111.164,256.015c-0.009,5.002-4.08,9.071-9.085,9.071 c-5.01,0-9.086-4.076-9.086-9.086s4.076-9.086,9.086-9.086c5.005,0,9.076,4.067,9.085,9.071c0,0.005-0.001,0.011-0.001,0.015 S111.164,256.011,111.164,256.015z M289.673,182.386c11.485-13.336,28.164-20.983,45.763-20.983h29.253 c17.598,0,34.277,7.648,45.763,20.983c2.981,3.462,5.522,7.218,7.618,11.181c-16.365,14.56-38.83,22.72-51.439,26.432v-6.754 c0-2.577-1.239-4.997-3.33-6.503c-2.091-1.506-4.778-1.918-7.222-1.102c-21.265,7.088-69.065,8.005-80.488,8.122 C277.13,202.277,281.946,191.359,289.673,182.386z M287.651,310.348l-11.94-79.594c-0.048-0.319-0.075-0.637-0.117-0.956 c10.302-0.089,49.318-0.782,75.002-6.178v6.725c0,2.402,1.076,4.676,2.934,6.2c1.446,1.185,3.245,1.817,5.083,1.817 c0.524,0,1.05-0.051,1.572-0.156c1.652-0.33,36.873-7.578,63.642-28.575c1.413,6.874,1.651,14.014,0.586,21.121l-11.94,79.595 c-0.953,6.355-4.196,12.12-9.133,16.233l-34.174,28.477c-3.163,2.636-7.173,4.087-11.291,4.087h-15.629 c-4.117,0-8.128-1.452-11.291-4.087l-34.174-28.477C291.847,322.468,288.604,316.702,287.651,310.348z M291.976,378.96 c0.031-0.046,0.126-0.188,0.348-0.229c0.221-0.041,0.36,0.059,0.406,0.091l44.972,32.122l-20.892,20.892 c-0.046,0.045-0.161,0.153-0.402,0.156c-0.235-0.011-0.345-0.142-0.386-0.192l-32.929-39.515L291.976,378.96z M342.046,470.313 h-45.269l-9.622-48.109l16.55,19.86c2.973,3.567,7.338,5.735,11.977,5.945c0.249,0.012,0.497,0.017,0.746,0.017 c4.377,0,8.613-1.745,11.72-4.853l13.898-13.9V470.313z M306.772,369.147v-13.37l13.92,11.601 c6.038,5.032,13.694,7.804,21.555,7.804h15.629c7.861,0,15.516-2.772,21.555-7.804l13.92-11.601v13.37l-43.29,30.922 L306.772,369.147z M403.348,470.313h-45.269v-41.039l13.898,13.898c3.107,3.107,7.343,4.853,11.72,4.853 c0.248,0,0.497-0.005,0.746-0.017c4.639-0.211,9.004-2.377,11.977-5.945l16.55-19.86L403.348,470.313z M384.103,431.8 c-0.042,0.049-0.151,0.181-0.386,0.192c-0.238-0.004-0.357-0.111-0.402-0.156l-20.892-20.892l44.972-32.122 c0.045-0.032,0.183-0.131,0.406-0.091c0.222,0.041,0.317,0.183,0.348,0.229l8.883,13.325L384.103,431.8z M495.967,461.228 c0,5.01-4.076,9.086-9.086,9.086H419.7l13.578-67.893l48.878,10.862c8.131,1.807,13.81,8.887,13.81,17.217V461.228z"></path> </g>
               </g> <g> <g> 
                <path d="M218.635,130.016l-40.737-20.369c-5.173-2.587-11.2-2.316-16.12,0.725s-7.857,8.31-7.857,14.093v40.737 c0,5.784,2.937,11.052,7.857,14.093c2.678,1.655,5.683,2.49,8.7,2.49c2.527,0,5.062-0.586,7.419-1.764l40.737-20.369 c5.649-2.825,9.158-8.503,9.158-14.819S224.284,132.841,218.635,130.016z M211.465,145.313l-40.737,20.369 c-0.099,0.05-0.267,0.134-0.519-0.023c-0.254-0.157-0.254-0.343-0.254-0.454v-40.737c0-0.111,0-0.298,0.253-0.455 c0.11-0.067,0.203-0.091,0.282-0.091c0.104,0,0.182,0.04,0.238,0.067l40.737,20.369c0.131,0.066,0.295,0.148,0.295,0.478 C211.76,145.165,211.596,145.248,211.465,145.313z"></path> </g> </g> </g></svg>
                
              </div>
            </div>
            <div
              class="border-t border-zinc-100 px-5 py-3 text-xs font-medium text-emerald-500"
            >
              All active
            </div>
          </a>
          <a
            href="javascript:void(0)"
            class="flex flex-col rounded-lg border border-zinc-200 bg-white hover:bg-zinc-50/50 active:border-purple-200 lg:col-span-3"
          >
            <div class="flex grow items-center justify-between p-5">
              <dl>
                <dt class="text-2xl font-bold">10</dt>
                <dd class="text-sm font-medium text-zinc-500">Learners</dd>
              </dl>
              <div
                class="flex items-center text-sm font-medium text-zinc-300"
              >
              <svg fill="#c3bbbb" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 31.093 31.093" xml:space="preserve" class="hi-outline hi-globe-alt inline-block size-12">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier"> <g> 
                <path d="M25.257,25.234h-2.998v-4.275h0.478h0.614h0.869l0.844,0.98l0.818-0.98h0.819h0.547h0.422l0.001,0.061 c-1.541,0.037-2.781,1.291-2.781,2.842C24.89,24.363,25.031,24.828,25.257,25.234z M25.386,23.861c0,1.299,1.053,2.352,2.353,2.352 c1.298,0,2.351-1.053,2.351-2.352s-1.053-2.353-2.351-2.353C26.439,21.509,25.386,22.562,25.386,23.861z M30.759,26.562H30.31 h-0.578h-0.865l-0.868,1.041l-0.894-1.041h-0.922h-0.65h-0.506v4.53h5.863L30.759,26.562z M22.599,18.41 c0,1.227,0.994,2.219,2.22,2.219c1.225,0,2.219-0.992,2.219-2.219c0-1.225-0.994-2.219-2.219-2.219 C23.593,16.191,22.599,17.186,22.599,18.41z M22.187,18.335c0-1.448,1.16-2.623,2.602-2.655l-0.001-0.056h-0.396H23.88h-0.764 l-0.768,0.918l-0.789-0.918h-0.812h-0.573h-0.447v3.999h2.805C22.32,19.238,22.187,18.807,22.187,18.335z M20.046,13.241 c0,1.145,0.93,2.074,2.074,2.074s2.074-0.929,2.074-2.074c0-1.146-0.93-2.074-2.074-2.074S20.046,12.096,20.046,13.241z M7.743,20.791H6.874l-0.844,0.98l-0.819-0.98H4.393H3.847H3.424L3.423,20.85c1.541,0.036,2.781,1.291,2.781,2.842 c0,0.502-0.142,0.967-0.368,1.375h2.999v-4.275H8.356H7.743z M1.004,23.691c0,1.299,1.053,2.352,2.351,2.352 c1.299,0,2.352-1.053,2.352-2.352s-1.053-2.353-2.352-2.353C2.058,21.339,1.004,22.393,1.004,23.691z M4.91,26.393H3.99 l-0.895,1.039l-0.868-1.039H1.361H0.782H0.334l-0.132,4.53h5.864v-4.53H5.561H4.91z M4.057,18.24c0,1.225,0.994,2.219,2.22,2.219 c1.225,0,2.219-0.994,2.219-2.219c0-1.227-0.994-2.221-2.219-2.221C5.051,16.02,4.057,17.014,4.057,18.24z M10.344,15.453 L10.344,15.453l-0.812,0.001l-0.789,0.919l-0.767-0.918H7.211H6.701H6.307L6.306,15.51c1.44,0.033,2.601,1.207,2.601,2.656 c0,0.469-0.133,0.902-0.345,1.285h2.804v-3.998h-0.446H10.344z M6.897,13.071c0,1.146,0.929,2.074,2.074,2.074 s2.074-0.929,2.074-2.074s-0.929-2.074-2.074-2.074S6.897,11.926,6.897,13.071z M26.554,0H5.871v0.726h20.684V0z M26.554,9.39 H5.871v0.726h20.684V9.39z M16.157,3.295c0.866,0,1.502,1.868,1.502,2.662c0,0.629-0.371,1.196-0.931,1.434v0.315L16.687,7.73 l0.006,0.123l-1.008,0.112V7.809c-0.037-0.027-0.064-0.077-0.064-0.163v-0.24c-0.581-0.229-0.966-0.801-0.966-1.449 C14.654,5.163,15.288,3.295,16.157,3.295z M14.867,5.957c0,0.584,0.358,1.096,0.894,1.275l0.072,0.024V7.63 c0.017-0.002,0.034-0.002,0.054-0.002l0.521-0.049c0.057,0,0.089-0.002,0.109-0.004V7.246l0.068-0.026 c0.514-0.188,0.86-0.697,0.86-1.263c0-0.785-0.611-2.45-1.291-2.45C15.476,3.507,14.866,5.172,14.867,5.957z M16.693,7.938 l-1.007,0.111v0.075c-0.009,0.04,0.003,0.092,0.012,0.12l0.013,0.043l0.932-0.104l0.045-0.015l0.002-0.046 c0.004-0.014,0.007-0.041,0.007-0.126L16.693,7.938z M15.779,8.446c0.09,0.101,0.23,0.152,0.418,0.153h0.006 c0.318,0,0.43-0.141,0.465-0.262l0.021-0.077l-0.98,0.108L15.779,8.446z M19.656,5.684V5.351H18.3v0.333H19.656z M12.77,5.684 h1.356V5.351H12.77V5.684z M16.366,1.544h-0.332V2.9h0.332V1.544z M17.235,3.213l0.268,0.198L18.31,2.32l-0.268-0.198L17.235,3.213 z M17.92,4.128l0.104,0.315l1.289-0.427l-0.104-0.315L17.92,4.128z M13.077,4.016l1.288,0.429l0.104-0.316L13.183,3.7L13.077,4.016 z M14.116,2.321l0.807,1.091l0.268-0.197l-0.807-1.091L14.116,2.321z M2.772,4.426c0.976,0,1.766-0.79,1.766-1.765 c0-0.975-0.79-1.765-1.766-1.765c-0.975,0-1.765,0.79-1.765,1.765C1.008,3.636,1.798,4.426,2.772,4.426z M1.778,13.321l0.007,0.115 h0.778v-0.728v-0.079V9.487h0.444v3.142v0.079v0.728h0.779l0.007-0.115l0.704,0.115h0.604v-0.652l-0.708-0.155H4.271V9.487V9.19 V8.789h0.112l0.163-3.182L7.7,4.563L7.427,3.739L4.549,4.692H3.415L2.743,5.473L2.091,4.692H1.438H1.004H0.667L0.57,8.13h0.605 l0.032,0.659H1.3V9.19v0.297v3.142H1.18l-0.709,0.155v0.652h0.604L1.778,13.321z">
                  </path> </g> </g>
                </svg>
                
              </div>
            </div>
            <div
              class="border-t border-zinc-100 px-5 py-3 text-xs font-medium text-orange-500"
            >
              2 expiring soon
            </div>
          </a>
          <a
            href="javascript:void(0)"
            class="flex flex-col rounded-lg border border-zinc-200 bg-white hover:bg-zinc-50/50 active:border-purple-200 lg:col-span-3"
          >
            <div class="flex grow items-center justify-between p-5">
              <dl>
                <dt class="text-2xl font-bold">24</dt>
                <dd class="text-sm font-medium text-zinc-500">
                  Journey
                </dd>
              </dl>
              <div
                class="flex items-center text-sm font-medium text-zinc-300"
              >
              <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" 
              fill="#cfcece" stroke="#cfcece" 
              class="hi-outline hi-envelope-open inline-block size-12"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier"> 
                  <path fill="none" stroke="#cfcece" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1 2h16v11H1z"></path> <path fill="none" stroke="#cfcece" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4 5.5v5s3-1 5 0v-5s-2-2-5 0zM9 5.5v5s3-1 5 0v-5s-2-2-5 0z"></path> 
                  <path fill="#cfcece" stroke="#cfcece" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M8.5 14l-3 3h7l-3-3z">
                </path> </g></svg>
               
              </div>
            </div>
            <div
              class="border-t border-zinc-100 px-5 py-3 text-xs font-medium text-pink-500"
            >
              15 unread messages
            </div>
          </a>
          <a
            href="javascript:void(0)"
            class="flex flex-col rounded-lg border border-zinc-200 bg-white hover:bg-zinc-50/50 active:border-purple-200 lg:col-span-3"
          >
            <div class="flex grow items-center justify-between p-5">
              <dl>
                <dt class="text-2xl font-bold">$356,67</dt>
                <dd class="text-sm font-medium text-zinc-500">Wallet</dd>
              </dl>
              <div
                class="flex items-center text-sm font-medium text-zinc-300"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  data-slot="icon"
                  class="hi-outline hi-wallet inline-block size-12"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3"
                  />
                </svg>
              </div>
            </div>
            <div
              class="border-t border-zinc-100 px-5 py-3 text-xs font-medium text-emerald-500"
            >
              Add more funds
            </div>
          </a>
          <!-- END Quick Statistics -->

          <!-- Charts -->
          <a
            href="javascript:void(0)"
            class="flex flex-col overflow-hidden rounded-lg border border-zinc-200 bg-white hover:bg-zinc-50/50 active:border-purple-200 lg:col-span-4"
          >
            <dl class="px-6 pt-6">
              <dt class="text-2xl font-bold">12%</dt>
              <dd class="text-sm font-medium text-slate-500">
                Learners Progress
              </dd>
            </dl>
            <div class="-m-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1600 900"
                fill="currentColor"
                class="w-auto text-purple-100"
              >
                <path
                  d="M0 900h91.429V754q0-4-4-4H4q-4 0-4 4Zm114.286 0h91.428V604q0-4-4-4h-83.428q-4 0-4 4Zm114.285 0H320V154q0-4-4-4h-83.429q-4 0-4 4Zm114.286 0h91.429V304q0-4-4-4h-83.429q-4 0-4 4Zm114.286 0h91.428V754q0-4-4-4h-83.428q-4 0-4 4Zm114.286 0h91.428V754q0-4-4-4H575.43q-4 0-4 4Zm114.285 0h91.429V604q0-4-4-4h-83.429q-4 0-4 4ZM800 900h91.429V454q0-4-4-4H804q-4 0-4 4Zm114.286 0h91.428V604q0-4-4-4h-83.428q-4 0-4 4Zm114.285 0H1120V754q0-4-4-4h-83.429q-4 0-4 4Zm114.286 0h91.429V604q0-4-4-4h-83.429q-4 0-4 4Zm114.286 0h91.428V454q0-4-4-4h-83.428q-4 0-4 4Zm114.286 0h91.428V604q0-4-4-4h-83.428q-4 0-4 4Zm114.285 0h91.429V754q0-4-4-4h-83.429q-4 0-4 4Z"
                />
              </svg>
            </div>
          </a>
          <a
            href="javascript:void(0)"
            class="flex flex-col overflow-hidden rounded-lg border border-zinc-200 bg-white hover:bg-zinc-50/50 active:border-purple-200 lg:col-span-4"
          >
            <dl class="px-6 pt-6">
              <dt class="text-2xl font-bold">40%</dt>
              <dd class="text-sm font-medium text-slate-500">
                Instructors active
              </dd>
            </dl>
            <div class="-m-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1600 900"
                fill="currentColor"
                class="w-auto text-purple-100"
              >
                <path
                  d="M0 1000h114.286V785.78q0-4-4-4H4q-4 0-4 4Zm142.857 0h114.286V162.391q0-4-4-4H146.857q-4 0-4 4Zm142.857 0H400V331.99q0-4-4-4H289.714q-4 0-4 4Zm142.857 0h114.286V748.382q0-4-4-4H432.571q-4 0-4 4Zm142.858 0h114.285V800.545q0-4-4-4H575.43q-4 0-4 4Zm142.857 0H828.57V674.705q0-4-4-4H718.286q-4 0-4 4Zm142.857 0h114.286V326.274q0-4-4-4H861.143q-4 0-4 4Zm142.857 0h114.286V484.918q0-4-4-4H1004q-4 0-4 4Zm142.857 0h114.286V277.255q0-4-4-4h-106.286q-4 0-4 4Zm142.857 0H1400V729.966q0-4-4-4h-106.286q-4 0-4 4Zm142.857 0h114.286V370.221q0-4-4-4h-106.286q-4 0-4 4Zm142.858 0h114.285V270.449q0-4-4-4H1575.43q-4 0-4 4Zm142.857 0h114.285V779.167q0-4-4-4h-106.285q-4 0-4 4Zm142.857 0h114.286V513.723q0-4-4-4h-106.286q-4 0-4 4Z"
                />
              </svg>
            </div>
          </a>
          <a
            href="javascript:void(0)"
            class="flex flex-col overflow-hidden rounded-lg border border-zinc-200 bg-white hover:bg-zinc-50/50 active:border-purple-200 sm:col-span-2 lg:col-span-4"
          >
            <dl class="px-6 pt-6">
              <dt class="text-2xl font-bold">50%</dt>
              <dd class="text-sm font-medium text-slate-500">
                Courses Completion
              </dd>
            </dl>
            <div class="-m-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1600 900"
                fill="currentColor"
                class="w-auto text-purple-100"
              >
                <path
                  d="M0 1000h114.286V192.127q0-4-4-4H4q-4 0-4 4Zm142.857 0h114.286V344.652q0-4-4-4H146.857q-4 0-4 4Zm142.857 0H400V471.35q0-4-4-4H289.714q-4 0-4 4Zm142.857 0h114.286V682.95q0-4-4-4H432.571q-4 0-4 4Zm142.858 0h114.285V503.005q0-4-4-4H575.43q-4 0-4 4Zm142.857 0H828.57V548.415q0-4-4-4H718.286q-4 0-4 4Zm142.857 0h114.286V774.679q0-4-4-4H861.143q-4 0-4 4Zm142.857 0h114.286V129.482q0-4-4-4H1004q-4 0-4 4Zm142.857 0h114.286V640.862q0-4-4-4h-106.286q-4 0-4 4Zm142.857 0H1400V465.367q0-4-4-4h-106.286q-4 0-4 4Zm142.857 0h114.286V604.912q0-4-4-4h-106.286q-4 0-4 4Zm142.858 0h114.285V595.61q0-4-4-4H1575.43q-4 0-4 4Zm142.857 0h114.285V125.72q0-4-4-4h-106.285q-4 0-4 4Zm142.857 0h114.286V319.097q0-4-4-4h-106.286q-4 0-4 4Z"
                />
              </svg>
            </div>
          </a>
          <!-- END Charts -->

          <!-- Servers -->
          <div
            class="flex flex-col rounded-lg border bg-white sm:col-span-2 lg:col-span-12"
          >
            <div
              class="flex flex-col items-center justify-between gap-4 border-b border-zinc-100 p-5 text-center sm:flex-row sm:text-start"
            >
              <div>
                <h2 class="mb-0.5 font-semibold">All Instructors</h2>
                <h3 class="text-sm font-medium text-zinc-600">
                  You have 3 active instructors.
                </h3>
              </div>
              <div>
                <a
                  href="javascript:void(0)"
                  class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-purple-600 bg-purple-600 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-purple-700 hover:bg-purple-700 active:border-purple-600 active:bg-purple-600"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    data-slot="icon"
                    class="hi-mini hi-plus inline-block size-5 opacity-50"
                  >
                    <path
                      d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"
                    />
                  </svg>
                  <span>New instructor</span>
                </a>
              </div>
            </div>
            <div class="p-5">
              <!-- Responsive Table Container -->
              <div class="min-w-full overflow-x-auto rounded">
                <!-- Alternate Responsive Table -->
                <table class="min-w-full align-middle text-sm">
                  <!-- Table Header -->
                  <thead>
                    <tr class="border-b-2 border-zinc-100">
                      <th
                        class="min-w-[140px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      >
                        Name
                      </th>
                      <th
                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      >
                        Status
                      </th>
                      <th
                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      >
                        Courses_Count
                      </th>
                      <th
                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      >
                        category
                      </th>
                      <th
                        class="px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      >
                         Enrollment_count
                      </th>
                      <th
                        class="min-w-[100px] p-3 py-2 text-end text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      ></th>
                    </tr>
                  </thead>
                  <!-- END Table Header -->

                  <!-- Table Body -->
                  <tbody>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          projects-main
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Running</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          Pro 12GB
                        </a>
                      </td>
                      <td class="p-3 text-start">101.33.115.78</td>
                      <td
                        class="whitespace-nowrap p-3 font-medium text-zinc-600"
                      >
                        New York (USA)
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-arrow-path inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M13.836 2.477a.75.75 0 0 1 .75.75v3.182a.75.75 0 0 1-.75.75h-3.182a.75.75 0 0 1 0-1.5h1.37l-.84-.841a4.5 4.5 0 0 0-7.08.932.75.75 0 0 1-1.3-.75 6 6 0 0 1 9.44-1.242l.842.84V3.227a.75.75 0 0 1 .75-.75Zm-.911 7.5A.75.75 0 0 1 13.199 11a6 6 0 0 1-9.44 1.241l-.84-.84v1.371a.75.75 0 0 1-1.5 0V9.591a.75.75 0 0 1 .75-.75H5.35a.75.75 0 0 1 0 1.5H3.98l.841.841a4.5 4.5 0 0 0 7.08-.932.75.75 0 0 1 1.025-.273Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Restart</span>
                        </a>
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Settings</span>
                        </a>
                      </td>
                    </tr>
                    
                  </tbody>
                  <!-- END Table Body -->
                </table>
                <!-- END Alternate Responsive Table -->
              </div>
              <!-- END Responsive Table Container -->
            </div>
          </div>
          <!-- END Servers -->

          <!-- Domains -->
          <div
            class="flex flex-col rounded-lg border bg-white sm:col-span-2 lg:col-span-12"
          >
            <div
              class="flex flex-col items-center justify-between gap-4 border-b border-zinc-100 p-5 text-center sm:flex-row sm:text-start"
            >
              <div>
                <h2 class="mb-0.5 font-semibold">All Learners</h2>
                <h3 class="text-sm font-medium text-zinc-600">
                  You have 10 active learners.
                </h3>
              </div>
              <div>
                <a
                  href="javascript:void(0)"
                  class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-purple-600 bg-purple-600 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-purple-700 hover:bg-purple-700 active:border-purple-600 active:bg-purple-600"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    data-slot="icon"
                    class="hi-mini hi-plus inline-block size-5 opacity-50"
                  >
                    <path
                      d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"
                    />
                  </svg>
                  <span>New Learner</span>
                </a>
              </div>
            </div>
            <div class="p-5">
              <!-- Responsive Table Container -->
              <div class="min-w-full overflow-x-auto rounded">
                <!-- Alternate Responsive Table -->
                <table class="min-w-full align-middle text-sm">
                  <!-- Table Header -->
                  <thead>
                    <tr class="border-b-2 border-zinc-100">
                      <th
                        class="min-w-[140px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      >
                        Learner
                      </th>
                      <th
                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      >
                        Status
                      </th>
                      <th
                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      >
                        Global Progression
                      </th>
                      <th
                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      >
                        Expiration
                      </th>
                      <th
                        class="min-w-[100px] p-3 py-2 text-end text-sm font-semibold uppercase tracking-wider text-zinc-700"
                      ></th>
                    </tr>
                  </thead>
                  <!-- END Table Header -->

                  <!-- Table Body -->
                  <tbody>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          example.com
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Active</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="size-4 rounded border border-zinc-200 text-blue-500 focus:border-blue-500 focus:ring focus:ring-blue-500/50 dark:border-zinc-600 dark:bg-zinc-800 dark:ring-offset-zinc-900 dark:checked:border-transparent dark:checked:bg-blue-500 dark:focus:border-blue-500"
                            checked
                          />
                          <span class="ml-2">Enable</span>
                        </label>
                      </td>
                      <td class="p-3 text-start text-zinc-600">
                        in 2 years
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Manage</span>
                        </a>
                      </td>
                    </tr>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          example2.com
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Active</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="size-4 rounded border border-zinc-200 text-blue-500 focus:border-blue-500 focus:ring focus:ring-blue-500/50 dark:border-zinc-600 dark:bg-zinc-800 dark:ring-offset-zinc-900 dark:checked:border-transparent dark:checked:bg-blue-500 dark:focus:border-blue-500"
                            checked
                          />
                          <span class="ml-2">Enable</span>
                        </label>
                      </td>
                      <td class="p-3 text-start text-zinc-600">
                        in 2 years
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Manage</span>
                        </a>
                      </td>
                    </tr>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          example3.com
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Active</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="size-4 rounded border border-zinc-200 text-blue-500 focus:border-blue-500 focus:ring focus:ring-blue-500/50 dark:border-zinc-600 dark:bg-zinc-800 dark:ring-offset-zinc-900 dark:checked:border-transparent dark:checked:bg-blue-500 dark:focus:border-blue-500"
                            checked
                          />
                          <span class="ml-2">Enable</span>
                        </label>
                      </td>
                      <td class="p-3 text-start text-zinc-600">
                        in 5 years
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Manage</span>
                        </a>
                      </td>
                    </tr>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          example4.com
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Active</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="size-4 rounded border border-zinc-200 text-blue-500 focus:border-blue-500 focus:ring focus:ring-blue-500/50 dark:border-zinc-600 dark:bg-zinc-800 dark:ring-offset-zinc-900 dark:checked:border-transparent dark:checked:bg-blue-500 dark:focus:border-blue-500"
                            checked
                          />
                          <span class="ml-2">Enable</span>
                        </label>
                      </td>
                      <td class="p-3 text-start text-zinc-600">
                        in 5 years
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Manage</span>
                        </a>
                      </td>
                    </tr>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          example5.com
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Active</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="size-4 rounded border border-zinc-200 text-blue-500 focus:border-blue-500 focus:ring focus:ring-blue-500/50 dark:border-zinc-600 dark:bg-zinc-800 dark:ring-offset-zinc-900 dark:checked:border-transparent dark:checked:bg-blue-500 dark:focus:border-blue-500"
                            checked
                          />
                          <span class="ml-2">Enable</span>
                        </label>
                      </td>
                      <td class="p-3 text-start text-zinc-600">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium text-orange-500"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-exclamation-triangle inline-block size-4"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.701 2.25c.577-1 2.02-1 2.598 0l5.196 9a1.5 1.5 0 0 1-1.299 2.25H2.804a1.5 1.5 0 0 1-1.3-2.25l5.197-9ZM8 4a.75.75 0 0 1 .75.75v3a.75.75 0 1 1-1.5 0v-3A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>in 1 week!</span>
                        </div>
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Manage</span>
                        </a>
                      </td>
                    </tr>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          example6.com
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Active</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="size-4 rounded border border-zinc-200 text-blue-500 focus:border-blue-500 focus:ring focus:ring-blue-500/50 dark:border-zinc-600 dark:bg-zinc-800 dark:ring-offset-zinc-900 dark:checked:border-transparent dark:checked:bg-blue-500 dark:focus:border-blue-500"
                            checked
                          />
                          <span class="ml-2">Enable</span>
                        </label>
                      </td>
                      <td class="p-3 text-start text-zinc-600">
                        in 1 year
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Manage</span>
                        </a>
                      </td>
                    </tr>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          example7.com
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Active</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="size-4 rounded border border-zinc-200 text-blue-500 focus:border-blue-500 focus:ring focus:ring-blue-500/50 dark:border-zinc-600 dark:bg-zinc-800 dark:ring-offset-zinc-900 dark:checked:border-transparent dark:checked:bg-blue-500 dark:focus:border-blue-500"
                            checked
                          />
                          <span class="ml-2">Enable</span>
                        </label>
                      </td>
                      <td class="p-3 text-start text-zinc-600">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium text-orange-500"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-exclamation-triangle inline-block size-4"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.701 2.25c.577-1 2.02-1 2.598 0l5.196 9a1.5 1.5 0 0 1-1.299 2.25H2.804a1.5 1.5 0 0 1-1.3-2.25l5.197-9ZM8 4a.75.75 0 0 1 .75.75v3a.75.75 0 1 1-1.5 0v-3A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>in 3 days!</span>
                        </div>
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Manage</span>
                        </a>
                      </td>
                    </tr>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          example8.com
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Active</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="size-4 rounded border border-zinc-200 text-blue-500 focus:border-blue-500 focus:ring focus:ring-blue-500/50 dark:border-zinc-600 dark:bg-zinc-800 dark:ring-offset-zinc-900 dark:checked:border-transparent dark:checked:bg-blue-500 dark:focus:border-blue-500"
                            checked
                          />
                          <span class="ml-2">Enable</span>
                        </label>
                      </td>
                      <td class="p-3 text-start text-zinc-600">
                        in 2 years
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Manage</span>
                        </a>
                      </td>
                    </tr>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          example9.com
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Active</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="size-4 rounded border border-zinc-200 text-blue-500 focus:border-blue-500 focus:ring focus:ring-blue-500/50 dark:border-zinc-600 dark:bg-zinc-800 dark:ring-offset-zinc-900 dark:checked:border-transparent dark:checked:bg-blue-500 dark:focus:border-blue-500"
                            checked
                          />
                          <span class="ml-2">Enable</span>
                        </label>
                      </td>
                      <td class="p-3 text-start text-zinc-600">
                        in 6 months
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Manage</span>
                        </a>
                      </td>
                    </tr>
                    <tr class="border-b border-zinc-100 hover:bg-zinc-50">
                      <td
                        class="p-3 text-start font-semibold text-zinc-600"
                      >
                        <a
                          href="javascript:void(0)"
                          class="underline decoration-zinc-200 decoration-2 underline-offset-4 hover:text-zinc-950 hover:decoration-zinc-300"
                        >
                          example10.com
                        </a>
                      </td>
                      <td class="p-3 text-start">
                        <div
                          class="inline-flex items-center gap-1.5 font-medium"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-check-circle inline-block size-5 text-emerald-500"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Active</span>
                        </div>
                      </td>
                      <td class="p-3 font-medium text-zinc-600">
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="size-4 rounded border border-zinc-200 text-blue-500 focus:border-blue-500 focus:ring focus:ring-blue-500/50 dark:border-zinc-600 dark:bg-zinc-800 dark:ring-offset-zinc-900 dark:checked:border-transparent dark:checked:bg-blue-500 dark:focus:border-blue-500"
                            checked
                          />
                          <span class="ml-2">Enable</span>
                        </label>
                      </td>
                      <td class="p-3 text-start text-zinc-600">
                        in 6 months
                      </td>
                      <td
                        class="whitespace-nowrap p-3 text-end font-medium"
                      >
                        <a
                          href="javascript:void(0)"
                          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-950 active:border-zinc-200"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-micro hi-cog-6-tooth inline-block size-4 opacity-50"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          <span>Manage</span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                  <!-- END Table Body -->
                </table>
                <!-- END Alternate Responsive Table -->
              </div>
              <!-- END Responsive Table Container -->
            </div>
          </div>
          <!-- END Domains -->
        </div>
      </div>
      <!-- END Page Section -->
    </main>
    <!-- END Page Content -->

   
  </div>
  <!-- END Page Container -->
</div>