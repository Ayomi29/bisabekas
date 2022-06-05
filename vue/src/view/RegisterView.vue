<template>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <main class="form-registration">
                    <h1 class="h3 mb-5 fw-normal text-center">
                        Form Registerasi
                    </h1>
                    <form @submit="register">
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control rounded-top"
                                name="name"
                                v-model="user.name"
                                id="name"
                                placeholder="name"
                                required
                            />
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control"
                                name="username"
                                v-model="user.username"
                                id="username"
                                placeholder="username"
                                required
                            />
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                v-model="user.email"
                                id="email"
                                placeholder="name@example.com"
                                required
                            />
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input
                                type="password"
                                class="form-control rounded-bottom"
                                name="password"
                                v-model="user.password"
                                id="password"
                                placeholder="Password"
                                required
                            />
                            <label for="password">Password</label>
                        </div>
                        <button
                            class="w-100 btn btn-lg btn-primary mt-3"
                            type="submit"
                        >
                            Register
                        </button>
                    </form>
                    <small class="d-block text-center mt-2"
                        >Sudah memiliki akun?
                        <a href="/login" class="text-decoration-none"
                            >Silahkan login!</a
                        ></small
                    >
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
    name: "",
    username: "",
    email: "",
    password: "",
};

function register(ev) {
    ev.preventDefault();
    store.dispatch("register", user).then(() => {
        router.push({
            name: "LoginView",
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
