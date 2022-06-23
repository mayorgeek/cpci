@extends('layouts.app')

@section('title')
Events - Christ Preachers Church International
@endsection

@section('content')
<div>
    
    <!-- Hero Section -->
    <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover" style="
    background-image: url('{{ asset('images/church-events-section-image.jpg') }}');
    height: 658px;
    ">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(43, 41, 41, 0.37);">
            <div class="flex justify-center items-center h-full">
                <div>
                    <h2 class="font-normal text-4xl lg:text-6xl mb-4 text-white opacity-95">Events</h2>
                    <p class="lg:w-[748px] font-light text-xl text-white opacity-95 mb-10 mt-2">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Hero Section -->


    {{-- Main Content --}}
    <div class="bg-gray-50 px-6 lg:p-20 py-10 flex flex-col items-center space-y-24">
        @forelse ($events as $event)
            <div class="rounded-lg shadow-lg hover:shadow-2xl bg-white max-w-4xl">
                <a href="{{ route('eventdetailspage', ['slug' => $event->slug]) }}">
                    <img class="rounded-t-lg" src="{{ asset("storage/$event->event_pic") }}" alt="{{ $event->title }}" />
                </a>
                <div class="p-6">
                    <span class="flex space-x-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-main" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-800 text-base font-normal">{{ $event->scheduled_time }}</p>
                    </span>
                    <span class="flex space-x-2 mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-main" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="text-gray-800 text-base font-normal">{{ $event->venue ?? 'Online' }}</p>
                    </span>

                    <h5 class="text-gray-800 text-xl font-medium mb-4">{{ $event->title }}</h5>
                    <a href="{{ route('eventdetailspage', ['slug' => $event->slug]) }}"
                        class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View</a>
                </div>
            </div>    
        @empty
            <h2 class="text-gray-800">Oops... Sorry, No events found! Please check back soon.</h2>    
        @endforelse
    </div>


    {{-- Pagination Links --}}
    <div class="mt-24 space-x-10 flex justify-center items-center">
        {{ $events->links() }}
    </div>

</div>
@endsection