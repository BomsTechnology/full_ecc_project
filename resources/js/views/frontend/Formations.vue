<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronUpIcon } from '@heroicons/vue/20/solid'
import { AcademicCapIcon,DocumentCheckIcon } from '@heroicons/vue/24/outline';
import JobCard from '@/components/JobCard.vue';
const data =[
    {
    company: "SABC",
    post: "Assistant comptable",
    type: "Plein temps ou Contrat",
    salary: "Salaire négociable",
    exp: "3 ans d'expérience",
    publishedAt: "12 fév. 2023",
    location: "Douala, Cameroun"
},
{
    company: "Cible RH",
    post: "Gestionnaire client",
    type: "Plein temps",
    salary: "Salaire négociable",
    exp: "aucune expérience",
    publishedAt: "23 fév. 2023",
    location: "Douala, Cameroun"
},
{
    company: "CRTV",
    post: "Rédacteur WEB",
    type: "Plein temps ou Contrat",
    salary: "Salaire négociable",
    exp: "5 ans d'expérience",
    publishedAt: "6 fév. 2023",
    location: "Remote / Yaoundé, Cameroun"
},
{
    company: "Gras savoye",
    post: "Assistant juridique",
    type: "Contrat",
    salary: "Salaire négociable",
    exp: "aucune expérience",
    publishedAt: "23 jan. 2023",
    location: "Douala, Cameroun"
},
{
    company: "Balafon médias",
    post: "Cadreur pro",
    type: "Plein temps ou Contrat",
    salary: "Salaire négociable",
    exp: "2 ans expérience",
    publishedAt: "4 jan. 2023",
    location: "Douala, Cameroun"
},
]
</script>
<template>
    <div class="w-full min-h-screen bg-white">
                <!-- Hero section -->
                <div class="relative overflow-clip flex flex-col items-center justify-center w-full h-80 bg-gradient-to-tl from-blue-500 via-blue-300 to-blue-500 p-12">
            <AcademicCapIcon class="absolute -left-4 rotate-6 w-72 h-72 text-blue-800/50"/>
            <DocumentCheckIcon class="absolute -right-4 rotate-12 w-72 h-72 text-blue-800/50"/>
            <div class="flex ">
            <h5 class="font-semibold text-blue-800 text-xl ml-2">Formations</h5>
        </div>
        <h1 class="font-bold text-zinc-800 text-4xl my-4">Acquerez de nouvelles compétences.</h1>

        <div class="flex items-center justify-center w-full h-auto text-center  mt-2">
            
            <div class="flex items-center w-1/2 h-16 p-4 bg-white rounded-full shadow">
            <AcademicCapIcon class="w-8 h-8 text-zinc-400 mx-3"/>
            <input class="w-80 border-0   focus:ring-0" type="text" placeholder="Entrez un mot clé ex: Estheticienne"/>
        </div>
        <button type="submit" class="flex items-center shadow justify-center w-16 h-16 rounded-full bg-gradient-to-tr from-blue-600 via-blue-500 to-blue-600 ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="text-white w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>

        </button>
        </div>
        </div>
    </div >
</template>