<script setup></script>
<template>
    <div class="flex w-full min-h-screen bg-white py-8 ">
        <div class="overflow-y-auto flex flex-col w-full max-h-screen  p-2  bg-white">
            <h1 class="font-semibold text-zinc-800 text-4xl ml-4 ">Dashboard</h1>

            <div class="p-3 flex w-full min-h-full ">
                <div class="w-3/4 p-3 flex flex-col">
                    <div class="w-full flex my-4">
                        <div class="w-[calc(100%/3)] h-40 bg-blue-100 rounded-lg mx-4"></div>
                        <div class="w-[calc(100%/3)] h-40 bg-blue-100 rounded-lg mx-4"></div>
                        <div class="w-[calc(100%/3)] h-40 bg-blue-100 rounded-lg mx-4"></div>
                    </div>

                    <div class="w-full h-[800px] rounded-lg bg-sky-100"></div>
                </div>

                <div class="w-1/4 flex flex-col bg-slate-100 rounded-lg">

                </div>
            </div>
        </div>
    </div>
</template>