<script setup>
import { RouterLink, RouterView } from 'vue-router'
import { onMounted, reactive, ref } from 'vue';
import useRoles from '@/composables/useRoles';
import useAuth from '@/composables/useAuth';
import { EyeIcon, EyeSlashIcon } from "@heroicons/vue/24/solid"

const showPassword = ref(false);
const { getRoles, roles, } = useRoles();
const { errors, loading } = useAuth();
const user = reactive({
    username: 'Sigha',
    lastname: 'Marc',
    email: 'marcsigha@gmail.com',
    password: '',
    parishOfficial: 1,
    role: 1
})

onMounted(async () => {
    await getRoles();
});

</script>
<template>
    <div class="flex items-center justify-center w-full min-h-screen p-3 bg-white">
        <div class="flex flex-col items-center justify-center w-1/2 p-4 h-auto bg-slate-100 rounded-lg shadow">
            <div class="relative w-36 h-36 rounded-full overflow-clip shadow">
                    <img src="../../assets/bdt.jpg" class="relative w-full h-full object-cover"/>
                    <div class="absolute w-6 h-6 rounded-full bg-gray-400"></div>
                </div>

                <form class="flex flex-col w-full py-3 px-4">
                    
                    <div class="w-full mt-3">
                        <label class="">
                            <span v-if="user.role == 1">Nom du Fidele</span>
                            <span v-else-if="user.role == 5">Nom de la  Paroisse</span>
                            <span v-else-if="user.role == 4">Nom du groupe de prière </span>
                            <span v-else-if="user.role == 6">Nom du diocèse </span>
                            <span v-else-if="user.role == 7">Nom du Siège </span>
                        </label>
                        <input v-model="user.username" class="border-gray-300 mt-1 border form-input p-2 outline-none block rounded-lg shadow-sm w-full" type="text" placeholder="Ex: Marc"/>
                    </div>
                    <div class="w-full mt-3" v-if="user.role == 1">
                        <label class="">Prénom du Fidele</label>
                        <input v-model="user.lastname" class="border-gray-300 mt-1 border form-input p-2 outline-none block rounded-lg shadow-sm w-full" type="text" placeholder="Ex: Emmanuel"/>
                    </div>
                    <div class="w-full mt-3">
                        <label class="">Type de profil</label>
                        <select v-model="user.role" class="form-select p-2 outline-none mt-1 border block border-gray-300 rounded-lg shadow-sm w-full">
                            <template v-for="role in roles"  :key="role.id">
                                <option v-if="role.name != 'Public' && role.name != 'Admin'" :value="role.id">{{ role.name }}</option>
                            </template>
                        </select>
                    </div>
                    <div class="w-full mt-3" v-if="user.role == 1">
                        <label class="">Chargé paroissial</label>
                        <div class=" flex mt-1 items-center space-x-2">
                            <input type="radio" class="form-radio border-gray-300" id="yes" v-model="user.parishOfficial" :value="{number: 1}">
                            <label for="yes">Oui</label>
                            <input type="radio" class="form-radio border-gray-300" id="no" v-model="user.parishOfficial"  :value="{number: false}">
                            <label for="no">Non</label>
                        </div>
                    </div>
                    <div class="w-full mt-3">
                        <label class="">Adresse mail</label>
                        <input v-model="user.email" class="border-gray-300 border form-input p-2 mt-1 outline-none block rounded-lg shadow-sm w-full" type="text" placeholder="Ex: nom@xyz.com"/>
                    </div>
                    <input class="p-2 mt-8 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold cursor-pointer" type="submit" value="Modifier"/>
                </form>
        </div>
    </div>
</template>