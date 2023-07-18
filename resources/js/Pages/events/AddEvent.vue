<template>
    <div class="mx-auto max-w-4xl min-w-[768px]">
        <div class="w-4/6 sm:1/2 mx-auto py-10 px-5 md:px-0">
            <h1 class="mnarjeTitle">Add an event</h1>

            <form @submit.prevent="submitEvent()">
                <div class="w-full mb-4">
                    <label for="title" class="cmhLabel">title</label>
                    <input id="title" v-model="title" class="cmhInput font-serif text-base" type="text" required autofocus>
                    <div v-if="usePage().props.errors.title">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.title }}</small>
                    </div>
                </div>

                <div class="w-full mb-4">
                    <label for="date" class="cmhLabel">date</label>
                    <input id="date" v-model="date" class="cmhInput" type="text" required>
                    <div v-if="usePage().props.errors.date">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.date }}</small>
                    </div>
                </div>

                <div class="w-full mb-4">
                    <label for="time" class="cmhLabel">time</label>
                    <input id="time" v-model="time" class="cmhInput" type="text" required>
                    <div v-if="usePage().props.errors.time">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.time }}</small>
                    </div>
                </div>

                <div class="w-full mb-4">
                    <label for="location" class="cmhLabel">location</label>
                    <input id="location" v-model="location" class="cmhInput" type="text" required>
                    <div v-if="usePage().props.errors.location">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.location }}</small>
                    </div>
                </div>

                <div class="w-full mb-4">
                    <label for="info" class="cmhLabel">additional info (optional)</label>
                    <input id="info" v-model="info" class="cmhInput" type="text" placeholder="optional">
                </div>

                <div class="w-full mb-8 h-14">
                    <label for="name" class="block mb-1 pl-2 text-lmhlMain1 text-xs lowercase tracking-tight">Select image</label>
                    <input id="image" name="image" type="file" class="w-full text-slate-500 text-sm tracking-tight font-medium bg-lmhlBgInput shadow-sm rounded-lg focus:outline-1 focus:outline-lmhlMain1 border border-slate-400 focus:shadow-md file:border-0 file:bg-slate-600 file:mr-4 file:py-4 file:px-4 file:text-slate-300" required>
                    <div v-if="usePage().props.errors.image">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.image }}</small>
                    </div>
                </div>

                <input type="hidden" id="eventId" value="0" />

                <div class="w-full mb-4">
                    <label for="body" class="text-xs text-primary-700 lowercase mb-2 pl-2">Enter event details</label>

                    <EventMenubar v-if="editor" :editor="editor" @set-link="onSetLink()"/>

                    <EditorContent id="editorDiv" :editor="editor" class="editor__content bg-lmhlBgInput max-h-80 overflow-y-scroll mb-2 border border-slate-400 rounded-md p-2"/>
                </div>

                <button @click="submitEvent()" type="submit" class="w-full mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">Save</button>
            </form>
        </div>
    </div>
</template>

<script>
import Layout from '../layouts/Layout.vue'

export default {
    layout: Layout
}
</script>

<script setup>
import { useForm, usePage } from '@inertiajs/vue3'
import { ref } from 'vue'
import EventMenubar from '../components/EventMenuBar.vue'
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
import EventDetailsParagraph from '../../composables/eventDetailsParagraph.js'
import TextStyle from '@tiptap/extension-text-style'
import { Color } from '@tiptap/extension-color'
import Link from '@tiptap/extension-link'

const editor = ref(null)
const title = ref('')
const date = ref('')
const time = ref('')
const location = ref('')
const info = ref('')

const submitEvent = function () {
    let htmlBody = editor.value.getHTML()

    let payload = useForm({
        'title': title.value,
        'date': date.value,
        'time': time.value,
        'location': location.value,
        'info': info.value,
        'details': htmlBody,
        'image': image.files[0],
    })

    try {
        payload.post('/events/store', {
            onSuccess: () => {
                title.value = ''
                date.value = ''
                time.value = ''
                location.value = ''
                info.value = ''
                editor.value.destroy()
                editor.value = new Editor({
                    content: '<p>Here you enter the event details a visitor can read after clicking the event card\’s  "View details..." button. But remember, nothing fancy. KISS! Keep it simple, stupid!</p>',
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
                        TextStyle,
                        Color,
                        Link,
                    ],
                })
            }
        })
    } catch (err) {
        console.log(err)
    }
}

editor.value = new Editor({
    content: '<p>Here you enter the event details a visitor can read after clicking the event card\’s  "View details..." button. But remember, nothing fancy. KISS! Keep it simple, stupid!</p>',
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
        TextStyle,
        Color,
        Link,
    ],
})

const onSetLink = () => {
    const previousUrl = editor.value.getAttributes('link').href
    const url = window.prompt('URL', previousUrl)

    // cancelled
    if (url === null) {
        return
    }

    // empty
    if (url === '') {
        editor.value
            .chain()
            .focus()
            .extendMarkRange('link')
            .unsetLink()
            .run()

        return
    }

    // update link
    editor.value
        .chain()
        .focus()
        .extendMarkRange('link')
        .setLink({ href: url })
        .run()
}
</script>

<style lang="scss">
#editorDiv.editor__content > .ProseMirror a {
    color: rgb(227 181 205);
    cursor: pointer;
}

#editorDiv.editor__content > .ProseMirror a:hover {
    color: rgb(213 144 180);
}

#editorDiv.editor__content {
    font-size: 14px;
    color: rgb(51 65 85);
    text-align: left;

    .ProseMirror a {
        color: rgb(227 181 205);
    }
    .ProseMirror a:hover {
        color: rgb(213 144 180);
    }

    .ProseMirror {
        .tableWrapper {
            p {
                font-size: 13px;
            }

            tbody {
                border-collapse: collapse;
                table-layout: fixed;
                width: 100%;
                margin: 0;
                overflow: hidden;

                td, th {
                    min-width: 1em;
                    border: thin solid silver;
                    padding: 2px 3px;
                    vertical-align: top;
                    box-sizing: border-box;
                    position: relative;

                    > * {
                        margin-bottom: 0;
                    }
                }

                th {
                    font-weight: bold;
                    text-align: left;
                }
            }

            .selectedCell:after {
                z-index: 2;
                position: absolute;
                content: "";
                left: 0; right: 0; top: 0; bottom: 0;
                background: rgba(200, 200, 255, 0.4);
                pointer-events: none;
            }

            .column-resize-handle {
                position: absolute;
                right: -2px;
                top: 0;
                bottom: -2px;
                width: 4px;
                background-color: #adf;
                pointer-events: none;
            }

            p {
                margin: 0;
            }
        }
    }
}
.selectedCell:after {
    z-index: 2;
    position: absolute;
    content: "";
    left: 0; right: 0; top: 0; bottom: 0;
    pointer-events: none;
}

.resize-cursor {
    cursor: ew-resize;
    cursor: col-resize;
}

.tableWrapper {
    padding: 1rem 0;
    overflow-x: auto;
}
</style>