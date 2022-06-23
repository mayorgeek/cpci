@extends('layouts.app')

@section('title')
Giving - Christ Preachers Church International
@endsection

@section('content')
<div>

    <div class="bg-gray-100 px-8 py-20 lg:p-20 flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <form wire:submit.prevent="give">
                <h1 class="text-gray-900 text-xl text-center font-medium mb-10">Giving</h1>

              <div class="form-group mb-6">
                <label for="name" class="form-label inline-block mb-2 text-gray-700">Name</label>
                <input wire:model.lazy="name" type="name" class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                  id="name" placeholder="Your Name">
              </div>
    
              <div class="form-group mb-6">
                <label for="email" class="form-label inline-block mb-2 text-gray-700">Email address</label>
                <input wire:model.lazy="email" type="email" class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"
                  aria-describedby="emailHelp" placeholder="Enter email">
              </div>
    
              <div class="form-group mb-6">
                <label for="amount" class="form-label inline-block mb-2 text-gray-700">Amount</label>
                <input wire:model.lazy type="number" class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                  id="amount" placeholder="Enter Amount">
              </div>
    
              <button type="submit" class="
                px-6
                py-2.5
                bg-blue-600
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">Continue</button>
            </form>
          </div>
    
    </div>

</div>
@endsection