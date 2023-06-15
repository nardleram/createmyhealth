<template>
    <div class="w-1/2 mt-24 mx-auto h-48 p-6 rounded-lg shadow-md bg-primary-700 border-4 border-primary-500">
        <h1 class="text-center text-primary-600">Squeal</h1>
    </div>

    <div class="w-1/2 mt-5 mx-auto">
        <label for="name" class="block mb-1 pl-2 text-lmhlMain1 text-xs lowercase tracking-tight">select image</label>
        <input multiple id="postImage" type="file" class="w-full text-slate-600 text-sm tracking-tight font-medium bg-lmhlBgInput shadow-sm rounded-lg focus:outline-1 focus:outline-lmhlMain1 border border-slate-400 focus:shadow-md file:bg-transparent file:border-0 file:bg-slate-600 file:mr-4 file:py-4 file:px-4 file:text-slate-400" required>
    </div>

    {{ $html }}
</template>

<script>
import Layout from '../Pages/layouts/Layout.vue'

export default {
    layout: Layout
}
</script>