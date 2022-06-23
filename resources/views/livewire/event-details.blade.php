@extends('layouts.app')

@section('title')
{{ $event->title }} - Christ Preachers Church International
@endsection

@section('content')
<div>

    <div class="p-6 lg:p-20">
        <h1 class="text-gray-900 text-4xl font-medium mb-6">{{ $event->title }}</h1>
        <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0 lg:space-x-8 mb-6">
            <span class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-main" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-800 text-base font-light">{{ $event->scheduled_time }}</p>
            </span>
            <span class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-main" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <p class="text-gray-800 text-base font-light">{{ $event->venue ?? 'Online' }}</p>
            </span>    
        </div>        

        <div class="mt-12">
            <img class="rounded-md" src="{{ asset("storage/$event->event_pic") }}" alt="{{ $event->title }}">
        </div>

        {{-- Main Blog event Content --}}
        <div class="my-20">
            {!! $event->content !!}
        </div>

    </div>

</div>
@endsection