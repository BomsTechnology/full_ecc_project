
<template>
    <div class="w-full relative mb-24">
        <div class="fixed border-b h-24 overflow-auto z-30 bg-white top-0 flex items-center justify-between  p-4">
                <h1 class="font-semibold text-zinc-800 text-2xl ml-4 ">Dashboard</h1>
                <div class="flex w-full h-full justify-end items-center ">
                    <div class="flex items-center p-2 rounded-xl cursor-pointer hover:bg-slate-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                    <div class="flex items-center p-2 mx-3 rounded-xl cursor-pointer hover:bg-slate-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </div>

                    <div class=" flex items-center justify-center p-1 rounded-xl cursor-pointer hover:bg-slate-50">
                        <div class="flex items-center bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold p-2 rounded-full cursor-pointer">
                            MS
                        </div>
                        <h2 class="font-semibold text-zinc-800 text-lg mx-2">Marc Sigha</h2>
                    </div>
                </div>
            </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const isScroll = ref(false);
document.addEventListener("scroll", async function () {
    let bodyTopPosition = document.body.getBoundingClientRect().top;
    if (bodyTopPosition < -150) {
        isScroll.value = true;
    } else {
        isScroll.value = false;
    }
});
</script>

