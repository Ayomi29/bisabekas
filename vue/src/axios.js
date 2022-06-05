import axios from "axios";
/**
 * Created by Zura on 12/25/2021.
 */
import axios from "axios";
import store from "./store";
import router from "./router";

const axiosClient = axios.create({
  baseURL: `http://localhost:8000/`
})

axiosClient.interceptors.request.use(config => {
  config.headers.Authorization = `Bearer ${store.state.user.token}`
  return config;
})

axiosClient.interceptors.response.use(response => {
  return response;
});

export default axiosClient;
