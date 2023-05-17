<template>
                    <div class="w-full flex items-center justify-start px-3 py-4  cursor-pointer hover:bg-gray-100 hover:shadow rounded-xl my-4 transition ease duration-500">
                    <div class="h-20 w-20 rounded-full bg-blue-200 mr-4"></div>
                    <div class="ml-2 block w-[30%]">
                        <h5 class="font-semibold text-xs text-gray-700 leading-6">{{ data.company }}</h5>
                        <h1 class="font-semibold text-xl text-gray-900 leading-6 my-0.5">{{ data.post }}</h1>
                        <div class="flex items-center">
                            <h3 class="text-xs text-gray-600 leading-6">{{ data.type }}</h3>
                            <div class="w-1 h-1 bg-gray-400 rounded-full mx-1.5 mt-1"></div>
                            <h3 class="text-xs text-gray-600 leading-6">{{ data.salary }}</h3>
                        </div>
                        
                    </div>

                    <div class="flex mx-1 w-[20%]">
                        <span class="py-2 px-3 max-w-52 rounded-xl bg-white text-zinc-600 font-semibold text-md shadow">{{ data.exp }}</span>
                    </div>
                    <h3 class="font-medium text-zinc-800 mx-1 w-[25%]">{{ data.location }}</h3>
                    <h3 class="font-medium text-zinc-500 mx-2 text-right">{{ data.publishedAt }}</h3>
                </div>
</template>
<script setup>
    const props = defineProps({
        data: Object
    })
</script>