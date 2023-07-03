<template>
    <div class="mx-auto max-w-3xl min-w-[768px]">
        <div class="w-4/6 sm:1/2 mx-auto py-10 px-5 md:px-0">
            <h1 class="mnarjeTitle">Edit home-page photo</h1>

            <div class="w-full mb-6">
                <div class="w-full mx-auto">
                    <div class="rounded-lg max-w-max h-max mx-auto shadow-md">
                        <img :src="'/storage/'+photo.name" alt="thumbnail_{{ photo.id }}" class="h-36 object-fill">
                    </div>
                </div>
            </div>

            <form @submit.prevent="updatePhoto()">
                <div class="w-full mb-4">
                    <label for="photographer" class="cmhLabel">Name of photographer to credit</label>
                    <input v-model="photographer" class="cmhInput" type="text" name="photographer" required autofocus>
                    <div v-if="usePage().props.errors.photographer">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.photographer }}</small>
                    </div>
                </div>

                <div class="w-full mb-4">
                    <label for="license" class="cmhLabel">Full address of photographer’s website</label>
                    <input v-model="license" class="cmhInput" type="text" name="license" placeholder="https://isobel.photography.com" required>
                    <div v-if="usePage().props.errors.license">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.photographer }}</small>
                    </div>
                </div>

                <button @click="updatePhoto()" type="submit" class="w-full mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">Update photo</button>
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

const props = defineProps({
    photo: Object
})

const photographer = ref(usePage().props.photo.photographer)
const license = ref(usePage().props.photo.license)
const photo_id = ref(usePage().props.photo.id)

const updatePhoto = () => {
    let payload = useForm({
        'photographer': photographer.value,
        'license': license.value,
        'id': photo_id.value
    })

    try {
        payload.patch('/photoze/update')
    } catch (err) {
        console.log(err)
    }
}

</script>