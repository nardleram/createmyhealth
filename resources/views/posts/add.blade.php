@extends('layouts.management-layout')

@section('content')

<div class="mx-auto max-w-3xl min-w-[768px]">
    <div class="w-4/6 sm:1/2 mx-auto py-10 px-5 md:px-0">
        <h1 class="mnarjeTitle">Add a blog post</h1>

        <form action="{{ route('storePost') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="w-full mb-4">
                <label for="title" class="cmhLabel">Title</label>
                <input id="title" class="cmhInput" type="text" name="title" required autofocus>
            </div>

            <div class="w-full px-3 pt-1 pb-2 mb-4 border border-slate-400 bg-lmhlBgInput rounded-lg shadow-md">
                <p class="text-primary-700 text-xs mb-2">assign one or more categories to this post</p>
                <div class="flex flex-wrap gap-3 w-full items-center justify-start">
                    @foreach ($categories as $cat)
                        <div>
                            <input id="{{ $cat->slug }}" class="-mr-1" type="checkbox" name="{{ $cat->slug }}">
                            <label for="{{ $cat->slug }}" class="text-slate-600 text-xs tracking-tight ml-1">{{ $cat->title }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <input type="hidden" id="postId" value="0" />

            <div class="w-full mb-4">
                <label for="body" class="text-xs text-primary-700 lowercase pl-2">Enter blog-post text</label>
                <div name="body" class="tiptap-editor w-full"></div>
            </div>

            <button type="submit" class="w-full mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">Save</button>
        </form>
    </div>
</div>

<script>
import { Editor } from '@tiptap/core'
import StarterKit from '@tiptap/starter-kit'
import Document from '@tiptap/extension-document'
import Text from '@tiptap/extension-text'
import Blockquote from '@tiptap/extension-blockquote'
import Heading from '@tiptap/extension-heading'
import Strike from '@tiptap/extension-strike'
import BulletList from '@tiptap/extension-bullet-list'
import OrderedList from '@tiptap/extension-ordered-list'
import ListItem from '@tiptap/extension-list-item'
import Bold from '@tiptap/extension-bold'
import Italic from '@tiptap/extension-italic'
import CustomImage from '/resources/js/composables/customImage.js'
import CustomParagraph from '/resources/js/composables/cutomParagraph.js'

new Editor({
    element: document.querySelector('.element'),
    extensions: [
        Document,
        CustomParagraph,
        Text,
        Heading,
        Strike,
        ListItem,
        OrderedList,
        BulletList,
        Blockquote,
        Bold,
        Italic,
        CustomImage,
    ],
    content: '<p>Hello World!</p>',
})


</script>

@endsection