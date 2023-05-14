@extends('layouts.photo-layout')

@section('content')

<div class="absolute top-5 left-5 z-50 px-8 py-2 bg-slate-500 text-lmhlBg1 rounded-md shadow-md hover:bg-slate-600 transition-colors delay-100 duration-250">
    <a href="{{ route('photoze') }}" as="button">Show photos</a>
</div>

<div class="absolute top-5 right-5 z-50 px-8 py-2 bg-slate-500 text-lmhlBg1 rounded-md shadow-md hover:bg-slate-600 transition-colors delay-100 duration-250">
    <a href="{{ route('logout') }}" as="button">Logout</a>
</div>

<div class="mt-24 w-full md:w-1/2 lg:w-1/3 mx-auto py-10">
    <h1 class="text-3xl font-serif text-center mb-10">Upload a photo</h1>

    <form action="{{ route('storePhoto') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="w-full mb-4">
            <label for="photographer" class="cmhLabel">Name of photographer to credit</label>
            <input id="photographer" class="cmhInput" type="text" name="photographer">
        </div>

        <div class="w-full mb-4">
            <label for="license" class="cmhLabel">Type of license to reference</label>
            <input id="license" class="cmhInput" type="text" name="license">
        </div>

        <div class="w-full mb-4 h-14">
            <label for="name" class="cmhLabel">Select photograph</label>
            <input id="name" name="name" type="file" class="w-full mt-1 pl-4 pt-9 pb-9 shadow-sm bg-lmhlBg1 h-12 rounded-full border-none focus:border-lmhlMain1 focus:ring-1 focus:ring-lmhlMain1 focus:shadow-md text-sm tracking-tight font-medium">
        </div>

        <button type="submit" class="px-2 py-3 bg-lmhlMain1 text-lmhlBg1 text-lg cursor-pointer tracking-tight font-bold rounded-lg shadow-md mt-10 w-full text-center mx-auto hover:shadow-lg">Save</button>
    </form>
</div>