<div class="mt-20">
    <h1 class="text-white text-4xl font-semibold text-center">Stay In Touch</h1>
    <div class="flex justify-center mt-8">
      <form wire:submit.prevent="subscribeEmail">
        <div class="mb-5 xl:w-96">
          <input
            wire:model.lazy="name"
            type="text"
            class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            id="name"
            placeholder="Name"
          />
        </div>

        <div class="mb-5 xl:w-96">
          <input
            wire:model.lazy="email"
            type="email"
            class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            id="email"
            placeholder="Email"
          />
        </div>

        <button type="submit" class="px-6 py-3 w-full bg-[#1E85FF] text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Subscribe</button>
      </form>
    </div>
  </div>