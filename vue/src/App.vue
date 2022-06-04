<script setup>
import navbar from "./components/navbar.vue";
import footers from "./components/footer.vue";
</script>

<template>
    <header>
        <div class="wrapper">
            <navbar />
        </div>
    </header>
    <main>
        <RouterView />
    </main>
    <footer>
        <footers />
    </footer>
</template>

<style>
@import "./assets/base.css";
</style>
