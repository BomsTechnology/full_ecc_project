<script setup >
import { RouterLink, RouterView } from 'vue-router'
</script>
<template>
    <div class="flex items-center lg:flex-row flex-col justify-start lg:w-[88%] w-[90%] h-auto my-12 mx-auto bg-white">
        <div class="flex flex-col lg:w-[64%] lg:h-[674px]  p-4">
            <div class="flex items-center justify-start">
                <div class="w-5 h-5 bg-blue-600 rounded-full mx-4"></div>
                <h1 class="font-bold text-2xl lg:text-3xl text-zinc-800 mr-6">Notre Blog</h1>
                <div class="lg:w-[60%] h-4 bg-gray-300"></div>
            </div>

            <div class="flex lg:flex-row flex-col w-full h-full my-8">
                <div class="lg:h-[580px] lg:w-[488px] bg-white">
                    <div class="relative flex items-center justify-center w-full h-full">
                <div class="h-[572px] lg:w-[480px] rounded-md overflow-clip">
                    <img src="/assets/mct.jpg" class="w-full h-full object-cover"/>
                </div>
                <div class=" absolute bottom-0 flex flex-col items-center justify-center w-[88%] md:min-h-[6%] p-6 rounded-t-md bg-white">
                    <div class="w-28 p-1.5 rounded-md bg-blue-600 text-white text-center font-semibold mt-[-40px] my-4">La Foi</div>
                    <h1 class="font-bold text-xl md:text-3xl text-zinc-800 text-center">Fragan expert Gan ce parfums aurait actrice.</h1>
                    <span class="flex my-4">
                        <h6 class="font-normal text-gray-500 text-base mr-4">Par John Leo</h6>
                        <h6 class="flex items-center font-normal text-gray-500 text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            28 mars 20211</h6>
                    </span>
                </div>
            </div>
                </div>

                <div class="flex flex-col lg:h-[580px] lg:w-[264px] bg-white p-4 ml-2">
                    <div class="flex flex-col lg:w-[254px] h-auto p-1.5 my-7">
            <div class="flex items-center justify-start w-full">
                <div class="w-6 h-2 bg-violet-800"></div>
                <h4 class="text-base text-violet-800 ml-3">Santé</h4>
            </div>
            <h2 class="my-1.5 font-semibold text-[21px] text-zinc-800">Paix du coeur et santé, le role du seigneur </h2>
            <span class="flex my-1">
                <h6 class="flex items-center font-normal text-gray-500 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            28 mars 20211</h6>
                    </span>
        </div>

        <div class="flex flex-col lg:w-[254px] h-auto p-1.5 my-7">
            <div class="flex items-center justify-start w-full">
                <div class="w-6 h-2 bg-orange-600"></div>
                <h4 class="text-base text-orange-600 ml-3">Bien-etre</h4>
            </div>
            <h2 class="my-1.5 font-semibold text-[20px] text-zinc-800">Les bienfaits des cantiques religieux</h2>
            <span class="flex my-1">
                <h6 class="flex items-center font-normal text-gray-500 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            28 mars 20211</h6>
                    </span>
        </div>

        <div class="flex flex-col lg:w-[254px] h-auto p-1.5 my-7 ">
            <div class="flex items-center justify-start w-full">
                <div class="w-6 h-2 bg-blue-600"></div>
                <h4 class="text-base text-blue-600 ml-3">Enfants</h4>
            </div>
            <h2 class="my-1.5 font-semibold text-[20px] text-zinc-800">Excursions des monuments symboliques</h2>
            <span class="flex my-1">
                <h6 class="flex items-center font-normal text-gray-500 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            28 mars 20211</h6>
                    </span>
        </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center lg:w-[34%] lg:h-[674px] lg:ml-5 px-4">
            <div class="flex flex-col  items-center justify-center lg:w-[96%] h-full p-1 lg:-mt-4">
                <div class="flex items-center justify-start w-full">
                <div class="w-5 h-5 bg-blue-600 rounded-full mx-4"></div>
                <h1 class="font-bold text-2xl lg:text-3xl text-zinc-800 mr-4">Social</h1>
                <div class="lg:w-[48%] h-4 bg-gray-300"></div>
            </div>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-2 w-full my-8">
                    <div class="flex w-[160px] h-auto p-2 rounded-md bg-blue-600">
                        <div class="w-8 h-8 rounded-full bg-blue-700"></div>
                        <div class="flex flex-col ml-2">
                            <h6 class="font-semibold text-white text-sm">12M</h6>
                            <h6 class="font-normal text-white text-xs">Fans</h6>
                        </div>
                    </div>

                    <div class="flex w-[160px] h-auto p-2 rounded-md bg-blue-400">
                        <div class="w-8 h-8 rounded-full bg-blue-500"></div>
                        <div class="flex flex-col ml-2">
                            <h6 class="font-semibold text-white text-sm">12M</h6>
                            <h6 class="font-normal text-white text-xs">Followers</h6>
                        </div>
                    </div>

                    <div class="flex w-[160px] h-auto p-2 rounded-md bg-red-700">
                        <div class="w-8 h-8 rounded-full bg-red-800"></div>
                        <div class="flex flex-col ml-2">
                            <h6 class="font-semibold text-white text-sm">13k</h6>
                            <h6 class="font-normal text-white text-xs">Followers</h6>
                        </div>
                    </div>

                    <div class="flex w-[160px] h-auto p-2 rounded-md bg-pink-500">
                        <div class="w-8 h-8 rounded-full bg-pink-600"></div>
                        <div class="flex flex-col ml-2">
                            <h6 class="font-semibold text-white text-sm">6m</h6>
                            <h6 class="font-normal text-white text-xs">Followers</h6>
                        </div>
                    </div>

                    <div class="flex w-[160px] h-auto p-2 rounded-md bg-violet-700">
                        <div class="w-8 h-8 rounded-full bg-violet-800"></div>
                        <div class="flex flex-col ml-2">
                            <h6 class="font-semibold text-white text-sm">46m</h6>
                            <h6 class="font-normal text-white text-xs">Followers</h6>
                        </div>
                    </div>

                    <div class="flex w-[160px] h-auto p-2 rounded-md bg-red-600">
                        <div class="w-8 h-8 rounded-full bg-red-800"></div>
                        <div class="flex flex-col ml-2">
                            <h6 class="font-semibold text-white text-sm">12k</h6>
                            <h6 class="font-normal text-white text-xs">Subscribers</h6>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center  w-[364px] h-[320px] bg-blue-500 text-white rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="my-4 w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <h2 class="font-medium text-white text-xl">Conatctez-nous</h2>
                <hr class="bg-white w-[10%] h-1 my-4"/>
                <h4 class="text-white text-md">684 West College St. Sun City. USA.</h4>
                <h4 class="text-white text-md my-4">+8(123) 985 789.</h4>
                <h4 class="text-white text-md">eccChurch@gmail.com</h4>

                <router-link to="/contacts"><button class="p-3 bg-white text-blue-500 rounded-sm my-4">Nous contacter</button></router-link>

            </div>
            </div>
        </div>
    </div>
</template>