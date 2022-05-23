@extends('layouts.app')

@section('title')
Christ Preachers Church International
@endsection

@section('content')
    <div>

        {{-- Hero Section --}}
        <div>
            <img class="h-[749px] w-full" src="{{ asset('images/jesus-hero-image.jpg') }}" alt="Hero Image">
        </div>

        {{-- About Us Section --}}
        <div class="py-14 px-16">
            <h1 class="text-[#332E2E] font-medium text-3xl text-center">About Us</h1>
            <div class="mt-10 grid grid-cols-2 gap-x-10">
                <div>
                    <img class="rounded-md" src="{{ asset('images/about-us-section-image.jpg') }}" alt="About Us Section Image">
                </div>

                <div class="flex flex-col justify-center">
                    <p class="font-normal text-lg text-[#2B2929]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae cras libero, feugiat sit lacus, egestas dui. Volutpat nulla amet senectus lectus aliquet nullam.
                    </p>
                    <button type="button" class="w-1/5 inline-block mt-8 px-6 py-2.5 bg-primary text-white font-medium text-xs leading-tight capitalize rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read More</button>
                </div>
            </div>
        </div>

        {{-- Church Events --}}
        <div class="py-14 px-16">
            <h1 class="text-[#332E2E] font-medium text-3xl text-center">Church Events</h1>
            <div class="mt-10 grid grid-cols-2 gap-x-10">
                <div class="flex flex-col justify-center">
                    <p class="font-normal text-lg text-[#2B2929]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae cras libero, feugiat sit lacus, egestas dui. Volutpat nulla amet senectus lectus aliquet nullam.
                    </p>
                    <button type="button" class="w-1/5 inline-block mt-8 px-6 py-2.5 bg-primary text-white font-medium text-xs leading-tight capitalize rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read More</button>
                </div>

                <div>
                    <img class="rounded-md" src="{{ asset('images/church-events-section-image.jpg') }}" alt="About Us Section Image">
                </div>
            </div>
        </div>

        {{-- Word For The Day Section --}}
        <div style="background-image: url('{{ asset('images/word-for-the-day-image.jpg') }}');
                          background-repeat: no-repeat;
                          background-size: cover;
                          background-postion: center;
                          height: 574px;" 
                class="flex items-center justify-center mt-14">
            <div>
                <p class="italic font-light text-3xl text-center text-white opacity-95">
                    “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquet magna lorem lacus et metus. Volutpat hendrerit mattis enim at vitae quam. Non at tellus nisl ac mi. “
                </p>
                <h3 class="text-black text-3xl font-light italic text-center mt-8">John 3:16 (KJV)</h3>
            </div>
        </div>

        {{-- Testimonies Section --}}
        <div class="py-20 bg-[#FBFBFB]">
            <div>
                <h1 class="text-[#332E2E] font-medium text-3xl text-center">Testimonies</h1>
                <p class="text-[#716E6E] font-light italic text-lg text-center mt-2">see what the lord has done for us...</p>
            </div>

            <div class="mt-8">
                <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner relative w-full overflow-hidden">
                      <div class="carousel-item active relative float-left w-full text-center">
                        <p class="text-xl italic mx-auto text-gray-700 max-w-4xl">
                          "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                          numquam iure provident voluptate esse quasi, voluptas nostrum quisquam!"
                        </p>
                        <div class="mt-12 mb-6 flex justify-center">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                            class="rounded-full w-24 h-24 shadow-lg"
                            alt="smaple image"
                          />
                        </div>
                        <p class="text-gray-500">- Anna Morian</p>
                      </div>
                      <div class="carousel-item relative float-left w-full text-center">
                        <p class="text-xl italic mx-auto text-gray-700 max-w-4xl">
                          "Neque cupiditate assumenda in maiores repudiandae mollitia adipisci maiores
                          repudiandae mollitia consectetur adipisicing architecto elit sed adipiscing
                          elit."
                        </p>
                        <div class="mt-12 mb-6 flex justify-center">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp"
                            class="rounded-full w-24 h-24 shadow-lg"
                            alt="smaple image"
                          />
                        </div>
                        <p class="text-gray-500">- Teresa May</p>
                      </div>
                      <div class="carousel-item relative float-left w-full text-center">
                        <p class="text-xl italic mx-auto text-gray-700 max-w-4xl">
                          "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                          dolore eu fugiat nulla pariatur est laborum neque cupiditate assumenda in
                          maiores."
                        </p>
                        <div class="mt-12 mb-6 flex justify-center">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                            class="rounded-full w-24 h-24 shadow-lg"
                            alt="smaple image"
                          />
                        </div>
                        <p class="text-gray-500">- Kate Allise</p>
                      </div>
                    </div>
                    <button
                      class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                      type="button"
                      data-bs-target="#carouselExampleCaptions"
                      data-bs-slide="prev"
                    >
                      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                      class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                      type="button"
                      data-bs-target="#carouselExampleCaptions"
                      data-bs-slide="next"
                    >
                      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
        
    </div>
@endsection