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
    <div class="bg-gray-50 px-6 lg:p-20 my-10 flex flex-col items-center space-y-24">
        @forelse ($events as $event)
            <div class="rounded-lg shadow-lg hover:shadow-2xl bg-white w-fit">
                <a href="{{ route('eventdetailspage', ['slug' => $event->slug]) }}">
                    <img class="rounded-t-lg" src="{{ asset("storage/$event->event_pic") }}" alt="{{ $event->title }}" />
                </a>
                <div class="p-6">
                    <p class="mb-2 text-gray-800 text-lg font-normal">{{ $event->scheduled_time }}</p>
                    <p class="mb-2 text-gray-800 text-lg font-normal">{{ $event->venue ?? 'Online' }}</p>
                    <h5 class="text-gray-900 text-xl font-medium mb-4">{{ $event->title }}</h5>
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