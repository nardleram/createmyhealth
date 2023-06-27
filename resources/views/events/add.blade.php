@extends('layouts.management-layout')

@section('content')

<div class="mx-auto max-w-3xl min-w-[768px]">
    <div class="w-4/6 sm:1/2 mx-auto py-10 px-5 md:px-0">
        <h1 class="mnarjeTitle">Add an event</h1>

        <form action="{{ route('storeEvent') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="w-full mb-4">
                <label for="title" class="cmhLabel">Title</label>
                <input id="title" class="cmhInput" type="text" name="title" required autofocus>
            </div>

            <div class="w-full mb-4">
                <label for="date" class="cmhLabel">Date and time</label>
                <input id="date" class="cmhInput" type="text" name="date" required>
            </div>

            <div class="w-full mb-4">
                <label for="location" class="cmhLabel">Location</label>
                <input id="location" class="cmhInput" type="text" name="location" required>
            </div>

            <div class="w-full mb-4">
                <label for="info" class="cmhLabel">Additional info</label>
                <input id="info" class="cmhInput" type="text" name="info">
            </div>

            <div class="w-full mb-4 h-14">
                <label for="eventImage" class="block mb-1 pl-2 text-lmhlMain1 text-xs lowercase tracking-tight">Select photograph</label>
                <input id="eventImage" name="eventImage" type="file" class="w-full text-slate-600 text-sm tracking-tight font-medium bg-lmhlBgInput shadow-sm rounded-lg focus:outline-1 focus:outline-lmhlMain1 border border-slate-400 focus:shadow-md file:bg-transparent file:border-0 file:bg-slate-600 file:mr-4 file:py-4 file:px-4 file:text-slate-400" required>
            </div>

            <input type="hidden" id="eventId" value="0" />

            <div class="w-full mb-4">
                <label for="details" class="text-xs text-primary-700 lowercase pl-2">Enter event details</label>
                <div name="details" class="tiptap-editor w-full"></div>
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