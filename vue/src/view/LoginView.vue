<template>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <main class="form-signin">
                    <form @submit="login">
                        <h1 class="h3 my-4 fw-normal text-center">Login</h1>
                        <div class="form-floating">
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                id="email"
                                v-model="user.email"
                                placeholder="name@example.com"
                                autofocus
                                required
                            />
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                id="password"
                                v-model="user.password"
                                placeholder="Password"
                                required
                            />
                            <label for="password">Password</label>
                        </div>
                        <button
                            class="w-100 mt-3 btn btn-lg btn-primary"
                            type="submit"
                        >
                            Login
                        </button>
                    </form>
                    <small class="d-block text-center"
                        >Belum daftar? <a href="/register"> Daftar sekarang </a>
                    </small>
                </main>
            </div>
        </div>
    </div>
</template>

<script setup>
import store from "../store";
import { useRouter } from "vue-router";

const router = useRouter();
const user = {
    email: "",
    password: "",
};

function login(ev) {
    ev.preventDefault();
    store.dispatch("login", user).then(() => {
        router.push({
            name: "Payment",
        });
    });
}
</script>
<script>
export default {
    name: "RegisterView",
};
</script>

<style scoped></style>
