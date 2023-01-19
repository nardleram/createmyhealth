<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>create my health</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Elsie&display=swap&family=Mulish:wght@300;400;500;600;700&display=swap">

        <!-- Styles -->
        @vite('resources/css/app.css')

        {{-- Scripts --}}
        @vite('resources/js/app.js')
    </head>

    <body class="antialiased bg-lmhlBg1 font-sans text-lmhlMainTextColorDark1">
        <nav class="fixed top-0 h-24 w-full bg-lmhlBg1 text-lmhlPanel1 flex justify-between items-center z-50 md:px-8 px-4 shadow-sm shadow-lmhlMain1" aria-label="non-mobile">
            <div id="logo" class="w-2/6 z-50">
                <a href="{{ url('/') }}">
                    <img src="/storage/images/cmh_whole3.svg" alt="logo" class="md:h-16 h-14 min-h-14">
                </a>
            </div>

            <div id="menu" class="hidden sm:flex w-2/3 justify-between items-center">
                <div class="w-1/6">
                    <a href="{{ url('/') }}" class="font-light text-center pt-7 tracking-wide hover:text-lmhlPanel2 cursor-pointer transition-colors delay-100 duration-250">home</a>
                </div>
                <div class="w-1/6">
                    <a href="{{ url('/weare') }}" class="font-light text-center pt-7 tracking-wide hover:text-lmhlPanel2 cursor-pointer transition-colors delay-100 duration-250">we are</a>
                </div>
                <div class="w-1/6">
                    <a href="{{ url('/education') }}" class="font-light text-center pt-7 tracking-wide hover:text-lmhlPanel2 cursor-pointer transition-colors delay-100 duration-250">education</a>
                </div>
                <div class="w-1/6">
                    <a href="{{ url('/events') }}" class="font-light text-center pt-7 tracking-wide hover:text-lmhlPanel2 cursor-pointer transition-colors delay-100 duration-250">events</a>
                </div>
            </div>

            <div id="hamburger" class="sm:hidden cursor-pointer absolute top-8 mt-1 right-3 w-8 h-8 z-50">
                <div class="bg-lmhlPanel1 w-8 h-1 rounded-full transition-all duration-500 mt-3 before:content-[''] before:bg-lmhlPanel1 before:transition-all before:duration-500 before:w-8 before:h-1 before:rounded-full before:absolute before:-translate-y-3 after:transition-all after:duration-500 after:content-[''] after:bg-lmhlPanel1 after:w-8 after:h-1 after:rounded-full after:absolute after:translate-y-3"></div>
            </div>
        </nav>

        <nav id="mobile-menu" class="text-lmhlBg1 sm:hidden hidden flex-col items-center min-h-screen absolute top-24 text-center bg-lmhlPanel1 opacity-90 w-full pt-10 text-3xl z-10 origin-top animate-open-menu" aria-label="mobile">
            <a href="{{ url('/') }}" class="h-12 w-full pt-1 mb-8 font-light hover:bg-lmhlPanel1 hover:text-lmhlMenuTextFocus transition-colors delay-100 duration-250">home</a>
            <a href="{{ url('/weare') }}" class="h-12 w-full pt-1 mb-8 font-light hover:bg-lmhlPanel1 opacity-80 hover:text-lmhlMenuTextFocus transition-colors delay-100 duration-250">we are</a>
            <a href="{{ url('/education') }}" class="h-12 w-full pt-1 mb-8 font-light hover:bg-lmhlPanel1 opacity-80 hover:text-lmhlMenuTextFocus transition-colors delay-100 duration-250">education</a>
            <a href="{{ url('/events') }}" class="h-12 w-full pt-1 mb-8 font-light hover:bg-lmhlPanel1 opacity-80 hover:text-lmhlMenuTextFocus transition-colors delay-100 duration-250">events</a>
        </nav> 

        @yield('content')
    </body>
</html>