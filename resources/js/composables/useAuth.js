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
            .post(`/users`, data)
            .then((response) => {
                isFinish.value = true;
                loading.value = false;
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

    const loginUser = async (data) => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .post(`/auth/local?populate=*`, data)
            .then((response) => {
                console.log(response.data)
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

    const loginAdmin = async (data) => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .post(`/users-permissions/auth/admin?populate=*`, data)
            .then((response) => {
                localStorage.user = JSON.stringify(response.data.user);
                localStorage.tokenUser = response.data.jwt;
                loading.value = false;
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

    const getLoggedUser = async () => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .post(`/users/me`)
            .then((response) => {
                loading.value = false;
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

    return {
        errors,
        loading,
        isFinish,
        createUser,
        loginUser,
        loginAdmin,
        cleanErrors,
    }
}