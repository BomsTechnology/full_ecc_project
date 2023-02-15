
<template>
    <div
        :class="[
            open.menu
                ? 'relative z-50 mr-72 h-full transition-all duration-1000'
                : 'relative z-50 h-full transition-all duration-1000',
        ]"
    >

        <div class="no-scrollbar shadow fixed flex h-screen w-72 flex-col overflow-y-auto pb-3  bg-[#16a085]">
            <div class="w-full flex items-center py-2 justify-start  border-b">
                <div class="w-[60px] h-[46px]">
                    <img src="/assets/LOGO.png" class="w-full h-full object-contain"/>
                </div>
                <h5 class="text-[1.3rem] font-semibold text-white">ECC - Admin Panel</h5>
            </div>
            <div class="py-2 ">
                <div class=" flex items-center flex-col justify-center p-1 rounded-xl cursor-pointer ">
                        <div class="flex items-center justify-center text-3xl mb-2 bg-gradient-to-r from-blue-500 to-blue-600 w-32 h-32 text-white font-semibold p-2 rounded-full cursor-pointer">
                            MS
                        </div>
                        <h2 class="font-semibold text-white text-lg mx-2">Marc Sigha</h2>
                    </div>
            </div>
            <div class=" flex flex-col justify-between">

    
                <div class="w-full flex flex-col my-3 px-4">
                    <router-link :to="{name:'admin.dashboard'}" class="flex items-center w-full p-2 space-x-2 my-2 rounded-lg hover:bg-white hover:text-black text-white group cursor-pointer">
                        <Squares2X2Icon class="w-6 h-6" />
                        <h3 class="font-semibold text-lg">Dashboard</h3>
                    </router-link>

                    <div class="flex items-center w-full p-2  my-2 rounded-lg space-x-2 hover:bg-white hover:text-black text-white group cursor-pointer">
                        <NewspaperIcon class="w-6 h-6" />
                        <h3 class="font-semibold text-lg ">Publication</h3>
                    </div>

                    <router-link :to="{name:'admin.user.index'}" class="flex items-center w-full p-2  my-2 rounded-lg hover:bg-white space-x-2 hover:text-black text-white group cursor-pointer">
                        <UserGroupIcon class="w-6 h-6" />
                        <h3 class="font-semibold text-lg ">Profils</h3>
                    </router-link>  
                    
                    <div class="flex items-center w-full p-2  my-2 rounded-lg hover:bg-white space-x-2 hover:text-black text-white group cursor-pointer">
                        <BuildingLibraryIcon stroke="currentColor" class="w-6 h-6" />
                        <h3 class="font-semibold text-lg ">Paroisses</h3>
                    </div>

                    <div class="flex items-center w-full p-2  my-2 rounded-lg hover:bg-white space-x-2 hover:text-black text-white group cursor-pointer">
                        <FilmIcon class="w-6 h-6" />
                        <h3 class="font-semibold text-lg ">Multimédia</h3>
                    </div>

                    <div class="flex items-center w-full p-2  my-2 rounded-lg hover:bg-white space-x-2 hover:text-black text-white group cursor-pointer">
                        <MusicalNoteIcon class="w-6 h-6" />
                        <h3 class="font-semibold text-lg ">Cantiques</h3>
                    </div>

                    <div class="flex items-center w-full p-2  my-2 rounded-lg hover:bg-white space-x-2 hover:text-black text-white group cursor-pointer">
                        <DocumentIcon class="w-6 h-6" />
                        <h3 class="font-semibold text-lg ">Documents</h3>
                    </div>

                </div>

                <div class="px-4 border-t">
                    <div class="flex items-center w-full p-2  my-2 rounded-lg hover:bg-white space-x-2 hover:text-black text-white group cursor-pointer">
                        <ArrowLeftOnRectangleIcon class="w-6 h-6" />
                        <h3 class="font-semibold text-lg ">Logout</h3>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</template>

<script setup>
import { ArrowLeftOnRectangleIcon, BuildingLibraryIcon, DocumentIcon, FilmIcon, MusicalNoteIcon, NewspaperIcon, Squares2X2Icon, UserGroupIcon } from '@heroicons/vue/24/solid';
import { reactive } from 'vue';

const open = reactive({
menu: true,})
</script>

<style scoped>
.router-link-exact-active {
    @apply bg-gray-50 text-gray-700;
}

.no-scrollbar::-webkit-scrollbar {
    display: none;
}

.no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>

