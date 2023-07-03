<template>
    <div class="mx-auto max-w-3xl min-w-[768px]">
        <div class="w-11/12 mx-auto py-10 px-5 md:px-0">
            <h1 class="mnarjeTitle">Active home-page photos</h1>
            
                <div v-if="photos.length" class="w-full mx-auto flex flex-col gap-3 items-center justify-start mb-3">
                    
                    <div v-for="(photo, photoKey) in photos" :key="photoKey" class="flex gap-2 items-center w-full py-2 justify-start bg-lmhlBgInput text-slate-500 border border-slate-300 rounded-md shadow-md">
                        <div class="ml-3">
                            <img :src="'/storage/'+photo.name" alt="thumbnail_{{ photo.id }}" class="w-16 h-14 rounded-full object-cover">
                        </div>

                        <div class="w-3/4 overflow-scroll">
                            <p class="font-light text-sm text-slate-600">{{ photo.photographer }} ({{ photo.license }})</p>
                        </div>
        
                        <div class="flex gap-1 items-start justify-between w-1/4">
                            <div class="flex items-end justify-center w-full">
                                <div class="text-success-600 hover:text-success-700 cursor-pointer mr-8">
                                    <Link :href="route('editPhoto', photo.id)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </Link>
                                </div>

                                <div @click="router.delete(route('deletePhoto', photo.id), {preserveScroll: true})" class="text-red-700 hover:text-red-800 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="w-1/2 mx-auto px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">
            <a :href="route('addPhoto')" as="button"><p class="text-center">Add another home-page photo</p></a>
        </div>
    </div>
</template>

<script>
import Layout from '../layouts/Layout.vue'
import { router } from '@inertiajs/vue3'

export default {
    layout: Layout
}
</script>

<script setup>
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    photos: Object
})

</script>