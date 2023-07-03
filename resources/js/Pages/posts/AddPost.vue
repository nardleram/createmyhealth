<template>
    <teleport to="#backdrop">
        <div v-if="showUploadImageModal" class="fixed top-0 left-0 h-screen w-full bg-lmhlBg1 opacity-80 z-40 origin-bottom animate-open-bio">
        </div>
    </teleport>

    <teleport to="#postImageUploadModal">
        <div v-if="showUploadImageModal" class="fixed top-[30%] left-1/4 p-6 min-w-[615px] max-w-[650px] bg-white text-slate-600 w-1/2 rounded-lg shadow-md z-50 origin-center animate-open-bio">
            <form @submit.prevent="addImage()">
                <div class="flex justify-end items-start">
                    <div class="w-8 h-8 relative cursor-pointer">
                        <div @click="clearModal(); showUploadImageModal = false" class="-mt-2">
                            <p class="font-bold text-lg text-primary-700 text-right z-50">x</p>
                        </div>   
                    </div>
                </div>
                <div class="-mt-4">
                    <h4 class="text-slate-500 font-extralight uppercase mb-4 tracking-wider">UPLOAD AN IMAGE</h4>
                </div>

                <div class="w-full">
                    <label for="name" class="block mb-1 pl-2 text-lmhlMain1 text-xs lowercase tracking-tight">select image</label>
                    <input multiple id="postImage" type="file" class="w-full text-slate-500 text-sm tracking-tight font-medium bg-lmhlBgInput shadow-sm rounded-lg focus:outline-1 focus:outline-lmhlMain1 border border-slate-400 focus:shadow-md file:bg-transparent file:border-0 file:bg-gray-600 file:mr-4 file:py-4 file:px-4 file:text-slate-400 file:cursor-pointer">
                </div>
                
                <button @click="addImage()" type="submit" class="w-full mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">Upload image</button>
            </form>
        </div>
    </teleport>

    <div class="mx-auto max-w-4xl min-w-[768px]">
        <div class="w-4/6 sm:1/2 mx-auto py-10 px-5 md:px-0">
            <h1 class="mnarjeTitle">Add a blog post</h1>

            <form @submit.prevent="submitArticle()">
                <div class="w-full mb-4">
                    <label for="title" class="cmhLabel">title</label>
                    <input id="title" v-model="title" class="cmhInput font-serif text-base" type="text" required autofocus>
                    <div v-if="usePage().props.errors.title">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.title }}</small>
                    </div>
                </div>

                <div class="w-full mb-4">
                    <label for="author" class="cmhLabel">author</label>
                    <input id="author" v-model="author" class="cmhInput" type="text" required>
                    <div v-if="usePage().props.errors.author">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.author }}</small>
                    </div>
                </div>

                <div class="w-full px-3 pt-1 pb-2 mb-4 border border-slate-400 bg-lmhlBgInput rounded-lg">
                    <p class="text-primary-700 text-xs mb-2">assign one or more categories</p>
                    <div class="flex flex-wrap gap-3 w-full items-center justify-start">
                        <div v-for="(cat, catKey) in categories" :key="catKey">
                            <input class="-mr-1 postcats" type="checkbox" :value="cat.id">
                            <label :for="cat.id" class="text-slate-600 text-xs tracking-tight ml-2">{{ cat.title }}</label>
                        </div>
                    </div>
                </div>

                <input type="hidden" id="postId" value="0" />

                <div class="w-full mb-4">
                    <label for="body" class="text-xs text-primary-700 lowercase mb-2 pl-2">compose post below</label>

                    <Menubar v-if="editor" @show-add-image-modal="onShowAddImageModal()" :editor="editor"/>

                    <EditorContent id="editorDiv" :editor="editor" class="bg-lmhlBgInput max-h-80 overflow-y-scroll mb-2 border border-slate-400 rounded-md p-2"/>
                </div>

                <button @click="submitArticle()" type="submit" class="w-full mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">Save</button>
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
import Menubar from '../components/MenuBar.vue'
import { Editor, EditorContent } from '@tiptap/vue-3'
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
import CustomImage from '../../composables/customImage'
import CustomParagraph from '../../composables/cutomParagraph.js'

const props = defineProps({
    categories: Object
})

const postId = ref(0)
const editor = ref(null)
const title = ref('')
const author = ref('')
const showBackdrop = ref(false)
const showUploadImageModal = ref(false)
const isLoading = ref(false)

const onShowAddImageModal = () => {
    showBackdrop.value = true
    showUploadImageModal.value = true
}

const clearModal = () => {
    showUploadImageModal.value = false
    showBackdrop.value = false
}

const addImage = () => {
    isLoading.value = true

    if (!postImage.files[0]) {
        isLoading.value = false
        showUploadImageModal.value = false
        usePage().props.flash.error = 'No image file selected'
        clearModal()
        return
    }

    let payload = useForm({
        'image': postImage.files[0],
        'post_id': postId.value
    })

    try {
        payload.post('/posts/images/store', {
            onSuccess: () => {
                isLoading.value = false
                showUploadImageModal.value = false
                editor.value.chain().focus().setImage({ src: usePage().props.postImageData.postImagePath }).run()
                usePage().props.postImageData.postImagePath = ''
            }
        })
    } catch(err) {
        console.log(err)
        isLoading.value = false
        showUploadImageModal.value = false
    }

    clearModal()
}

const submitArticle = function () {
    let htmlBody = editor.value.getHTML()

    let postcats = []
    let myVals

    myVals = document.querySelectorAll('input.postcats')

    for (const myVal of myVals) {
        if (myVal.checked) {
            postcats.push({id: myVal.value})
        }
    }

    let payload = useForm({
        'title': title.value,
        'slug': 'none',
        'author': author.value,
        'body': htmlBody,
        'cats': postcats,
        'post_id': postId.value
    })

    try {
        payload.post('/posts/store', {
            onSuccess: () => {
                title.value = ''
                author.value = ''
                editor.value.destroy()
                editor.value = new Editor({
                    content: '<h3>Article subhead could go here (if needed)</h3><blockquote>Perhaps a quote to lend your work an air of gravitas?</blockquote><p>The body of your post might continue here and turn out far more engaging than this dummy text...</p><p>(Go right ahead! Sweep this nonsense aside and compose your masterpiece!)</p>',
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
                        CustomImage
                    ],
                })
            }
        })
    } catch (err) {
        console.log(err)
    }
}

editor.value = new Editor({
    content: '<h3>Article subhead could go here (if needed)</h3><blockquote>Perhaps a quote to lend your work an air of gravitas?</blockquote><p>The body of your post might continue here and turn out far more engaging than this dummy text...</p><p>(Go right ahead! Sweep this nonsense aside and compose your masterpiece!)</p>',
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
        CustomImage
    ],
})

</script>