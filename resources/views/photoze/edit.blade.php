@extends('layouts.management-layout')

@section('content')

<div class="mx-auto max-w-3xl min-w-[768px]">
    <div class="w-4/6 sm:1/2 mx-auto py-10 px-5 md:px-0">
        <h1 class="mnarjeTitle">Edit photo details</h1>

        <form action="{{ route('updatePhoto', $photo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="w-full mb-6">
                <div class="w-full mx-auto">
                    <div class="rounded-lg max-w-max h-max mx-auto shadow-md">
                        <img src="/storage/{{ $photo->name }}" alt="thumbnail_{{ $photo->id }}" class="h-36 object-fill">
                    </div>
                </div>
            </div>

            <div class="w-full mb-4">
                <label for="photographer" class="cmhLabel">Name of photographer to credit</label>
                <input id="photographer" class="cmhInput" type="text" name="photographer" value="{{ $photo->photographer }}">
            </div>

            <div class="w-full">
                <label for="license" class="cmhLabel">License to reference</label>
                <input id="license" class="cmhInput" type="text" name="license" value="{{ $photo->license }}">
            </div>

            <button type="submit" class="w-full mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">Update</button>
        </form>
    </div>
</div>

@endsection