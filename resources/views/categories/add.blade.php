@extends('layouts.management-layout')

@section('content')

<div class="mx-auto max-w-3xl min-w-[768px]">
    <div class="w-4/6 sm:1/2 mx-auto py-10 px-5 md:px-0">
        <h1 class="mnarjeTitle">Add a blog-post category</h1>

        <form action="{{ route('storeCategory') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="w-full mb-4">
                <label for="title" class="cmhLabel">Title</label>
                <input id="title" class="cmhInput" type="text" name="title" required autofocus>
            </div>

            <button type="submit" class="w-full mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">Save</button>
        </form>
    </div>
</div>

@endsection