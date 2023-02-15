<script setup>
defineProps(['titre'])
</script>
<template>
        <div class="relative w-full flex items-center justify-center h-48 bg-[url('/assets/met.jpg')] bg-cover bg-no-repeat bg-center">
            <div class="absolute inset-0 bg-zinc-900/70 w-full h-full"></div>
            <div class="relative w-full flex flex-col items-center justify-center">
            <h1 class="text-3xl font-bold text-white">{{ titre }}</h1>
           </div>
        </div>
</template>