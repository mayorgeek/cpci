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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>
<body>

    <nav class="flex justify-between items-center px-16 py-4">
      <div>
        <h1 class="text-primary text-2xl font-medium">CPCI</h1>
      </div>
      <div>
        <ul class="flex space-x-6 items-center">
          <li><a class="text-nav-links hover:text-primary" href="{{ route('homepage') }}">Home</a></li>
          <li><a class="text-nav-links hover:text-primary" href="">Blog</a></li>
          <li><a class="text-nav-links hover:text-primary" href="{{ route('nextstepspage') }}">Next Steps</a></li>
          <li><a class="text-nav-links hover:text-primary" href="">Get Involved</a></li>
          <li><a class="text-nav-links hover:text-primary" href="{{ route('aboutpage') }}">About Us</a></li>
          <li><a class="text-nav-links hover:text-primary" href="{{ route('contactpage') }}">Contact</a></li>
          <button type="button" class="px-6 py-2.5 bg-primary text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary active:shadow-lg transition duration-150 ease-in-out">Login</button>
        </ul>
      </div>
    </nav>
    
    @yield('content')

    <footer>
      <div class="bg-primary py-20">
        <div class="flex items-start justify-center space-x-56 text-white">
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
              <li>Give</li>
              <li>Volunteer</li>
              <li>Visit</li>
              <li>Contact Us</li>
            </ul>
          </div>
  
        </div>
  
        <div class="mt-20">
          <h1 class="text-white text-4xl font-semibold text-center">Stay In Touch</h1>
          <div class="flex justify-center mt-8">
            <form>
              <div class="mb-5 xl:w-96">
                <input
                  type="text"
                  class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  id="exampleText0"
                  placeholder="Name"
                />
              </div>
    
              <div class="mb-5 xl:w-96">
                <input
                  type="email"
                  class="form-control block w-full px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  id="exampleText0"
                  placeholder="Email"
                />
              </div>
  
              <button type="submit" class="px-6 py-3 w-full bg-[#1E85FF] text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Subscribe</button>
            </form>
          </div>
        </div>
      </div>

      <div class="bg-white py-2">
        <p class="text-center text-[#332E2E]">Copyright 2021. All rights reserved.</p>
      </div>  
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>