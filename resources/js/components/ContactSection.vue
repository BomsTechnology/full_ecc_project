<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>
<template>
    <div class="lg:w-[98%] h-auto md:h-[60vh] flex flex-col md:flex-row items-center justify-start bg-slate-700 mx-auto my-8 p-16 text-center">
            <div class="flex flex-col items-center justify-center  w-[364px] h-[308px] bg-blue-500 text-white rounded-md mt-[-156px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="my-4 w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <h2 class="font-medium text-white text-xl">Conatctez-nous</h2>
                <hr class="bg-white w-[10%] h-1 my-4"/>
                <h4 class="text-white text-md">684 West College St. Sun City. USA.</h4>
                <h4 class="text-white text-md my-4">+8(123) 985 789.</h4>
                <h4 class="text-white text-md">eccChurch@gmail.com</h4>

            </div>

            <div class="flex flex-col items-start justify-start mt-8 md:p-6 md:ml-6">
                <h3 class="font-bold text-blue-500 text-sm">ENTRER EN CONTACT</h3>
            <h1 class="font-bold my-1 text-white text-4xl">N'hésitez pas ! Contactez-nous</h1>
            <hr class="bg-yellow-500 w-[12%] h-1 my-3 outline-none"/>
            <p class="my-4 text-left font-normal text-base text-slate-50">Nous vous accueillons avec la grande joie de l'église ECC, Nous sommes ici pour partager la grande nouvelle de Jésus-Christ à tous ceux qui écouteront.</p>
            <router-link to="/contacts"><button class="p-3 bg-blue-500 text-white rounded-sm my-3">Nous contacter</button></router-link>
            </div>
    </div>
</template>