<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
     <main class="flex h-full">
        <router-view name="sidebar"></router-view>

        <div class="w-full">
            <router-view name="header"></router-view>

            <router-view></router-view>

            <router-view name="footer"></router-view>
        </div>
    </main>
</template>

