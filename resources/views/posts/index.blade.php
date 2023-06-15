@extends('layouts.management-layout')

@section('content')

<div class="mx-auto max-w-3xl min-w-[768px]">
    <div class="w-11/12 mx-auto py-10 px-5 md:px-0">
        <h1 class="mnarjeTitle">Blog-post management</h1>

        <div class="flex flex-row flex-wrap gap-4 w-full mx-auto items-center justify-start mb-3">
            @foreach ($posts as $post)
            <div class="flex items-start w-48% h-[220px] p-2 justify-start bg-lmhlBgInput text-slate-500 border border-slate-300 rounded-md shadow-md">
                <div class="w-full flex flex-col gap-1 items-start justify-start">
                    <h1 class="text-lg text-center w-full my-2">{{ $post->title }}</h1>

                    <p class="text-xs mb-2"><span class="italic">Excerpt:</span> {!! $post->first_200 !!}...</p>
                    
                    <small class="text-slate-600 mb-2">Author: {{ $post->author }}</small>
                        
                    @if (count($post->categories) > 0)
                        <div class="flex gap-1 items-center w-full mb-1">
                            <p class="text-xs font-semibold m-0">Categories:</p>
                            @foreach ($post->categories as $cat)
                                <p class="text-xs text-slate-500 bg-slate-200 py-1 px-2 rounded-lg">{{ $cat->title }}</p>
                            @endforeach
                        </div>
                    @else
                        <p class="text-xs font-semibold mb-2">No categories assigned</p>
                    @endif

                    <div class="flex gap-1 items-start justify-between w-full my-2">
                        <div class="cursor-pointer">
                            @if ($post->published_at)
                                <form action="{{ route('updatePost', $post->id) }}">
                                    <button type="submit"><x-icon class="" name="pause-circle" outline /></button>
                                </form>
                            @else
                                <form action="{{ route('updatePost', $post->id) }}">
                                    <button type="submit"><x-icon class="" name="play-circle" outline /></button>
                                </form>
                            @endif
                        </div>

                        <div class="text-success-600 hover:text-success-700 cursor-pointer">
                            <a href="{{ route('editPost', $post->id) }}"><x-icon name="pencil-square" outline /></a>
                        </div>

                        <div class="text-red-700 hover:text-red-800 cursor-pointer">
                            <form action="{{ route('deletePost', $post->id) }}" method="POST" class="m-0">
                                @csrf
                                @method('DELETE')
            
                                <button type="submit"><x-icon class="" name="trash" outline /></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="w-1/2 mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">
            <a href="{{ route('addPost') }}" as="button"><p class="text-center">Add a blog post</p></a>
        </div>
    </div>
</div>

@endsection