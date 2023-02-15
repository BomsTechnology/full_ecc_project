<template>
    <router-link :to="{name:'profil'}">
        <div class="flex flex-col items-center justify-start p-2 rounded-lg  w-auto h-auto bg-white shadow">
            <div class="bg-slate-300 rounded-full w-[140px] h-[140px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">{{ data.surname }} {{ data.name }}</p>
            <p class="pt-1 text-blue-600 text-grey-700">{{ data.email }}</p>
            <p class="pt-1 font-light text-grey-700">{{ data.city }}, {{ data.country }}</p>
            <p class="pt-1 font-light text-grey-700">{{ data.sex }}</p>
            <p class="pt-1 font-light text-grey-700">{{ data.ministry }}</p> 
        </div>  
    </router-link>
</template>

<script setup>
    const props = defineProps({
        data: Object
    })
</script>