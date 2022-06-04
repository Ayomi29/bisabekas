import { createRouter, createWebHistory } from "vue-router";
import homepage from "../view/homepage.vue";
import login from "../view/login.vue";
import register from "../view/register.vue";
import about from "../view/about.vue";
import product from "../view/product.vue";
import catalog from "../view/catalog.vue";
import payment from "../view/payment.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: homepage,
    },
    {
      path: "/about",
      name: "about",
      component: about,
    },
    {
      path: "/catalog",
      name: "catalog",
      component: catalog,
    },
    {
      path: "/product",
      name: "product",
      component: product,
    },
    {
      path: "/payment",
      name: "payment",
      component: payment,
    },
    {
      path: "/login",
      name: "login",
      component: login,
    },
    {
      path: "/register",
      name: "register",
      component: register,
    },
  ],
});

export default router;
