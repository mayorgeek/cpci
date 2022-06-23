@extends('layouts.app')

@section('title')
Get Involved - Christ Preachers Church International
@endsection

@section('content')
<div>

    <!-- Hero Section -->
    <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover" style="
    background-image: url('{{ asset('images/get-involved-hero-image.jpg') }}');
    height: 658px;
    ">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(43, 41, 41, 0.37);">
            <div class="flex justify-center items-center h-full">
                <div>
                    <h2 class="font-normal text-4xl lg:text-6xl mb-4 text-white opacity-95">Get Involved</h2>
                    <p class="lg:w-[748px] font-light text-xl text-white opacity-95 mb-10 mt-2">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.</p>
                    <div class="flex flex-col lg:flex-row space-y-6 lg:space-y-6 lg:space-x-6 items-center lg:justify-center">
                        <a class="inline-block px-6 py-3 bg-main text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">FILL OUT A
                            GIVE ONLINE</a>

                        <a class="inline-block px-6 py-3 bg-white text-main font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">PRAYER
                            UPCOMING EVENTS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Hero Section -->


    {{-- Call To Action --}}
    <div class="flex flex-col items-center justify-center px-6 py-20 lg:p-20 mt-10">
        <h3 class="text-[#504A4A] text-center font-light text-base uppercase">Next Step</h3>
        <h1 class="text-[#2B2929] text-center font-light text-2xl lg:text-4xl mt-6">We Gather Every Sunday</h1>

        <div class="grid grid-cols-1 gap-y-8 lg:gap-y-0 lg:grid-cols-3 mt-10">
            {{-- Give Online --}}
            <div class="w-[380px] lg:w-[413.33px] p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
            background-image: url('{{ asset('images/step-1.jpg') }}');
            height: 400px;
            ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                    style="background-color: rgba(30, 133, 255, 0.58)">
                    <h2 class="text-white font-light text-xl capitalize">Give Online</h2>
                </div>
            </div>

            {{-- Give By Email --}}
            <div class="w-[380px] lg:w-[413.33px] p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
            background-image: url('{{ asset('images/step-care-and-prayer.jpg') }}');
            height: 400px;
            ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                    style="background-color: rgba(43, 41, 41, 0.49)">
                    <h2 class="text-white font-light text-xl capitalize">Give By Email</h2>
                </div>
            </div>

            {{-- FAQ --}}
            <div class="bg-[#E5E5E5] w-[380px] lg:w-[413.33px] p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
            height: 400px;
            ">
                <h2 class="text-[#2B2929] font-light text-xl uppercase">F.A.Q</h2>
            </div>
        </div>
    </div>


    {{-- Call to action 2 --}}
    <div class="mt-10 p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl h-[1360px] lg:h-[900px] w-full" style="
        background-image: url('{{ asset('images/mountain-background.jpg') }}');">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex flex-col items-center px-10 py-14 lg:p-20"
            style="background-color: rgba(40, 73, 157, 0.91)">

            {{-- Top Section --}}
            <div class="w-[360px] h-[270px] p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
                background-image: url('{{ asset('images/shaking-hands.jpg') }}');
                ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex flex-col justify-center items-center"
                    style="background-color: rgba(50, 79, 155, 0.76)">
                    <h3 class="text-white text-center opacity-95 font-light text-base uppercase">Get Invloved</h3>
                    <h1 class="text-white text-center font-light text-2xl lg:text-4xl capitalize mt-3">We Gather Every Sunday</h1>
                </div>
            </div>


            {{-- Grid Section --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-0 lg:gap-x-20 gap-y-12 text-left mt-12 lg:mt-24">
                <div>
                    <h2 class="text-white text-2xl font-medium capitalize">Next Steps</h2>
                    <p class="text-[#C4C4C4] text-sm font-medium uppercase mt-5">SUNDAYS @ 11:30AM</p>
                    <p class="text-white text-sm font-normal mt-3">
                        Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Pellentesque in ipsum id orci
                        porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.
                    </p>
                </div>

                <div>
                    <h2 class="text-white text-2xl font-medium capitalize">Next Steps</h2>
                    <p class="text-[#C4C4C4] text-sm font-medium uppercase mt-5">SUNDAYS @ 11:30AM</p>
                    <p class="text-white text-sm font-normal mt-3">
                        Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Pellentesque in ipsum id orci
                        porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.
                    </p>
                </div>

                <div>
                    <h2 class="text-white text-2xl font-medium capitalize">Next Steps</h2>
                    <p class="text-[#C4C4C4] text-sm font-medium uppercase mt-5">SUNDAYS @ 11:30AM</p>
                    <p class="text-white text-sm font-normal mt-3">
                        Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Pellentesque in ipsum id orci
                        porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.
                    </p>
                </div>

                <div>
                    <h2 class="text-white text-2xl font-medium capitalize">Next Steps</h2>
                    <p class="text-[#C4C4C4] text-sm font-medium uppercase mt-5">SUNDAYS @ 11:30AM</p>
                    <p class="text-white text-sm font-normal mt-3">
                        Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Pellentesque in ipsum id orci
                        porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.
                    </p>
                </div>

                <div>
                    <h2 class="text-white text-2xl font-medium capitalize">Next Steps</h2>
                    <p class="text-[#C4C4C4] text-sm font-medium uppercase mt-5">SUNDAYS @ 11:30AM</p>
                    <p class="text-white text-sm font-normal mt-3">
                        Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Pellentesque in ipsum id orci
                        porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.
                    </p>
                </div>

                <div>
                    <h2 class="text-white text-2xl font-medium capitalize">Next Steps</h2>
                    <p class="text-[#C4C4C4] text-sm font-medium uppercase mt-5">SUNDAYS @ 11:30AM</p>
                    <p class="text-white text-sm font-normal mt-3">
                        Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Pellentesque in ipsum id orci
                        porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{-- Cards Section --}}
    <div class="px-6 py-20 lg:p-20 my-10">
        <h3 class="text-[#504A4A] text-center font-light text-base uppercase">Next Steps</h3>
        <h1 class="text-[#2B2929] text-center font-light text-2xl lg:text-4xl mt-6">Lots of Ways to Get Involved.</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-8 gap-x-0 mt-10 lg:mx-auto">
            {{-- Step 1 --}}
            <div class="w-[413.33] p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
            background-image: url('{{ asset('images/step-1.jpg') }}');
            height: 400px;
            ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                    style="background-color: rgba(30, 133, 255, 0.58)">
                    <h2 class="text-white font-light text-xl capitalize">Step 1</h2>
                </div>
            </div>

            {{-- Pray --}}
            <div class="w-[413.33] p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
            background-image: url('{{ asset('images/step-care-and-prayer.jpg') }}');
            height: 400px;
            ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                    style="background-color: rgba(43, 41, 41, 0.49)">
                    <h2 class="text-white font-light text-xl capitalize">Pray</h2>
                </div>
            </div>

            {{-- Serving --}}
            <div class="bg-white w-[413.33] p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
            height: 400px;
            ">
                <h2 class="text-[#2B2929] font-light text-xl capitalize">Serving</h2>
            </div>

            {{-- Baptism --}}
            <div class="bg-white w-[413.33] p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
            height: 400px;
            ">
                <h2 class="text-[#2B2929] font-light text-xl capitalize">Baptism</h2>
            </div>

            {{-- Groups --}}
            <div class="bg-[#E5E5E5] w-[413.33] p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
            height: 400px;
            ">
                <h2 class="text-[#2B2929] font-light text-xl capitalize">Groups</h2>
            </div>

            {{-- Give --}}
            <div class="w-[413.33] p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
            background-image: url('{{ asset('images/next-step-give.jpg') }}');
            height: 400px;
            ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                    style="background-color: rgba(59, 65, 81, 0.76)">
                    <h2 class="text-white font-light text-xl capitalize">Give</h2>
                </div>
            </div>

            {{-- Connect --}}
            <div class="w-[413.33] p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
            background-image: url('{{ asset('images/next-step-connect.jpg') }}');
            height: 400px;
            ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                    style="background-color: rgba(59, 65, 81, 0.76)">
                    <h2 class="text-white font-light text-xl capitalize">Connect</h2>
                </div>
            </div>

            {{-- Baptism --}}
            <div class="w-[413.33] p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
            background-color: rgba(50, 79, 155, 0.76);
            height: 400px;
            ">
                <h2 class="text-[#2B2929] font-light text-xl capitalize">Missions</h2>
            </div>

            {{-- Salvation --}}
            <div class="bg-white w-[413.33] p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
            height: 400px;
            ">
                <h2 class="text-[#2B2929] font-light text-xl capitalize">Salvation</h2>
            </div>
        </div>
    </div>

</div>
@endsection
