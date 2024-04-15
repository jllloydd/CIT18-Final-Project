<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UCGC</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.cdnfonts.com/css/nexa-bold" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gradient-to-b from-blue-900 via-blue-600 to-blue-300 text-white dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />                        
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6 lg:mt-0">

                        {{-- desktop view --}}
                        <div class="hidden lg:flex h-max">
                            <div class="container grid cols-1 gap-7 self-center" style="font-family:Nexa;">
                                <h1 class="text-7xl font-extrabold">Welcome to Task Manager!</h1>
                                @if(Route::has('login'))
                                @auth
                                    <a href="{{url('dashboard')}}">
                                        <button type="button" class="text-white bg-blue-900 hover:bg-blue-300 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Go to Dashboard
                                        </button>
                                    </a>
                                @else
                                @if(Route::has('register'))
                                <a href="{{route('register')}}">
                                    <button type="button" class="text-white bg-blue-900 hover:bg-blue-300 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 ark:bg-green-6d00">Get Started
                                    </button>
                                </a>
                                @endif
                                @endauth
                                @endif
                            </div>

                            <img
                            src="build\assets\images\todolist.gif"
                            alt="to-do list animation"
                            class="h-1/2 w-1/2 rounded-[10px] drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] self-center"
                             />
                        </div>

                        {{-- end of desktop view --}}

                        {{-- mobile view --}}

                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8 lg:hidden">
                            <div id="welcome-card" class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white text-black p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div id="welcome-container" class="relative flex w-full flex-1 items-stretch">
                                    <img
                                        src="build\assets\images\todolist.gif"
                                        alt="to-do list animation"
                                        class="h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                    />
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">

                                        <div class="pt-3 sm:pt-5 lg:pt-0 text-center">
                                            <h2 class="text-3xl font-bold text-black dark:text-white">Welcome to Task Manager!</h2>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Task Manager v1.0
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
