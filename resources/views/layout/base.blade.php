<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('meta_tags')
    <title>@yield('title') | Vinod Bodke</title>
    <meta name="description" content="@yield('description')">  
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    
    @vite('resources/css/app.css')

    @stack('header_scripts')

    @vite('resources/js/app.js')

    @yield('structure_tag')

    <style>
        .nav-link {
            @apply relative text-base font-medium text-gray-500 transition duration-300 ease-in-out;
        }

        .nav-link::after {
            @apply content-[''] bg-blue-600 h-0.5 w-0 left-0 -bottom-2 rounded-xl absolute transition-all duration-300 ease-in-out;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            @apply w-full;
        }

        .nav-link:hover,
        .nav-link.active {
            @apply text-blue-600;
        }

        .nav-link.active {
            @apply bg-blue-50 px-3 py-1 rounded-full;
        }

        .nav-link:hover {
            @apply bg-gradient-to-r from-blue-500 to-purple-500 bg-clip-text text-transparent;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="sticky top-0 z-50 bg-white shadow-md" id="header">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="" class="flex items-center text-blue-950 hover:text-blue-600 transition duration-300 ease-in-out">
                        <img src="{{ asset('images/profile.JPG') }}" alt="Vinod Bodke" class="w-16 h-16 object-cover rounded-full" oncontextmenu="return false;">
                        <span class="ml-3 text-xl font-semibold">VINOD BODKE</span>
                    </a>
                </div>                
    
                <!-- Improved Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#home">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            Home
                        </span>
                    </a>
                    <a href="#about">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            About
                        </span>
                    </a>
                    <a href="#skills">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            Skills
                        </span>
                    </a>
                    <a href="#contact">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            Contact
                        </span>
                    </a>
                </nav>   
                <div class="flex flex-row md:hidden">
                    <div class="my-auto ml-auto mx-2 md:mx-4">
                        <div x-data="{ open: false }">
                            <button x-on:click="open = !open" class="focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                            <div x-show="open" class="fixed inset-y-0 left-0 w-[70%] bg-gray-50 border-l-2 border-gray-200 pt-16 px-4 z-50">
                                <button x-on:click="open = !open" class="absolute top-0 right-0 mt-4 mr-4 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                                <ul class="my-4 flex flex-col gap-4">
                                    <li class="{{ request()->is('#home') ? 'underline decoration-primary underline-offset-8' : '' }}">
                                        <a href="#home">Home</a>
                                    </li>
                                    <li class="{{ request()->is('#about') ? 'underline decoration-primary underline-offset-8' : '' }}">
                                        <a href="#about">About</a>
                                    </li>
                                    <li class="{{ request()->is('#skills') ? 'underline decoration-primary underline-offset-8' : '' }}">
                                        <a href="#skills">Skills</a>
                                    </li>
                                    <li class="{{ request()->is('#contact') ? 'underline decoration-primary underline-offset-8' : '' }}">
                                        <a href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </header>
    
    
    <main>
        
        <div>
            @yield('content')
        </div>
    </main>

    <footer class="bg-gray-100 py-6">
        <div class="container mx-auto px-4 text-lg">
            <ul class="flex justify-center gap-6 mb-6">
                <li>
                    <a href="https://www.linkedin.com/in/vinod-bodke" target="_blank" class="text-gray-700 hover:text-blue-500">
                        <x-ri-linkedin-box-fill class="size-12"/>
                    </a>
                </li>
                <li>
                    <a href="http://github.com/VH83" target="_blank" class="text-gray-700 hover:text-blue-500">
                        <x-ri-github-fill class="size-12"/>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                        <x-ri-instagram-line class="size-12"/>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-700 hover:text-blue-500">
                        <x-ri-youtube-line class="size-12"/>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <div class="container mx-auto px-4 text-center text-lg">
                <p class="text-gray-700">&copy; <span id="current-year"></span> All rights reserved. | Designed by <a href="#" class="hover:text-blue-300">Vinod Bodke</a></p>
            </div>
        </div>
    </footer>
    

    @stack('logic_scripts') 
    
    <script>
        // Set the current year dynamically
        document.getElementById("current-year").textContent = new Date().getFullYear();
    </script>
</body>
</html>