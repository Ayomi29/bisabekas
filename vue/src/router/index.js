import { createRouter, createWebHistory } from "vue-router";
import homepage from "../view/HomeView.vue";
import login from "../view/LoginView.vue";
import register from "../view/RegisterView.vue";
import about from "../view/AboutView.vue";
import product from "../view/ProductView.vue";
import catalog from "../view/CatalogView.vue";
import payment from "../view/PaymentView.vue";
import store from "../store";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: "/",
            name: "HomeView",
            component: homepage,
        },
        {
            path: "/about",
            name: "AboutView",
            component: about,
        },
        {
            path: "/catalog",
            name: "CatalogView",
            component: catalog,
        },
        {
            path: "/product",
            name: "ProductView",
            component: product,
        },
        {
            path: "/payment",
            name: "PaymentView",
            meta: {requiresAuth: true},
            component: payment,
        },
        {
            path: "/login",
            name: "LoginView",
            meta: {isGuest: true},
            component: login,
        },
        {
            path: "/register",
            name: "RegisterView",
            component: register,
        },
    ],
});

router.beforeEach((to, from, next) => {
  if (to.meta.requiresAuth && !store.state.user.token) {
    next({ name: "LoginView" });
  } else if (store.state.user.token && to.meta.isGuest) {
    next({ name: "ProductView" });
  } else {
    next();
  }
});

export default router;
