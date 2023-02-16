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
       { text: "Avatar", value: "avatar" },
        { text: "Name", value: "username" },
        { text: "Phone", value: "phone_number" },
        { text: "Email", value: "email" },
       { text: "Role", value: "user_type" },
       { text: "Confirmed", value: "confirmed" },
       { text: "Blocked", value: "blocked" },
        { text: "Action", value: "id" },
    ];


    const cleanErrors = () => {
        errors.value = [];
    };

    const getUsers = async () => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .get(`/users`)
            .then((response) => {
                users.value = response.data.data;
            })
            .catch((e) => {
                loading.value = false;
                if (e.response.status == 422) {
                    for (const key in e.response.data.errors)
                        errors.value.push(e.response.data.errors[key][0]);
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
        errors.value = [];
        loading.value = true;
        await axiosClient
            .get(`/users/${id}`)
            .then((response) => {
                user.value = response.data.data;
            })
            .catch((e) => {
                loading.value = false;
                if (e.response.status == 422) {
                    for (const key in e.response.data.errors)
                        errors.value.push(e.response.data.errors[key][0]);
                } else {
                    errors.value.push(e.response.data.message);
                }
                router.replace({
                    name: route.name,
                    hash: '#errors'
                });
            });
    }

    const getUserType = async (type, officialParish) => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .post(`/users/type/${type}`, {officialParish:officialParish})
            .then((response) => {
                users.value = response.data.data;
            })
            .catch((e) => {
                loading.value = false;
                if (e.response.status == 422) {
                    for (const key in e.response.data.errors)
                        errors.value.push(e.response.data.errors[key][0]);
                } else {
                    errors.value.push(e.response.data.message);
                }
                router.replace({
                    name: route.name,
                    hash: '#errors'
                });
            });
    }

    const deleteUsers = async () => {
        if (selectArray.value.length != 0) {

            const deleteIds = ref([]);
            selectArray.value.forEach((d) => {
                deleteIds.value.push(d.id);
            });

            const { reveal, onConfirm } = createConfirmDialog(ConfirmModal, {
                question:
                "Are you sure you want to delete its item(s)? All data will be permanently deleted. This action cannot be undone.",
                title: "Delete User !!!",
                confirmLabel: "Delete",
                cancelLabel: "Cancel"
            });
            onConfirm(async () => {
                await axiosClient
                .delete(`/users/${JSON.stringify({ ...deleteIds.value })}`)
                .then((response) => {
                    getUsers();
                })
                .catch((e) => {
                    loading.value = false;
                    if (e.response.status == 422) {
                        for (const key in e.response.data.errors)
                            errors.value.push(e.response.data.errors[key][0]);
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
    }

    const confirmedUser = async (id) => {
        const { reveal, onConfirm } = createConfirmDialog(ConfirmModal, {
            question:
              "Are you sure you want to Change Confirmed its item(s)? ",
            title: "Change Confirmed Status!!!",
            confirmLabel: "Change Confirmed",
            cancelLabel: "Cancel"
          });
          onConfirm(async () => {
            await axiosClient
            .put(`/users/confirmed/${id}`)
            .then((response) => {
                getUsers();
            })
            .catch((e) => {
                loading.value = false;
                if (e.response.status == 422) {
                    for (const key in e.response.data.errors)
                        errors.value.push(e.response.data.errors[key][0]);
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

    const toogleBlocked = async (id) => {
        const { reveal, onConfirm } = createConfirmDialog(ConfirmModal, {
            question:
              "Are you sure you want to Change Blocked Status of its item(s)? ",
            title: "Change Blocked Status !!!",
            confirmLabel: "Change Blocked",
            cancelLabel: "Cancel"
          });
          onConfirm(async () => {
            await axiosClient
            .put(`/users/toogle-blocked/${id}`)
            .then((response) => {
                getUsers();
            })
            .catch((e) => {
                loading.value = false;
                if (e.response.status == 422) {
                    for (const key in e.response.data.errors)
                        errors.value.push(e.response.data.errors[key][0]);
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
        deleteUsers,
        confirmedUser,
        toogleBlocked,
        getUserType,
    }
}