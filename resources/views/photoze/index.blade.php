@extends('layouts.photo-layout')

@section('content')

<div class="absolute top-5 left-5 z-50 px-8 py-2 bg-slate-500 text-lmhlBg1 rounded-md shadow-md hover:bg-slate-600 transition-colors delay-100 duration-250">
    <a href="{{ route('addPhoto') }}" as="button">Upload photo</a>
</div>

<div class="absolute top-5 right-5 z-50 px-8 py-2 bg-slate-500 text-lmhlBg1 rounded-md shadow-md hover:bg-slate-600 transition-colors delay-100 duration-250">
    <a href="{{ route('logout') }}" as="button">Logout</a>
</div>
<div class="mt-24 w-full md:w-1/2 mx-auto py-10 px-5 md:px-0">
    <h1 class="text-3xl font-serif text-center mb-6 text-slate-700">List of photos</h1>

    
        @if (count($photos) > 0)
            @foreach ($photos as $photo)
            <div class="w-full mx-auto flex items-center justify-between">
                <div class="w-1/4 overflow-scroll">
                    <p class="font-semibold text-sm text-slate-700">{{ $photo->photographer }}, {{ $photo->license }}</p>
                </div>

                <div class="w-1/5 mx-auto">
                    <img src="/storage/{{ $photo->name }}" alt="thumbnail_{{ $photo->id }}" class="h-14 pl-3">
                </div>

                <x-button_edit_small>
                    <x-slot:id>{{ $photo->id }}</x-slot>
                    <x-slot:text>Edit</x-slot>
                </x-button_edit_small>

                <form action="{{ route('deletePhoto', $photo->id) }}" method="POST" class="w-1/5 pt-4">
                    @csrf
                    @method('DELETE')

                    <x-button_delete_small>
                        <x-slot:text>Delete</x-slot>
                    </x-button_delete_small>
                </form>

            </div>
            @endforeach
        @endif
</div>