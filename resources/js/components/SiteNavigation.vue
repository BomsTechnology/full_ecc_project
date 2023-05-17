<script setup>
import { reactive } from 'vue';
import { MagnifyingGlassIcon, ChevronDownIcon, ChevronUpIcon, Bars3Icon, XMarkIcon, UserCircleIcon } from '@heroicons/vue/24/solid';
import { useAuthenticateStore } from "@/stores/authenticate";

const auth = useAuthenticateStore();
let open = reactive({
  menu:false,
  submenu: {
    publication: false,
    profil:false,
    multimedia:false,
    cantiques:false,
    document:false,
  }
});

</script>

<template>
  <header class="relative  bg-white text-zinc-500   w-full h-auto shadow">
    <div class="flex justify-between items-center sm:px-6 px-4 py-4">
      <div class="lg:w-2/6">
        <router-link to="/" class="inline-flex items-center">
          <div class="lg:h-14 h-12 ">
              <img src="/assets/LOGO.png" class="w-full h-full object-cover"/> 
          </div>
          <h1 class="font-bold xl:text-xl text-sm  text-gray-800">Eglise du Christianisme Céleste</h1>
        </router-link>
      </div>

      <div class="relative w-2/6 lg:block hidden">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <MagnifyingGlassIcon class="w-5 h-5 text-gray-400" />
          </span>
          <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-lg  focus:border-red-400  focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-red-300" placeholder="Search">
      </div>

      <div v-if="!auth.user && !auth.token" class=" lg:flex xl:text-base text-sm hidden w-2/6 px-4 items-center justify-end">
        <router-link :to="{name:'register'}" class="py-2 text-base px-4 text-center rounded-lg bg-gradient-to-r bg-red-500 text-white font-semibold">Rejoindre la communauté</router-link>
        <router-link :to="{name:'login'}"  class="py-2 px-4  text-center text-red-500  font-semibold md:mx-4">Connexion</router-link>
      </div> 
      <div v-else class=" lg:flex xl:text-base text-sm hidden w-2/6 px-4 items-center justify-end">
        <router-link
            :to="{
                name: 'account',
                params: {
                  id: auth.user.id
                }
            }"
            class="lg:flex hidden items-center space-x-3"
            
        >
            <div class="text-right">
                <div class="text-lg">{{ auth.user.username }}</div>
                <div class="text-sm text-gray-500">
                    {{ auth.user.email }}
                </div>
            </div>
            <div>
                <img
                    v-if="
                        auth.user.avatar != null &&
                        auth.user.avatar != 'null'
                    "
                    class="h-16 w-16 rounded-full object-cover"
                    :src="auth.user.avatar "
                    :alt="auth.user.username"
                />
                <UserCircleIcon
                    v-else
                    class="h-16 w-16 text-gray-800"
                />
            </div>
        </router-link>
      </div>
      

      <div @click="open.menu = !open.menu" class="lg:hidden block">
        <button type="button">
          <Bars3Icon v-if="!open.menu"  class="h-6 w-6" />
          <XMarkIcon v-else class="h-6 w-6" />
        </button>
      </div>

    </div>

   
    <nav class="relative lg:block hidden">
      <ul class="flex items-center justify-center list-none space-x-6 w-full  xl:text-lg text-sm  " >
        <li class="py-4"><router-link :to="{name:'home'}" class="cursor-pointer p-2 rounded-lg text-left font-semibold text-gray-500 hover:bg-red-500 hover:text-white">Acceuil</router-link></li>
        <li class="relative group py-4">
          <div class="cursor-pointer p-2 rounded-lg text-left font-semibold flex items-center  text-gray-500 group-hover:bg-red-500 group-hover:text-white">
            <span>Publications</span>  
             <span class="ml-1">
              <ChevronDownIcon class="h-4 w-4 group-hover:hidden transition-all duration-500" />
              <ChevronUpIcon class="h-4 w-4 hidden group-hover:block transition-all duration-500" />
             </span>
          </div>
          <div class="absolute z-50 hidden bg-white w-52 shadow top-full left-0 rounded-b-lg text-base  group-hover:block">
            <router-link :to="{name:'messages'}"  class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Messages</router-link>
                  <router-link :to="{name: 'jobs'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Jobs</router-link>
                  <router-link :to="{name:'evenements'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Evenements</router-link>
                  <router-link :to="{name: 'annonces'}" class="hover:text-white hover:bg-red-500 px-4 py-2 rounded-b-lg  font-semibold block">Annonces</router-link>
          </div>
        </li>
        <li class="relative group py-4">
          <div class="cursor-pointer p-2 rounded-lg text-left font-semibold flex items-center  text-gray-500 group-hover:bg-red-500 group-hover:text-white">
            <span>Profils</span>  
             <span class="ml-1">
              <ChevronDownIcon class="h-4 w-4 group-hover:hidden transition-all duration-500" />
              <ChevronUpIcon class="h-4 w-4 hidden group-hover:block transition-all duration-500" />
             </span>
          </div>
          <div class="absolute z-20 hidden bg-white w-52 shadow top-full left-0 rounded-b-lg text-base  group-hover:block">
                  <router-link :to="{name:'profile', params: {userType: 'faithful'}}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Fidèle</router-link>
                  <router-link :to="{name:'profile', params: {userType: 'faithful'}, query: {parish_official:true}}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Chargé Paroissial</router-link>
                  <router-link :to="{name:'profile', params: {userType: 'prayerGroup'}}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Groupe de Prière</router-link>
                  <router-link :to="{name:'profile', params: {userType: 'diocese'}}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Diocèse</router-link>
                  <router-link :to="{name:'profile', params: {userType: 'seat'}}" class="hover:text-white hover:bg-red-500 px-4 py-2 rounded-b-lg  font-semibold block">Siège</router-link>
          </div>
        </li>
        <li class="py-4"><router-link :to="{name:'paroisses'}" class="cursor-pointer p-2 rounded-lg text-left font-semibold text-gray-500 hover:bg-red-500 hover:text-white">Paroisses</router-link></li>
        <li class="relative group py-4">
          <div class="cursor-pointer p-2 rounded-lg text-left font-semibold flex items-center  text-gray-500 group-hover:bg-red-500 group-hover:text-white">
            <span>Multimédia</span>  
             <span class="ml-1">
              <ChevronDownIcon class="h-4 w-4 group-hover:hidden transition-all duration-500" />
              <ChevronUpIcon class="h-4 w-4 hidden group-hover:block transition-all duration-500" />
             </span>
          </div>
          <div class="absolute z-20 hidden bg-white w-52 shadow top-full left-0 rounded-b-lg text-base  group-hover:block">
                  <router-link :to="{name:'multimedia'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Audio</router-link>
                  <router-link :to="{name:'multimedia'}" class="hover:text-white hover:bg-red-500 px-4 py-2 rounded-b-lg  font-semibold block">Video</router-link>
          </div>
        </li>
        <li class="relative group py-4">
          <div class="cursor-pointer p-2 rounded-lg text-left font-semibold flex items-center  text-gray-500 group-hover:bg-red-500 group-hover:text-white">
            <span>Cantiques</span>  
             <span class="ml-1">
              <ChevronDownIcon class="h-4 w-4 group-hover:hidden transition-all duration-500" />
              <ChevronUpIcon class="h-4 w-4 hidden group-hover:block transition-all duration-500" />
             </span>
          </div>
          <div class="absolute z-20 hidden bg-white w-52 shadow top-full left-0 rounded-b-lg text-base  group-hover:block">
                  <router-link :to="{name:'cantique'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Audios</router-link>
                  <router-link :to="{name:'cantique'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Playlists</router-link>
                  <router-link :to="{name:'cantique'}" class="hover:text-white hover:bg-red-500 px-4 py-2 rounded-b-lg  font-semibold block">Partitions</router-link>
          </div>
        </li>
        <li class="py-4"><router-link :to="{name:'formation'}" class="cursor-pointer p-2 rounded-lg text-left font-semibold text-gray-500 hover:bg-red-500 hover:text-white">Formations</router-link></li>
        <li class="relative group py-4">
          <div class="cursor-pointer p-2 rounded-lg text-left font-semibold flex items-center  text-gray-500 group-hover:bg-red-500 group-hover:text-white">
            <span>Documents</span>  
             <span class="ml-1">
              <ChevronDownIcon class="h-4 w-4 group-hover:hidden transition-all duration-500" />
              <ChevronUpIcon class="h-4 w-4 hidden group-hover:block transition-all duration-500" />
             </span>
          </div>
          <div class="absolute z-20 hidden bg-white w-52 shadow top-full left-0 rounded-b-lg text-base  group-hover:block">
                  <router-link :to="{name:'library'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Livres</router-link>
                  <router-link :to="{name:'library'}" class="hover:text-white hover:bg-red-500 px-4 py-2 rounded-b-lg  font-semibold block">Documents officiels</router-link>
          </div>
        </li>
        <li class="py-4"><router-link :to="{name:'contact'}" class="cursor-pointer p-2 rounded-lg text-left font-semibold text-gray-500 hover:bg-red-500 hover:text-white">Contact</router-link></li>     
      </ul> 
    </nav>

    <Transition
            enter-active-class="transition duration-500"
            enter-from-class="opacity-0 -translate-x-full absolute"
            enter-to-class="opacity-1 translate-x-0"
            leave-active-class="transition duration-500"
            leave-from-class="opacity-1/2 translate-x-0"
            leave-to-class="translate-x-1/2 opacity-0 "
        >
    <nav class="relative w-full" v-if="open.menu">
      <div class="relative w-full px-6">
          <span class="absolute inset-y-0 left-6 flex items-center pl-3">
              <MagnifyingGlassIcon class="w-5 h-5 text-gray-400" />
          </span>
          <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-lg  focus:border-red-400 text-sm  focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-red-300" placeholder="Search">
      </div>
      <ul class="flex items-start flex-col justify-start py-4 list-none w-full text-sm" >
        <li @click="open.menu =!open.menu" class="py-1 px-6 w-full"><router-link :to="{name:'home'}" class="cursor-pointer p-2  text-left block font-semibold text-gray-500 hover:bg-red-500 focus:bg-red-500 w-full hover:text-white">Acceuil</router-link></li>
        <li class="relative py-1 px-6 w-full">
          <div @click="open.submenu.publication = !open.submenu.publication" class="cursor-pointer p-2 text-left font-semibold flex justify-between w-full items-center  text-gray-500 hover:bg-red-500 hover:text-white">
            <span>Publications</span>  
            <span class="">
              <ChevronDownIcon v-if="!open.submenu.publication" class="h-4 w-4" />
              <ChevronUpIcon v-else class="h-4 w-4" />
             </span>
          </div>
          <Transition
            enter-active-class="transition duration-500"
            enter-from-class="opacity-0 -translate-x-full absolute"
            enter-to-class="opacity-1 translate-x-0"
            leave-active-class="transition duration-500"
            leave-from-class="opacity-1/2 translate-x-0"
            leave-to-class="translate-x-1/2 opacity-0 "
        >
          <div @click="open.menu =!open.menu" class="shadow  rounded-lg my-2 bg-gray-50 text-sm overflow-hidden" v-if="open.submenu.publication">
                  <router-link :to="{name:'messages'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold  block">Messages</router-link>
                  <router-link :to="{name: 'jobs'}"  class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Jobs</router-link>
                  <router-link :to="{name:'evenements'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Evenements</router-link>
                  <router-link :to="{name: 'annonces'}"  class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Annonces</router-link>
          </div>
          </Transition>
        </li>
        <li class="relative py-1 px-6 w-full">
          <div @click="open.submenu.profil = !open.submenu.profil" class="cursor-pointer p-2 text-left font-semibold flex justify-between w-full items-center  text-gray-500 hover:bg-red-500 hover:text-white">
            <span>Profils</span>  
            <span class="">
              <ChevronDownIcon v-if="!open.submenu.profil" class="h-4 w-4" />
              <ChevronUpIcon v-else class="h-4 w-4" />
             </span>
          </div>
          <Transition
            enter-active-class="transition duration-500"
            enter-from-class="opacity-0 -translate-x-full absolute"
            enter-to-class="opacity-1 translate-x-0"
            leave-active-class="transition duration-500"
            leave-from-class="opacity-1/2 translate-x-0"
            leave-to-class="translate-x-1/2 opacity-0 "
        >
          <div @click="open.menu =!open.menu" class="shadow rounded-lg my-2 bg-gray-50 text-sm overflow-hidden" v-if="open.submenu.profil">
                  <router-link :to="{name:'profile', params: {userType: 'faithful'}}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Fidèle</router-link>
                  <router-link :to="{name:'profile', params: {userType: 'faithful'}, query: {parish_official:true}}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Chargé Paroissial</router-link>
                  <router-link :to="{name:'profile', params: {userType: 'prayerGroup'}}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Groupe de Prière</router-link>
                  <router-link :to="{name:'profile', params: {userType: 'diocese'}}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Diocèse</router-link>
                  <router-link :to="{name:'profile', params: {userType: 'seat'}}" class="hover:text-white hover:bg-red-500 px-4 py-2 rounded-b-lg  font-semibold block">Siège</router-link>
          </div>
          </Transition>
        </li>
        <li class="py-1 px-6 w-full"><router-link :to="{name:'paroisses'}" class="cursor-pointer p-2  text-left block font-semibold text-gray-500 hover:bg-red-500 focus:bg-red-500 w-full hover:text-white">Paroisses</router-link></li>
        <li class="relative py-1 px-6 w-full">
          <div @click="open.submenu.multimedia = !open.submenu.multimedia" class="cursor-pointer p-2 text-left font-semibold flex justify-between w-full items-center  text-gray-500 hover:bg-red-500 hover:text-white">
            <span>Multimédia</span>  
            <span class="">
              <ChevronDownIcon v-if="!open.submenu.multimedia" class="h-4 w-4" />
              <ChevronUpIcon v-else class="h-4 w-4" />
             </span>
            </div>
            <Transition
            enter-active-class="transition duration-500"
            enter-from-class="opacity-0 -translate-x-full absolute"
            enter-to-class="opacity-1 translate-x-0"
            leave-active-class="transition duration-500"
            leave-from-class="opacity-1/2 translate-x-0"
            leave-to-class="translate-x-1/2 opacity-0 "
        >
            <div @click="open.menu =!open.menu" class="shadow rounded-lg my-2 bg-gray-50 text-sm overflow-hidden" v-if="open.submenu.multimedia">
                  <router-link :to="{name:'multimedia'}"  class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Audio</router-link>
                  <router-link :to="{name:'multimedia'}"  class="hover:text-white hover:bg-red-500 px-4 py-2 rounded-b-lg  font-semibold block">Video</router-link>
          </div>
          </Transition>
        </li>
        <li class="relative w-full py-1 px-6">
          <div @click="open.submenu.cantiques = !open.submenu.cantiques" class="cursor-pointer p-2 text-left font-semibold flex justify-between w-full items-center  text-gray-500 hover:bg-red-500 hover:text-white">
            <span>Cantiques</span>  
             <span class="">
              <ChevronDownIcon v-if="!open.submenu.cantiques" class="h-4 w-4" />
              <ChevronUpIcon v-else class="h-4 w-4" />
             </span>
            </div>
            <Transition
            enter-active-class="transition duration-500"
            enter-from-class="opacity-0 -translate-x-full absolute"
            enter-to-class="opacity-1 translate-x-0"
            leave-active-class="transition duration-500"
            leave-from-class="opacity-1/2 translate-x-0"
            leave-to-class="translate-x-1/2 opacity-0 "
        >
          <div @click="open.menu =!open.menu" class="shadow rounded-lg my-2 bg-gray-50 text-sm overflow-hidden" v-if="open.submenu.cantiques">
                  <router-link :to="{name:'cantique'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Audios</router-link>
                  <router-link :to="{name:'cantique'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Playlists</router-link>
                  <router-link :to="{name:'cantique'}" class="hover:text-white hover:bg-red-500 px-4 py-2 rounded-b-lg  font-semibold block">Partitions</router-link>
          </div>
          </Transition>
        </li>
        <li class="py-1 px-6 w-full"><router-link :to="{name:'formation'}" class="cursor-pointer p-2  text-left block font-semibold text-gray-500 hover:bg-red-500 focus:bg-red-500 w-full hover:text-white">Formations</router-link></li>
        <li class="relative py-1 px-6 w-full">
          <div @click="open.submenu.document = !open.submenu.document" class="cursor-pointer p-2 text-left font-semibold flex justify-between w-full items-center  text-gray-500 hover:bg-red-500 hover:text-white">
            <span>Documents</span>  
            <span class="">
              <ChevronDownIcon v-if="!open.submenu.document" class="h-4 w-4" />
              <ChevronUpIcon v-else class="h-4 w-4" />
             </span>
            </div>
            <Transition
            enter-active-class="transition duration-500"
            enter-from-class="opacity-0 -translate-x-full absolute"
            enter-to-class="opacity-1 translate-x-0"
            leave-active-class="transitionhidden duration-500"
            leave-from-class="opacity-1/2 translate-x-0"
            leave-to-class="translate-x-1/2 opacity-0 "
        >
          <div @click="open.menu =!open.menu" class="shadow rounded-lg my-2 bg-gray-50 text-sm overflow-hidden" v-if="open.submenu.document">
                  <router-link :to="{name:'library'}" class="hover:text-white hover:bg-red-500 px-4 py-2  font-semibold block">Livres</router-link>
                  <router-link :to="{name:'library'}" class="hover:text-white hover:bg-red-500 px-4 py-2 rounded-b-lg  font-semibold block">Documents officiels</router-link>
          </div>
          </Transition>
        </li>
        <li @click="open.menu =!open.menu" class="py-1 px-6 w-full"><router-link :to="{name:'contact'}" class="cursor-pointer p-2  text-left block font-semibold text-gray-500 hover:bg-red-500 focus:bg-red-500 w-full hover:text-white">Contact</router-link></li>     
      </ul> 
      <div v-if="!auth.user && !auth.token" @click="open.menu =!open.menu" class="text-sm w-full px-4">
        <router-link :to="{name:'register'}" class="py-2 px-4 block text-center rounded-lg bg-red-500 text-white font-semibold">Rejoindre la communauté</router-link>
        <router-link :to="{name:'login'}" class="py-2 px-4 block text-center text-red-500  font-semibold md:mx-4">Se Connecter</router-link>
      </div> 
      <div v-else @click="open.menu =!open.menu" class="w-full px-6 pb-4">
        <router-link
            :to="{
                name: 'account',
                params: {
                  id: auth.user.id
                }
            }"
            class="flex flex-row-reverse  justify-end items-center  w-full "
            
        >
            <div class="text-left ml-2">
                <div class="text-base">{{ auth.user.username }}</div>
                <div class="text-xs text-gray-500">
                    {{ auth.user.email }}
                </div>
            </div>
            <div>
                <img
                    v-if="
                        auth.user.avatar != null &&
                        auth.user.avatar != 'null'
                    "
                    class="h-16 w-16 rounded-full object-cover"
                    :src="auth.user.avatar "
                    :alt="auth.user.username"
                />
                <UserCircleIcon
                    v-else
                    class="h-16 w-16 text-gray-800"
                />
            </div>
        </router-link>
      </div>
    </nav>
    </Transition>
   
  </header>
</template>