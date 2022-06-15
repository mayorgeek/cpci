@extends('layouts.app')

@section('title')
Register an Account - Christ Preachers International Church
@endsection

@section('content')
<div>

    <div class="p-20 flex justify-center bg-gray-100">

        <form wire:submit.prevent="register">

            {{ $this->form }}

            <button type="submit"
                class="w-full px-6 py-2.5 bg-main text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Register
            </button>
        </form>

    </div>

</div>
@endsection
