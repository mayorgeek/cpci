@extends('layouts.app')

@section('title')
Selected Blog - Christ Preachers International Church
@endsection

@section('content')
<div>

    <div class="p-20">
        <h1 class="text-gray-900 text-3xl font-medium mb-3">Welcome to Blog Post!</h1>
        <p class="text-gray-400 text-base font-light mb-6">
            Posted on January 1, 2022 by Start Bootstrap
        </p>

        {{-- Main Blog Post Content --}}
        <div class="my-12">
            
        </div>

        {{-- Comments Section --}}
        <div>

            {{-- Comment Box --}}
            <div class="mb-8 w-full">
                <textarea
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none" 
                    id="commentBox" rows="3" placeholder="Join the discussion and leave a comment!">
                </textarea>
            </div>

            {{-- Comments --}}
            <div>
                <div class="flex justify-start items-start">
                    <div>
                        <img
                            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                            class="rounded-full w-32"
                            alt="Avatar"
                        />
                    </div>
                    <div class="ml-4">
                        <h2 class="text-gray-800 font-medium text-base mb-1">Commenter Name</h2>
                        <p class="text-gray-700 font-light text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempora deleniti quod est, rerum recusandae magni non vitae ex deserunt sint quisquam, officiis sequi dolores nulla eius provident tempore et. Consectetur, distinctio recusandae perspiciatis libero beatae officia fugit quas nulla earum quo ea eum assumenda molestias voluptate error accusantium repellendus?
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection