<template>
    <div class="mx-auto max-w-3xl min-w-[768px]">
        <div class="w-4/6 sm:1/2 mx-auto py-10 px-5 md:px-0">
            <h1 class="mnarjeTitle">Add a home-page photo</h1>

            <form @submit.prevent="submitPhoto()">
                <div class="w-full mb-4">
                    <label for="photographer" class="cmhLabel">Name of photographer to credit</label>
                    <input v-model="photographer" class="cmhInput" type="text" name="photographer" required autofocus>
                    <div v-if="usePage().props.errors.photographer">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.photographer }}</small>
                    </div>
                </div>

                <div class="w-full mb-4">
                    <label for="licence" class="cmhLabel">Full address of photographer’s website</label>
                    <input v-model="license" class="cmhInput" type="text" name="license" placeholder="https://isobel.photography.com" required>
                    <div v-if="usePage().props.errors.license">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.license }}</small>
                    </div>
                </div>

                <div class="w-full mb-4 h-14">
                    <label for="name" class="block mb-1 pl-2 text-lmhlMain1 text-xs lowercase tracking-tight">Select photograph</label>
                    <input id="photo" type="file" class="w-full text-slate-600 text-sm tracking-tight font-medium bg-lmhlBgInput shadow-sm rounded-lg focus:outline-1 focus:outline-lmhlMain1 border border-slate-400 focus:shadow-md file:bg-transparent file:border-0 file:bg-slate-700 file:mr-4 file:py-4 file:px-4 file:text-slate-400" required>
                    <div v-if="usePage().props.errors.photo">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.photo }}</small>
                    </div>
                </div>

                <button @click="submitPhoto()" type="submit" class="w-full mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">Save</button>
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

const photographer = ref('')
const license = ref('')

const submitPhoto = () => {
    if (!photo.files[0]) {
        usePage().props.flash.error = 'No image file selected'
        return
    }

    let payload = useForm({
        'photo': photo.files[0],
        'photographer': photographer.value,
        'license': license.value
    })

    console.log(payload)

    try {
        payload.post('/photoze/store')
    } catch (err) {
        console.log(err)
    }
}

</script>