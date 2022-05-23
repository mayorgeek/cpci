@extends('layouts.app')

@section('title')
About Us - Christ Preachers Church International
@endsection

@section('content')
<div>

    <!-- Hero Section -->
    <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover" style="
  background-image: url('{{ asset('images/about-us-page-hero-image.jpg') }}');
  height: 658px;
">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(43, 41, 41, 0.37);">
            <div class="flex justify-center items-center h-full">
                <div>
                    <h2 class="font-normal text-6xl mb-4 text-white opacity-95">About Our Church</h2>
                    <p class="w-[748px] font-light text-xl text-white opacity-95 mb-10 mt-2">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Purus viverra viverra nunc, id egestas et ultrices. Lorem tincidunt
                        tempor, vitae morbi aliquet vulputate. Augue malesuada ac vitae sed imperdiet.</p>
                    <a class="inline-block px-6 py-3 bg-primary text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                        href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">NEW HERE? GIVE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Hero Section -->

    {{-- Mission & Vission --}}
    <div class="py-20 px-16">
        <div>
            <h2 class="text-[#332E2E] text-3xl font-medium">Our Mission</h2>
            <p class="text-[#716E6E] text-xl font-light mt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus, nibh elit euismod facilisis.
                Pellentesque tincidunt erat metus dignissim. Feugiat feugiat nulla volutpat justo, varius sem nunc.
                Vitae sed auctor ac ac lacinia enim volutpat pretium. Nam sit lacinia nec arcu nulla scelerisque
                facilisis molestie euismod. Ut nibh lectus condimentum orci sed. Mauris scelerisque vel elit, posuere
                eget malesuada iaculis porttitor. Sollicitudin id congue aenean sed sagittis. Augue suspendisse volutpat
                pulvinar mi in adipiscing.
                <br><br>
                Ornare diam ultrices quisque neque, egestas tellus sit. Morbi eu risus in massa. Risus lectus enim quis
                faucibus interdum at id sem. Feugiat lorem condimentum mattis ultrices. Dolor dignissim lobortis varius
                augue in. Pharetra eget lorem fermentum commodo condimentum bibendum.
            </p>
        </div>

        <div class="mt-24">
            <h2 class="text-[#332E2E] text-3xl font-medium">Our Vision</h2>
            <p class="text-[#716E6E] text-xl font-light mt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus, nibh elit euismod facilisis.
                Pellentesque tincidunt erat metus dignissim. Feugiat feugiat nulla volutpat justo, varius sem nunc.
                Vitae sed auctor ac ac lacinia enim volutpat pretium. Nam sit lacinia nec arcu nulla scelerisque
                facilisis molestie euismod. Ut nibh lectus condimentum orci sed. Mauris scelerisque vel elit, posuere
                eget malesuada iaculis porttitor. Sollicitudin id congue aenean sed sagittis. Augue suspendisse volutpat
                pulvinar mi in adipiscing.
                <br><br>
                Ornare diam ultrices quisque neque, egestas tellus sit. Morbi eu risus in massa. Risus lectus enim quis
                faucibus interdum at id sem. Feugiat lorem condimentum mattis ultrices. Dolor dignissim lobortis varius
                augue in. Pharetra eget lorem fermentum commodo condimentum bibendum.
            </p>
        </div>
    </div>

    {{-- Meet Our Executives --}}
    <div class="py-20 px-16">
        <h2 class="text-[#332E2E] font-medium text-3xl text-center">Meet Our Executives</h2>
        <div class="flex flex-col items-center mt-4">
            <div class="grid grid-cols-3 gap-x-20 mt-6">
                {{-- Card 1 --}}
                <div class="w-[269px] h-[328px]">
                    <img class="rounded-lg shadow-lg"
                        src="{{ asset('images/about-us-card-image-1.jpg') }}"
                        alt="Executives Card Image 1" />
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl text-center font-normal mb-2">Elinor Key</h5>
                        <p class="text-[#BCBCBC] font-light text-base text-center">Production Director</p>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="w-[269px] h-[328px]">
                    <img class="rounded-lg shadow-lg"
                        src="{{ asset('images/about-us-card-image-2.jpg') }}"
                        alt="Executives Card Image 1" />
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl text-center font-normal mb-2">Elinor Key</h5>
                        <p class="text-[#BCBCBC] font-light text-base text-center">Production Director</p>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="w-[269px] h-[328px]">
                    <img class="rounded-lg shadow-lg"
                        src="{{ asset('images/about-us-card-image-3.jpg') }}"
                        alt="Executives Card Image 1" />
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl text-center font-normal mb-2">Elinor Key</h5>
                        <p class="text-[#BCBCBC] font-light text-base text-center">Production Director</p>
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="w-[269px] h-[328px]">
                    <img class="rounded-lg shadow-lg"
                        src="{{ asset('images/about-us-card-image-4.jpg') }}"
                        alt="Executives Card Image 1" />
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl text-center font-normal mb-2">Elinor Key</h5>
                        <p class="text-[#BCBCBC] font-light text-base text-center">Production Director</p>
                    </div>
                </div>

                {{-- Card 5 --}}
                <div class="w-[269px] h-[328px]">
                    <img class="rounded-lg shadow-lg"
                        src="{{ asset('images/about-us-card-image-5.jpg') }}"
                        alt="Executives Card Image 1" />
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl text-center font-normal mb-2">Elinor Key</h5>
                        <p class="text-[#BCBCBC] font-light text-base text-center">Production Director</p>
                    </div>
                </div>

                {{-- Card 6 --}}
                <div class="w-[269px] h-[328px]">
                    <img class="rounded-lg shadow-lg"
                        src="{{ asset('images/about-us-card-image-6.jpg') }}"
                        alt="Executives Card Image 1" />
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl text-center font-normal mb-2">Elinor Key</h5>
                        <p class="text-[#BCBCBC] font-light text-base text-center">Production Director</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
