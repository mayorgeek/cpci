@extends('layouts.app')

@section('title')
Next Steps - Christ Preachers Church International
@endsection

@section('content')
<div>

    <!-- Hero Section -->
    <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover" style="
    background-image: url('{{ asset('images/next-steps-hero-image.jpg') }}');
    height: 658px;
    ">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(43, 41, 41, 0.37);">
            <div class="flex justify-center items-center h-full">
                <div>
                    <h2 class="font-normal text-6xl mb-4 text-white opacity-95">Next Steps</h2>
                    <p class="w-[748px] font-light text-xl text-white opacity-95 mb-10 mt-2">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.</p>
                    <div class="flex space-x-6 justify-center">
                        <a class="inline-block px-6 py-3 bg-primary text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">FILL OUT A
                            NEW HERE?</a>

                        <a class="inline-block px-6 py-3 bg-white text-primary font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">PRAYER
                            GET IN TOUCH</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Hero Section -->

    {{-- Cards Section --}}
    <div class="grid grid-cols-3 gap-x-0 gap-y-0 mt-20">
        <h3 class="text-white text-center opacity-95 font-light text-base uppercase">Next Steps</h3>
        <h1 class="text-white text-center font-light text-4xl mt-6">Lots of Ways to Get Involved.</h1>

        {{-- Step 1 --}}
        <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
        background-image: url('{{ asset('images/our-blog.jpg') }}');
        height: 400px;
        width: 413.33px;
        ">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                style="background-color: rgba(30, 133, 255, 0.58)">
                <h2 class="text-white font-light text-xl capitalize">Step 1</h2>
            </div>
        </div>

        {{-- Pray --}}
        <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
        background-image: url('{{ asset('images/our-blog.jpg') }}');
        height: 400px;
        width: 413.33px;
        ">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                style="background-color: rgba(43, 41, 41, 0.49)">
                <h2 class="text-white font-light text-xl capitalize">Pray</h2>
            </div>
        </div>

        {{-- Serving --}}
        <div class="bg-white p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
        height: 400px;
        width: 413.33px;
        ">
            <h2 class="text-[#2B2929] font-light text-xl capitalize">Serving</h2>
        </div>

        {{-- Baptism --}}
        <div class="bg-white p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
        height: 400px;
        width: 413.33px;
        ">
            <h2 class="text-[#2B2929] font-light text-xl capitalize">Baptism</h2>
        </div>

        {{-- Groups --}}
        <div class="bg-[#E5E5E5] p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
        height: 400px;
        width: 413.33px;
        ">
            <h2 class="text-[#2B2929] font-light text-xl capitalize">Groups</h2>
        </div>

        {{-- Give --}}
        <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
        background-image: url('{{ asset('images/our-blog.jpg') }}');
        height: 400px;
        width: 413.33px;
        ">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                style="background-color: rgba(59, 65, 81, 0.76)">
                <h2 class="text-white font-light text-xl capitalize">Give</h2>
            </div>
        </div>

        {{-- Connect --}}
        <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
        background-image: url('{{ asset('images/our-blog.jpg') }}');
        height: 400px;
        width: 413.33px;
        ">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                style="background-color: rgba(59, 65, 81, 0.76)">
                <h2 class="text-white font-light text-xl capitalize">Connect</h2>
            </div>
        </div>

        {{-- Baptism --}}
        <div class="p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
        background-color: rgba(50, 79, 155, 0.76)
        height: 400px;
        width: 413.33px;
        ">
            <h2 class="text-[#2B2929] font-light text-xl capitalize">Missions</h2>
        </div>

        {{-- Salvation --}}
        <div class="bg-white p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
        height: 400px;
        width: 413.33px;
        ">
            <h2 class="text-[#2B2929] font-light text-xl capitalize">Salvation</h2>
        </div>
    </div>

    {{-- Care & Prayer --}}
    <div class="grid grid-cols-2 gap-x-14 p-20 mt-10 h-[394px]">
        {{-- Left Section --}}
        <div class="flex flex-col justify-center items-center rounded-xl shadow-xl p-12 w-[870px]">
            <h3 class="text-[#504A4A] text-center font-light text-base uppercase">Step</h3>
            <h1 class="text-[#2B2929] text-center font-light text-4xl capitalize mt-6">Care & Prayer</h1>

            <p class="text-[#626060] font-light text-lg text-center mt-10">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim sit tellus ornare quam at nunc at mi, et. Gravida ultrices non urna pulvinar nibh in. Aliquet hac amet, augue ut faucibus laoreet a interdum.
            </p>

            <button type="button" class="mt-12 px-6 py-3 border-2 border-primary text-primary font-medium text-xs leading-tight uppercase rounded hover:bg-gray-800 hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Learn More</button>
        </div>

        {{-- Right Section --}}
        <div class="max-w-[320px]">
            <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover rounded-lg shadow-xl" style="
            background-image: url('{{ asset('images/our-blog.jpg') }}');
            height: 244px;
            width: 320px;
            ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                    style="background-color: rgba(103, 125, 180, 0.21)">
                </div>
            </div>

            <div class="mt-6 p-6">
                <p class="text-[#626060] text-center font-light text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis massa ridiculus eget hac venenatis, amet, nibh aliquam. Quam pellentesque urna bibendum porttitor condimentum dolor.
                </p>
            </div>
        </div>
    </div>

</div>
@endsection
