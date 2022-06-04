<div class="block p-6 rounded-lg shadow-lg bg-white max-w-xl">
    <form wire:submit.prevent="register">
        <h1 class="text-gray-900 text-xl text-center font-medium mb-10">Register an Account</h1>

        <div class="form-group mb-6">
            <label for="name" class="form-label inline-block mb-2 text-gray-700">Name</label>
            <input wire:model.lazy="name" type="text"
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary focus:outline-none @error('name')
                    border-red-500
                @enderror"
                id="name" placeholder="Your Name">

            @error('name')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="email" class="form-label inline-block mb-2 text-gray-700">Email Address</label>
            <input wire:model.lazy="email" type="email"
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary focus:outline-none @error('email')
                    border-red-500    
                @enderror"
                id="email" aria-describedby="emailHelp" placeholder="Your Email Address">

            @error('email')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="password" class="form-label inline-block mb-2 text-gray-700">Password</label>
            <input wire:model.lazy="password" type="password"
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary focus:outline-none @error('password')
                    border-red-500    
                @enderror"
                id="password" placeholder="Password">

            @error('password')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="confirmPassword" class="form-label inline-block mb-2 text-gray-700">Confirm Password</label>
            <input wire:model.lazy="password_confirmation" type="password"
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary focus:outline-none"
                id="confirmPassword" placeholder="Confirm Password">
        </div>

        <button type="submit"
            class="w-full px-6 py-2.5 bg-primary text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
            Register
        </button>
        <p class="text-gray-800 mt-6 text-center">Already Have an Account? <a href="{{ route('filament.auth.login') }}"
                class="text-primary hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out">Login
                here</a>
        </p>
    </form>
</div>
