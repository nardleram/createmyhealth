<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create My Health</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Elsie&display=swap&family=Mulish:wght@200;300;400;500;600;700&display=swap">

        @routes
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
        @inertiaHead
    </head>

    <body class="bg-lmhlBg1 font-sans">
        @inertia
        
        <div id="hamburger" class="hidden w-0 h-0"></div>
        <div id="mobile-menu" class="hidden w-0 h-0"></div>
    </body>
</html>