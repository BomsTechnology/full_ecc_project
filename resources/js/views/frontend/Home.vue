<script setup>
import BannerCards from '../../components/BannerCards.vue';
import EventCards from '../../components/EventCards.vue';
import AboutUs from '../../components/AboutUs.vue'
import DonateSection from '../../components/DonateSection.vue';
import Ministries from '../../components/Ministries.vue';
import BlogSection from '../../components/BlogSection.vue';

</script>

<template>
  <div class="flex flex-col min-h-screen bg-white m-0 p-0 overflow-hidden">
    <BannerCards/> 
    <EventCards/>
    <AboutUs/>
    <DonateSection/>
    <Ministries/>
    <BlogSection/>
  </div>
</template>

