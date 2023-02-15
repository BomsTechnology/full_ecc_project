import { reactive, ref } from "vue";
import { useRouter, useRoute } from "vue-router";
import { axiosClient, axiosClientFile } from "@/axios";

export default function useRoles() {
    const errors = ref([]);
    const router = useRouter();
    const route = useRoute();
    const loading = ref(false);
    const isFinish = ref(false);
    const roles = ref([]);
    const role = ref([]);


    const cleanErrors = () => {
        errors.value = [];
    };

    const getRoles = async () => {
        errors.value = [];
        loading.value = true;
        await axiosClient
            .get(`/users-permissions/roles`)
            .then((response) => {
                roles.value = response.data.roles;
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

    const getRole = async (id) => {

    }

    return {
        roles,
        errors,
        getRoles,
        isFinish,
        cleanErrors,
    }
}