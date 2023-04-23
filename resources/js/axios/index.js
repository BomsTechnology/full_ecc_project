import axios from "axios";
import { useAuthenticateStore } from "@/stores/authenticate";
const auth = useAuthenticateStore();
const TOKEN_PUBLIC = '';
const token = auth.tokenUser ? auth.tokenUser : TOKEN_PUBLIC;

const axiosClient = axios.create({
    baseURL: `/api`,
});

const axiosClientFile = axios.create({
    baseURL: `/api`,
});

axiosClient.interceptors.request.use((config) => {
    config.headers.Authorization = `Bearer ${token}`;
    return config;
});

axiosClientFile.interceptors.request.use((config) => {
    config.headers.Authorization = `Bearer ${token}`;
    config.headers["Content-Type"] = `multipart/form-data`;
    return config;
});

export { axiosClient, axiosClientFile };
