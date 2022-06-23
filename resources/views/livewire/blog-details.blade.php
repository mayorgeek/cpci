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
            <img class="rounded-md" src="{{ asset("storage/$post->post_pic") }}" alt="{{ $post->title }}">
        </div>

        {{-- Main Blog Post Content --}}
        <div class="my-20">
            {!! $post->body !!}
        </div>

        {{-- Comments Section --}}
        <div>
            <h2 class="text-gray-900 text-xl mb-6">Leave a comment</h2>

            {{-- Comment Box --}}
            <div class="mb-8 w-full">
                <form wire:submit.prevent="postComment">
                    {{ $this->form }}

                    <button wire:click='postComment' type="button" class="mt-5 inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Submit</button>
                </form>
            </div>

            {{-- Comments --}}
            <div>
                <div class="space-y-4 shadow-lg rounded-md p-6">
                    <div class="flex justify-start items-center">
                        <img
                            style="max-width: 50px;"
                            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                            class="rounded-full"
                            alt="Avatar"
                        />
                        <h2 class="text-gray-800 font-medium text-lg ml-4">Commenter Name</h2>
                    </div>

                    <p class="text-gray-500 text-sm">
                        June 7, 2022 at 11:22 am
                    </p>

                    <p class="text-gray-700 font-light text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempora deleniti quod est, rerum recusandae magni non vitae ex deserunt sint quisquam, officiis sequi dolores nulla eius provident tempore et. Consectetur, distinctio recusandae perspiciatis libero beatae officia fugit quas nulla earum quo ea eum assumenda molestias voluptate error accusantium repellendus?
                    </p>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection