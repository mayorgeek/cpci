<div class="p-12 rounded-lg shadow-xl bg-white max-w-3xl mt-10 mb-20 mx-auto">
    <h1 class="text-[#2B2929] text-center text-2xl font-light mb-10">Send Us a Message</h1>
    <form wire:submit.prevent="sendMessage">
        <div class="form-group mb-8">
            <input wire:model="firstname" type="text" class="form-control block
          w-full
          p-3
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none" id="firstname"
                placeholder="First Name">
        </div>

        <div class="form-group mb-8">
            <input wire:model="lastname" type="text" class="form-control block
          w-full
          p-3
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none" id="lastname"
                placeholder="Last Name">
        </div>

        <div class="form-group mb-8">
            <input wire:model="email" type="email" class="form-control block
          w-full
          p-3
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none" id="exampleInput8"
                placeholder="Email address">
        </div>

        <div class="form-group mb-8">
            <textarea wire:model="message" class="
          form-control
          block
          w-full
          p-3
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-main focus:outline-none
        " id="message" rows="3" placeholder="Message"></textarea>
        </div>

        <button type="submit" class="
        w-full
        px-6
        py-3.5
        bg-main
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
        ease-in-out">Send</button>
    </form>
</div>
