<script setup>
import { RouterLink, RouterView } from 'vue-router'
import { polyfillCountryFlagEmojis } from "country-flag-emoji-polyfill";

polyfillCountryFlagEmojis();
</script>

<template>
    <div class="flex flex-col min-h-screen bg-slate-100">
      <div class="w-full h-[60vh] bg-[url('../assets/praise.jpg')] bg-cover bg-no-repeat bg-right flex flex-col items-start justify-end">

          <div class="flex flex-col items-start w-[52%] h-full p-6 my-4">
          <h5 class="font-semibold text-blue-500 text-md">Liste de Cantiques</h5>
        <h1 class="font-bold text-slate-100 text-4xl my-4">Découvrez plus de 400 cantiques, louanges et adorations, dans des langues différentes.</h1>
        </div>


        <div class="w-full h-16 p-4 flex items-center bg-white shadow">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
          </svg>

          <input class="w-[88%] p-2 border-0 outline-none text-zinc-800 font-medium" type="text" placeholder="Chercher un cantique réligieux"/>
          <select class="border-0 outline-none p-3 w-[10%] font-semibold text-zinc-800">
            <option disabled="disabled" selected>Type</option>
            <option>Cantique</option>
            <option>Louange</option>
            <option>Adoration</option>
            <option>Tout</option>
          </select>
        </div>

      </div>

      <div class="w-full h-auto flex items-center my-6 p-4">
        <div class="flex flex-col items-center w-[108px] h-[54px] p-1 rounded-lg shadow bg-white">
          <h2 class="font-bold text-zinc-800 text-md">Langue</h2>
          <h5 class="font-semibold text-zinc-300 text-sm">Francais</h5>
        </div>

        <div class="flex flex-col items-center min-w-[108px] min-h-[54px] p-1.5 ml-6 rounded-lg shadow bg-white">
          <h2 class="font-bold text-zinc-800 text-md">Ordre Alphabétique</h2>
          <h5 class="font-semibold text-zinc-300 text-sm">A-Z</h5>
        </div>

        <div class="flex flex-col items-center min-w-[108px] min-h-[54px] p-1.5 ml-6 rounded-lg shadow bg-white">
          <input type="text" placeholder="Ref. livret Nigéria  &#127475;&#127468;" class="border-0 outline-none p-2 text-md font-semibold"/>
        </div>

        <div class="flex flex-col items-center min-w-[108px] min-h-[54px] p-1.5 ml-6 rounded-lg shadow bg-white">
          <input type="text" placeholder="Ref. livret Bénin &#127463;&#127471;" class="border-0 outline-none p-2 text-md font-semibold"/>
        </div>

      </div>

      <div class="max-w-screen-xl  flex items-center flex-wrap pt-10 pb-12 px-6">
        <h1 class="font-bold text-3xl text-black tracking-tight mb-16">Cantiques</h1>
        <div class="w-full grid grid-cols-2  sm:grid-cols-3 md:grid-cols-5 gap-6">

          <div class="cursor-pointer w-auto h-auto block">
            <div class="bg-slate-300 rounded-md w-[238px] h-[238px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">Glory to the lord</p>
            <p class="pt-1 text-grey-700">Pete Davidson</p>

          </div>

          <div class="cursor-pointer w-auto h-auto block">
            <div class="bg-slate-300 rounded-md w-[238px] h-[238px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">Glory to the lord</p>
            <p class="pt-1 text-grey-700">Pete Davidson</p>

          </div>

          <div class="cursor-pointer w-auto h-auto block">
            <div class="bg-slate-300 rounded-md w-[238px] h-[238px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">Glory to the lord</p>
            <p class="pt-1 text-grey-700">Pete Davidson</p>

          </div>

          <div class="cursor-pointer w-auto h-auto block">
            <div class="bg-slate-300 rounded-md w-[238px] h-[238px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">Glory to the lord</p>
            <p class="pt-1 text-grey-700">Pete Davidson</p>

          </div>
          
          <div class="cursor-pointer w-auto h-auto block">
            <div class="bg-slate-300 rounded-md w-[238px] h-[238px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">Glory to the lord</p>
            <p class="pt-1 text-grey-700">Pete Davidson</p>

          </div>

          <div class="cursor-pointer w-auto h-auto block">
            <div class="bg-slate-300 rounded-md w-[238px] h-[238px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">Glory to the lord</p>
            <p class="pt-1 text-grey-700">Pete Davidson</p>

          </div>

          <div class="cursor-pointer w-auto h-auto block">
            <div class="bg-slate-300 rounded-md w-[238px] h-[238px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">Glory to the lord</p>
            <p class="pt-1 text-grey-700">Pete Davidson</p>

          </div>

          <div class="cursor-pointer w-auto h-auto block">
            <div class="bg-slate-300 rounded-md w-[238px] h-[238px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">Glory to the lord</p>
            <p class="pt-1 text-grey-700">Pete Davidson</p>

          </div>

          <div class="cursor-pointer w-auto h-auto block">
            <div class="bg-slate-300 rounded-md w-[238px] h-[238px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">Glory to the lord</p>
            <p class="pt-1 text-grey-700">Pete Davidson</p>

          </div>
          
          <div class="cursor-pointer w-auto h-auto block">
            <div class="bg-slate-300 rounded-md w-[238px] h-[238px] shadow-sm"></div>
            <p class="pt-4 font-semibold text-lg">Glory to the lord</p>
            <p class="pt-1 text-grey-700">Pete Davidson</p>

          </div>
        </div>
      </div>
    </div>
  </template>