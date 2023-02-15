<script setup>
import { HomeIcon } from "@heroicons/vue/24/solid"
</script>

<template>
    <div id="alert-additional-content-3" class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50" role="alert">
        <div class="flex items-center">
            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <h3 class="text-lg font-medium">Compte crée avec succès</h3>
        </div>
        <div class="mt-2 mb-4 text-sm">
            Félicitation votre compte à été crée avec succès, veillez patienter l'activation de votre compte par nos administrateurs. Merci :) !!
        </div>
        <div class="flex">
            <router-link to="/" class="text-white bg-green-800 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center">
                <HomeIcon class="-ml-0.5 mr-2 h-4 w-4" />
                Retour à la page d'accueil
            </router-link>
            
        </div>
    </div>
</template>
