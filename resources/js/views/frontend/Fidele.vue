<script setup>
import CarteFidele from "@/components/CarteFidele.vue"

const data = [
    {
        name: 'Sigha',
        surname: 'Marc',
        email: 'marcsigha@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Prédicateur'
    },
    {
        name: 'Mbakop',
        surname: 'Alfred',
        email: 'mbakopal@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Chorale'
    },
    {
        name: 'Sigha',
        surname: 'Marc',
        email: 'marcsigha@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Prédicateur'
    },
    {
        name: 'Mbakop',
        surname: 'Alfred',
        email: 'mbakopal@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Chorale'
    },
    {
        name: 'Sigha',
        surname: 'Marc',
        email: 'marcsigha@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Prédicateur'
    },
    {
        name: 'Mbakop',
        surname: 'Alfred',
        email: 'mbakopal@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Chorale'
    },
    {
        name: 'Sigha',
        surname: 'Marc',
        email: 'marcsigha@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Prédicateur'
    },
    {
        name: 'Mbakop',
        surname: 'Alfred',
        email: 'mbakopal@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Chorale'
    },
    {
        name: 'Sigha',
        surname: 'Marc',
        email: 'marcsigha@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Prédicateur'
    },
    {
        name: 'Mbakop',
        surname: 'Alfred',
        email: 'mbakopal@gmail.com',
        country: 'Cameroun',
        city: 'Douala',
        sex: 'Homme',
        ministry: 'Chorale'
    },

]
</script>
<template>
    <div class="w-full  min-h-screen bg-white overflow-x-hidden">
        <div class="w-full h-auto py-16 flex flex-col items-center justify-center">
            <h1 class="font-semibold text-2xl md:text-4xl text-zinc-800 ">Découvrez nos Fidèles </h1>
            <p class="text-sm md:text-lg text-zinc-600 my-4 text-center w-2/3 md:w-1/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. accusantium recusandae deserunt.</p>
            
            <div class="flex flex-col md:flex-row items-center justify-center w-full md:my-6 p-3">
                <input class="w-full md:w-1/3 border-gray-300 mt-1 border form-input p-2 outline-none block rounded-lg shadow-sm" type="text" placeholder="Nom du fidèle"/>
                <button class="flex items-center justify-center border-none mt-4 md:mt-1 h-10 w-36 md:w-12 md:ml-3 bg-gradient-to-r from-blue-600 to-blue-500 rounded-xl shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="text-white w-6 h-6 mr-3 md:mr-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <p class="md:hidden font-semibold text-base text-white">Rechercher</p>
                </button>

            </div>
        </div>

        <div class="md:hidden flex items-center justify-center bg-white shadow rounded-2xl w-28 h-10 py-1.5 px-4 ml-4  cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                    </svg>
                    <p class="font-semibold text-zinc-800 text-lg">Filtres</p>
            </div>
        <div class="max-w-screen-xl  mx-auto  flex items-start justify-center  pt-3 pb-12 px-4">

        <div class="hidden md:visible w-80 h-auto mr-5 md:flex flex-col">
            <div class="flex items-center justify-center bg-white shadow rounded-2xl min-w-28 h-10 py-1.5 px-4  cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                    </svg>
                    <p class="font-semibold text-zinc-800 text-lg">Filtres</p>
            </div>

            <div class="w-full h-auto bg-white shadow rounded-lg p-4 my-2">
                <h1 class="font-semibold text-zinc-800 text-xl mb-3">Continent</h1>
                <div class="flex flex-col">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Afrique</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Europe</label>
                            </div>
                        </div>
            </div>
            

            <div class="w-full h-auto  bg-white shadow rounded-lg p-4 my-2">
                <h1 class="font-semibold text-zinc-800 text-xl mb-3">Pays de résidence</h1>
                <div class="flex flex-col max-h-48 overflow-y-auto pl-1">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Cameroun</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Bénin</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Nigéria</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">France</label>
                        </div>

                        </div>
            </div>

            <div class="w-full h-auto  bg-white shadow rounded-lg p-4 my-2">
                <h1 class="font-semibold text-zinc-800 text-xl mb-3">Ville</h1>
                <div class="flex flex-col max-h-48 overflow-y-auto pl-1">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Douala</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Cotonou</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Abuja</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Roissy</label>
                        </div>

                        </div>
            </div>

            <div class="w-full h-auto  bg-white shadow rounded-lg p-4 my-2">
                <h1 class="font-semibold text-zinc-800 text-xl mb-3">Grade ECC</h1>
                <div class="flex flex-col max-h-48 overflow-y-auto pl-1">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Cameroun</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Bénin</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Nigéria</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">France</label>
                        </div>

                        </div>
            </div>

            <div class="w-full h-auto  bg-white shadow rounded-lg p-4 my-2">
                <h1 class="font-semibold text-zinc-800 text-xl mb-3">Fonction ECC</h1>
                <div class="flex flex-col max-h-48 overflow-y-auto pl-1">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Pasteur</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Membre du Trustee</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Chef de Diocèse</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Chargé paroissial</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Président du Comité</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Maitre de choeur</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Chef des visonnaires</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Maman de Paroisse</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Fidele</label>
                        </div>
                        </div>
            </div>

            <div class="w-full h-auto  bg-white shadow rounded-lg p-4 my-2">
                <h1 class="font-semibold text-zinc-800 text-xl mb-3">Ministere</h1>
                <div class="flex flex-col max-h-48 overflow-y-auto pl-1">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Artiste Chantre</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Chorale</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Cours biblique</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Chargé paroissial</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Déchaussé</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Evangelisation</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Fidele</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Formateur liturgique</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Prophete</label>
                        </div>

                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Sacristain</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Sécrétariat</label>
                        </div>
                        <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Visonnaire</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Autre</label>
                        </div>
                        </div>
            </div>

            <div class="w-full h-auto bg-white shadow rounded-lg p-4 my-2">
                <h1 class="font-semibold text-zinc-800 text-xl mb-3">Dispenser cours bibliques</h1>
                <div class="flex flex-col">
                        <div class="flex items-center">
                            <input type="radio" class="form-radio border-gray-300 mr-2" id="yes"  :value="true">
                            <label for="yes">Oui</label>
                        </div>
        
                        <div class="flex items-center">
                                <input type="radio" class="form-radio border-gray-300 mr-2" id="no"   :value="false">
                            <label for="no">Non</label>
                            </div>
                        </div>
            </div>
        </div>
        <div class="w-full grid grid-cols-1  md:grid-cols-3 gap-3 md:gap-6">

             
            <CarteFidele v-for="d,index in data" :key="index" :data="d" />

        </div>
        </div>
    </div>
</template>