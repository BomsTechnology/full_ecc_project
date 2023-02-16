<script setup>
import { polyfillCountryFlagEmojis } from "country-flag-emoji-polyfill";
import { onMounted, ref, watch } from 'vue';
import useUser from "@/composables/useUser";
import { UserCircleIcon } from '@heroicons/vue/24/solid';

const {
    getUser,
    user,
    loading,
    errors,
    cleanErrors,
} = useUser();

const props = defineProps({
    id: String
});

onMounted(async function() {
    await getUser(props.id);
});

polyfillCountryFlagEmojis();
</script>
<template>
    <div class="w-full min-h-screen p-3 bg-white">
        <div class="flex flex-col items-center w-5/6 h-auto rounded-xl shadow-md my-8 overflow-clip bg-white mx-auto">
            <div class="w-full p-20 bg-gradient-to-r from-blue-600 via-blue-500 to-blue-600"></div>
            <div class="w-full min-h-32 p-8">
                <div class="w-36 h-36 rounded-full bg-white overflow-clip shadow -mt-28">
                    <img v-if="
                        user.avatar != null &&
                        user.avatar != 'null'
                    " :src="user.avatar "
                    :alt="user.username" class="w-full h-full object-cover"/>
                    <UserCircleIcon
                        v-else
                        class="h-full w-full text-gray-500"
                    />
                </div>
                <h1 class="font-semibold text-zinc-800 text-2xl my-3">{{ user.username }}</h1>
                <!--<h1 class="font-medium text-zinc-600 text-lg">&#127464;&#127474; &nbsp; Douala, Cameroun</h1>-->
                <div class="flex items-center my-3">
                    <h2 class="text-zinc-500 text-md">{{ user.email }}</h2> <div class="w-1.5 h-1.5 mt-1 mx-2 bg-slate-300 rounded-full"></div>
                    <h2 class="text-zinc-500 text-md">{{ user.phone_number }}</h2> <div class="w-1.5 h-1.5 mt-1 mx-2 bg-slate-300 rounded-full"></div>
                    <h2 class="text-zinc-500 text-md">{{ user.user_type }}</h2>
                </div>
                <div class="flex items-center mt-10">
                    <div class="flex items-center p-2 rounded-lg bg-gradient-to-r from-blue-700 to-blue-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="text-white w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                        </svg>
                        <p class="font-semibold text-white text-lg mx-2">Messages</p>
                    </div>

                    <router-link :to="{name:'editprofil'}">
                    <div class="flex items-center p-2 rounded-lg bg-slate-50 border border-gray-200 mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-zinc-800 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                        <p class="font-semibold text-zinc-800 text-lg mx-2">Editer le profil</p>
                    </div>
                </router-link>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-5/6 h-auto rounded-lg shadow-md p-5 my-8 overflow-clip bg-white mx-auto">
            <h1 class="font-semibold text-zinc-800 text-xl my-3">Annonces</h1>
            <div class="w-full h-auto flex flex-col items-center justify-center p-12">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-300 w-16 h-16">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
                <p class="font-semibold text-zinc-600 text-xl my-3">Aucune annonce par ici !</p>
                <div class="flex items-center p-2 rounded-lg bg-gradient-to-r from-blue-700 to-blue-600 mt-4 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="text-white w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
    
                    <p class="font-semibold text-white text-md mx-2">Nouvelle annonce</p>
                    </div>

            </div>
        </div>

        <div class="flex flex-col w-5/6 h-auto rounded-lg shadow-md p-5 my-8 overflow-clip bg-white mx-auto">
            <h1 class="font-semibold text-zinc-800 text-xl my-3">Évènements</h1>
            <div class="w-full h-auto flex flex-col items-center justify-center p-12">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-300 w-16 h-16">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>

                <p class="font-semibold text-zinc-600 text-xl my-3">Aucune évènement par ici !</p>
                <div class="flex items-center p-2 rounded-lg bg-gradient-to-r from-blue-700 to-blue-600 mt-4 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="text-white w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
    
                    <p class="font-semibold text-white text-md mx-2">Nouvel évènement</p>
                    </div>

            </div>
        </div>
    </div>
</template>