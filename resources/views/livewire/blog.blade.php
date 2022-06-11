@extends('layouts.app')

@section('title')
Our Blog - Christ Preachers Church International
@endsection

@section('content')
<div>

    {{-- Hero Section --}}
    <div>
        <img class="h-[749px] w-full" src="{{ asset('images/blog-hero-image.jpg') }}"
            alt="Our Blog - Christ Preachers Church International">
    </div>


    {{-- Main Content --}}
    <div class="p-20 flex justify-between space-x-20">

        {{-- Left Side --}}
        <div>
            {{-- Blog Posts --}}
            @forelse ($posts as $post)
                <div class="rounded-lg shadow-lg bg-white w-full">
                    <a href="{{ route('blogdetailspage', ['slug' => $post->slug ]) }}">
                        <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt="{{ $post->title }}" />
                    </a>
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $post->title }}</h5>
                        <p class="text-gray-700 text-base mb-4">
                            {{ substr("Hello How are you", 0, 50) . "..." }}
                        </p>
                        <a href="{{ route('blogdetailspage', ['slug' => $post->slug ]) }}"
                            class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read More</a>
                    </div>
                </div>
            @empty
                <h1 class="text-gray-800">Ooops! Sorry, No blog posts yet. Please check back soon.</h1>
            @endforelse        
        </div>

        {{-- Right Side --}}
        <div>
            {{-- Search --}}
            <div class="block rounded-lg shadow-lg bg-white max-w-sm mb-12">
                <div class="py-3 px-6 border-b border-gray-100 bg-gray-100">
                    Search
                </div>
                <div class="p-6">
                    <div  class="flex justify-center items-center">
                        <input type="text"
                            class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-l transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none"
                            id="search" placeholder="Enter search term..." />
                        <button type="button"
                            class="rounded-r bg-main text-white flex justify-center items-center leading-normal uppercase shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-9 h-9">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Categories --}}
            <div class="block rounded-lg shadow-lg bg-white max-w-sm mb-12">
                <div class="py-3 px-6 border-b border-gray-100 bg-gray-100">
                    Categories
                </div>
                <div class="p-6">
                    <div class="bg-white rounded-lg border border-gray-200 w-full text-gray-900">
                        <a href="#!" aria-current="true"
                            class="block px-6 py-2 border-b border-gray-200 w-full rounded-t-lg bg-main text-white cursor-pointer">
                            All
                        </a>

                        <a href="#!"
                            class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-0 focus:bg-gray-200 focus:text-gray-600 transition duration-500 cursor-pointer">
                            Music
                        </a>

                        <a href="#!"
                            class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-0 focus:bg-gray-200 focus:text-gray-600 transition duration-500 cursor-pointer">
                            Culture
                        </a>

                        <a href="#!"
                            class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-0 focus:bg-gray-200 focus:text-gray-600 transition duration-500 cursor-pointer">
                            Videos
                        </a>
                    </div>
                </div>
            </div>

            <div class="block rounded-lg shadow-lg bg-white max-w-sm">
                <div class="py-3 px-6 border-b border-gray-100 bg-gray-100">
                    Side Widget
                </div>
                <div class="p-6">
                    <p class="text-gray-700 text-base mb-4">
                        With supporting text below as a natural lead-in to additional content.
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection