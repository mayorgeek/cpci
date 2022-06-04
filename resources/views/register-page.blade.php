@extends('layouts.app')

@section('title')
Register an Account - Christ Preachers International Church
@endsection

@section('content')
<div>

    <div class="p-20 flex justify-center bg-gray-100">
        @livewire('registration-form')
    </div>

</div>
@endsection