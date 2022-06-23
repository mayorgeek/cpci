<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Christ Preachers Church International')</title>

    {{-- Poppins Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @include('sweetalert::alert')
</head>
<body>

    <nav class="flex justify-between items-center px-11 lg:px-16 py-4">
      <div>
        <h1 class="text-main text-2xl font-medium">CPCI</h1>
      </div>
      <div class="hidden lg:flex">
        <ul class="flex space-x-6 items-center">
          <li><a class="text-nav-links hover:text-main" href="{{ route('homepage') }}">Home</a></li>
          <li><a class="text-nav-links hover:text-main" href="{{ route('blogpage') }}">Blog</a></li>
          <li><a class="text-nav-links hover:text-main" href="{{ route('eventspage') }}">Events</a></li>
          <li><a class="text-nav-links hover:text-main" href="{{ route('nextstepspage') }}">Next Steps</a></li>
          <li><a class="text-nav-links hover:text-main" href="{{ route('getinvolvedpage') }}">Get Involved</a></li>
          <li><a class="text-nav-links hover:text-main" href="{{ route('aboutpage') }}">About Us</a></li>
          <li><a class="text-nav-links hover:text-main" href="{{ route('contactpage') }}">Contact</a></li>

          <li>
            <div class="dropdown relative">
              <a
                href="#"
                class="dropdown-toggle text-nav-links hover:text-main flex space-x-2"
                type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                More
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fas"
                  data-icon="caret-down"
                  class="w-2 ml-2"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 320 512"
                >
                  <path
                    fill="currentColor"
                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                  ></path>
                </svg>
              </a>
              <ul
                class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-padding border-none"
                aria-labelledby="dropdownMenuButton1"
              >
                <li>
                  <a
                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-white hover:bg-main"
                    href="{{ route('givingpage') }}"
                  >
                    Giving
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-white hover:bg-main"
                    href="{{ route('offeringpage') }}"
                  >
                    Offering
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-white hover:bg-main"
                    href="{{ route('tithespage') }}"
                  >
                    Tithe
                  </a>
                </li>
              </ul>
            </div>
          </li>

          @guest
            <a href="{{ route('registerpage') }}" class="px-6 py-2.5 bg-gray-100 text-main font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-200 active:shadow-lg transition duration-150 ease-in-out">Register</a>
            <a href="{{ route('filament.auth.login') }}" class="px-6 py-2.5 bg-main text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-main active:shadow-lg transition duration-150 ease-in-out">Login</a>            
          @endguest

        </ul>
      </div>


      {{-- Moblie Navigation --}}
      <div x-data="{ 
        message: 'good',
        isOpen: false,
        drawer() {
          this.isOpen = !this.isOpen
        }
       }" class="lg:hidden">
        <button type="button" aria-label="Open Menu" title="Open Menu"
          class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline" @click="drawer">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-900" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>


        <transition enter-class="opacity-0" enter-active-class="ease-out transition-medium"
          enter-to-class="opacity-100" leave-class="opacity-100" leave-active-class="ease-out transition-medium"
          leave-to-class="opacity-0">
          <div x-show="isOpen" class="z-10 fixed inset-0 transition-opacity">
            <div @click="isOpen = false" class="absolute inset-0 bg-black opacity-50" tabindex="0"></div>
          </div>
        </transition>
        <aside
          class="transform top-0 left-0 w-64 bg-white fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30"
          :class="isOpen ? 'translate-x-0' : '-translate-x-full'">

          <div class="flex flex-row-reverse pt-5 px-6 mb-2">
            <button type="button" @click="isOpen = false">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-900" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <div class="flex flex-col text-left space-y-4 pt-3 px-6">
            <span @click="isOpen = false">
              <a class="text-nav-links hover:text-main" href="{{ route('homepage') }}">Home</a>
            </span>

            <span @click="isOpen = false">
              <a class="text-nav-links hover:text-main" href="{{ route('blogpage') }}">Blog</a>
            </span>

            <span @click="isOpen = false">
              <a class="text-nav-links hover:text-main" href="{{ route('eventspage') }}">Events</a>
            </span>

            <span @click="isOpen = false">
              <a class="text-nav-links hover:text-main" href="{{ route('nextstepspage') }}">Next Steps</a>
            </span>

            <span @click="isOpen = false">
              <a class="text-nav-links hover:text-main" href="{{ route('getinvolvedpage') }}">Get Involved</a>
            </span>

            <span @click="isOpen = false">
              <a class="text-nav-links hover:text-main" href="{{ route('aboutpage') }}">About Us</a>
            </span>

            <span @click="isOpen = false">
              <a class="text-nav-links hover:text-main" href="{{ route('contactpage') }}">Contact</a>
            </span>

            <span>
              <a
                href="#collapseExample" 
                class="text-nav-links hover:text-main flex space-x-2"
                type="button"
                data-bs-toggle="collapse" 
                role="button" 
                aria-expanded="false" 
                aria-controls="collapseExample"
              >
                More
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fas"
                  data-icon="caret-down"
                  class="w-2 ml-2"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 320 512"
                >
                  <path
                    fill="currentColor"
                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                  ></path>
                </svg>
              </a>

                <div class="collapse py-3 space-y-2" id="collapseExample">
                      <a
                        class="block text-nav-links hover:text-main"
                        href="{{ route('givingpage') }}"
                      >
                        Giving
                      </a>
                      <a
                        class="block text-nav-links hover:text-main"
                        href="{{ route('offeringpage') }}"
                      >
                        Offering
                      </a>
                      <a
                        class="block text-nav-links hover:text-main"
                        href="{{ route('tithespage') }}"
                      >
                        Tithe
                      </a>
                </div>
            </span>

            @guest
              <span @click="isOpen = false">
                <a class="text-nav-links hover:text-main" href="{{ route('registerpage') }}">Register</a>
              </span>

              <span @click="isOpen = false">
                <a href="{{ route('filament.auth.login') }}" class="px-6 py-2.5 bg-main text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-main active:shadow-lg transition duration-150 ease-in-out">Login</a>            
              </span>
            @endguest

          </div>

        </aside>

      </div>
    </nav>
    
    @yield('content')

    <footer>
      <div class="bg-main py-10 lg:py-20">
        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-center space-y-10 lg:space-y-0 lg:space-x-56 text-white pl-8 lg:pl-0">
          <div>
            <h2 class="text-lg font-semibold mb-4">About Us</h2>
            <ul class="space-y-2">
              <li>About</li>
              <li>Students</li>
              <li>Young Adults</li>
              <li>Adults</li>
              <li>Our Mission</li>
            </ul>
          </div>
  
          <div>
            <h2 class="text-lg font-semibold mb-4">Next Steps</h2>
            <ul class="space-y-2">
              <li>Groups</li>
              <li>Serving</li>
              <li>Baptism</li>
              <li>Pray</li>
              <li>Missions</li>
              <li>Salvation</li>
              <li>Care</li>
            </ul>
          </div>
  
          <div>
            <h2 class="text-lg font-semibold mb-4">Resources</h2>
            <ul class="space-y-2">
              <li>Watch</li>
              <li>Ready</li>
              <li>Sermons</li>
              <li>Blog</li>
              <li>Music</li>
            </ul>
          </div>
  
          <div>
            <h2 class="text-lg font-semibold mb-4">Get Involved</h2>
            <ul class="space-y-2">
              <li><a href="{{ route('eventspage') }}">Events</a></li>
              <li>Give</li>
              <li>Volunteer</li>
              <li>Visit</li>
              <li>Contact Us</li>
            </ul>
          </div>
  
        </div>
  
        @livewire('subscribe-form')
      </div>

      <div class="bg-white py-2">
        <p class="text-center text-[#332E2E]">&copy; Copyright 2021. All rights reserved.</p>
      </div>  
    </footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireScripts
</body>
</html>