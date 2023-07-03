<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>create my health</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Elsie&display=swap&family=Mulish:wght@200;300;400;500;600;700&display=swap">

        <!-- Styles -->
        @vite('resources/css/app.css')

        {{-- Scripts --}}
        @vite('resources/js/app.js')
    </head>

    <body class="antialiased bg-lmhlBg1 font-sans text-lmhlMainTextColorDark1">
        @if ($success)
            <div id="success" class="successMessage">
                {{ $success }}
            </div>
        @endif

        @if ($error)
            <div id="error" class="errorMessage">
                {{ $error }}
            </div>
        @endif

        <nav class="absolute top-0 h-24 w-full bg-lmhlBg1 text-lmhlPanel1 flex justify-between items-center z-20 md:px-8 px-4 shadow-sm shadow-lmhlMain1" aria-label="non-mobile">
            <div id="logo" class="w-2/6 z-30">
                <a href="{{ url('/') }}">
                    <img src="/storage/images/cmh_whole.svg" alt="logo" class="md:h-16 h-14 min-h-14">
                </a>
            </div>

            <div id="restov" class="w-4/6 z-50">
                <div class="absolute right-8 top-7 text-lmhlBg1 bg-primary-700 rounded-full h-11 w-11 cursor-pointer hover:bg-primary-800 hover:shadow-md transition-colors delay-100 duration-250">
                    <a href="{{ route('logout') }}">
                        <p class="pt-2 pl-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="27" height="27" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"></path></svg>
                        </p>
                    </a>
                </div>
            </div>
        </nav>

        <main class="absolute grid grid-cols-12 gap-2 top-24 h-screen w-full">
            <div id="sidebar-left" class="col-start-1 col-end-4 min-w-[250px] p-4 border border-r-primary-200 shadow-sm shadow-primary-600">
                <div class="flex justify-center items-center mt-2 mb-6 text-slate-500 text-center font-extralight tracking-widest cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                    <x-icon name="wrench-screwdriver" outline />
                    <a href="{{ route('mnarje.index') }}"><p class="ml-2 text-xl">DASHBOARD</p></a>
                </div>

                <div class="flex justify-start items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                    <x-icon name="user-group" outline />
                    <a href="{{ route('events') }}"><p class="ml-2">Events</p></a>
                </div>

                <div class="flex justify-start items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                    <x-icon name="tag" outline />
                    <a href="{{ route('categories') }}"><p class="ml-2">Categories</p></a>
                </div>

                <div class="flex justify-start items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                    <x-icon name="newspaper" outline />
                    <a href="{{ route('posts') }}"><p class="ml-2">Posts</p></a>
                </div>

                <div class="flex justify-start items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                    <x-icon name="photo" outline />
                    <a href="{{ route('photoze') }}"><p class="ml-2">Photos</p></a>
                </div>

                <div class="flex justify-start items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                    <x-icon name="calendar-days" outline />
                    <a href="{{ route('schedules') }}"><p class="ml-2">Schedule</p></a>
                </div>

                <div class="flex justify-start items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                    <x-icon name="home" outline />
                    <a href="{{ route('home') }}"><p class="ml-2">Main site</p></a>
                </div>
            </div>

            <div id="work-area" class="col-start-4 col-end-13">
                @yield('content')
            </div>
        </main>
        <div id="hamburger" class="hidden w-0 h-0"></div>
        <div id="mobile-menu" class="hidden w-0 h-0"></div>
    </body>
</html>