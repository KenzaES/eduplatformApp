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
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- Favicon -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    </head>

    <body class="flex bg-gray-100 min-h-screen">
        <aside class="hidden sm:flex sm:flex-col">
          <a href="#" class="inline-flex items-center justify-center h-20 w-20 custom-gradientReg  hover:bg-blue-200 focus:bg-blue-500">  
             <svg class="h-20 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><g id="freepik--background-complete--inject-21"><rect y="382.4" width="500" height="0.25" style="fill:#ebebeb"></rect><rect x="416.78" y="398.49" width="33.12" height="0.25" style="fill:#ebebeb"></rect><rect x="322.53" y="401.21" width="8.69" height="0.25" style="fill:#ebebeb"></rect><rect x="396.59" y="389.21" width="19.19" height="0.25" style="fill:#ebebeb"></rect><rect x="52.46" y="390.89" width="43.19" height="0.25" style="fill:#ebebeb"></rect><rect x="104.56" y="390.89" width="6.33" height="0.25" style="fill:#ebebeb"></rect><rect x="131.47" y="395.11" width="93.68" height="0.25" style="fill:#ebebeb"></rect><path d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z" style="fill:#ebebeb"></path><path d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z" style="fill:#ebebeb"></path><path d="M296.76,75.34l-.85,1.71a.68.68,0,0,1-.51.37l-1.89.28a.68.68,0,0,0-.38,1.16l1.37,1.34a.7.7,0,0,1,.2.6l-.33,1.88a.68.68,0,0,0,1,.72l1.69-.89a.72.72,0,0,1,.64,0l1.69.89a.68.68,0,0,0,1-.72l-.32-1.88a.64.64,0,0,1,.2-.6l1.36-1.34a.68.68,0,0,0-.38-1.16l-1.89-.28a.68.68,0,0,1-.51-.37L298,75.34A.68.68,0,0,0,296.76,75.34Z" style="fill:#f5f5f5"></path><path d="M275.3,358.19l-.84,1.72a.69.69,0,0,1-.52.37l-1.89.28a.68.68,0,0,0-.38,1.16l1.37,1.33a.7.7,0,0,1,.2.61l-.33,1.88a.69.69,0,0,0,1,.72l1.69-.89a.7.7,0,0,1,.63,0l1.69.89a.68.68,0,0,0,1-.72l-.32-1.88a.7.7,0,0,1,.2-.61l1.37-1.33a.68.68,0,0,0-.38-1.16l-1.89-.28a.67.67,0,0,1-.52-.37l-.84-1.72A.69.69,0,0,0,275.3,358.19Z" style="fill:#f0f0f0"></path><path d="M424.34,250.38l-.85,1.71a.69.69,0,0,1-.51.38l-1.89.27a.69.69,0,0,0-.38,1.17l1.37,1.33a.68.68,0,0,1,.19.61l-.32,1.88a.68.68,0,0,0,1,.72l1.69-.89a.66.66,0,0,1,.64,0l1.69.89a.68.68,0,0,0,1-.72l-.32-1.88a.68.68,0,0,1,.19-.61l1.37-1.33a.69.69,0,0,0-.38-1.17l-1.89-.27a.69.69,0,0,1-.51-.38l-.85-1.71A.68.68,0,0,0,424.34,250.38Z" style="fill:#f0f0f0"></path><path d="M215.24,306.67l-.51,1a.4.4,0,0,1-.3.22l-1.13.16a.41.41,0,0,0-.23.7l.82.8a.4.4,0,0,1,.11.36l-.19,1.12a.4.4,0,0,0,.59.43l1-.53a.42.42,0,0,1,.38,0l1,.53a.41.41,0,0,0,.6-.43l-.2-1.12a.43.43,0,0,1,.12-.36l.82-.8a.41.41,0,0,0-.23-.7l-1.13-.16a.4.4,0,0,1-.3-.22l-.51-1A.41.41,0,0,0,215.24,306.67Z" style="fill:#f0f0f0"></path><path d="M329.68,306.67l-.51,1a.4.4,0,0,1-.3.22l-1.13.16a.41.41,0,0,0-.23.7l.82.8a.43.43,0,0,1,.12.36l-.2,1.12a.41.41,0,0,0,.59.43l1-.53a.42.42,0,0,1,.38,0l1,.53a.4.4,0,0,0,.59-.43l-.19-1.12a.4.4,0,0,1,.11-.36l.82-.8a.41.41,0,0,0-.23-.7l-1.13-.16a.4.4,0,0,1-.3-.22l-.51-1A.41.41,0,0,0,329.68,306.67Z" style="fill:#f5f5f5"></path><path d="M77.73,76.9l-.51,1a.38.38,0,0,1-.31.22l-1.13.17a.41.41,0,0,0-.22.7l.81.79a.41.41,0,0,1,.12.36l-.19,1.13a.41.41,0,0,0,.59.43l1-.53a.42.42,0,0,1,.38,0l1,.53a.41.41,0,0,0,.59-.43l-.19-1.13a.41.41,0,0,1,.12-.36l.82-.79a.41.41,0,0,0-.23-.7l-1.13-.17a.39.39,0,0,1-.31-.22l-.5-1A.4.4,0,0,0,77.73,76.9Z" style="fill:#f5f5f5"></path><path d="M86.42,265.63l-.88,1.77a.68.68,0,0,1-.53.38l-2,.29a.7.7,0,0,0-.39,1.2l1.41,1.38a.7.7,0,0,1,.2.63l-.33,2a.71.71,0,0,0,1,.74l1.74-.92a.7.7,0,0,1,.66,0l1.75.92a.71.71,0,0,0,1-.74l-.34-2a.71.71,0,0,1,.21-.63l1.41-1.38a.7.7,0,0,0-.39-1.2l-2-.29a.68.68,0,0,1-.53-.38l-.87-1.77A.71.71,0,0,0,86.42,265.63Z" style="fill:#f0f0f0"></path><path d="M193.54,99.89a1.33,1.33,0,1,0,1.32-1.33A1.32,1.32,0,0,0,193.54,99.89Z" style="fill:#f0f0f0"></path><circle cx="156.69" cy="357.67" r="1.33" style="fill:#f5f5f5"></circle><path d="M107.05,133.14A125.3,125.3,0,0,1,86.59,125a25.61,25.61,0,0,0,42,12.75A125.27,125.27,0,0,1,107.05,133.14Z" style="fill:#f5f5f5"></path><path d="M111.42,116.83c9.08,2.76,19.34,1,25.48,4.52a25.61,25.61,0,0,0-48.07-14.62C95.87,107.26,102.34,114.07,111.42,116.83Z" style="fill:#f5f5f5"></path><path d="M72.86,107.07c-1.15,3.77,15.19,12.07,36.49,18.54s39.49,8.67,40.63,4.91S134.79,118.45,113.49,112,74,103.31,72.86,107.07Z" style="fill:#f5f5f5"></path><path d="M392.12,206.43a68.11,68.11,0,0,1-118,26.83v0a68.14,68.14,0,0,1-15.93-40.13,66.91,66.91,0,0,1,.67-13.88,69.08,69.08,0,0,1,1.42-6.95,68.11,68.11,0,0,1,132.48,31.56C392.55,204.71,392.34,205.57,392.12,206.43Z" style="fill:#ebebeb"></path><path d="M429.3,147.27a11.14,11.14,0,0,1-19.3,4.39h0a11.16,11.16,0,0,1-2.6-6.56,10.84,10.84,0,0,1,.11-2.27,11.5,11.5,0,0,1,.23-1.14,11.14,11.14,0,0,1,21.67,5.16C429.37,147,429.34,147.13,429.3,147.27Z" style="fill:#ebebeb"></path><path d="M392.73,203.84l-3.11-3.93L385,212l-6.62-9.15-3.55-13.81-15.2-9.21,1.87,4.1,8.43,3.84,4,8-12.64-.47L348,183l8.2,13.58,6.44,5.08L357.1,205l-9.75,13.39.81,5.77s-8,5.77-8.87,6-17.8,11.31-17.8,11.31L328,218.93l-.17-17.13-16,.88L298.8,191.59l8.76-18.47,6.55-3.45,6.67,1.73,22.28,8.19-.1-4.05-12.6-12-8.1-1.47L315.75,165,312,164l6.5-8.16,6-2.66,13.59-3.56,10.15,3.67L363.71,156s12.7-3.31,18.82-4.93A67.86,67.86,0,0,1,392.73,203.84Z" style="fill:#fafafa"></path><path d="M345,254.84a68.15,68.15,0,0,1-70.88-21.58l9.66,5.11,8.78,7.3,23.17,6,19.66.07Z" style="fill:#fafafa"></path><polygon points="309.3 127.48 302.24 128.99 306.05 134.86 302.76 147.56 331.35 142.74 332.59 137.95 323.32 135.11 309.3 127.48" style="fill:#fafafa"></polygon><path d="M299.24,140.61l-4.67,9.88L284,155.91l-11.49,4.77L267,166.39l-4.52-1.17a67.86,67.86,0,0,1,32.35-36.33Z" style="fill:#fafafa"></path><path d="M286.58,206.43l-8.26,6-.34,6.19-.92,3.53-.49,5.95-2.49-1.69-4.75-9.19-4-14.53-5.41-8.21-1.78-1.4a66.91,66.91,0,0,1,.67-13.88l2.1,2.55,9.29-1.1,8.24,2.13,1.8,7.62,3.26,6.83L291,201.4Z" style="fill:#fafafa"></path></g><g id="freepik--Shadow--inject-21"><ellipse id="freepik--path--inject-21" cx="250" cy="416.24" rx="193.89" ry="11.32" style="fill:#f5f5f5"></ellipse></g><g id="freepik--Character--inject-21"><path d="M229.86,169c3.79-2.42,6-7.34,9-10.62,6-6.51,15.27-17.14,16.67-23.18l-23.28-8L224.54,146c-1.63,4.36-8.89,10.73-12.92,12.8-2.36,1.23-4.94,2.32-7.56,3.41-5.26,2.12-10.91,4-16.38,5.89l1.38,9.93a93.76,93.76,0,0,0,9.54-.4c3.15-.3,6.31-.7,9.47-1.3a80.78,80.78,0,0,0,9.6-2.35C220.91,173,226.52,171.12,229.86,169Z" style="fill:#90CAF9"></path><path d="M229.86,169c3.79-2.42,6-7.34,9-10.62,6-6.51,15.27-17.14,16.67-23.18l-23.28-8L224.54,146c-1.63,4.36-8.89,10.73-12.92,12.8-2.36,1.23-4.94,2.32-7.56,3.41-5.26,2.12-10.91,4-16.38,5.89l1.38,9.93a93.76,93.76,0,0,0,9.54-.4c3.15-.3,6.31-.7,9.47-1.3a80.78,80.78,0,0,0,9.6-2.35C220.91,173,226.52,171.12,229.86,169Z" style="fill:#fff;opacity:0.8"></path><path d="M205.56,178.14l-4.22-15.91s-24.45,4.46-25.23,11.23C175.31,180.46,192.33,180.29,205.56,178.14Z" style="fill:#263238"></path><path d="M188,169.85l3.54-5s-12.42-1.57-12.75.42C178.38,168,182.07,169.86,188,169.85Z" style="fill:#263238"></path><path d="M300.65,276.35a1.12,1.12,0,0,1-.71-.25c-4.83-3.86-20.16-17.53-15-31.2,4.22-11.22,14.46-20.67,26.7-24.68a94.43,94.43,0,0,1,14.37-3.1c3.29-.53,6.69-1.08,9.94-1.86,14.95-3.59,22.48-13.46,19.65-25.76-1.29-5.57-4.74-10.07-8.4-14.84-2.91-3.78-5.9-7.69-7.71-12.17,0,0,0-.08,0-.12-1.71-6.11.72-12,3.08-17.66.55-1.33,1.07-2.59,1.55-3.86,2-5.43,3.85-11.27,3.54-17.17-.37-7-5.06-14.56-11.94-19.15-10.75-7.19-30.59-13.61-39-4.58a27.68,27.68,0,0,0-2,2.56,25.84,25.84,0,0,1-2.82,3.37A15.46,15.46,0,0,1,279,109.72a15.75,15.75,0,0,1-11.3-8.2,1.13,1.13,0,0,1,.52-1.52,1.14,1.14,0,0,1,1.53.52,13.14,13.14,0,0,0,20.51,3.7,24.22,24.22,0,0,0,2.56-3.07A30.94,30.94,0,0,1,295,98.4c10.34-11.08,32.73-1.93,42,4.23,7.45,5,12.54,13.2,12.95,20.93.33,6.32-1.57,12.43-3.69,18.09-.48,1.31-1,2.64-1.57,3.94-2.2,5.3-4.48,10.77-3,16.11,1.69,4.17,4.58,7.93,7.38,11.57,3.64,4.75,7.41,9.66,8.81,15.72,3.09,13.45-5.28,24.63-21.34,28.49-3.33.8-6.77,1.36-10.1,1.89a92.43,92.43,0,0,0-14,3c-11.6,3.79-21.29,12.73-25.28,23.31-4.61,12.24,9.78,25,14.3,28.62a1.14,1.14,0,0,1-.71,2Z" style="fill:#90CAF9"></path><path d="M300.65,276.35a1.12,1.12,0,0,1-.71-.25c-4.83-3.86-20.16-17.53-15-31.2,4.22-11.22,14.46-20.67,26.7-24.68a94.43,94.43,0,0,1,14.37-3.1c3.29-.53,6.69-1.08,9.94-1.86,14.95-3.59,22.48-13.46,19.65-25.76-1.29-5.57-4.74-10.07-8.4-14.84-2.91-3.78-5.9-7.69-7.71-12.17,0,0,0-.08,0-.12-1.71-6.11.72-12,3.08-17.66.55-1.33,1.07-2.59,1.55-3.86,2-5.43,3.85-11.27,3.54-17.17-.37-7-5.06-14.56-11.94-19.15-10.75-7.19-30.59-13.61-39-4.58a27.68,27.68,0,0,0-2,2.56,25.84,25.84,0,0,1-2.82,3.37A15.46,15.46,0,0,1,279,109.72a15.75,15.75,0,0,1-11.3-8.2,1.13,1.13,0,0,1,.52-1.52,1.14,1.14,0,0,1,1.53.52,13.14,13.14,0,0,0,20.51,3.7,24.22,24.22,0,0,0,2.56-3.07A30.94,30.94,0,0,1,295,98.4c10.34-11.08,32.73-1.93,42,4.23,7.45,5,12.54,13.2,12.95,20.93.33,6.32-1.57,12.43-3.69,18.09-.48,1.31-1,2.64-1.57,3.94-2.2,5.3-4.48,10.77-3,16.11,1.69,4.17,4.58,7.93,7.38,11.57,3.64,4.75,7.41,9.66,8.81,15.72,3.09,13.45-5.28,24.63-21.34,28.49-3.33.8-6.77,1.36-10.1,1.89a92.43,92.43,0,0,0-14,3c-11.6,3.79-21.29,12.73-25.28,23.31-4.61,12.24,9.78,25,14.3,28.62a1.14,1.14,0,0,1-.71,2Z" style="fill:#fff;opacity:0.7000000000000001"></path><path d="M233,151.68c-1.29,2.15-1.58,9-.92,15.48,2.56-2.58,4.42-6.21,6.8-8.81l.5-.54C236.74,154.09,233.74,150.36,233,151.68Z" style="opacity:0.2"></path><path d="M232.23,127.12s-6,24.49,11.06,65L289,184c-.78-6.23-10.6-34.5-9-64.78a68.8,68.8,0,0,0-15.54,0A194.91,194.91,0,0,0,245,122.69,98,98,0,0,0,232.23,127.12Z" style="fill:#90CAF9"></path><path d="M232.23,127.12s-6,24.49,11.06,65L289,184c-.78-6.23-10.6-34.5-9-64.78a68.8,68.8,0,0,0-15.54,0A194.91,194.91,0,0,0,245,122.69,98,98,0,0,0,232.23,127.12Z" style="fill:#fff;opacity:0.8"></path><path d="M274.71,142.09a40.7,40.7,0,0,0,6.8,6.72c-.3-2.09-.58-4.23-.81-6.41Z" style="opacity:0.2"></path><path d="M243.29,192.17s-23.16,26.9-21.27,50.12c2,24.16,27.14,63.75,27.14,63.75l15.28-7.66s-10-41.61-17.76-53.7c8.46-14.09,19.63-30.91,27.34-56.7C259.9,190.5,243.29,192.17,243.29,192.17Z" style="fill:#90CAF9"></path><path d="M243.29,192.17s-23.16,26.9-21.27,50.12c2,24.16,27.14,63.75,27.14,63.75l15.28-7.66s-10-41.61-17.76-53.7c8.46-14.09,19.63-30.91,27.34-56.7C259.9,190.5,243.29,192.17,243.29,192.17Z" style="fill:#fff;opacity:0.8"></path><path d="M265,206.25c-4.2,3.17-6.76,12.49-6.83,19a193.6,193.6,0,0,0,9.55-19.62A3.38,3.38,0,0,0,265,206.25Z" style="opacity:0.2"></path><path d="M249.57,304.6l13-7.93a1,1,0,0,1,1.23.29l5.55,9.58a1.77,1.77,0,0,1-.35,2.71c-3.83,2-4.12,1.82-8.89,4.44-2.93,1.62-8.79,5.29-12.84,7.52s-6.83-1.76-5.63-3.32c4.45-5.75,5.68-8,6.73-11.76A2.51,2.51,0,0,1,249.57,304.6Z" style="fill:#90CAF9"></path><path d="M249.57,304.6l13-7.93a1,1,0,0,1,1.23.29l5.55,9.58a1.77,1.77,0,0,1-.35,2.71c-3.83,2-4.12,1.82-8.89,4.44-2.93,1.62-8.79,5.29-12.84,7.52s-6.83-1.76-5.63-3.32c4.45-5.75,5.68-8,6.73-11.76A2.51,2.51,0,0,1,249.57,304.6Z" style="fill:#fff;opacity:0.8"></path><polygon points="351.33 319.64 275.15 397.65 262.04 371.07 324.45 307.16 351.33 319.64" style="fill:#90CAF9"></polygon><polygon points="351.33 319.64 275.15 397.65 262.04 371.07 324.45 307.16 351.33 319.64" style="opacity:0.4"></polygon><polygon points="342.41 337.56 292.86 388.31 270.67 357.68 311.27 316.11 342.41 337.56" style="fill:#90CAF9"></polygon><polygon points="342.41 337.56 292.86 388.31 270.67 357.68 311.27 316.11 342.41 337.56" style="opacity:0.30000000000000004"></polygon><path d="M202.41,321.37s19.5,20.77,36.25,38.84a19.92,19.92,0,0,1,4.21,19.38c-3.87,13,1.8,35.93,1.8,35.93C226.14,399.72,176.38,385.9,202.41,321.37Z" style="fill:#90CAF9"></path><path d="M202.41,321.37s19.5,20.77,36.25,38.84a19.92,19.92,0,0,1,4.21,19.38c-3.87,13,1.8,35.93,1.8,35.93C226.14,399.72,176.38,385.9,202.41,321.37Z" style="opacity:0.30000000000000004"></path><path d="M273.35,248.73s21.23,19,39.69,35.32a19.93,19.93,0,0,0,19.47,3.75c12.86-4.18,36,.95,36,.95C352.24,270.6,337.25,221.18,273.35,248.73Z" style="fill:#90CAF9"></path><path d="M273.35,248.73s21.23,19,39.69,35.32a19.93,19.93,0,0,0,19.47,3.75c12.86-4.18,36,.95,36,.95C352.24,270.6,337.25,221.18,273.35,248.73Z" style="opacity:0.30000000000000004"></path><path d="M224.7,198.66c-41.75-36.35-86.82-47.65-105-29s-5.81,63.42,31.51,104.29l92.6,101.4a19.82,19.82,0,0,0,28.8.48l56.83-58.19a19.81,19.81,0,0,0-1.17-28.78Z" style="fill:#90CAF9"></path><path d="M273.79,360.51a3.65,3.65,0,0,1,1,5.8h0c-6.1,6.3-17.65,4.7-25.26-3.51l-91.87-99c-18.46-19.89-31.59-40-38.39-56.89-2-5,4.94-8.51,7.83-4,9.21,14.39,22.94,31.57,40.13,49.48L263.93,353A37.72,37.72,0,0,0,273.79,360.51Z" style="fill:#fff;opacity:0.1"></path><path d="M158.1,162.29c-9.34-.34-21.07,5-30.71,14.86s-14.68,21.72-14.13,31.06c-3.77-16.35-1.8-30.14,6.43-38.58S141.67,158.9,158.1,162.29Z" style="opacity:0.1"></path><circle cx="189.7" cy="238" r="35.47" transform="translate(-4.72 3.84) rotate(-1.14)" style="opacity:0.30000000000000004"></circle><circle cx="188.51" cy="236.84" r="35.47" transform="translate(-114.18 239.15) rotate(-51.92)" style="fill:#fff"></circle><circle cx="188.51" cy="236.84" r="32.09" transform="translate(-113.89 223.33) rotate(-48.92)" style="fill:#90CAF9;opacity:0.7000000000000001"></circle><g style="opacity:0.2"><path d="M165.56,214.41a31.67,31.67,0,0,0-7,10.87h0l15.36,40.14a32.13,32.13,0,0,0,20.12,3L171.54,209.6A32,32,0,0,0,165.56,214.41Z" style="fill:#fff"></path><path d="M173.9,208.27l22.79,59.59a32.15,32.15,0,0,0,9.84-4.45L184.23,205A31.37,31.37,0,0,0,173.9,208.27Z" style="fill:#fff"></path></g><path d="M308.89,307.4l6.79-13.55a1,1,0,0,1,1.19-.4l9.6,4.5a1.77,1.77,0,0,1,1.14,2.48c-2.16,3.72-2.33,4.38-5,9.11-1.62,2.91-4.63,9.1-6.87,13.12s-6.71,2.11-6.52.16c.71-7.21.53-9.79-.56-13.49A2.48,2.48,0,0,1,308.89,307.4Z" style="fill:#90CAF9"></path><path d="M308.89,307.4l6.79-13.55a1,1,0,0,1,1.19-.4l9.6,4.5a1.77,1.77,0,0,1,1.14,2.48c-2.16,3.72-2.33,4.38-5,9.11-1.62,2.91-4.63,9.1-6.87,13.12s-6.71,2.11-6.52.16c.71-7.21.53-9.79-.56-13.49A2.48,2.48,0,0,1,308.89,307.4Z" style="fill:#fff;opacity:0.8"></path><path d="M259.49,189.29s.09,42.56,9.24,63.13C278.75,275,309.51,310,309.51,310l11.6-11.65s-14.63-32-28.21-49.11c-.28-21.08,2-44.08-3.6-63.19A201,201,0,0,1,259.49,189.29Z" style="fill:#90CAF9"></path><path d="M259.49,189.29s.09,42.56,9.24,63.13C278.75,275,309.51,310,309.51,310l11.6-11.65s-14.63-32-28.21-49.11c-.28-21.08,2-44.08-3.6-63.19A201,201,0,0,1,259.49,189.29Z" style="fill:#fff;opacity:0.8"></path><path d="M287.82,189.31c-21.21,4.9-37.18,5.4-43.69,5.35a3,3,0,0,1-3-3.21h0a3,3,0,0,1,3.05-2.86,189.74,189.74,0,0,0,42.29-5.19,3,3,0,0,1,3.62,2.23h0A3,3,0,0,1,287.82,189.31Z" style="fill:#263238"></path><path d="M311.34,144.94c-1.8-4.13-4.3-6.87-7.67-9.77C297,129.4,286,120.46,280,119.26l-7.29,23.53,19.16,7.07c3.79,2.7,4.64,4.48,5.76,8.87.67,2.58,1.16,5.33,1.64,8.13.89,5.59,1.51,11.54,2.1,17.28l10,.86a93,93,0,0,0,1.73-9.39c.41-3.13.72-6.3.84-9.52a78,78,0,0,0-.16-9.88A35.81,35.81,0,0,0,311.34,144.94Z" style="fill:#90CAF9"></path><path d="M311.34,144.94c-1.8-4.13-4.3-6.87-7.67-9.77C297,129.4,286,120.46,280,119.26l-7.29,23.53,19.16,7.07c3.79,2.7,4.64,4.48,5.76,8.87.67,2.58,1.16,5.33,1.64,8.13.89,5.59,1.51,11.54,2.1,17.28l10,.86a93,93,0,0,0,1.73-9.39c.41-3.13.72-6.3.84-9.52a78,78,0,0,0-.16-9.88A35.81,35.81,0,0,0,311.34,144.94Z" style="fill:#fff;opacity:0.8"></path><path d="M314.38,169.47l-15.78,0s-1.09,24.84,5.33,27.1C310.57,198.94,313.53,182.85,314.38,169.47Z" style="fill:#263238"></path><path d="M303.06,184.18,299,179.62s-3.79,10.37-1.48,11.65S301.75,190,303.06,184.18Z" style="fill:#263238"></path><path d="M264.41,119.24A194.91,194.91,0,0,0,245,122.69c-2.45.64-4.81,1.41-6.84,2.12a27.49,27.49,0,0,0,13.65,1.34,20.85,20.85,0,0,0,4.77-1.39,32.61,32.61,0,0,0,12.1-5.9C267.27,118.93,265.83,119.05,264.41,119.24Z" style="opacity:0.2"></path><path d="M256.65,100.77c-.1,5.69.62,16,5.12,18.94,0,0,.06,2.49-9.24,4.12-7.59,1.33-7.85-1.08-7.85-1.08,5.87-2.56,4.9-7.08,3.07-11.16Z" style="fill:#ffb573"></path><path d="M253,105.18l-5.26,6.41a18.41,18.41,0,0,1,1.06,2.93c2.29-.75,5.05-3.89,4.86-6.39A8.54,8.54,0,0,0,253,105.18Z" style="opacity:0.2"></path><path d="M239.26,100.15c-2.69-3.65-5.73-8.94-4.42-11.56s6.77-4.15,9.25-2.23C247.2,88.79,244.93,96.34,239.26,100.15Z" style="fill:#263238"></path><path d="M257,93c.23,7.57.75,12-2.7,16.21-5.19,6.34-14.8,3.74-17.29-3.61C234.78,99,234.79,87.68,241.88,84A10.34,10.34,0,0,1,257,93Z" style="fill:#ffb573"></path><path d="M256.74,100.07c-3.36-3-7.39-7.63-6.62-10.46s5.81-5.41,8.62-4C262.27,87.35,261.54,95.21,256.74,100.07Z" style="fill:#263238"></path><path d="M253,89.14c-5.17,1.43-19.79,4.31-17.74-1.85s10.09-7.33,13-6,5.21-2.19,5.21-2.19c.42,1-1.81,3.75-5,4.2s13.78-2.5,9.33,3.54S253,89.14,253,89.14Z" style="fill:#263238"></path><path d="M261.17,101a7.16,7.16,0,0,1-4.18,3.57c-2.4.77-3.69-1.36-3.1-3.68.53-2.09,2.43-5,4.88-4.75A3.23,3.23,0,0,1,261.17,101Z" style="fill:#ffb573"></path><path d="M245.78,96.12c.06.61-.22,1.14-.62,1.18s-.77-.43-.83-1,.22-1.14.62-1.17S245.72,95.51,245.78,96.12Z" style="fill:#263238"></path><path d="M238.85,96.76c.06.61-.22,1.14-.62,1.17s-.78-.43-.83-1,.22-1.14.62-1.18S238.79,96.14,238.85,96.76Z" style="fill:#263238"></path><path d="M241.08,96.86a21.89,21.89,0,0,1-2.45,5.51,3.52,3.52,0,0,0,3,.28Z" style="fill:#ed893e"></path><path d="M246.6,102.94a5.36,5.36,0,0,1-3,1.24.18.18,0,0,1,0-.36,4.87,4.87,0,0,0,3.79-2.26.17.17,0,0,1,.24-.07.18.18,0,0,1,.08.24A4.69,4.69,0,0,1,246.6,102.94Z" style="fill:#263238"></path><path d="M247.86,93.61a.36.36,0,0,1-.5,0,2.88,2.88,0,0,0-2.41-1,.36.36,0,0,1-.42-.3.37.37,0,0,1,.3-.42,3.6,3.6,0,0,1,3.07,1.22.36.36,0,0,1,0,.51Z" style="fill:#263238"></path><path d="M235.8,94.57a.36.36,0,0,1-.36.06.35.35,0,0,1-.21-.46,3.61,3.61,0,0,1,2.4-2.27.36.36,0,1,1,.15.71,2.86,2.86,0,0,0-1.88,1.81A.4.4,0,0,1,235.8,94.57Z" style="fill:#263238"></path><path d="M273.51,97.88c2.34,12.37-4.91,24.07-16.34,26.81-.44.1-.89.19-1.34.27A21.92,21.92,0,0,1,240,121.61a19.47,19.47,0,1,0-6.47-34.84,21.56,21.56,0,0,1,8.66-6.88h0A21.41,21.41,0,0,1,247,78.46C259.21,76.34,271.07,85,273.51,97.88Z" style="fill:#90CAF9"></path><path d="M273.51,97.88c2.34,12.37-4.91,24.07-16.34,26.81-.44.1-.89.19-1.34.27A21.92,21.92,0,0,1,240,121.61a19.47,19.47,0,1,0-6.47-34.84,21.56,21.56,0,0,1,8.66-6.88h0A21.41,21.41,0,0,1,247,78.46C259.21,76.34,271.07,85,273.51,97.88Z" style="fill:#fff;opacity:0.8"></path><path d="M269,99.38c2.19,11.06-2.93,21.45-11.78,25.31a19.47,19.47,0,0,1-4.46,1.31c-7.22,1.18-14.38-1.85-19.33-7.44a19.47,19.47,0,1,0,.16-31.79,19,19,0,0,0-4.84,4.86,19.77,19.77,0,0,1,13.5-11.74h0c.43-.1.86-.18,1.29-.26C255,77.72,266.42,86.58,269,99.38Z" style="fill:#90CAF9"></path><path d="M269,99.38c2.19,11.06-2.93,21.45-11.78,25.31a19.47,19.47,0,0,1-4.46,1.31c-7.22,1.18-14.38-1.85-19.33-7.44a19.47,19.47,0,1,0,.16-31.79,19,19,0,0,0-4.84,4.86,19.77,19.77,0,0,1,13.5-11.74h0c.43-.1.86-.18,1.29-.26C255,77.72,266.42,86.58,269,99.38Z" style="fill:#fff;opacity:0.6000000000000001"></path><path d="M264.16,101.79a19.47,19.47,0,1,1-20.38-18.52A19.47,19.47,0,0,1,264.16,101.79Z" style="fill:#90CAF9;opacity:0.2"></path><path d="M225.26,103.65a19.47,19.47,0,1,0,38.9-1.86C255.42,99.82,234.28,98.44,225.26,103.65Z" style="fill:#90CAF9;opacity:0.2"></path><path d="M267.1,149.07a183.46,183.46,0,0,0-26.54,3.55l-.49-.45,26.08-17.85.48.45S266.84,144.33,267.1,149.07Z" style="opacity:0.2"></path><path d="M266.62,148.62a183.78,183.78,0,0,0-26.55,3.55c-.49-4.79-.87-9.61-1.11-14.47a197.59,197.59,0,0,1,27.19-3.38Q266.23,141.51,266.62,148.62Z" style="fill:#fff"></path><path d="M260.93,138.94a1.84,1.84,0,1,1-2.11-1.83A2,2,0,0,1,260.93,138.94Z" style="fill:#90CAF9;opacity:0.30000000000000004"></path><path d="M261.09,144.63a1.84,1.84,0,1,1-2.1-1.83A2,2,0,0,1,261.09,144.63Z" style="fill:#90CAF9;opacity:0.30000000000000004"></path><path d="M243.35,148.08a95.24,95.24,0,0,1,9.77-1.23c-2.17-3-5.42-8.13-5.42-8.13A92.75,92.75,0,0,0,243.35,148.08Z" style="fill:#90CAF9"></path></g></svg>
                        
          </a>
          <div class="flex-grow flex flex-col justify-between text-gray-500 custom-gradientReg ">
            <nav class="flex flex-col mx-4 my-6 space-y-4">
              <a href="{{ route('show.courses') }}" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-cyan-50 focus:text-cyan-300 focus:bg-white rounded-lg">
                <span class="sr-only">Course List</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(2 ,132,199);transform: ;msFilter:;" class="h-6 w-6"><path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z"></path></svg>
              </a>
              <a href="{{ route('instructor.dashboard') }}" class="inline-flex items-center justify-center py-3 text-cyan-300 bg-white rounded-lg">
                <span class="sr-only">Dashboard</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
              </a>
              <a href="{{ route('create.courses') }}" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-cyan-50 focus:text-cyan-300 focus:bg-white rounded-lg">
                <span class="sr-only">Create Course</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(2 ,132,199);transform: ;msFilter:;" class="h-6 w-6"><path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z"></path><path d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z"></path></svg>
              </a>
              <a href="#" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-cyan-50 focus:text-cyan-300 focus:bg-white rounded-lg">
                <span class="sr-only">Media</span>
                
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="rgb(2 ,132,199)" class="h-6 w-6"><path d="M300-180v-200l160 100-160 100Zm220-380q-50 0-85-35t-35-85q0-50 35-85t85-35h50v60h-50q-25 0-42.5 17.5T460-680q0 25 17.5 42.5T520-620h50v60h-50Zm110 0v-60h50q25 0 42.5-17.5T740-680q0-25-17.5-42.5T680-740h-50v-60h50q50 0 85 35t35 85q0 50-35 85t-85 35h-50Zm-110-90v-60h160v60H520Zm124 250v-80h196v-360H360v360h-80v-360q0-33 23.5-56.5T360-920h480q33 0 56.5 23.5T920-840v360q0 33-23.5 56.5T840-400H644ZM120-40q-33 0-56.5-23.5T40-120v-320q0-33 23.5-56.5T120-520h480q33 0 56.5 23.5T680-440v320q0 33-23.5 56.5T600-40H120Zm0-80h480v-320H120v320Zm480-540ZM360-280Z"/></svg>
              </a>
              <a href="{{ route('show.cards') }}" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-cyan-50 focus:text-cyan-300 focus:bg-white rounded-lg">
                <span class="sr-only">Home</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(2 ,132,199);transform: ;msFilter:;"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"></path>
              </svg>
            </a>
            </nav>
            <div class="inline-flex items-center justify-center h-20 w-20 border-t border-gray-700">
              <button class="p-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Settings</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </button>
            </div>
          </div>
        </aside>

        <div
        x-data="{ userDropdownOpen: false, notificationsDropdownOpen: false, mobileNavOpen: false }"
      >
        <!-- Page Container -->
        <div
          id="page-container"
          class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col bg-zinc-100/75"
        >
          <!-- Page Header -->
          <div class="flex-grow text-gray-800">
            <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
              <div class="fflex flex-shrink-0 items-center ml-auto">
                <!-- Left Section -->
                {{-- <div class="flex items-center gap-2 lg:gap-6">
                  <!-- Logo -->
                  
                  <x-application-logo />
                  <!-- END Logo -->
                </div> --}}
      <div class="flex items-center gap-4">
        
      
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
      {{-- <div x-cloak x-show="mobileNavOpen" class="lg:hidden">
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
      </div> --}}
      <!-- END Mobile Navigation -->
      </div>
      </header>

      <main>
        <section class="bg-white border-b py-8">
            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    My courses!
                </h2>
                <!-- CoursesPreview Component -->
                <div class="py-8">
                    <div class="ml-4 px-6 text-gray-500 md:px-8 xl:px-0">
                        <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
                            @foreach ($courses as $course)
                            <div class="bg-white rounded-2xl border-4 border-indigo-800 shadow-xl px-2 py-4 sm:px-6 lg:px-4">
                                <div class="mb-4 space-y-4">
                                    {{-- <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden"> --}}
                                      
                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/'.$course->course_image)}}" alt="course">
                                        <div class="p-6">
                                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">{{$course->category}}</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$course->title}}</h1>
                                            <p class="leading-relaxed mb-3">{{$course->description}}</p>
                                           
                                            <div class="flex items-center mt-4">
                                              <img class="w-10 h-10 rounded-full mr-4" src="{{ Storage::url(Auth::user()->profile_picture) }}" alt="Avatar of instructor">
                                              <div class="text-sm">
                                                  <p class="text-gray-900 leading-none">{{ Auth::user()->name }}</p>
                                                  <p class="text-gray-600">Specialist in {{ Auth::user()->category }}</p>
                                              </div>
                                          </div>


                                          <div class="flex items-center flex-wrap mt-12">
                                            <a href="{{ route('show.detail', ['id' => $course->id]) }}" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                            <span class="text-gray-600 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-300">
                                              <a 
                                              href="{{ route('edit.course', ['id' => $course->id]) }}"
                                                
                                              >
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="fill-gray-600 hover:fill-lime-400 hover:text-zinc-950 active:border-zinc-200" style="transform: ;msFilter:;"><path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path><path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path></svg>
                                                
                                              </a>
                                            </span>
                                            <span class="text-gray-600 mr-3 inline-flex items-center  md:ml-0  leading-none text-sm pr-3 py-1 border-r-2 border-gray-300">
                                            
                                              <a 
                                              href="{{ route('create.modules', ['course_id' => $course->id]) }}"
                                                
                                              >
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="fill-gray-600 hover:fill-lime-400 hover:text-zinc-950 active:border-zinc-200" style="transform: ;msFilter:;">
                                                <path d="M3 8v11c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19c0-.101.009-.191.024-.273.112-.576.584-.717.988-.727H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v3zm3-4h13v12H5V5c0-.806.55-.988 1-1z"></path>
                                                <path d="M11 14h2v-3h3V9h-3V6h-2v3H8v2h3z"></path>
                                              </svg>
                                                
                                              </a>
                                            </span>

                                            <span class="text-gray-600 inline-flex items-center leading-none text-sm">
                                              <form action="{{ route('delete.course', $course->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" >
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="fill-gray-600 hover:fill-lime-400 hover:text-zinc-950 active:border-zinc-200" style="transform: ;msFilter:;">
                                                  <path d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z"></path>
                                                  <path d="M15.292 7.295 12 10.587 8.708 7.295 7.294 8.709l3.292 3.292-3.292 3.292 1.414 1.414L12 13.415l3.292 3.292 1.414-1.414-3.292-3.292 3.292-3.292z"></path>
                                                </svg></button>
                                            </form>
                                            </span>
                                        </div>
                                          {{-- buttons --}}
                                         
                                        </div>
                                    </div>
                                {{-- </div> --}}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    
    
    
    <!--Footer-->
    <footer class="bg-white">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class=" flex mr-4 items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                            
              <svg class="h-20 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><g id="freepik--background-complete--inject-21"><rect y="382.4" width="500" height="0.25" style="fill:#ebebeb"></rect><rect x="416.78" y="398.49" width="33.12" height="0.25" style="fill:#ebebeb"></rect><rect x="322.53" y="401.21" width="8.69" height="0.25" style="fill:#ebebeb"></rect><rect x="396.59" y="389.21" width="19.19" height="0.25" style="fill:#ebebeb"></rect><rect x="52.46" y="390.89" width="43.19" height="0.25" style="fill:#ebebeb"></rect><rect x="104.56" y="390.89" width="6.33" height="0.25" style="fill:#ebebeb"></rect><rect x="131.47" y="395.11" width="93.68" height="0.25" style="fill:#ebebeb"></rect><path d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z" style="fill:#ebebeb"></path><path d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z" style="fill:#ebebeb"></path><path d="M296.76,75.34l-.85,1.71a.68.68,0,0,1-.51.37l-1.89.28a.68.68,0,0,0-.38,1.16l1.37,1.34a.7.7,0,0,1,.2.6l-.33,1.88a.68.68,0,0,0,1,.72l1.69-.89a.72.72,0,0,1,.64,0l1.69.89a.68.68,0,0,0,1-.72l-.32-1.88a.64.64,0,0,1,.2-.6l1.36-1.34a.68.68,0,0,0-.38-1.16l-1.89-.28a.68.68,0,0,1-.51-.37L298,75.34A.68.68,0,0,0,296.76,75.34Z" style="fill:#f5f5f5"></path><path d="M275.3,358.19l-.84,1.72a.69.69,0,0,1-.52.37l-1.89.28a.68.68,0,0,0-.38,1.16l1.37,1.33a.7.7,0,0,1,.2.61l-.33,1.88a.69.69,0,0,0,1,.72l1.69-.89a.7.7,0,0,1,.63,0l1.69.89a.68.68,0,0,0,1-.72l-.32-1.88a.7.7,0,0,1,.2-.61l1.37-1.33a.68.68,0,0,0-.38-1.16l-1.89-.28a.67.67,0,0,1-.52-.37l-.84-1.72A.69.69,0,0,0,275.3,358.19Z" style="fill:#f0f0f0"></path><path d="M424.34,250.38l-.85,1.71a.69.69,0,0,1-.51.38l-1.89.27a.69.69,0,0,0-.38,1.17l1.37,1.33a.68.68,0,0,1,.19.61l-.32,1.88a.68.68,0,0,0,1,.72l1.69-.89a.66.66,0,0,1,.64,0l1.69.89a.68.68,0,0,0,1-.72l-.32-1.88a.68.68,0,0,1,.19-.61l1.37-1.33a.69.69,0,0,0-.38-1.17l-1.89-.27a.69.69,0,0,1-.51-.38l-.85-1.71A.68.68,0,0,0,424.34,250.38Z" style="fill:#f0f0f0"></path><path d="M215.24,306.67l-.51,1a.4.4,0,0,1-.3.22l-1.13.16a.41.41,0,0,0-.23.7l.82.8a.4.4,0,0,1,.11.36l-.19,1.12a.4.4,0,0,0,.59.43l1-.53a.42.42,0,0,1,.38,0l1,.53a.41.41,0,0,0,.6-.43l-.2-1.12a.43.43,0,0,1,.12-.36l.82-.8a.41.41,0,0,0-.23-.7l-1.13-.16a.4.4,0,0,1-.3-.22l-.51-1A.41.41,0,0,0,215.24,306.67Z" style="fill:#f0f0f0"></path><path d="M329.68,306.67l-.51,1a.4.4,0,0,1-.3.22l-1.13.16a.41.41,0,0,0-.23.7l.82.8a.43.43,0,0,1,.12.36l-.2,1.12a.41.41,0,0,0,.59.43l1-.53a.42.42,0,0,1,.38,0l1,.53a.4.4,0,0,0,.59-.43l-.19-1.12a.4.4,0,0,1,.11-.36l.82-.8a.41.41,0,0,0-.23-.7l-1.13-.16a.4.4,0,0,1-.3-.22l-.51-1A.41.41,0,0,0,329.68,306.67Z" style="fill:#f5f5f5"></path><path d="M77.73,76.9l-.51,1a.38.38,0,0,1-.31.22l-1.13.17a.41.41,0,0,0-.22.7l.81.79a.41.41,0,0,1,.12.36l-.19,1.13a.41.41,0,0,0,.59.43l1-.53a.42.42,0,0,1,.38,0l1,.53a.41.41,0,0,0,.59-.43l-.19-1.13a.41.41,0,0,1,.12-.36l.82-.79a.41.41,0,0,0-.23-.7l-1.13-.17a.39.39,0,0,1-.31-.22l-.5-1A.4.4,0,0,0,77.73,76.9Z" style="fill:#f5f5f5"></path><path d="M86.42,265.63l-.88,1.77a.68.68,0,0,1-.53.38l-2,.29a.7.7,0,0,0-.39,1.2l1.41,1.38a.7.7,0,0,1,.2.63l-.33,2a.71.71,0,0,0,1,.74l1.74-.92a.7.7,0,0,1,.66,0l1.75.92a.71.71,0,0,0,1-.74l-.34-2a.71.71,0,0,1,.21-.63l1.41-1.38a.7.7,0,0,0-.39-1.2l-2-.29a.68.68,0,0,1-.53-.38l-.87-1.77A.71.71,0,0,0,86.42,265.63Z" style="fill:#f0f0f0"></path><path d="M193.54,99.89a1.33,1.33,0,1,0,1.32-1.33A1.32,1.32,0,0,0,193.54,99.89Z" style="fill:#f0f0f0"></path><circle cx="156.69" cy="357.67" r="1.33" style="fill:#f5f5f5"></circle><path d="M107.05,133.14A125.3,125.3,0,0,1,86.59,125a25.61,25.61,0,0,0,42,12.75A125.27,125.27,0,0,1,107.05,133.14Z" style="fill:#f5f5f5"></path><path d="M111.42,116.83c9.08,2.76,19.34,1,25.48,4.52a25.61,25.61,0,0,0-48.07-14.62C95.87,107.26,102.34,114.07,111.42,116.83Z" style="fill:#f5f5f5"></path><path d="M72.86,107.07c-1.15,3.77,15.19,12.07,36.49,18.54s39.49,8.67,40.63,4.91S134.79,118.45,113.49,112,74,103.31,72.86,107.07Z" style="fill:#f5f5f5"></path><path d="M392.12,206.43a68.11,68.11,0,0,1-118,26.83v0a68.14,68.14,0,0,1-15.93-40.13,66.91,66.91,0,0,1,.67-13.88,69.08,69.08,0,0,1,1.42-6.95,68.11,68.11,0,0,1,132.48,31.56C392.55,204.71,392.34,205.57,392.12,206.43Z" style="fill:#ebebeb"></path><path d="M429.3,147.27a11.14,11.14,0,0,1-19.3,4.39h0a11.16,11.16,0,0,1-2.6-6.56,10.84,10.84,0,0,1,.11-2.27,11.5,11.5,0,0,1,.23-1.14,11.14,11.14,0,0,1,21.67,5.16C429.37,147,429.34,147.13,429.3,147.27Z" style="fill:#ebebeb"></path><path d="M392.73,203.84l-3.11-3.93L385,212l-6.62-9.15-3.55-13.81-15.2-9.21,1.87,4.1,8.43,3.84,4,8-12.64-.47L348,183l8.2,13.58,6.44,5.08L357.1,205l-9.75,13.39.81,5.77s-8,5.77-8.87,6-17.8,11.31-17.8,11.31L328,218.93l-.17-17.13-16,.88L298.8,191.59l8.76-18.47,6.55-3.45,6.67,1.73,22.28,8.19-.1-4.05-12.6-12-8.1-1.47L315.75,165,312,164l6.5-8.16,6-2.66,13.59-3.56,10.15,3.67L363.71,156s12.7-3.31,18.82-4.93A67.86,67.86,0,0,1,392.73,203.84Z" style="fill:#fafafa"></path><path d="M345,254.84a68.15,68.15,0,0,1-70.88-21.58l9.66,5.11,8.78,7.3,23.17,6,19.66.07Z" style="fill:#fafafa"></path><polygon points="309.3 127.48 302.24 128.99 306.05 134.86 302.76 147.56 331.35 142.74 332.59 137.95 323.32 135.11 309.3 127.48" style="fill:#fafafa"></polygon><path d="M299.24,140.61l-4.67,9.88L284,155.91l-11.49,4.77L267,166.39l-4.52-1.17a67.86,67.86,0,0,1,32.35-36.33Z" style="fill:#fafafa"></path><path d="M286.58,206.43l-8.26,6-.34,6.19-.92,3.53-.49,5.95-2.49-1.69-4.75-9.19-4-14.53-5.41-8.21-1.78-1.4a66.91,66.91,0,0,1,.67-13.88l2.1,2.55,9.29-1.1,8.24,2.13,1.8,7.62,3.26,6.83L291,201.4Z" style="fill:#fafafa"></path></g><g id="freepik--Shadow--inject-21"><ellipse id="freepik--path--inject-21" cx="250" cy="416.24" rx="193.89" ry="11.32" style="fill:#f5f5f5"></ellipse></g><g id="freepik--Character--inject-21"><path d="M229.86,169c3.79-2.42,6-7.34,9-10.62,6-6.51,15.27-17.14,16.67-23.18l-23.28-8L224.54,146c-1.63,4.36-8.89,10.73-12.92,12.8-2.36,1.23-4.94,2.32-7.56,3.41-5.26,2.12-10.91,4-16.38,5.89l1.38,9.93a93.76,93.76,0,0,0,9.54-.4c3.15-.3,6.31-.7,9.47-1.3a80.78,80.78,0,0,0,9.6-2.35C220.91,173,226.52,171.12,229.86,169Z" style="fill:#90CAF9"></path><path d="M229.86,169c3.79-2.42,6-7.34,9-10.62,6-6.51,15.27-17.14,16.67-23.18l-23.28-8L224.54,146c-1.63,4.36-8.89,10.73-12.92,12.8-2.36,1.23-4.94,2.32-7.56,3.41-5.26,2.12-10.91,4-16.38,5.89l1.38,9.93a93.76,93.76,0,0,0,9.54-.4c3.15-.3,6.31-.7,9.47-1.3a80.78,80.78,0,0,0,9.6-2.35C220.91,173,226.52,171.12,229.86,169Z" style="fill:#fff;opacity:0.8"></path><path d="M205.56,178.14l-4.22-15.91s-24.45,4.46-25.23,11.23C175.31,180.46,192.33,180.29,205.56,178.14Z" style="fill:#263238"></path><path d="M188,169.85l3.54-5s-12.42-1.57-12.75.42C178.38,168,182.07,169.86,188,169.85Z" style="fill:#263238"></path><path d="M300.65,276.35a1.12,1.12,0,0,1-.71-.25c-4.83-3.86-20.16-17.53-15-31.2,4.22-11.22,14.46-20.67,26.7-24.68a94.43,94.43,0,0,1,14.37-3.1c3.29-.53,6.69-1.08,9.94-1.86,14.95-3.59,22.48-13.46,19.65-25.76-1.29-5.57-4.74-10.07-8.4-14.84-2.91-3.78-5.9-7.69-7.71-12.17,0,0,0-.08,0-.12-1.71-6.11.72-12,3.08-17.66.55-1.33,1.07-2.59,1.55-3.86,2-5.43,3.85-11.27,3.54-17.17-.37-7-5.06-14.56-11.94-19.15-10.75-7.19-30.59-13.61-39-4.58a27.68,27.68,0,0,0-2,2.56,25.84,25.84,0,0,1-2.82,3.37A15.46,15.46,0,0,1,279,109.72a15.75,15.75,0,0,1-11.3-8.2,1.13,1.13,0,0,1,.52-1.52,1.14,1.14,0,0,1,1.53.52,13.14,13.14,0,0,0,20.51,3.7,24.22,24.22,0,0,0,2.56-3.07A30.94,30.94,0,0,1,295,98.4c10.34-11.08,32.73-1.93,42,4.23,7.45,5,12.54,13.2,12.95,20.93.33,6.32-1.57,12.43-3.69,18.09-.48,1.31-1,2.64-1.57,3.94-2.2,5.3-4.48,10.77-3,16.11,1.69,4.17,4.58,7.93,7.38,11.57,3.64,4.75,7.41,9.66,8.81,15.72,3.09,13.45-5.28,24.63-21.34,28.49-3.33.8-6.77,1.36-10.1,1.89a92.43,92.43,0,0,0-14,3c-11.6,3.79-21.29,12.73-25.28,23.31-4.61,12.24,9.78,25,14.3,28.62a1.14,1.14,0,0,1-.71,2Z" style="fill:#90CAF9"></path><path d="M300.65,276.35a1.12,1.12,0,0,1-.71-.25c-4.83-3.86-20.16-17.53-15-31.2,4.22-11.22,14.46-20.67,26.7-24.68a94.43,94.43,0,0,1,14.37-3.1c3.29-.53,6.69-1.08,9.94-1.86,14.95-3.59,22.48-13.46,19.65-25.76-1.29-5.57-4.74-10.07-8.4-14.84-2.91-3.78-5.9-7.69-7.71-12.17,0,0,0-.08,0-.12-1.71-6.11.72-12,3.08-17.66.55-1.33,1.07-2.59,1.55-3.86,2-5.43,3.85-11.27,3.54-17.17-.37-7-5.06-14.56-11.94-19.15-10.75-7.19-30.59-13.61-39-4.58a27.68,27.68,0,0,0-2,2.56,25.84,25.84,0,0,1-2.82,3.37A15.46,15.46,0,0,1,279,109.72a15.75,15.75,0,0,1-11.3-8.2,1.13,1.13,0,0,1,.52-1.52,1.14,1.14,0,0,1,1.53.52,13.14,13.14,0,0,0,20.51,3.7,24.22,24.22,0,0,0,2.56-3.07A30.94,30.94,0,0,1,295,98.4c10.34-11.08,32.73-1.93,42,4.23,7.45,5,12.54,13.2,12.95,20.93.33,6.32-1.57,12.43-3.69,18.09-.48,1.31-1,2.64-1.57,3.94-2.2,5.3-4.48,10.77-3,16.11,1.69,4.17,4.58,7.93,7.38,11.57,3.64,4.75,7.41,9.66,8.81,15.72,3.09,13.45-5.28,24.63-21.34,28.49-3.33.8-6.77,1.36-10.1,1.89a92.43,92.43,0,0,0-14,3c-11.6,3.79-21.29,12.73-25.28,23.31-4.61,12.24,9.78,25,14.3,28.62a1.14,1.14,0,0,1-.71,2Z" style="fill:#fff;opacity:0.7000000000000001"></path><path d="M233,151.68c-1.29,2.15-1.58,9-.92,15.48,2.56-2.58,4.42-6.21,6.8-8.81l.5-.54C236.74,154.09,233.74,150.36,233,151.68Z" style="opacity:0.2"></path><path d="M232.23,127.12s-6,24.49,11.06,65L289,184c-.78-6.23-10.6-34.5-9-64.78a68.8,68.8,0,0,0-15.54,0A194.91,194.91,0,0,0,245,122.69,98,98,0,0,0,232.23,127.12Z" style="fill:#90CAF9"></path><path d="M232.23,127.12s-6,24.49,11.06,65L289,184c-.78-6.23-10.6-34.5-9-64.78a68.8,68.8,0,0,0-15.54,0A194.91,194.91,0,0,0,245,122.69,98,98,0,0,0,232.23,127.12Z" style="fill:#fff;opacity:0.8"></path><path d="M274.71,142.09a40.7,40.7,0,0,0,6.8,6.72c-.3-2.09-.58-4.23-.81-6.41Z" style="opacity:0.2"></path><path d="M243.29,192.17s-23.16,26.9-21.27,50.12c2,24.16,27.14,63.75,27.14,63.75l15.28-7.66s-10-41.61-17.76-53.7c8.46-14.09,19.63-30.91,27.34-56.7C259.9,190.5,243.29,192.17,243.29,192.17Z" style="fill:#90CAF9"></path><path d="M243.29,192.17s-23.16,26.9-21.27,50.12c2,24.16,27.14,63.75,27.14,63.75l15.28-7.66s-10-41.61-17.76-53.7c8.46-14.09,19.63-30.91,27.34-56.7C259.9,190.5,243.29,192.17,243.29,192.17Z" style="fill:#fff;opacity:0.8"></path><path d="M265,206.25c-4.2,3.17-6.76,12.49-6.83,19a193.6,193.6,0,0,0,9.55-19.62A3.38,3.38,0,0,0,265,206.25Z" style="opacity:0.2"></path><path d="M249.57,304.6l13-7.93a1,1,0,0,1,1.23.29l5.55,9.58a1.77,1.77,0,0,1-.35,2.71c-3.83,2-4.12,1.82-8.89,4.44-2.93,1.62-8.79,5.29-12.84,7.52s-6.83-1.76-5.63-3.32c4.45-5.75,5.68-8,6.73-11.76A2.51,2.51,0,0,1,249.57,304.6Z" style="fill:#90CAF9"></path><path d="M249.57,304.6l13-7.93a1,1,0,0,1,1.23.29l5.55,9.58a1.77,1.77,0,0,1-.35,2.71c-3.83,2-4.12,1.82-8.89,4.44-2.93,1.62-8.79,5.29-12.84,7.52s-6.83-1.76-5.63-3.32c4.45-5.75,5.68-8,6.73-11.76A2.51,2.51,0,0,1,249.57,304.6Z" style="fill:#fff;opacity:0.8"></path><polygon points="351.33 319.64 275.15 397.65 262.04 371.07 324.45 307.16 351.33 319.64" style="fill:#90CAF9"></polygon><polygon points="351.33 319.64 275.15 397.65 262.04 371.07 324.45 307.16 351.33 319.64" style="opacity:0.4"></polygon><polygon points="342.41 337.56 292.86 388.31 270.67 357.68 311.27 316.11 342.41 337.56" style="fill:#90CAF9"></polygon><polygon points="342.41 337.56 292.86 388.31 270.67 357.68 311.27 316.11 342.41 337.56" style="opacity:0.30000000000000004"></polygon><path d="M202.41,321.37s19.5,20.77,36.25,38.84a19.92,19.92,0,0,1,4.21,19.38c-3.87,13,1.8,35.93,1.8,35.93C226.14,399.72,176.38,385.9,202.41,321.37Z" style="fill:#90CAF9"></path><path d="M202.41,321.37s19.5,20.77,36.25,38.84a19.92,19.92,0,0,1,4.21,19.38c-3.87,13,1.8,35.93,1.8,35.93C226.14,399.72,176.38,385.9,202.41,321.37Z" style="opacity:0.30000000000000004"></path><path d="M273.35,248.73s21.23,19,39.69,35.32a19.93,19.93,0,0,0,19.47,3.75c12.86-4.18,36,.95,36,.95C352.24,270.6,337.25,221.18,273.35,248.73Z" style="fill:#90CAF9"></path><path d="M273.35,248.73s21.23,19,39.69,35.32a19.93,19.93,0,0,0,19.47,3.75c12.86-4.18,36,.95,36,.95C352.24,270.6,337.25,221.18,273.35,248.73Z" style="opacity:0.30000000000000004"></path><path d="M224.7,198.66c-41.75-36.35-86.82-47.65-105-29s-5.81,63.42,31.51,104.29l92.6,101.4a19.82,19.82,0,0,0,28.8.48l56.83-58.19a19.81,19.81,0,0,0-1.17-28.78Z" style="fill:#90CAF9"></path><path d="M273.79,360.51a3.65,3.65,0,0,1,1,5.8h0c-6.1,6.3-17.65,4.7-25.26-3.51l-91.87-99c-18.46-19.89-31.59-40-38.39-56.89-2-5,4.94-8.51,7.83-4,9.21,14.39,22.94,31.57,40.13,49.48L263.93,353A37.72,37.72,0,0,0,273.79,360.51Z" style="fill:#fff;opacity:0.1"></path><path d="M158.1,162.29c-9.34-.34-21.07,5-30.71,14.86s-14.68,21.72-14.13,31.06c-3.77-16.35-1.8-30.14,6.43-38.58S141.67,158.9,158.1,162.29Z" style="opacity:0.1"></path><circle cx="189.7" cy="238" r="35.47" transform="translate(-4.72 3.84) rotate(-1.14)" style="opacity:0.30000000000000004"></circle><circle cx="188.51" cy="236.84" r="35.47" transform="translate(-114.18 239.15) rotate(-51.92)" style="fill:#fff"></circle><circle cx="188.51" cy="236.84" r="32.09" transform="translate(-113.89 223.33) rotate(-48.92)" style="fill:#90CAF9;opacity:0.7000000000000001"></circle><g style="opacity:0.2"><path d="M165.56,214.41a31.67,31.67,0,0,0-7,10.87h0l15.36,40.14a32.13,32.13,0,0,0,20.12,3L171.54,209.6A32,32,0,0,0,165.56,214.41Z" style="fill:#fff"></path><path d="M173.9,208.27l22.79,59.59a32.15,32.15,0,0,0,9.84-4.45L184.23,205A31.37,31.37,0,0,0,173.9,208.27Z" style="fill:#fff"></path></g><path d="M308.89,307.4l6.79-13.55a1,1,0,0,1,1.19-.4l9.6,4.5a1.77,1.77,0,0,1,1.14,2.48c-2.16,3.72-2.33,4.38-5,9.11-1.62,2.91-4.63,9.1-6.87,13.12s-6.71,2.11-6.52.16c.71-7.21.53-9.79-.56-13.49A2.48,2.48,0,0,1,308.89,307.4Z" style="fill:#90CAF9"></path><path d="M308.89,307.4l6.79-13.55a1,1,0,0,1,1.19-.4l9.6,4.5a1.77,1.77,0,0,1,1.14,2.48c-2.16,3.72-2.33,4.38-5,9.11-1.62,2.91-4.63,9.1-6.87,13.12s-6.71,2.11-6.52.16c.71-7.21.53-9.79-.56-13.49A2.48,2.48,0,0,1,308.89,307.4Z" style="fill:#fff;opacity:0.8"></path><path d="M259.49,189.29s.09,42.56,9.24,63.13C278.75,275,309.51,310,309.51,310l11.6-11.65s-14.63-32-28.21-49.11c-.28-21.08,2-44.08-3.6-63.19A201,201,0,0,1,259.49,189.29Z" style="fill:#90CAF9"></path><path d="M259.49,189.29s.09,42.56,9.24,63.13C278.75,275,309.51,310,309.51,310l11.6-11.65s-14.63-32-28.21-49.11c-.28-21.08,2-44.08-3.6-63.19A201,201,0,0,1,259.49,189.29Z" style="fill:#fff;opacity:0.8"></path><path d="M287.82,189.31c-21.21,4.9-37.18,5.4-43.69,5.35a3,3,0,0,1-3-3.21h0a3,3,0,0,1,3.05-2.86,189.74,189.74,0,0,0,42.29-5.19,3,3,0,0,1,3.62,2.23h0A3,3,0,0,1,287.82,189.31Z" style="fill:#263238"></path><path d="M311.34,144.94c-1.8-4.13-4.3-6.87-7.67-9.77C297,129.4,286,120.46,280,119.26l-7.29,23.53,19.16,7.07c3.79,2.7,4.64,4.48,5.76,8.87.67,2.58,1.16,5.33,1.64,8.13.89,5.59,1.51,11.54,2.1,17.28l10,.86a93,93,0,0,0,1.73-9.39c.41-3.13.72-6.3.84-9.52a78,78,0,0,0-.16-9.88A35.81,35.81,0,0,0,311.34,144.94Z" style="fill:#90CAF9"></path><path d="M311.34,144.94c-1.8-4.13-4.3-6.87-7.67-9.77C297,129.4,286,120.46,280,119.26l-7.29,23.53,19.16,7.07c3.79,2.7,4.64,4.48,5.76,8.87.67,2.58,1.16,5.33,1.64,8.13.89,5.59,1.51,11.54,2.1,17.28l10,.86a93,93,0,0,0,1.73-9.39c.41-3.13.72-6.3.84-9.52a78,78,0,0,0-.16-9.88A35.81,35.81,0,0,0,311.34,144.94Z" style="fill:#fff;opacity:0.8"></path><path d="M314.38,169.47l-15.78,0s-1.09,24.84,5.33,27.1C310.57,198.94,313.53,182.85,314.38,169.47Z" style="fill:#263238"></path><path d="M303.06,184.18,299,179.62s-3.79,10.37-1.48,11.65S301.75,190,303.06,184.18Z" style="fill:#263238"></path><path d="M264.41,119.24A194.91,194.91,0,0,0,245,122.69c-2.45.64-4.81,1.41-6.84,2.12a27.49,27.49,0,0,0,13.65,1.34,20.85,20.85,0,0,0,4.77-1.39,32.61,32.61,0,0,0,12.1-5.9C267.27,118.93,265.83,119.05,264.41,119.24Z" style="opacity:0.2"></path><path d="M256.65,100.77c-.1,5.69.62,16,5.12,18.94,0,0,.06,2.49-9.24,4.12-7.59,1.33-7.85-1.08-7.85-1.08,5.87-2.56,4.9-7.08,3.07-11.16Z" style="fill:#ffb573"></path><path d="M253,105.18l-5.26,6.41a18.41,18.41,0,0,1,1.06,2.93c2.29-.75,5.05-3.89,4.86-6.39A8.54,8.54,0,0,0,253,105.18Z" style="opacity:0.2"></path><path d="M239.26,100.15c-2.69-3.65-5.73-8.94-4.42-11.56s6.77-4.15,9.25-2.23C247.2,88.79,244.93,96.34,239.26,100.15Z" style="fill:#263238"></path><path d="M257,93c.23,7.57.75,12-2.7,16.21-5.19,6.34-14.8,3.74-17.29-3.61C234.78,99,234.79,87.68,241.88,84A10.34,10.34,0,0,1,257,93Z" style="fill:#ffb573"></path><path d="M256.74,100.07c-3.36-3-7.39-7.63-6.62-10.46s5.81-5.41,8.62-4C262.27,87.35,261.54,95.21,256.74,100.07Z" style="fill:#263238"></path><path d="M253,89.14c-5.17,1.43-19.79,4.31-17.74-1.85s10.09-7.33,13-6,5.21-2.19,5.21-2.19c.42,1-1.81,3.75-5,4.2s13.78-2.5,9.33,3.54S253,89.14,253,89.14Z" style="fill:#263238"></path><path d="M261.17,101a7.16,7.16,0,0,1-4.18,3.57c-2.4.77-3.69-1.36-3.1-3.68.53-2.09,2.43-5,4.88-4.75A3.23,3.23,0,0,1,261.17,101Z" style="fill:#ffb573"></path><path d="M245.78,96.12c.06.61-.22,1.14-.62,1.18s-.77-.43-.83-1,.22-1.14.62-1.17S245.72,95.51,245.78,96.12Z" style="fill:#263238"></path><path d="M238.85,96.76c.06.61-.22,1.14-.62,1.17s-.78-.43-.83-1,.22-1.14.62-1.18S238.79,96.14,238.85,96.76Z" style="fill:#263238"></path><path d="M241.08,96.86a21.89,21.89,0,0,1-2.45,5.51,3.52,3.52,0,0,0,3,.28Z" style="fill:#ed893e"></path><path d="M246.6,102.94a5.36,5.36,0,0,1-3,1.24.18.18,0,0,1,0-.36,4.87,4.87,0,0,0,3.79-2.26.17.17,0,0,1,.24-.07.18.18,0,0,1,.08.24A4.69,4.69,0,0,1,246.6,102.94Z" style="fill:#263238"></path><path d="M247.86,93.61a.36.36,0,0,1-.5,0,2.88,2.88,0,0,0-2.41-1,.36.36,0,0,1-.42-.3.37.37,0,0,1,.3-.42,3.6,3.6,0,0,1,3.07,1.22.36.36,0,0,1,0,.51Z" style="fill:#263238"></path><path d="M235.8,94.57a.36.36,0,0,1-.36.06.35.35,0,0,1-.21-.46,3.61,3.61,0,0,1,2.4-2.27.36.36,0,1,1,.15.71,2.86,2.86,0,0,0-1.88,1.81A.4.4,0,0,1,235.8,94.57Z" style="fill:#263238"></path><path d="M273.51,97.88c2.34,12.37-4.91,24.07-16.34,26.81-.44.1-.89.19-1.34.27A21.92,21.92,0,0,1,240,121.61a19.47,19.47,0,1,0-6.47-34.84,21.56,21.56,0,0,1,8.66-6.88h0A21.41,21.41,0,0,1,247,78.46C259.21,76.34,271.07,85,273.51,97.88Z" style="fill:#90CAF9"></path><path d="M273.51,97.88c2.34,12.37-4.91,24.07-16.34,26.81-.44.1-.89.19-1.34.27A21.92,21.92,0,0,1,240,121.61a19.47,19.47,0,1,0-6.47-34.84,21.56,21.56,0,0,1,8.66-6.88h0A21.41,21.41,0,0,1,247,78.46C259.21,76.34,271.07,85,273.51,97.88Z" style="fill:#fff;opacity:0.8"></path><path d="M269,99.38c2.19,11.06-2.93,21.45-11.78,25.31a19.47,19.47,0,0,1-4.46,1.31c-7.22,1.18-14.38-1.85-19.33-7.44a19.47,19.47,0,1,0,.16-31.79,19,19,0,0,0-4.84,4.86,19.77,19.77,0,0,1,13.5-11.74h0c.43-.1.86-.18,1.29-.26C255,77.72,266.42,86.58,269,99.38Z" style="fill:#90CAF9"></path><path d="M269,99.38c2.19,11.06-2.93,21.45-11.78,25.31a19.47,19.47,0,0,1-4.46,1.31c-7.22,1.18-14.38-1.85-19.33-7.44a19.47,19.47,0,1,0,.16-31.79,19,19,0,0,0-4.84,4.86,19.77,19.77,0,0,1,13.5-11.74h0c.43-.1.86-.18,1.29-.26C255,77.72,266.42,86.58,269,99.38Z" style="fill:#fff;opacity:0.6000000000000001"></path><path d="M264.16,101.79a19.47,19.47,0,1,1-20.38-18.52A19.47,19.47,0,0,1,264.16,101.79Z" style="fill:#90CAF9;opacity:0.2"></path><path d="M225.26,103.65a19.47,19.47,0,1,0,38.9-1.86C255.42,99.82,234.28,98.44,225.26,103.65Z" style="fill:#90CAF9;opacity:0.2"></path><path d="M267.1,149.07a183.46,183.46,0,0,0-26.54,3.55l-.49-.45,26.08-17.85.48.45S266.84,144.33,267.1,149.07Z" style="opacity:0.2"></path><path d="M266.62,148.62a183.78,183.78,0,0,0-26.55,3.55c-.49-4.79-.87-9.61-1.11-14.47a197.59,197.59,0,0,1,27.19-3.38Q266.23,141.51,266.62,148.62Z" style="fill:#fff"></path><path d="M260.93,138.94a1.84,1.84,0,1,1-2.11-1.83A2,2,0,0,1,260.93,138.94Z" style="fill:#90CAF9;opacity:0.30000000000000004"></path><path d="M261.09,144.63a1.84,1.84,0,1,1-2.1-1.83A2,2,0,0,1,261.09,144.63Z" style="fill:#90CAF9;opacity:0.30000000000000004"></path><path d="M243.35,148.08a95.24,95.24,0,0,1,9.77-1.23c-2.17-3-5.42-8.13-5.42-8.13A92.75,92.75,0,0,0,243.35,148.08Z" style="fill:#90CAF9"></path></g></svg>
                 EduPlatform
            </a>
          </div>
          
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Legal</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Company</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official Blog</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
    </footer>
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