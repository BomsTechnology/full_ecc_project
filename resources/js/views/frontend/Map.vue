<script setup>
import { ref } from 'vue'
import { Switch } from '@headlessui/vue'
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronUpIcon } from '@heroicons/vue/20/solid'
import { Squares2X2Icon } from '@heroicons/vue/20/solid';
import { MapIcon} from '@heroicons/vue/24/outline';
import ParishCard from '@/components/ParishCard.vue';
const data = [
  {
  continent:'Afrique',
  parish: 'Nouvelle Jérusalem',
  ville: 'Bamako',
  pays: 'Mali',
  email: 'nouvellejeru@gmail.com',
  faithfull: '102 fidèles'
},
{
  continent:'Afrique',
  parish: 'Saint-Esprit',
  ville: 'Kye-Ossi',
  pays: 'Cameroun',
  email: '/',
  faithfull: '0 fidèles'
},
{
  continent:'Afrique',
  parish: 'Terre Promise',
  ville: 'Gohitafla',
  pays: 'Côte d’Ivoire',
  email: 'brice08481904@gmail.com',
  faithfull: '200 fidèles'
},
{
  continent:'Afrique',
  parish: 'New Jérusalem',
  ville: 'Enyengue',
  pays: 'Cameroun',
  email: '/',
  faithfull: '0 fidèles'
},
]
const enabled = ref(false)
</script>
<template>
    <div class="flex flex-col min-h-screen bg-white m-0 p-0">
        <div class="w-full h-auto flex justify-start">
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

            <div class="flex flex-col p-6 w-5/6 bg-white h-auto">
          <h1 class="font-bold text-3xl text-zinc-800 tracking-tight mb-4">Paroisses Du Monde</h1>
      
      <div class="w-full h-auto flex items-center justify-between mb-3 ">
        <div class="flex flex-col md:flex-row items-center justify-start w-1/2  md:my-4 py-2">
          <button class="flex items-center justify-center border-none md:mr-1  h-10 w-36 md:w-12 bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="text-zinc-400 w-6 h-6 mr-3 md:mr-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <p class="md:hidden font-semibold text-base text-white">Rechercher</p>
            </button>
                <input class="w-full md:w-4/5 border-gray-300 border-0 focus-visible:ring-transparent border-b form-input p-2 outline-none block" type="text" placeholder="Nom de la paroisse"/>
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

      <div class="w-full grid grid-cols-1  md:grid-cols-3 gap-3 md:gap-6 py-4 ">

        <ParishCard v-for="d,index in data" :key="index" :data="d"/>
        
      </div>
            </div>
        </div>

    </div>
</template>
