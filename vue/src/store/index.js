import {createStore} from "vuex";
import axiosClient from "../axios";

const store = createStore( {
    state: {
        user: {
            data: {},
            token: sessionStorage.getItem("TOKEN"),
        },
    },
    gutter: {},
    actions: {
        register({commit}, user) {
            return axiosClient.post('/register', user)
            .then(({data}) => {
                    commit('setUser', data.user);
                    commit('setToken', data.token)
                    return data;
        })
    },
        login({commit}, user) {
            return axiosClient.post('/login', user)
                .then(({data}) => {
                    commit('setUser', data.user);
                    commit('setToken', data.token)
                    return data;
                })
        },
    },
    mutations: {},
    modules: {}
})

export default store;