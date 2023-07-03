<template>
    <div class="mx-auto max-w-3xl min-w-[768px]">
        <div class="w-4/6 sm:1/2 mx-auto py-10 px-5 md:px-0">
            <h1 class="mnarjeTitle">Add a blog-post category</h1>

            <form @submit.prevent="submitCat()">
                <div class="w-full mb-4">
                    <label for="title" class="cmhLabel">Title</label>
                    <input id="title" v-model="title" class="cmhInput" type="text" name="title" required autofocus>
                    <div v-if="usePage().props.errors.title">
                        <small class="text-red-700 font-semibold">{{ usePage().props.errors.title }}</small>
                    </div>
                </div>

                <button @click="submitCat()" type="submit" class="w-full mx-auto mt-8 px-8 py-2 bg-success-600 text-lmhlBg1 rounded-md shadow-md hover:bg-success-700 transition-colors delay-100 duration-250">Update</button>
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
    category: Object
})

const title = ref(usePage().props.category.title)

const submitCat = function () {
    let payload = useForm({
        'title': title.value,
        'id': usePage().props.category.id
    })

    try {
        payload.patch('/categories/update', {
            onSuccess: () => {
                title.value = usePage().props.category.title
            }
        })
    } catch (err) {
        console.log(err)
    }
}

</script>