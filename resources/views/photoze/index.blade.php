@extends('layouts.management-layout')

@section('content')

<div class="mx-auto max-w-3xl min-w-[768px]">
    <div class="w-11/12 mx-auto py-10 px-5 md:px-0">
        <h1 class="mnarjeTitle">Active home-page photos</h1>
        
            @if (count($photos) > 0)
            <div class="w-full mx-auto flex flex-col gap-3 items-center justify-start mb-3">
                @foreach ($photos as $photo)
                
                    <div class="flex gap-2 items-center w-full py-2 justify-start bg-lmhlBgInput text-slate-500 border border-slate-300 rounded-md shadow-md">
                        <div class="ml-3">
                            <img src="/storage/{{ $photo->name }}" alt="thumbnail_{{ $photo->id }}" class="h-14 w-16 rounded-full object-cover">
                        </div>

                        <div class="w-3/4 overflow-scroll">
                            <p class="font-light text-sm text-slate-600">{{ $photo->photographer }} ({{ $photo->license }})</p>
                        </div>
        
                        <x-button_edit_small>
                            <x-slot:id>{{ $photo->id }}</x-slot>
                            <x-slot:text>Edit</x-slot>
                        </x-button_edit_small>
        
                        <form action="{{ route('deletePhoto', $photo->id) }}" method="POST" class="w-1/12 mr-2">
                            @csrf
                            @method('DELETE')
        
                            <x-button_delete_small>
                                <x-slot:text>Delete</x-slot>
                            </x-button_delete_small>
                        </form>
                    </div>
                @endforeach
            </div>
            @endif
    </div>

    <div class="w-1/2 mx-auto px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">
        <a href="{{ route('addPhoto') }}" as="button"><p class="text-center">Add another home-page photo</p></a>
    </div>
</div>

@endsection