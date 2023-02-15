<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>
<template>
    <div class="relative flex items-center lg:flex-row flex-col justify-start p-4 w-[88%] mx-auto bg-gray-100 mt-32">
        <div class="flex items-center justify-center mr-4  w-40 h-40 rounded-full bg-rose-700 text-white">
            <h1 class="text-xl text-center font-semibold">Evenements à venir</h1>
        </div>

        <div class="flex flex-col w-[254px] h-auto p-1.5 mx-6">
            <div class="flex items-center justify-start w-full">
                <div class="w-6 h-2 bg-violet-800"></div>
                <h4 class="text-base text-violet-800 ml-3">Santé</h4>
            </div>
            <h2 class="my-1.5 font-semibold text-[21px] text-zinc-800">Paix du coeur et santé, le role du seigneur </h2>
            <span class="flex my-1">
                <h6 class="flex items-center font-normal text-gray-500 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            28 mars 20211</h6>
                    </span>
        </div>

        <div class="flex flex-col w-[254px] h-auto p-1.5 mx-6">
            <div class="flex items-center justify-start w-full">
                <div class="w-6 h-2 bg-orange-600"></div>
                <h4 class="text-base text-orange-600 ml-3">Bien-etre</h4>
            </div>
            <h2 class="my-1.5 font-semibold text-[20px] text-zinc-800">Les bienfaits des cantiques religieux</h2>
            <span class="flex my-1">
                <h6 class="flex items-center font-normal text-gray-500 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            28 mars 20211</h6>
                    </span>
        </div>

        <div class="flex flex-col w-[254px] h-auto p-1.5 mx-6 ">
            <div class="flex items-center justify-start w-full">
                <div class="w-6 h-2 bg-blue-600"></div>
                <h4 class="text-base text-blue-600 ml-3">Enfants</h4>
            </div>
            <h2 class="my-1.5 font-semibold text-[20px] text-zinc-800">Excursions des monuments symboliques</h2>
            <span class="flex my-1">
                <h6 class="flex items-center font-normal text-gray-500 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            28 mars 20211</h6>
                    </span>
        </div>

        <div class="absolute -right-4 flex flex-col">
            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-indigo-500/50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-white w-5 h-5">
                <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z" clip-rule="evenodd" />
                </svg>

            </div>

            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-indigo-500 my-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-white w-5 h-5">
                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                </svg>

            </div>
        </div>
    </div>
</template>