<template>
    <div class="flex items-center p-3 max-w-40 bg-white rounded-xl">
    <HashtagIcon class="text-blue-900 w-5 h-5  "/>
    <h6 class="mx-2 text-blue-900 font-semibold">{{ data.titre }}</h6>
    </div>
</template>
<script setup>
import { HashtagIcon } from '@heroicons/vue/20/solid'
const props = defineProps ({
    data: Object
})
</script>