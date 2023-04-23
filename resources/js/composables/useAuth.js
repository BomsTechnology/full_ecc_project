import { reactive, ref } from "vue";
import { useRouter, useRoute } from "vue-router";
import { axiosClient, axiosClientFile } from "@/axios";
import axios from "axios"

export default function useAuth() {
    const errors = ref([]);
    const router = useRouter();
    const route = useRoute();
    const isFinish = ref(false);
    const loading = ref(false);

    const cleanErrors = () => {
        errors.value = [];
    };

    const createUser = async (data) => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .post(`/register`, data)
            .then((response) => {
                isFinish.value = true;
                loading.value = false;
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

    const loginUser = async (data) => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .post(`/login`, data)
            .then((response) => {
                localStorage.user = JSON.stringify(response.data.data.user);
                localStorage.tokenUser = response.data.data.token;
                loading.value = false;
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

    const loginAdmin = async (data) => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .post(`/login-admin`, data)
            .then((response) => {
                localStorage.user = JSON.stringify(response.data.data.user);
                localStorage.tokenUser = response.data.data.token;
                loading.value = false;
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


    const logout = async () => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .post("/logout")
            .then((response) => {
                window.localStorage.removeItem("tokenUser");
                window.localStorage.removeItem("user");
                loading.value = false;
                location.href = "/";
            })
            .catch((e) => {
                loading.value = false;
                errors.value.push(e.response.data.message);
            });
    };

    return {
        errors,
        loading,
        isFinish,
        logout,
        createUser,
        loginUser,
        loginAdmin,
        cleanErrors,
    }
}