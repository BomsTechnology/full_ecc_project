<script setup>
import { TvIcon } from '@heroicons/vue/24/outline';
import { ClockIcon, MapPinIcon } from '@heroicons/vue/24/solid';

const props = defineProps ({
    data: Object
})
</script>
<template>
<div class="w-full flex flex-col items-start bg-slate-50 justify-start rounded-md p-3 cursor-pointer transition-all ease-in-out delay-200">
    <div class="w-full h-48 bg-slate-600 rounded-md mb-5"></div>
    <div class="flex flex-col w-full">
                <h4 class="text-sm text-gray-400 font-semibold">{{ data.type }}</h4>
                <h1 class="truncate text-xl text-zinc-800 font-bold my-2">{{ data.titre }}</h1>
                <div class="flex flex-col">
                    <div class="flex items-center w-full">
                        <ClockIcon class="w-4 h-4 mr-2 text-gray-600"/>
                <h2 class="truncate text-base text-zinc-700 font-normal mb-2">{{ data.hd }}-{{ data.hf }}, {{ data.date }}</h2>
                    </div>


                    <div class="flex items-center w-full" v-if="data.type === 'Livestream'">
                    <TvIcon class="w-4 h-4 mr-2 text-gray-600"/>
                    <h2 class="truncate text-base text-blue-500">En ligne</h2>
                </div>

                    <div class="flex items-center w-full" v-else>
                        <MapPinIcon class="w-4 h-4 mr-2 text-gray-600"/>
                    <h2 class="truncate text-base text-blue-500">{{ data.ville }}, {{ data.pays }}</h2>
                </div>
                </div>
            </div>
</div>
</template>
