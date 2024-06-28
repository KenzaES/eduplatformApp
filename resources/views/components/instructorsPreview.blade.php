<div id="carousel" class="flex transition-transform duration-500 ease-in-out">
    <!-- Slide 1 -->
    @foreach($users as $user)
    @if ($user->roles->contains('name', 'instructor'))
         <div class="flex-shrink-0 w-full flex flex-col items-center p-4">
        <div class="relative mb-4">
            <div class="absolute animate-ping w-52 h-52 custom-gradientReg rounded-full"></div>
            <div class="relative w-52 h-52 custom-gradientReg rounded-full flex justify-center items-center">
                @if ($user->profile_picture)
                    <img class="w-40 h-40 rounded-full" src="{{ Storage::url($user->profile_picture) }}" alt="Profile Picture" class="hidden sm:inline-block h-8 w-8 rounded-full" />
                @else
                    No Profile Picture
                @endif
                
            </div>
        </div>
        <h3 class="mt-4 text-2xl font-semibold">{{$user->name}}</h3>
        <p class="text-gray-600 mt-2 text-center">{{$user->bio}}</p>
    </div>
    
    <!-- Add more slides as needed -->
    <!-- Slide 2 -->
    <div class="flex-shrink-0 w-full flex flex-col items-center p-4">
        <div class="relative mb-4">
            <div class="absolute animate-ping w-52 h-52 bg-indigo-500 rounded-full"></div>
            <div class="relative w-52 h-52 bg-indigo-500 rounded-full flex justify-center items-center">
                <img class="w-40 h-40 rounded-full" src="{{ asset('images/portrait-smiling-blonde-woman.jpg') }}" alt="Teacher">
            </div>
        </div>
        <h3 class="mt-4 text-2xl font-semibold">Teacher Name</h3>
        <p class="text-gray-600 mt-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus tristique bibendum.</p>
    </div>
</div>
<!-- Navigation Buttons -->
<button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-black px-3 py-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(39, 202, 229, 1);transform: ;msFilter:;"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path></svg></button>
<button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-black px-3 py-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg></button>
@endif
    
@endforeach
</div>


<script>
const carousel = document.getElementById('carousel');
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');
    let currentIndex = 0;

    nextButton.addEventListener('click', () => {
        const slides = carousel.children.length;
        if (currentIndex < slides - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    });

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = carousel.children.length - 1;
        }
        updateCarousel();
    });

    function updateCarousel() {
        const width = carousel.children[0].clientWidth;
        carousel.style.transform = `translateX(-${currentIndex * width}px)`;
    }

    </script>