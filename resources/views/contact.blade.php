@extends('layouts.app')

@section('title')
Contact - Christ Preachers Church International
@endsection

@section('content')
<div>

    <!-- Hero Section -->
    <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover" style="
    background-image: url('{{ asset('images/contact-page-hero-image.jpg') }}');
    height: 658px;
    ">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(43, 41, 41, 0.37);">
            <div class="flex justify-center items-center h-full">
                <div>
                    <h2 class="font-normal text-6xl mb-4 text-white opacity-95">Contact CPCI</h2>
                    <p class="w-[748px] font-light text-xl text-white opacity-95 mb-10 mt-2">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.</p>
                    <div class="flex space-x-6 justify-center">
                        <a class="inline-block px-6 py-3 bg-main text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">FILL OUT A
                            CONNECTION CARD?</a>

                        <a class="inline-block px-6 py-3 bg-white text-main font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">PRAYER
                            REQUESTS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Hero Section -->


    {{-- Info Card Section --}}
    <div
        class="bg-[#1E85FF] py-20 shadow-2xl w-[1240px] h-[597px] flex flex-col justify-center items-center mt-24 mx-auto">
        <h3 class="text-white text-center opacity-95 font-light text-base uppercase">Get In Touch</h3>
        <h1 class="text-white text-center font-light text-4xl capitalize mt-6">Contact & Visiting Info</h1>
        <div class="flex justify-center space-x-28 mt-12">
            <div>
                <h2 class="text-white font-medium text-2xl">Worship Gatherings</h2>
                <p class="text-[#E5E5E5] font-light text-base uppercase mt-6">1234 CPCI ST. SAN FRANCISCO, CA 93513</p>
                <p class="text-[#E5E5E5] font-light text-base uppercase mt-4">THUR & SUN @ 5:30PM & 7:30PM</p>
            </div>

            <div>
                <h2 class="text-white font-medium text-2xl">Mailing Address</h2>
                <p class="text-[#E5E5E5] font-light text-base uppercase mt-6">1234 CPCI ST. SAN FRANCISCO, CA 93513</p>
            </div>

            <div>
                <h2 class="text-white font-medium text-2xl">Phone & Email</h2>
                <p class="text-[#E5E5E5] font-light text-base uppercase mt-6">(234) 905-907-0371</p>
                <p class="text-[#E5E5E5] font-light text-base uppercase mt-4">cpci@gmail.com</p>
            </div>
        </div>
    </div>


    {{-- Cards Section --}}
    <div class="p-20 mt-10 grid grid-cols-4">
        <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
        background-image: url('{{ asset('images/our-blog.jpg') }}');
        height: 320px;
        width: 310px;
        ">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                style="background-color: rgba(30, 133, 255, 0.58)">
                <h2 class="text-white font-light text-xl capitalize">Our Blog</h2>
            </div>

        </div>

        <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
        background-image: url('{{ asset('images/live-stream.jpg') }}');
        height: 320px;
        width: 310px;
        ">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                style="background-color: rgba(80, 74, 74, 0.48)">
                <h2 class="text-white font-light text-xl capitalize">Live Stream</h2>
            </div>

        </div>

        <div class="bg-white p-12 flex justify-center items-center text-center overflow-hidden shadow-xl" style="
        height: 320px;
        width: 310px;
        ">
            <h2 class="text-[#2B2929] font-light text-xl capitalize">Plan a Visit</h2>
        </div>

        <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover shadow-xl" style="
        background-image: url('{{ asset('images/give.jpg') }}');
        height: 320px;
        width: 310px;
        ">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex justify-center items-center"
                style="background-color: rgba(10, 25, 64, 0.87)">
                <h2 class="text-white font-light text-xl capitalize">Give</h2>
            </div>

        </div>

    </div>

    {{-- Contact Form Section --}}
    @livewire('contact-form')

</div>
@endsection
