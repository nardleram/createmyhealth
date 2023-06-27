<template>
    <div class="mx-auto max-w-4xl min-w-[768px]">
        <div class="w-4/6 sm:1/2 mx-auto py-10 px-5 md:px-0">
            <h1 class="mnarjeTitle">Edit “{{ event.title }}”</h1>

            <form @submit.prevent="submitEvent()">
                <div class="w-full mb-4">
                    <label for="title" class="cmhLabel">title</label>
                    <input id="title" v-model="title" class="cmhInput font-serif text-base" type="text" required autofocus>
                </div>

                <div class="w-full mb-4">
                    <label for="date" class="cmhLabel">date</label>
                    <input id="date" v-model="date" class="cmhInput" type="text" required>
                </div>

                <div class="w-full mb-4">
                    <label for="time" class="cmhLabel">time</label>
                    <input id="time" v-model="time" class="cmhInput" type="text" required>
                </div>

                <div class="w-full mb-4">
                    <label for="location" class="cmhLabel">location</label>
                    <input id="location" v-model="location" class="cmhInput" type="text" required>
                </div>

                <div class="w-full mb-4">
                    <label for="info" class="cmhLabel">additional info (optional)</label>
                    <input id="info" v-model="info" class="cmhInput" type="text" placeholder="optional">
                </div>

                <div class="w-full mb-8 h-14">
                    <label for="image" class="block mb-1 pl-2 text-lmhlMain1 text-xs lowercase tracking-tight">Replace current image</label>
                    <input id="image" name="image" type="file" class="w-full text-slate-500 text-sm tracking-tight font-medium bg-lmhlBgInput shadow-sm rounded-lg focus:outline-1 focus:outline-lmhlMain1 border border-slate-400 focus:shadow-md file:bg-transparent file:border-0 file:bg-slate-700 file:mr-4 file:py-4 file:px-4 file:text-slate-300">
                </div>

                <input type="hidden" id="eventId" value="0" />

                <div class="w-full mb-4">
                    <label for="body" class="text-xs text-primary-700 lowercase mb-2 pl-2">Enter event details</label>

                    <EventMenubar v-if="editor" :editor="editor"/>

                    <EditorContent id="editorDiv" :editor="editor" class="bg-lmhlBgInput max-h-80 overflow-y-scroll mb-2 border border-slate-400 rounded-md p-2"/>
                </div>

                <button @click="submitEvent()" type="submit" class="w-full mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">Update</button>
            </form>
        </div>
    </div>
</template>

<script>
import Layout from '../Pages/layouts/Layout.vue'

export default {
    layout: Layout
}
</script>

<script setup>
import { useForm, usePage } from '@inertiajs/vue3'
import { ref } from 'vue'
import EventMenubar from '../Pages/components/EventMenuBar.vue'
import { Editor, EditorContent } from '@tiptap/vue-3'
import Document from '@tiptap/extension-document'
import Text from '@tiptap/extension-text'
import Table from '@tiptap/extension-table'
import TableCell from '@tiptap/extension-table-cell'
import TableHeader from '@tiptap/extension-table-header'
import TableRow from '@tiptap/extension-table-row'
import Blockquote from '@tiptap/extension-blockquote'
import Heading from '@tiptap/extension-heading'
import Strike from '@tiptap/extension-strike'
import BulletList from '@tiptap/extension-bullet-list'
import OrderedList from '@tiptap/extension-ordered-list'
import ListItem from '@tiptap/extension-list-item'
import Bold from '@tiptap/extension-bold'
import Italic from '@tiptap/extension-italic'
import EventDetailsParagraph from '../composables/eventDetailsParagraph.js'

const props = defineProps({
    event: Object
})

const editor = ref(null)
const title = ref(usePage().props.event.title)
const date = ref(usePage().props.event.date)
const time = ref(usePage().props.event.time)
const location = ref(usePage().props.event.location)
const info = ref(usePage().props.event.info)

const submitEvent = function () {
    let htmlBody = editor.value.getHTML()

    let payload = useForm({
        'id': usePage().props.event.id,
        'title': title.value,
        'date': date.value,
        'time': time.value,
        'location': location.value,
        'info': info.value,
        'details': htmlBody,
        'image': image.files[0] ?? null,
    })

    try {
        payload.patch('/events/update', {
            onSuccess: () => {
                title.value = ''
                date.value = ''
                time.value = ''
                location.value = ''
                info.value = ''
                editor.value.destroy()
                editor.value = new Editor({
                    content: '<p>You enter the event details a visitor can read when clicking the event card\’s  "View details..." button here. But remember, nothing fancy. KISS! Keep it simple, stupid!</p>',
                    extensions: [
                        Document,
                        EventDetailsParagraph,
                        Text,
                        Heading,
                        Strike,
                        ListItem,
                        OrderedList,
                        BulletList,
                        Blockquote,
                        Bold,
                        Italic,
                        Table.configure({
                            resizable: true,
                        }),
                        TableRow,
                        TableHeader,
                        TableCell,
                    ],
                })
            }
        })
    } catch (err) {
        console.log(err)
    }
}

editor.value = new Editor({
    content: usePage().props.event.details,
    extensions: [
        Document,
        EventDetailsParagraph,
        Text,
        Heading,
        Strike,
        ListItem,
        OrderedList,
        BulletList,
        Blockquote,
        Bold,
        Italic,
        Table.configure({
            resizable: true,
        }),
        TableRow,
        TableHeader,
        TableCell,
    ],
})

</script>