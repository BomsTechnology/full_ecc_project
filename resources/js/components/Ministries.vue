<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>
<template>
    <div class="w-full flex flex-col items-center justify-center my-16 ">
        <div class="w-full mx-auto flex items-center justify-center">
                <div class="w-5 h-5 bg-blue-600 rounded-full mx-4"></div>
                <h1 class="font-bold text-2xl lg:text-3xl text-zinc-800 mr-6">Nos Ministères</h1>
                <div class="lg:w-[48%] h-4 bg-gray-300"></div>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-center my-10 ">
                <div class="w-[328px] h-[448px]  rounded-lg shadow-sm ">
                    <div class="w-[100%] h-[50%] overflow-clip rounded-t-lg">
                        <img src="/assets/met.jpg" class="w-full h-full object-cover "/>
                    </div>
                    <div class="w-full h-[50%] bg-slate-50 rounded-b-lg border-b-4 border-blue-500 p-5">
                        <h1 class="font-bold text-xl">Ministère des Enfants</h1>
                        <p class="my-3 font-normal text-base text-slate-600">Le ministère des enfants est le ministère le plus important de notre église. Ce ministère aide les enfants à découvrir le Seigneur.</p>

                        <a class="text-yellow-500 font-bold text-md"><u><router-link to="/ministere">Lire la suite</router-link></u></a>
                    </div>
                </div>

                <div class="my-8 md:mx-8 w-[328px] h-[448px]  rounded-lg shadow-sm ">
                    <div class="w-[100%] h-[50%] overflow-clip rounded-t-lg">
                        <img src="/assets/mft.jpg" class="w-full h-full object-cover "/>
                    </div>
                    <div class="w-full h-[50%] bg-slate-50 rounded-b-lg border-b-4 border-blue-500 p-5">
                        <h1 class="font-bold text-xl">Ministère des Femmes</h1>
                        <p class="my-3 font-normal text-base text-slate-600">Le ministère des enfants est le ministère le plus important de notre église. Ce ministère aide les enfants à découvrir le Seigneur.</p>

                        <router-link to="/ministere"><a class="text-yellow-500 font-bold text-md"><u>Lire la suite</u></a></router-link>
                    </div>
                </div>

                <div class="w-[328px] h-[448px]  rounded-lg shadow-sm ">
                    <div class="w-[100%] h-[50%]  rounded-t-lg overflow-clip">
                        <img src="/assets/gmt.jpg" class="w-full h-full object-cover "/>
                    </div>
                    <div class="w-full h-[50%] bg-slate-50 rounded-b-lg border-b-4 border-blue-500 p-5">
                        <h1 class="font-bold text-xl">Ministère Global</h1>
                        <p class="my-3 font-normal text-base text-slate-600">Le ministère des enfants est le ministère le plus important de notre église. Ce ministère aide les enfants à découvrir le Seigneur.</p>

                        <router-link to="/ministere"><a class="text-yellow-500 font-bold text-md"><u>Lire la suite</u></a></router-link>
                    </div>
                </div>
            </div>
    </div>
</template>