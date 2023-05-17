<script setup>
import { CalendarDaysIcon, TicketIcon } from '@heroicons/vue/24/outline';
import { ref } from 'vue'
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronUpIcon } from '@heroicons/vue/20/solid'
import { Squares2X2Icon } from '@heroicons/vue/20/solid';
import { MapIcon} from '@heroicons/vue/24/outline';
import EventCard from '@/components/EventCard.vue';

const data = [
    {
        type:'En personne',
        titre: 'Evangelisation Céleste Annuelle',
        hd:'12h00',
        hf:'18h30',
        date:'12 avril 2023',
        ville:'Douala',
        pays:'Cameroun'
    },
    {
        type:'Livestream',
        titre: 'Conférence sur la Spiritualité dans le digital',
        hd:'14h00',
        hf:'20h30',
        date:'23 avril 2023',
        ville:'Porto-novo',
        pays:'Bénin'
    },
    {
        type:'En-personne',
        titre: 'ECC Annual Summit 2023',
        hd:'11h00',
        hf:'18h30',
        date:'13 mai 2023',
        ville:'Abuja',
        pays:'Nigéria'
    },
]
</script>
<template>
<div class="flex flex-col min-h-screen bg-white m-0 p-0">
        <!-- Hero section -->
        <div class="relative overflow-clip flex flex-col items-start justify-center w-full h-80 bg-gradient-to-tl from-blue-500 via-blue-300 to-blue-500 p-12">
            <CalendarDaysIcon class="absolute z-0 -right-2 -rotate-12 w-72 h-72 text-blue-800/50"/>
            <div class="flex ">
            <h5 class="font-bold text-blue-800 text-6xl">Evenements</h5>
        </div>
        <h1 class="w-1/2 font-normal text-gray-100 text-lg mt-10">Tout vos evenements physiques et virtuels directement sur votre site. Vous voulez rejoindre ? voila les evenements à venir.</h1>

        <!-- <div class="flex items-center justify-center w-full h-auto">
            <div class="flex items-center w-1/2 h-16 p-4 bg-white rounded-full shadow mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-500 mx-2 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
            </svg>

            <input class="border-0 focus:outline-0 border-r-2 border-gray-500  focus:ring-0 mr-4" type="text" placeholder="Pays ou ville"/>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class=" text-gray-500  w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
            </svg>

            <input class="w-80 border-0   focus:ring-0" type="text" placeholder="Titre du job ou mot clé"/>
        </div>
        <button type="submit" class="flex items-center shadow justify-center w-16 h-16 rounded-full bg-gradient-to-tr from-blue-600 via-blue-500 to-blue-600 ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="text-white w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>

        </button>
        </div> -->
        </div>

        <!-- Body section -->
        <div class="w-full min-h-[500px] h-auto flex justify-start">
            <!-- Filtres -->
            <div class="flex flex-col w-1/6 h-auto bg-white px-4">
                <div class="w-full flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                    </svg>
                    <h2 class="font-semibold text-zinc-800 text-xl ml-4 my-8">Filtres</h2>
                </div>
                <div class="mx-auto w-full max-w-md rounded-2xl bg-white">

<Disclosure v-slot="{ open }">
  <DisclosureButton
    class="flex w-full justify-between rounded-lg bg-blue-50 px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-100 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75"
  >
    <span>Continent</span>
    <ChevronUpIcon
      :class="open ? 'rotate-180 transform' : ''"
      class="h-5 w-5 text-blue-500"
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
    class="flex w-full justify-between rounded-lg bg-blue-50 px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-100 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75">
    <span>Pays</span>
    <ChevronUpIcon
      :class="open ? 'rotate-180 transform' : ''"
      class="h-5 w-5 text-blue-500"
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
  class="flex w-full justify-between rounded-lg bg-blue-50 px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-100 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75">
  <span>Villes</span>
  <ChevronUpIcon
    :class="open ? 'rotate-180 transform' : ''"
    class="h-5 w-5 text-blue-500"
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
  class="flex w-full justify-between rounded-lg bg-blue-50 px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-100 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75">
  <span>Nombres de fideles</span>
  <ChevronUpIcon
    :class="open ? 'rotate-180 transform' : ''"
    class="h-5 w-5 text-blue-500"
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

            <!-- Cartes -->
            <div class="flex flex-col items-start w-5/6 h-auto bg-white p-6">
                <h1 class="font-bold text-3xl text-zinc-800 tracking-tight mb-4">Evenements en cours</h1>
                <div class="w-full px-3 h-auto flex items-center justify-between mb-3 ">
        <div class="flex flex-col md:flex-row items-center justify-start w-1/2  md:my-4 py-2">
          <button class="flex items-center justify-center border-none md:mr-1  h-10 w-36 md:w-12 bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="text-zinc-400 w-6 h-6 mr-3 md:mr-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <p class="md:hidden font-semibold text-base text-white">Rechercher</p>
            </button>
                <input class="w-full md:w-4/5 border-gray-300 border-0 focus-visible:ring-transparent border-b form-input p-2 outline-none block" type="text" placeholder="Trouvez un evenement"/>
          </div>

            <div class="flex justify-end w-1/2 px-3">
              <div class="flex items-center justify-between w-24 h-10 px-1 rounded-[14px] bg-blue-100">
                <div class="flex items-center justify-center w-10 h-8 rounded-[12px] bg-white shadow-lg">
                    <Squares2X2Icon class="h-5 w-5 text-zinc-800"/>
                </div>
                <div class="flex items-center justify-center w-10 h-8 rounded-[12px] cursor-pointer">
                    <MapIcon class="h-5 w-5 text-gray-600 stroke-2"/>
                </div>
              </div>
          </div>
                </div>

                <div class="w-full grid grid-cols-1  md:grid-cols-2 gap-3 md:gap-6 py-4 ">
                    <EventCard v-for="d, index in data" :key="index" :data="d"/>
                </div>
            </div>
        </div>
</div>
</template>
