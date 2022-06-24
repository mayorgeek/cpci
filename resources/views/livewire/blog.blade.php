@extends('layouts.app')

@section('title')
Our Blog - Christ Preachers Church International
@endsection

@section('content')
<div>

    <!-- Hero Section -->
    <div class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover" style="
    background-image: url('{{ asset('images/blog-hero-image.jpg') }}');
    height: 658px;
    ">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(43, 41, 41, 0.37);">
            <div class="flex justify-center items-center h-full">
                <div>
                    <h2 class="font-normal text-4xl lg:text-6xl mb-4 text-white opacity-95">Our Blog</h2>
                    <p class="lg:w-[748px] font-light text-xl text-white opacity-95 mb-10 mt-2">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Hero Section -->


    {{-- Main Content --}}
    <div class="bg-gray-50 px-6 py-16 lg:p-20">

        <div class="flex flex-col items-center space-y-24">
            {{-- Blog Posts --}}
            @forelse ($posts as $post)
                <div class="rounded-lg shadow-lg hover:shadow-2xl bg-white w-full max-w-4xl">
                    <div class="flex justify-center items-center">
                        <a href="{{ route('blogdetailspage', ['slug' => $post->slug ]) }}">
                            <img class="w-full rounded-t-lg" src="{{ asset("storage/$post->post_pic") }}" alt="{{ $post->title }}" />
                        </a>
                    </div>
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $post->title }}</h5>
                        <p class="text-gray-500 text-base font-light mb-4">
                            {{ $post->summary }}
                            {{-- {!! substr($post->body, 0, 200) . "..." !!} --}}
                        </p>
                        <a href="{{ route('blogdetailspage', ['slug' => $post->slug ]) }}"
                            class="mt-5 inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read More</a>
                    </div>
                </div>
                
                
            @empty
                <h1 class="text-gray-800">Ooops! Sorry, No blog posts yet. Please check back soon.</h1>
            @endforelse        
        </div>

        <div class="mt-24 space-x-10 flex justify-center items-center">
            {{ $posts->links() }}
        </div>

    </div>

</div>

@endsection