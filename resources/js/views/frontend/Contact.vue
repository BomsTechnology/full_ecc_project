<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HeadBanner from '@/components/HeadBanner.vue';
import { ref } from "vue";
const titre = ref("Contactez-nous !");
</script>
<template>
   <div class="w-full min-h-screen bg-white m-0 p-0">
    <HeadBanner titre="Contactez-nous !"/>

        <div class="flex items-center justify-center w-full h-auto my-20">


            <div class="relative flex flex-col items-center justify-center w-[calc(100%/4)] h-auto px-8 py-16 rounded-3xl overflow-clip bg-[url('../../assets/abt.jpg')] bg-cover bg-no-repeat">
                <div class="absolute inset-0 bg-red-600/90 w-full h-full"></div>
                <div class="relative flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>

                <h1 class="text-2xl font-semibold tracking-tight my-5 text-white">Notre localisation</h1>
                <p class="w-[92%] text-center text-lg  text-slate-100">684 West College St. Sun City, United States America.</p>
                </div>
            </div>


            <div class="relative flex flex-col items-center justify-center w-[calc(100%/4)] h-auto px-8 py-16 rounded-3xl overflow-clip bg-[url('../../assets/abt.jpg')] bg-cover bg-no-repeat mx-12">
                <div class="absolute inset-0 bg-zinc-900/80 w-full h-full"></div>
                <div class="relative flex flex-col items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>


                <h1 class="text-2xl font-semibold tracking-tight my-5 text-white">Numéros de téléphone</h1>
                <p class="w-[88%] text-center text-lg  text-slate-100">
                    (+237) 654 - 545 - 5418
                    (+237) 654 - 545 - 1235
                </p>
                </div>
            </div>

            <div class="relative flex flex-col items-center justify-center w-[calc(100%/4)] h-auto px-8 py-16 rounded-3xl overflow-clip bg-[url('../../assets/abt.jpg')] bg-cover bg-no-repeat">
                <div class="absolute inset-0 bg-zinc-900/80 w-full h-full"></div>
                <div class="relative flex flex-col items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>



                <h1 class="text-2xl font-semibold tracking-tight my-5 text-white">Adresses Email</h1>
                <p class="w-[88%] text-center text-lg  text-slate-100">
                    info@example.com
                    info@ecc.com5
                </p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-start w-[92%] h-auto mx-auto rounded-2xl overflow-clip shadow">
            <div class="w-[65%] h-full bg-white">
                <div class="w-full flex flex-col p-3">
                            <input type="text" placeholder="Nom" class="w-full border border-gray-200 rounded-md p-3"/>
                            <input type="mail" placeholder="Email" class="w-full border border-gray-200 rounded-md my-4 p-3"/>
                            <input type="phone" placeholder="Téléphone" class="w-full border border-gray-200 rounded-md p-3"/>
                            <textarea placeholder="Votre message" class="w-full border border-gray-200 rounded-md py-8 px-3 my-3"></textarea>

                            <input class="w-28 text-white font-bold p-3 cursor-pointer  bg-blue-500 rounded-md mt-2" type="submit" value="Envoyer"/>
                        </div>
            </div>
            <div class="w-[35%] h-[400px]">
                <img src="/assets/abt.jpg" class="w-full h-full object-cover"/>
            </div>
            
        </div>

        <div class="w-[92%] h-[480px] mx-auto bg-green-200 rounded-lg mt-10"></div>

        </div>

</template>