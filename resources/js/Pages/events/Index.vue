<template>
    <div class="mx-auto max-w-3xl min-w-[768px]">
        <div class="w-11/12 mx-auto py-10 px-5 md:px-0">
            <h1 class="mnarjeTitle">Event management</h1>

            <div class="flex flex-row flex-wrap gap-4 w-full mx-auto items-center justify-start mb-3">
                <div v-for="(event, eventKey) in events" :key="eventKey" 
                    class="w-48% h-[255px] p-2 bg-lmhlBgInput border border-slate-300 rounded-md shadow-md">
                    <div class="w-full flex flex-col items-start justify-between h-full">
                        <h1 class="text-lg text-center w-full my-2">{{ event.title }}</h1>
                        
                        <small class="text-slate-600 mb-2">Date: {{ event.date }}</small>

                        <small class="text-slate-600 mb-2">Time: {{ event.time }}</small>

                        <small class="text-slate-600 mb-2">Location: {{ event.location }}</small>

                        <small class="text-slate-600 mb-2">Additional info: {{ event.info }}</small>

                        <div class="flex items-end justify-between w-full">
                            <div class="text-success-600 hover:text-success-700 cursor-pointer">
                                <Link :href="route('editEvent', event.id)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </Link>
                            </div>

                            <div @click="router.delete(route('deleteEvent', event.id), {preserveScroll: true})" class="text-red-700 hover:text-red-800 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/2 mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">
                <Link :href="route('addEvent')"><p class="text-center">Add an event</p></Link>
            </div>
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
    events: Object
})

</script>