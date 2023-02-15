<template>
    <DialogsWrapper />
   <div class="flex w-full min-h-screen bg-white p-8 ">
        <div class="overflow-y-auto flex flex-col w-full max-h-screen  p-2  bg-white">
            <h1 class="text-3xl font-bold">Users</h1>
        <div
            class="mt-4 flex items-center justify-end border-b border-gray-200 px-2 py-3"
        >
            <router-link
                :to="{ name: 'admin.user.index' }"
                class="flex items-end space-x-2 rounded bg-adna-green px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-secondary-color focus:outline-none focus:ring-4 focus:ring-blue-300"
            >
                <UserPlusIcon class="h-5 w-5" />
                <span>Add User</span>
            </router-link>
        </div>
        <div class="w-full h-full bg-white  sm:rounded-lg">
            <div class="items-center justify-between p-4 lg:flex">
                <div
                    class="mt-1 items-end space-y-1 lg:flex lg:space-y-0 lg:space-x-2"
                >
                    <div class="">
                        <label
                            for="searchField"
                            class="block text-xs font-medium text-gray-700"
                            >Search Field</label
                        >
                        <select
                            name="searchField"
                            id="searchField"
                            class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        >
                            <option value="username">Username</option>
                            <option value="email">Email</option>
                        </select>
                    </div>
                    <div class="relative">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                        >
                            <MagnifyingGlassCircleIcon
                                class="h-5 w-5 text-gray-500"
                            />
                        </div>
                        <input
                            type="search"
                            id="table-search"
                            class="block w-full rounded border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 lg:w-80"
                            placeholder="Search for items"
                        />
                    </div>
                </div>
            </div>
            <Error :errors="errors" @cleanErrors="cleanErrors" />
             <EasyDataTable
                v-model:items-selected="selectArray"
                :headers="headers"
                :items="users"
                alternating
                :search-field="searchField"
                :search-value="searchValue"
                show-index
                buttons-pagination
                :loading="loading"
            >
          <!--  <template #item-avatar="item">
                    <img
                        :src="item.avatar"
                        v-if="item.avatar"
                        alt=""
                        class="h-12 w-12 rounded-full object-cover"
                    />
                    <UserCircleIcon v-else class="h-12 w-12 text-gray-700" />
                </template> -->
                <template #item-confirmed="item">
                    <span
                        v-if="item.confirmed == true"
                        class="rounded-full bg-green-500 px-2 py-1 text-white"
                        >Actived</span
                    >
                    <span v-else class="rounded-full bg-red-500 px-2 py-1 text-white"
                        >Desactived</span
                    >
                </template>   
                <template #item-id="item">
                    <div class="py-4">
                        <router-link
                            :to="{
                                name: 'admin.user.index',
                            }"
                            class="text-green-500 hover:underline"
                            >Edit</router-link
                        >
                        <button
                            type="button"
                            v-if="item.confirmed == true"
                            @click="toogleConfirmed(item.id, false)"
                            class="ml-3 text-purple-600 hover:underline"
                        >
                            Desactived
                        </button>
                        <button
                            type="button"
                            v-else
                            @click="toogleConfirmed(item.id, true)"
                            class="ml-3 text-purple-600 hover:underline"
                        >
                            Actived
                        </button>
                        <button
                            type="button"
                            @click="deleteUser(item.id)"
                            class="ml-3 text-red-600 hover:underline"
                        >
                            Delete
                        </button>
                    </div>
                </template>
            </EasyDataTable> 
        </div>
    </div>
</div>
</template>

<script setup>
import {
    UserPlusIcon,
    TrashIcon,
    MagnifyingGlassCircleIcon,
    UserCircleIcon,
} from "@heroicons/vue/24/solid";
import { reactive, ref, onMounted } from "vue";
import useUser from "@/composables/useUser";

const {
    getUsers,
    searchField,
    searchValue,
    toogleConfirmed,
    headers,
    users,
    loading,
    errors,
    cleanErrors,
    selectArray,
    deleteUser,
} = useUser();

onMounted(async function () { 
    await getUsers();
});


</script>
