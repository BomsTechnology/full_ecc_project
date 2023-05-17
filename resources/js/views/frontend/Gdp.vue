<script setup>
import CarteFidele from "@/components/CarteFidele.vue"
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronUpIcon } from '@heroicons/vue/20/solid'
const data = [
    {
        name: 'Agoons',
        surname: 'Kenemi',
        email: 'kenagoons@gmail.com',
        country: 'Cameroun',
        city: 'Yaoundé',
        sex: 'Homme',
        ministry: 'Prédicateur'
    },
    {
        name: 'Asante',
        surname: 'Kwaku',
        email: 'asantek@gmail.com',
        country: 'Nigéria',
        city: 'Lagos',
        sex: 'Homme',
        ministry: 'Chorale'
    },
    {
        name: 'Ngwa',
        surname: 'Cécile',
        email: 'cécilengwa@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Femme',
        ministry: 'Prédicateur'
    },
    {
        name: 'Fomen',
        surname: 'Boris',
        email: 'Borisfo@gmail.com',
        country: 'Cameroun',
        city: 'Bafoussam',
        sex: 'Homme',
        ministry: 'Chorale'
    },
    {
        name: 'Afé',
        surname: 'Maxime',
        email: 'maxafé@gmail.com',
        country: 'Bénin',
        city: 'Cotonou',
        sex: 'Homme',
        ministry: 'Prédicateur'
    },
    {
        name: 'Lefevre',
        surname: 'Pierre',
        email: 'lefrevepi32@gmail.com',
        country: 'France',
        city: 'Roissy',
        sex: 'Homme',
        ministry: 'Chorale'
    },
    {
        name: 'Etogo',
        surname: 'Solange',
        email: 'solangeetogo@gmail.com',
        country: 'Cameroun',
        city: 'Yaoundé',
        sex: 'Femme',
        ministry: 'Prédicateur'
    },
    {
        name: 'Obafémi',
        surname: 'Wayatt',
        email: 'obafway24@gmail.com',
        country: 'Nigéria',
        city: 'Abuja',
        sex: 'Homme',
        ministry: 'Chorale'
    },
    {
        name: 'Picard',
        surname: 'Jeanne',
        email: 'picardjeanne@gmail.com',
        country: 'France',
        city: 'Paris',
        sex: 'Femme',
        ministry: 'Prédicateur'
    },
    {
        name: 'Elame',
        surname: 'Alfred',
        email: 'Elameal@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Chorale'
    },

]
</script>
<template>
    <div class="w-full  min-h-screen bg-white overflow-x-hidden">
        <div class="w-full h-auto py-16 flex flex-col items-center justify-center">
            <h1 class="font-semibold text-2xl md:text-4xl text-zinc-800 ">Découvrez nos Groupes de prières </h1>
            <p class="text-sm md:text-lg text-zinc-600 my-4 text-center w-2/3 md:w-1/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. accusantium recusandae deserunt.</p>
            
            <div class="flex flex-col md:flex-row items-center justify-center w-full md:my-6 p-3">
                <input class="w-full md:w-1/3 border-gray-300 mt-1 border form-input p-2 outline-none block rounded-lg shadow-sm" type="text" placeholder="Nom du Groupe"/>
                <button class="flex items-center justify-center border-none mt-4 md:mt-1 h-10 w-36 md:w-12 md:ml-3 bg-gradient-to-r from-blue-600 to-blue-500 rounded-xl shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="text-white w-6 h-6 mr-3 md:mr-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <p class="md:hidden font-semibold text-base text-white">Rechercher</p>
                </button>

            </div>
        </div>

        <div class="md:hidden flex items-center justify-center bg-white shadow rounded-2xl w-28 h-10 py-1.5 px-4 ml-4  cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                    </svg>
                    <p class="font-semibold text-zinc-800 text-lg">Filtres</p>
            </div>

        <div class="max-w-screen-xl  mx-auto  flex items-start justify-center  pt-3 pb-12 px-4">

        <div class="hidden md:visible w-1/5 h-auto mr-5 md:flex flex-col">
            <div class="flex items-center justify-center mb-4 bg-white shadow rounded-2xl min-w-28 h-10 py-1.5 px-4  cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                    </svg>
                    <p class="font-semibold text-zinc-800 text-lg">Filtres</p>
            </div>

            <Disclosure v-slot="{ open }">
                <DisclosureButton
                class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75"
                >
                <span>Continent</span>
                <ChevronUpIcon
                    :class="open ? 'rotate-180 transform' : ''"
                    class="h-5 w-5 text-blue-800"
                />
                </DisclosureButton>
                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
                    <div class="flex items-center">
                                    <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                                    <label for="yes">Afrique</label>
                                </div>
                
                                <div class="flex items-center">
                                        <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                                    <label for="no">Europe</label>
                                </div>
                </DisclosurePanel>
            </Disclosure>

            <Disclosure v-slot="{ open }" as="div" class="mt-2">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75"
        >
          <span>Pays d'implantation</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-blue-800"
          />
        </DisclosureButton>
        <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
            <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Cameroun</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Bénin</label>
                        </div>

                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Nigéria</label>
                        </div>

                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">France</label>
                        </div>
        </DisclosurePanel>
            </Disclosure>

            <Disclosure v-slot="{ open }" as="div" class="mt-2">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75"
        >
          <span>Ville</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-blue-800"
          />
        </DisclosureButton>
        <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
            <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Douala</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Cotonou</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Abuja</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Roissy</label>
                        </div>
        </DisclosurePanel>
            </Disclosure>

            <Disclosure v-slot="{ open }" as="div" class="mt-2">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75"
        >
          <span>Année de création</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-blue-800"
          />
        </DisclosureButton>
        <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
            <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">2010</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">2008</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">2006</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">2000</label>
                        </div>
        </DisclosurePanel>
            </Disclosure>

            <Disclosure v-slot="{ open }" as="div" class="mt-2">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75"
        >
          <span>Dimension du lieu de prière</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-blue-800"
          />
        </DisclosureButton>
        <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
            <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">0 - 50 m2</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">50 - 100m2</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">100 - 200 m2</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox"  class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">> 200 m2</label>
                        </div>
        </DisclosurePanel>
            </Disclosure>

            <Disclosure v-slot="{ open }" as="div" class="mt-2">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75"
        >
          <span>Ordre de culte</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-blue-800"
          />
        </DisclosureButton>
        <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
            <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Imeko</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Porto-Novo</label>
                        </div>
        </DisclosurePanel>
            </Disclosure>
            
            <Disclosure v-slot="{ open }" as="div" class="mt-2">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75"
        >
          <span>Nombre de fidèles</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-blue-800"
          />
        </DisclosureButton>
        <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
            <div class="flex items-center">
                            <input type="radio" class="form-radio border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes"> - 95</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="radio" class="form-radio border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no"> 95 + </label>
                            </div>
        </DisclosurePanel>
            </Disclosure>

            <Disclosure v-slot="{ open }" as="div" class="mt-2">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-white shadow px-4 py-2 text-left text-sm font-medium text-blue-900 hover:bg-blue-50 focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-75"
        >
          <span>Propose cours biblique</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-blue-800"
          />
        </DisclosureButton>
        <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
            <div class="flex items-center">
                            <input type="radio" class="form-radio border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Oui</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="radio" class="form-radio border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Non</label>
                            </div>
        </DisclosurePanel>
            </Disclosure>
        </div>
        
        <div class="w-full grid grid-cols-1  md:grid-cols-3 gap-3 md:gap-6">

             
            <CarteFidele v-for="d,index in data" :key="index" :data="d" />

        </div>
        </div>
    </div>
</template>