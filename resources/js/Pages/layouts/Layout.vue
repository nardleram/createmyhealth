<template>
    <div id="backdrop"></div>
    <div id="postImageUploadModal"></div>

    <div v-if="$page.props.flash.success" @click="clearMessage()" class="successMessage">
            {{ $page.props.flash.success }}
    </div>
    <div v-if="$page.props.flash.error" @click="clearMessage()" class="errorMessage">
            {{ $page.props.flash.error }}
    </div>

    <nav class="top-0 h-24 w-full bg-lmhlBg1 text-lmhlPanel1 flex justify-between items-center z-50 md:px-8 px-4 shadow-sm shadow-lmhlMain1" aria-label="non-mobile">
        <div id="logo" class="w-2/6 z-30">
            <a :href="route('home')">
                <img :src="'/storage/images/cmh_whole.svg'" alt="logo" class="md:h-16 h-14 min-h-14">
            </a>
        </div>

        <div id="restov" class="w-4/6 z-20">
            <div class="absolute right-8 top-7 text-lmhlBg1 bg-primary-700 rounded-full h-11 w-11 cursor-pointer hover:bg-primary-800 hover:shadow-md transition-colors delay-100 duration-250">
                <a :href="route('logout')">
                    <p class="pt-2 pl-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="27" height="27" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"></path></svg>
                    </p>
                </a>
            </div>
        </div>
    </nav>

    <main class="grid grid-cols-12 gap-2 top-24 h-screen w-full">
        <div id="sidebar-left" class="col-start-1 col-end-4 min-w-[250px] p-4 border-r-primary-200 border-b-0 shadow-sm shadow-primary-600">
            <div class="flex justify-center items-center mt-2 mb-6 text-slate-500 text-center font-extralight tracking-widest cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"></path></svg>
                <a :href="route('mnarje.index')"><p class="ml-2 text-xl">DASHBOARD</p></a>
            </div>

            <div class="flex justify-start items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"></path></svg>
                <a :href="route('categories')"><p class="ml-2">Categories</p></a>
            </div>

            <div class="flex justify-start items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"></path></svg>
                <a :href="route('posts')"><p class="ml-2">Posts</p></a>
            </div>

            <div class="flex justify-start items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path></svg>
                <a :href="route('photoze')"><p class="ml-2">Photos</p></a>
            </div>

            <div class="flex justify-start items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>

                <a :href="route('schedules')"><p class="ml-2">Schedules</p></a>
            </div>

            <div class="flex justify-start w-1/4 items-center mb-3 text-slate-500 text-sm text-center font-light tracking-tight cursor-pointer hover:text-slate-700 transition-colors delay-100 duration-250">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path></svg>
                <a :href="route('home')"><p class="ml-2 w-full">Home</p></a>
            </div>
        </div>

        <div id="work-area" class="col-start-4 col-end-13">
            <slot></slot>
        </div>
    </main>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3'

const clearMessage = () => {
    usePage().props.flash.success = ''
    usePage().props.flash.error = ''
}

</script>