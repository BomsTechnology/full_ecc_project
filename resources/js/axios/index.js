import axios from "axios";
import { useAuthenticateStore } from "@/stores/authenticate";
const auth = useAuthenticateStore();
const TOKEN_PUBLIC = 'e8e341579656db727308941d1f0512716bb85c0cfe6f3bbc5275c47f408d6f8d076d403c87212405a01c337f6b0377e60beda1bbfb650fbfddef9f6a99fb70b1bcf199c5e6b472de19e04f921beaae666538b2bbe82dcacf8fbcd8ea1c4da2f9099a719127cd7d9b34eca81fd93082ea65fe6de48f1e1077b8cf6b5e40e4ab31';
const token = auth.tokenUser ? auth.tokenUser : TOKEN_PUBLIC;
const axiosClient = axios.create({
    baseURL: `http://localhost:1337/api`,
});

const axiosClientFile = axios.create({
    baseURL: `http://localhost:1337/api`,
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
