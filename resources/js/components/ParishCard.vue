<script setup>
const props = defineProps ({
    data: Object
})
</script>
<template>
            <div class="w-full flex flex-col items-start justify-start p-3 cursor-pointer rounded-lg shadow  hover:shadow-md transition-all ease-in-out delay-200">
            <div class="w-80 h-48 bg-slate-600 rounded-md mb-5"></div>
            <div class="flex flex-col w-80">
                <h4 class="text-sm text-gray-400 font-semibold">{{ data.continent }}</h4>
                <h1 class="truncate text-lg text-zinc-800 font-bold">{{ data.parish }}</h1>
                <div class="flex flex-col">
                <h2 class="truncate text-base text-zinc-700">{{ data.ville }}, {{ data.pays }}</h2>
                <h2 class="truncate text-base text-blue-500">{{ data.email }}</h2>
                <h2 class="truncate text-base text-zinc-700">{{ data.faithfull }}</h2>
                </div>
            </div>
            </div>
</template>
