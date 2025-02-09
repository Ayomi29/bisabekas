import axios from "axios";
import store from "./store";
// import router from "./router";

const axiosClient = axios.create({
    baseURL: `http://localhost:8080/`,
});

axiosClient.interceptors.request.use((config) => {
    config.headers.Authorization = `Bearer ${store.state.user.token}`;
    return config;
});

export default axiosClient;
