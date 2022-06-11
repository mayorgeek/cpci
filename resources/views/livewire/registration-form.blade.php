<div class="block p-6 rounded-lg shadow-xl bg-white max-w-4xl">
    <form wire:submit.prevent="register">
        <h1 class="text-gray-900 text-xl text-center font-medium mb-10">Register an Account</h1>

        <div class="form-group mb-6">
            <label for="name" class="form-label inline-block mb-2 text-gray-700">Name</label>
            <input wire:model.lazy="name" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('name')
                    border-red-500
            @enderror"
                id=" name" placeholder="Your Name">

            @error('name')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="email" class="form-label inline-block mb-2 text-gray-700">Email Address</label>
            <input wire:model.lazy="email" type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('email')
                    border-red-500    
            @enderror"
                id=" email" aria-describedby="emailHelp" placeholder="Your Email Address">

            @error('email')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="gender" class="form-label inline-block mb-2 text-gray-700">Gender</label>
            <div class="xl:w-96">
                <select wire:model.lazy="gender" id="gender"
                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('gender')
                        border-red-500    
                    @enderror"
                    aria-label="Select Your Gender">
                    <option selected>Select Your Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            @error('gender')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="birthday" class="form-label inline-block mb-2 text-gray-700">Birthday</label>
            <div class="datepicker relative form-floating xl:w-96" data-mdb-toggle-button="false">
                <input wire:model.lazy="birthday" type="date"
                  class="form-control block w-full px-3 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('birthday')
                    border-red-500    
                  @enderror"
                  placeholder="Your Birthday" />
                <label for="floatingInput" class="text-gray-700">Select a date</label>
            </div>

            @error('birthday')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="phone" class="form-label inline-block mb-2 text-gray-700">Phone</label>
            <input wire:model.lazy="phone" type="tel" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('phone')
                    border-red-500
            @enderror"
                id=" phone" placeholder="Your Phone Number">

            @error('phone')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="address" class="form-label inline-block mb-2 text-gray-700">Address</label>
            <input wire:model.lazy="address" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('address')
                    border-red-500
            @enderror"
                id="address" placeholder="Your Address">

            @error('address')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="branch" class="form-label inline-block mb-2 text-gray-700">Church Branch</label>
            <div class="xl:w-96">
                <select wire:model.lazy="branch" id="branch"
                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('branch')
                        border-red-500    
                    @enderror"
                    aria-label="Select Your Church Branch">
                    <option selected>Select Your Branch</option>
                    <option value="accra">Accra</option>
                    <option value="kumasi">Kumasi</option>
                </select>
            </div>

            @error('branch')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="fellowship" class="form-label inline-block mb-2 text-gray-700">Fellowship Group</label>
            <div class="xl:w-96">
                <select wire:model.lazy="fellowship" id="fellowship"
                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('fellowship')
                        border-red-500     
                    @enderror"
                    aria-label="Select Your Fellowship Group">
                    <option selected>Select Your Fellowship Group</option>
                    <option value="teens">Teens</option>
                    <option value="youth fellowship">Youths</option>
                    <option value="women">Women</option>
                    <option value="men">Men</option>
                </select>
            </div>

            @error('fellowship')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="role" class="form-label inline-block mb-2 text-gray-700">Role</label>
            <div class="xl:w-96">
                <select wire:model.lazy="role" id="role"
                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('role')
                        border-red-500     
                    @enderror"
                    aria-label="Select Your Fellowship Group">
                    <option selected>Select Your Role</option>
                    <option value="member">Member</option>
                    <option value="secretary">Secretary</option>
                    <option value="pastor">Pastor</option>
                </select>
            </div>

            @error('role')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="password" class="form-label inline-block mb-2 text-gray-700">Password</label>
            <input wire:model.lazy="password" type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('password')
                    border-red-500    
            @enderror"
                id=" password" placeholder="Password">

            @error('password')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-6">
            <label for="confirmPassword" class="form-label inline-block mb-2 text-gray-700">Confirm Password</label>
            <input wire:model.lazy="password_confirmation" type="password"
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none @error('password_confirmation')
                    border-red-500    
                @enderror"
                id="confirmPassword" placeholder="Confirm Password">

            @error('password_confirmation')
                <small class="text-red-500 text-xs">{{ $message }}</small>
            @enderror
        </div>


        <button type="submit"
            class="w-full px-6 py-2.5 bg-main text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
            Register
        </button>
        <p class="text-gray-800 mt-6 text-center">Already Have an Account? <a
                href="{{ route('filament.auth.login') }}"
                class="text-main hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out">Login
                here</a>
        </p>
    </form>
</div>
