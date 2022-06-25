@extends('layouts.app')

@section('title')
{{ $post->title }} - Christ Preachers Church International
@endsection

@section('content')
<div>

    <div class="p-6 lg:p-20">
        <h1 class="text-gray-900 text-4xl font-medium mb-6">{{ $post->title }}</h1>
        <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0 lg:space-x-8 mb-6">
            <span class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-main" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-gray-800 text-base font-light">{{ $post->posted_by }}</p>
            </span>

            <span class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-main" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-800 text-base font-light">{{ $post->created_at->diffForHumans() }}</p>
            </span>

            <span class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-main" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <p class="text-gray-800 text-base font-light">{{ $post->comments()->count() }} Comments</p>
            </span>
        </div>

        <div class="mt-12">
            <img class="w-full rounded-md" src="{{ asset("storage/$post->post_pic") }}" alt="{{ $post->title }}">
        </div>

        {{-- Main Blog Post Content --}}
        <div class="my-20">
            {!! $post->body !!}
        </div>

        {{-- Comments Section --}}
        <div>
            @auth
                <h2 class="text-gray-900 text-xl mb-6">Leave a comment</h2>

                {{-- Comment Box --}}
                <div class="mb-8 w-full">
                    @livewire('comment-box', ['post' => $post])
                </div>
            @endauth

            @guest
                <h2 class="text-gray-700 text-lg mb-6">Login or register to post a comment.</h2>
            @endguest

            {{-- Comments --}}
            <div class="space-y-10">
                @forelse ($post->comments->sortDesc() as $comment)
                    <div class="bg-gray-50 space-y-4 shadow-lg rounded-md p-6">
                        <h2 class="text-gray-800 font-medium text-lg ml-4">{{ $comment->username }}</h2>

                        <p class="text-gray-500 text-sm">
                            {{ $comment->created_at->diffForHumans() }}
                        </p>

                        <p class="text-gray-700 font-light text-base">
                            {{ $comment->body }}
                        </p>
                    </div>
                @empty
                    <h1 class="text-gray-800 text-lg font-normal">No comments!</h1>   
                @endforelse
            </div>

        </div>

    </div>

</div>
@endsection