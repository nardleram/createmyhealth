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
    <body>
        <div class="mt-24 w-full md:w-1/2 lg:w-1/3 mx-auto border-y border-y-gray-400 rounded-md py-10 px-6">
            <h1 class="text-3xl font-serif text-center">Jump in to admin</h1>
            <div class="w-full mx-auto mt-10">
                @error('name')
                    <div class="w-full border text-sm text-center px-4 py-2 mb-2 border-red-700 bg-red-100 text-red-700 font-semibold rounded-md">{{ $message }}</div>
                @enderror
        
                @error('email')
                    <div class="w-full border text-sm text-center px-4 py-2 mb-2 border-red-700 bg-red-100 text-red-700 font-semibold rounded-md">{{ $message }}</div>
                @enderror
        
                @error('password')
                    <div class="w-full border text-sm text-center px-4 py-2 mb-5 border-red-700 bg-red-100 text-red-700 font-semibold rounded-md">{{ $message }}</div>
                @enderror
        
                <form action="{{ route('authenticate') }}" method="POST">
                    @csrf
                    
                    <div class="mb-6">
                        <label class="cmhLabel" for="name">Name</label>
                        <input id="name" class="cmhInput" name="name" type="text" value="{{ old('name') }}" required>
                    </div>
        
                    <div class="mb-6">
                        <label class="cmhLabel" for="email">Email</label>
                        <input id="email" class="cmhInput" name="email" type="email" value="{{ old('email') }}" required>
                    </div>
        
                    <div class="mb-6">
                        <label class="cmhLabel" for="password">Password</label>
                        <input id="password" class="cmhInput" name="password" type="password" required>
                    </div>
        
                    <button type="submit" class="px-2 py-3 bg-lmhlMain1 text-lmhlBg1 text-lg cursor-pointer tracking-tight font-bold rounded-lg shadow-md mt-10 w-full text-center mx-auto hover:shadow-lg">Login</button>
                </form>
            </div>
        </div>
    </body>