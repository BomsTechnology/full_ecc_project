<script setup>
import { reactive, ref, onMounted } from "vue";
import useAuth from "@/composables/useAuth";
import { useAuthenticateStore } from "@/stores/authenticate";
import { EyeIcon, EyeSlashIcon } from "@heroicons/vue/24/solid"
import { useRouter, useRoute } from "vue-router";

const showPassword = ref(false);
const router = useRouter();
const route = useRoute();
const auth = useAuthenticateStore();
const { errors, loading, loginAdmin, isFinish, cleanErrors, } = useAuth();

const user = reactive({
    identifier: "",
    password: "",
});

onMounted(async () => {
    if (auth.user != null && auth.tokenUser != null) {
        router.replace({ name: "admin.dashboard" });
    }
    console.log(auth.tokenUser );
    if (route.query.errors) {
        errors.value.push("Your not a administrator");
    }
});

const login = async () => {
    await loginAdmin({...user});
    if(errors.value.length == 0){
        location.href = '/admin'
    }
}
</script>
<template>
    <div class=" w-full   bg-slate-100 relative">
        <div class="w-full h-full   bg-cover bg-center ">

            <div class="bg-black/50 z-10 w-full min-h-screen  flex flex-col items-center justify-center px-4 py-20">
        <div class="text-center">
            <h1 class="font-bold lg:text-3xl text-2xl text-white">ECC Church Admin Panel</h1>
            <h3 class="flex flex-col items-center text-white text-base my-1">Entrez vos identifiants pour acceder au panneau d'administration</h3>
        </div>

    <div class="flex flex-col items-center justify-center p-3 w-full max-w-xl bg-white shadow-md rounded-lg my-8">
        <Error :errors="errors" @cleanErrors="cleanErrors" />
        <form class="flex flex-col w-full py-3 px-4" @submit.prevent="login()">
            <div class="w-full">
                <label class="">Adresse mail</label>
                <input v-model="user.identifier" class="border-gray-300 border form-input p-2 mt-1 outline-none block rounded-lg shadow-sm w-full" type="email" placeholder="Ex: nom@xyz.com"/>
            </div>
            <div class="w-full mt-3">
                <label class="">Mot de passe</label>
                <div class="relative mt-1">
                    <input v-model="user.password" class="border-gray-300 border form-input py-2 pr-10 outline-none block rounded-lg shadow-sm w-full" :type="showPassword ? 'text' :'password'" placeholder="8+ caracteres"/>
                    <span class=" absolute top-3 right-4 cursor-pointer" @click="showPassword = !showPassword">
                        <EyeIcon v-if="!showPassword" class="w-5 h-5 text-gray-500" />
                        <EyeSlashIcon v-else class="w-5 h-5 text-gray-500" />
                    </span>
                </div>
            </div>
            <div class="flex w-full justify-between my-5">
                <a href="#" class="text-blue-600">Mot de passe oublié ?</a>
            </div>
            <button type="submit" :disabled="loading" class="p-2 mt-2 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 disabled:bg-blue-300 text-white font-semibold cursor-pointer flex items-center justify-center">
                <Spin v-if="loading" />
                <span v-else>Se Connecter</span>
            </button>
        </form>
    </div>
    </div>
        </div>
        
</div>
</template>