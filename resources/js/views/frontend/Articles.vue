<script setup>
import { ChatBubbleLeftRightIcon  } from '@heroicons/vue/24/outline';
import { ref } from 'vue'
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronUpIcon } from '@heroicons/vue/20/solid'
import StCard from '@/components/StCard.vue';

const data = [
  {
    titre: "Santé spirituelle",
  },
  {
    titre: "Fornication",
  },
  {
    titre: "oeuvres spirituelles",
  },
  {
    titre: "L'amour du prochain",
  },
  {
    titre: "L'eveil spirituel",
  },
  
  ];
</script>
<template>
    <div class="w-full min-h-screen bg-white">
                <!-- Hero section -->
                <div class="relative overflow-clip flex flex-col items-start justify-center w-full h-80 bg-gradient-to-tl from-blue-500 via-blue-300 to-blue-500 p-12">
            <ChatBubbleLeftRightIcon class="absolute z-0 right-2 w-72 h-72 text-blue-800/50"/>
            <div class="flex ">
            <h5 class="font-bold text-blue-800 text-6xl">Messages</h5>
        </div>
        <h1 class="w-1/2 font-normal text-gray-100 text-lg mt-10">Tout vos evenements physiques et virtuels directement sur votre site. Vous voulez rejoindre ? voila les evenements à venir.</h1>
                </div>


                <!-- Body section -->
                <div class="w-full min-h-[500px] flex justify-start">
                 <!-- Filtres -->
                  <div class="flex flex-col w-1/6 h-auto bg-white p-6">
                <div class="w-full flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                    </svg>
                    <h2 class="font-semibold text-zinc-800 text-xl ml-4 my-8">Filtres</h2>
                </div>

        <div class="mx-auto w-full max-w-md rounded-2xl bg-white p-2">

      <Disclosure v-slot="{ open }">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75"
        >
          <span>Spécialités</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-blue-800"
          />
        </DisclosureButton>
        <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
            <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Artiste Chantre</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Chorale</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Cours biblique</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Chargé paroissial</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Déchaussé</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Evangelisation</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Fidele</label>
                        </div>
        </DisclosurePanel>
      </Disclosure>

      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75">
          <span>Type d'emploi</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-blue-800"
          />
        </DisclosureButton>
        <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
            <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Artiste Chantre</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Chorale</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Cours biblique</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Chargé paroissial</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Déchaussé</label>
                        </div>
        </DisclosurePanel>
      </Disclosure>

      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75">
          <span>Salaires</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-blue-800"
          />
        </DisclosureButton>
        <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
            <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Artiste Chantre</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Chorale</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Cours biblique</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Chargé paroissial</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Déchaussé</label>
                        </div>
        </DisclosurePanel>
      </Disclosure>
        </div>
                  </div>

                  <!-- Corps -->
                  <div class="flex flex-col items-start w-5/6 h-auto bg-white p-6">
                    <!-- Themes -->
                    <div class="flex items-center w-full">
                      <h1 class="font-bold text-3xl text-zinc-800 tracking-tight my-6">Themes</h1>
                
                      <select class="ml-16 mt-3 border-0 outline-none font-semibold text-xl text-blue-900 rounded-md">
                        <option selected>Christianisme Céleste</option>
                        <option >Christianisme</option>
                        <option >Evenement</option>
                        <option >Tout</option>
                      </select>
                    </div>

                    <!-- Sous-themes -->
                    <h1 class="font-semibold text-xl text-zinc-800 tracking-tight my-6">Choisissez les sous-themes</h1>
                    <div class="bg-gray-100 w-xl grid grid-cols-1  md:grid-cols-4 gap-3 md:gap-4 p-4 ">
                      <StCard v-for="d,index in data" :key="index" :data="d"/>
                  </div>

                  <!-- Cartes -->
                  <div class="w-full grid grid-cols-1  sm:grid-cols-3 md:grid-cols-4 gap-5 my-20">

                <div class="cursor-pointer w-auto h-auto block">
                  <div class="bg-white rounded-xl max-w-[360px] p-6 shadow-md">
                    <p class="text-sm tracking-wide text-left font-medium text-zinc-700">" Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, vel unde corporis iste recusandae rem quis! Placeat asperiores nostrum eos mollitia officiis iste dignissimos! Reprehenderit beatae dignissimos laborum officia odio. "</p>
                    <div class="w-full flex items-center  mt-2.5">
                    <div class="w-10 h-10 mx-2 mt-0 bg-slate-400 rounded-full"></div>
                    <div class="block">
                      <p class="font-medium text-sm text-zinc-800">Glory to the lord</p>
                      <p class="text-grey-100 text-xs">Pete Davidson</p>
                    </div>
                  </div>
                  </div>


                </div>

                  </div>
                  </div>
                </div>
    </div>
</template>