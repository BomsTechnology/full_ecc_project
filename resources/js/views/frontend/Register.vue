<script setup>
import { onMounted, reactive, ref } from 'vue';
import RegisterSucess from '@/components/message/RegisterSucess.vue';
import useAuth from '@/composables/useAuth';
import { EyeIcon, EyeSlashIcon } from "@heroicons/vue/24/solid"

const showPassword = ref(false);
const { errors, loading, createUser, isFinish, cleanErrors, } = useAuth();
const roles = [
    {id:'faithful', name:'Fidele'}, 
    {id:'prayerGroup', name:'Groupe de prière'}, 
    {id:'parish', name:'Paroisse'}, 
    {id:'diocese', name:'Diocèse'}, 
    {id:'seat', name:'Siège'} 
];
const user = reactive({
    username: '',
    lastname: '',
    email: '',
    password: '',
    parish_official: false,
    user_type: 'faithful',
})

const register = async () => {
    await createUser({...user});
}

</script>

<template>
    <div class=" w-full    bg-slate-100 relative">
        <div class="w-full h-full  bg-[url('/assets/abt.jpg')] bg-cover bg-center ">
        <div class="bg-black/50 w-full h-full min-h-screen  flex flex-col items-center justify-center px-4 py-20">
            <div class="text-center">
                <h1 class="font-bold lg:text-3xl text-2xl text-white">Rejoindre la communauté</h1>
                <h1 class="font-semibold lg:text-xl text-lg text-center tracking-tight text-white my-4">Inscrivez-vous et rejoignez la communauté chrétienne céleste.</h1>
            </div>

            <div class="flex flex-col items-center justify-center p-3 w-full max-w-xl bg-white shadow-md rounded-lg my-8">
                <Error :errors="errors" @cleanErrors="cleanErrors" />
                <RegisterSucess v-if="isFinish" />
                <form v-else class="flex flex-col w-full py-3 px-4" @submit.prevent="register()">
                    <div class="w-full">
                        <label class="">Type de profil</label>
                        <select v-model="user.user_type" class="form-select p-2 outline-none mt-1 border block border-gray-300 rounded-lg shadow-sm w-full">
                                <option v-for="role in roles"  :key="role.id" :value="role.id">{{ role.name }}</option>
                        </select>
                    </div>
                    <div class="w-full mt-3">
                        <label class="">
                            <span v-if="user.user_type == 'faithful'">Nom du Fidele</span>
                            <span v-else-if="user.user_type == 'parish'">Nom de la  Paroisse</span>
                            <span v-else-if="user.user_type == 'prayerGroup'">Nom du groupe de prière </span>
                            <span v-else-if="user.user_type == 'diocese'">Nom du diocèse </span>
                            <span v-else-if="user.user_type == 'seat'">Nom du Siège </span>
                        </label>
                        <input v-model="user.username" class="border-gray-300 mt-1 border form-input p-2 outline-none block rounded-lg shadow-sm w-full" type="text" placeholder="Ex: Marc"/>
                    </div>
                    <div class="w-full mt-3" v-if="user.user_type == 'faithful'">
                        <label class="">Prénom du Fidele</label>
                        <input v-model="user.lastname" class="border-gray-300 mt-1 border form-input p-2 outline-none block rounded-lg shadow-sm w-full" type="text" placeholder="Ex: Emmanuel"/>
                    </div>
                    <div class="w-full mt-3" v-if="user.user_type == 'faithful'">
                        <label class="">Chargé paroissial</label>
                        <div class=" flex mt-1 items-center space-x-2">
                            <input type="radio" class="form-radio border-gray-300" id="yes" v-model="user.parish_official" :value="true">
                            <label for="yes">Oui</label>
                            <input type="radio" class="form-radio border-gray-300" id="no" v-model="user.parish_official"  :value="false">
                            <label for="no">Non</label>
                        </div>
                    </div>
                    <div class="w-full mt-3">
                        <label class="">Adresse mail</label>
                        <input v-model="user.email" class="border-gray-300 border form-input p-2 mt-1 outline-none block rounded-lg shadow-sm w-full" type="email" placeholder="Ex: nom@xyz.com"/>
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
                    <button type="submit" :disabled="loading" class="p-2 mt-8 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 disabled:bg-blue-300 text-white font-semibold cursor-pointer flex items-center justify-center">
                        <Spin v-if="loading" />
                        <span v-else>S'inscrire</span>
                    </button>
                    <p class=" mt-4 text-sm text-center ">Déjà un compte ? <router-link :to="{name:'login'}" class="text-blue-500 hover:underline">Connectez vous</router-link> </p>
                </form>
            </div>
        </div>
    </div>
        
</div>
</template>