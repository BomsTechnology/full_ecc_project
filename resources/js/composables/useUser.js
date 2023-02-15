import { reactive, ref } from "vue";
import { useRouter, useRoute } from "vue-router";
import { axiosClient, axiosClientFile } from "@/axios";

import { createConfirmDialog } from "vuejs-confirm-dialog";
import ConfirmModal from "@/components/ConfirmModal.vue";

export default function useUsers() {
    const errors = ref([]);
    const router = useRouter();
    const route = useRoute();
    const loading = ref(false);
    const isFinish = ref(false);
    const users = ref([]);
    const user = ref([]);
    const selectArray = ref([]);
    const searchField = ref("username");
    const searchValue = ref("");
    const headers = [
       // { text: "Image", value: "avatar" },
        { text: "Name", value: "username" },
      //  { text: "Phone", value: "phone" },
        { text: "Email", value: "email" },
        { text: "Role", value: "role.name" },
       { text: "Confirmed", value: "confirmed" },
        { text: "Action", value: "id" },
    ];


    const cleanErrors = () => {
        errors.value = [];
    };

    const getUsers = async () => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .get(`/users?populate=*`)
            .then((response) => {
                users.value = response.data;
            })
            .catch((e) => {
                loading.value = false;
                if (e.response.status == 400) {
                    if(e.response.data.error.details.errors){
                        e.response.data.error.details.errors.forEach((err) => {
                            errors.value.push(err.message);
                        })
                    }else{
                    errors.value.push(e.response.data.error.message);
                    }
                } else {
                    errors.value.push(e.response.data.message);
                }
                router.replace({
                    name: route.name,
                    hash: '#errors'
                });
            });
    }

    const getUser = async (id) => {

    }

    const deleteUser = async (id) => {
        const { reveal, onConfirm } = createConfirmDialog(ConfirmModal, {
            question:
              "Are you sure you want to delete its item(s)? All data will be permanently deleted. This action cannot be undone.",
            title: "Delete User !!!",
            confirmLabel: "Delete",
            cancelLabel: "Cancel"
          });
          onConfirm(async () => {
            await axiosClient
            .delete(`/users/${id}`)
            .then((response) => {
                getUsers();
            })
            .catch((e) => {
                loading.value = false;
                if (e.response.status == 400) {
                    if(e.response.data.error.details.errors){
                        e.response.data.error.details.errors.forEach((err) => {
                            errors.value.push(err.message);
                        })
                    }else{
                    errors.value.push(e.response.data.error.message);
                    }
                } else {
                    errors.value.push(e.response.data.message);
                }
                router.replace({
                    name: route.name,
                    hash: '#errors'
                });
            });
        });
        reveal();
    }

    const toogleConfirmed = async (id, value) => {
        const { reveal, onConfirm } = createConfirmDialog(ConfirmModal, {
            question:
              "Are you sure you want to Change Confirmed its item(s)? ",
            title: "Change Confirmed !!!",
            confirmLabel: "Change Confirmed",
            cancelLabel: "Cancel"
          });
          onConfirm(async () => {
            await axiosClient
            .post(`/users-permissions/users/toogleConfirmed/${id}`, {value: value})
            .then((response) => {
                getUsers();
            })
            .catch((e) => {
                loading.value = false;
                if (e.response.status == 400) {
                    if(e.response.data.error.details.errors){
                        e.response.data.error.details.errors.forEach((err) => {
                            errors.value.push(err.message);
                        })
                    }else{
                    errors.value.push(e.response.data.error.message);
                    }
                } else {
                    errors.value.push(e.response.data.message);
                }
                router.replace({
                    name: route.name,
                    hash: '#errors'
                });
            });
        });
        reveal();
    }

    return {
        users,
        user,
        selectArray,
        searchField,
        searchValue,
        headers,
        errors,
        getUsers,
        isFinish,
        getUser,
        cleanErrors,
        deleteUser,
        toogleConfirmed,
    }
}