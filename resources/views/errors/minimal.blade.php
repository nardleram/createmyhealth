<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>create my health</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Elsie&display=swap&family=Mulish:wght@300;400;500;600;700;800&display=swap">

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-lmhlBg1">
        <div class="mx-auto w-48 pt-10">
            <a href="{{ url('/') }}">
                <img src="/storage/images/cmh_whole.svg" alt="logo">
            </a>
        </div>
        <div class="relative flex items-top justify-center min-h-screen mt-12">
            <div class="mx-auto px-3 sm:px-6 lg:px-8">
                <div class="flex items-center pt-8">
                    <div class="px-4 text-lg text-lmhlHighlight5 border-r border-slate-400 tracking-wider rounded-sm mr-2">
                        @yield('code')
                    </div>

                    <div class="text-lg text-slate-600 uppercase tracking-wider">
                        @yield('message')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
