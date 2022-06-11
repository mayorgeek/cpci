@extends('layouts.app')

@section('title')
{{ $event->title }} - Christ Preachers Church International
@endsection

@section('content')
<div>

    <div class="p-20">
        <h1 class="text-gray-900 text-3xl font-medium mb-3">{{ $event }}</h1>
        <p class="text-base">
            {{ $event->scheduled_time }}
        </p>

        {{-- Main Blog event Content --}}
        <div class="my-12">
            {{ $event->content }}
        </div>

    </div>

</div>
@endsection