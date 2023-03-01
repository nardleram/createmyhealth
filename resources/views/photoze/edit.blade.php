@extends('layouts.photo-layout')

@section('content')

<div class="absolute top-5 left-5 z-50 px-8 py-2 bg-slate-500 text-lmhlBg1 rounded-md shadow-md hover:bg-slate-600 transition-colors delay-100 duration-250">
    <a href="{{ route('photoze') }}" as="button">Show photos</a>
</div>

<div class="absolute top-5 right-5 z-50 px-8 py-2 bg-slate-500 text-lmhlBg1 rounded-md shadow-md hover:bg-slate-600 transition-colors delay-100 duration-250">
    <a href="{{ route('logout') }}" as="button">Logout</a>
</div>

<div class="mt-24 w-full md:w-1/2 lg:w-1/3 mx-auto py-10">
    <h1 class="text-3xl font-serif text-center mb-10">Edit photo details</h1>

    <form action="{{ route('updatePhoto', $photo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="w-full mb-4 h-36">
            <h4 class="text-lg font-semibold mb-3">Photograph</h4>
            <div class="w-full mx-auto">
                <div class="h-24 w-20 mx-auto">
                    <img src="/storage/{{ $photo->name }}" alt="thumbnail_{{ $photo->id }}" class="h-24 object-contain">
                </div>
            </div>
        </div>

        <div class="w-full">
            <label for="photographer" class="cmhLabel">Name of photographer to credit</label>
            <input id="photographer" class="cmhInput" type="text" name="photographer" value="{{ $photo->photographer }}">
        </div>

        <div class="w-full">
            <label for="license" class="cmhLabel">License to reference</label>
            <input id="license" class="cmhInput" type="text" name="license" value="{{ $photo->license }}">
        </div>

        <button type="submit" class="px-2 py-3 bg-lmhlMain1 text-lmhlBg1 text-lg cursor-pointer tracking-tight font-bold rounded-lg shadow-md mt-10 w-full text-center mx-auto hover:shadow-lg">Update</button>
    </form>
</div>