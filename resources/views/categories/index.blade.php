@extends('layouts.management-layout')

@section('content')

<div class="mx-auto max-w-4xl min-w-[768px]">
    <div class="w-11/12 mx-auto py-10 px-5 md:px-0">
        <h1 class="mnarjeTitle">Blog-post categories</h1>
    
        <div class="w-full mx-auto flex flex-row gap-4 flex-wrap items-center justify-center mb-3">
            @if (count($categories) > 0)
                @foreach ($categories as $category)
                    <div class="flex items-center w-1/5 p-2 justify-start bg-lmhlBgInput text-slate-500 border border-slate-300 rounded-md shadow-md">
                        <div class="w-3/4 overflow-scroll">
                            <p class="text-xs text-slate-500">{{ $category->title }}</p>
                        </div>
        
                        <x-button_edit_small>
                            <x-slot:id>{{ $category->id }}</x-slot>
                            <x-slot:text>Edit</x-slot>
                        </x-button_edit_small>
        
                        <form action="{{ route('deleteCategory', $category->id) }}" method="POST" class="mx-2 ">
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
        
        @if (count($categories) === 0)
            <h4 class="mnarjeSubtitle">No categories found in database. Add one by clicking the button below.</h4>
        @endif
        
    </div>
    
    <div class="w-1/2 mx-auto px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">
        <a href="{{ route('addCategory') }}" as="button"><p class="text-center">Add a blog-post category</p></a>
    </div>
</div>

@endsection