<div class="mt-20">
    <h1 class="text-white text-4xl font-semibold text-center">Stay In Touch</h1>
    <div class="flex flex-col items-center mt-8">
      @if ($subscriptionSuccessful)
        <div class="bg-green-100 rounded-lg py-3 px-3 mb-8 text-base text-green-700 inline-flex items-center xl:w-96" role="alert">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
          </svg>
          Email Subsrciption Successful!
        </div>
      @endif

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