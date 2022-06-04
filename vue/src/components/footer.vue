<script setup>
defineProps({
    msg: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2022 BisaBekas</p>

            <ul class="nav col-md-4 justify-content-center">
                <li class="nav-item"><RouterLink to="/" class="nav-link px-2 text-muted">Home</RouterLink></li>
                <li class="nav-item"><RouterLink to="/catalog" class="nav-link px-2 text-muted">Catalog</RouterLink></li>
                <li class="nav-item"><RouterLink to="/about" class="nav-link px-2 text-muted">About Us</RouterLink></li>
            </ul>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-dark" href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
                <li class="ms-3"><a class="text-dark" href="https://www.whatsapp.com/"><i class="bi bi-whatsapp"></i></a></li>
                <li class="ms-3"><a class="text-dark" href="https://www.facebook.com"><i class="bi bi-facebook"></i></a></li>
                <li class="ms-3"><a class="text-dark" href="https://www.gmail.com"><i class="bi bi-envelope"></i></a></li>
                <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-arrow-up-square-fill"></i></a></li>
            </ul>
        </footer>
    </div>
</template>

