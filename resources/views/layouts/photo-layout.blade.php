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
        <nav class="absolute top-0 w-full flex items-start justify-center">
            <div class="top-5 mx-auto w-20 mt-3">
                <img src="/storage/images/cmh_heart.svg" alt="logo: heart only">
            </div>
        </nav>
        @yield('content')
    </body>
</html>