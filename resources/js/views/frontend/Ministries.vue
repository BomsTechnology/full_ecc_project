<script setup>

import HeadBanner from '../../components/HeadBanner.vue';</script>
<template>
<div class="w-full min-h-screen bg-white m-0 p-0">
<HeadBanner titre="Ministeres"/>

        <div class="flex w-full h-auto">
            <div class="flex flex-col items-center justify-center w-[68%] min-h-[540px] bg-white p-3">
                <div class="w-[92%] h-[480px] overflow-clip rounded-lg my-10">
                <img src="../../assets/bc3.jpg" class="object-cover h-full w-full"/>
            </div>

            <p class="w-[92%] text-lg text-zinc-600 tracking-wide text-justify leading-wide my-10"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae provident blanditiis cupiditate iusto illum, fugiat ea modi sequi facilis quas eaque unde maxime officiis! Quasi perferendis aliquid natus quaerat! Distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cum obcaecati nulla corrupti expedita eos id, veritatis fuga error nostrum ipsam optio fugit deserunt omnis. Cum neque amet hic beatae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste laudantium cumque deserunt quaerat harum eius atque eum assumenda quo corporis! Laborum molestias magni impedit nesciunt enim mollitia maxime alias tenetur!</p>
            <p class="w-[92%] text-lg text-zinc-600 tracking-wide text-justify leading-wide"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae provident blanditiis cupiditate iusto illum, fugiat ea modi sequi facilis quas eaque unde maxime officiis! Quasi perferendis aliquid natus quaerat! Distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cum obcaecati nulla corrupti expedita eos id, veritatis fuga error nostrum ipsam optio fugit deserunt omnis. Cum neque amet hic beatae.</p>   

            <div class=" flex items-center justify-around w-[92%] my-12">

                <div class="w-[calc(92%/3)] h-[140px] overflow-clip rounded-lg">
                <img src="../../assets/bc3.jpg" class="object-cover h-full w-full"/>
            </div>

            <div class="w-[calc(92%/3)] h-[140px] overflow-clip rounded-lg">
                <img src="../../assets/bc3.jpg" class="object-cover h-full w-full"/>
            </div>

            <div class="w-[calc(92%/3)] h-[140px] overflow-clip rounded-lg">
                <img src="../../assets/bc3.jpg" class="object-cover h-full w-full"/>
            </div>
            </div>

            <div class=" flex w-[92%]">
                <a class="bg-blue-400 text-white flex items-center justify-center  font-bold w-24 p-3 rounded cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                    </svg>

                    Prev</a>
            </div>
            
        </div>
            <div class="flex flex-col items-center p-4 w-[32%] min-h-[540px] bg-white">

                <div class="flex items-center mt-10 justify-center w-[92%] border border-gray-200 rounded-md p-3">
                    <div class="flex items-center justify-start  w-[280px] my-2">
                    <input type="text" placeholder="Rechercher..." class="rounded-l-md p-3 border border-gray-200"/>
                    <button type="submit" value="S'inscrire" class="flex items-center justify-center bg-blue-500 w-[60px]  py-3 px-1 rounded-r-md text-white font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </button>

                </div>
                </div>

                <div class="flex flex-col items-center justify-center w-[92%] border border-gray-200 rounded-md p-3 my-8">
                    <div class="flex items-center justify-start my-2">
                        <div class="h-[7px] flex flex-col items-end">
                            <span class="w-8 h-[1.2px] bg-blue-600"></span>
                            <span class="mt-1 w-6 h-[1.2px] bg-blue-600"></span>
                        </div>

                        <h4 class="font-bold text-zinc-800 text-lg ml-3">Articles Populaires</h4>
                    </div>

                    <div class="flex flex-col">
                        <div class="flex items-center justify-center my-3 h-[68%]">
                    <div class="w-28 h-16 overflow-clip rounded-md mr-3">
                        <img src="../../assets/bc2.jpg" class="w-full h-full object-cover "/>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-semibold text-zinc-800 text-base w-[92%]">L'Esprit Du Seigneur Est, De La Nouvelle Vie.</h3>
                        <div class="flex mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-500 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <h4 class="mx-3 text-slate-400 text-sm">22 octobre 2021</h4>
                        
                        </div>
                    </div>
                        </div>

                        <div class="flex items-center justify-center my-3 h-[68%]">
                    <div class="w-28 h-16 overflow-clip rounded-md mr-3">
                        <img src="../../assets/bc1.jpg" class="w-full h-full object-cover "/>
                    </div>
                    <div class="flex flex-col ">
                        <h3 class="font-semibold text-zinc-800 text-base w-[92%]">Donner en retour - Centres de formation en Ouganda.</h3>
                        <div class="flex mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-500 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h4 class="mx-3 text-slate-400 text-sm">22 octobre 2021</h4>
                        
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center my-3 h-[68%]">
                    <div class="w-28 h-16 overflow-clip rounded-md mr-3">
                        <img src="../../assets/bc1.jpg" class="w-full h-full object-cover "/>
                    </div>
                    <div class="flex flex-col ">
                        <h3 class="font-semibold text-zinc-800 text-base w-[92%]">Donner en retour - Centres de formation en Ouganda.</h3>
                        <div class="flex mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-500 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h4 class="mx-3 text-slate-400 text-sm">22 octobre 2021</h4>
                        
                        </div>
                    </div>
                </div>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center w-[92%] border border-gray-200 rounded-md p-3 my-8">
                    <div class="flex items-center justify-start my-2">
                        <div class="h-[7px] flex flex-col items-end">
                            <span class="w-8 h-[1.2px] bg-blue-600"></span>
                            <span class="mt-1 w-6 h-[1.2px] bg-blue-600"></span>
                        </div>

                        <h4 class="font-bold text-zinc-800 text-lg ml-3">Nuage de mots-clés</h4>
                    </div>

                    <div class="flex flex-col">
                    </div>
                </div>


                <div class="flex flex-col items-center justify-center w-[92%] border border-gray-200 rounded-md p-3 my-8">
                    <div class="flex items-center justify-start my-2">
                        <div class="h-[7px] flex flex-col items-end">
                            <span class="w-8 h-[1.2px] bg-blue-600"></span>
                            <span class="mt-1 w-6 h-[1.2px] bg-blue-600"></span>
                        </div>

                        <h4 class="font-bold text-zinc-800 text-lg ml-3">Articles Récents</h4>
                    </div>

                    <div class="flex flex-col">
                        <div class="flex items-center justify-center my-3 h-[68%]">
                    <div class="w-28 h-16 overflow-clip rounded-md mr-3">
                        <img src="../../assets/bc2.jpg" class="w-full h-full object-cover "/>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-semibold text-zinc-800 text-base w-[92%]">L'Esprit Du Seigneur Est, De La Nouvelle Vie.</h3>
                        <div class="flex mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="text-yellow-500 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>

                        <h4 class="mx-3 text-slate-400 text-sm">22 octobre 2021</h4>
                        
                        </div>
                    </div>
                        </div>

                        <div class="flex items-center justify-center my-3 h-[68%]">
                    <div class="w-28 h-16 overflow-clip rounded-md mr-3">
                        <img src="../../assets/bc1.jpg" class="w-full h-full object-cover "/>
                    </div>
                    <div class="flex flex-col ">
                        <h3 class="font-semibold text-zinc-800 text-base w-[92%]">Donner en retour - Centres de formation en Ouganda.</h3>
                        <div class="flex mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="text-yellow-500 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <h4 class="mx-3 text-slate-400 text-sm">22 octobre 2021</h4>
                        
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center my-3 h-[68%]">
                    <div class="w-28 h-16 overflow-clip rounded-md mr-3">
                        <img src="../../assets/bc1.jpg" class="w-full h-full object-cover "/>
                    </div>
                    <div class="flex flex-col ">
                        <h3 class="font-semibold text-zinc-800 text-base w-[92%]">Donner en retour - Centres de formation en Ouganda.</h3>
                        <div class="flex mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="text-yellow-500 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <h4 class="mx-3 text-slate-400 text-sm">22 octobre 2021</h4>
                        
                        </div>
                    </div>
                </div>
                    </div>
                </div>

            </div>
        </div>
</div>
</template>