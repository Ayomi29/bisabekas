<script setup>
defineProps({
    msg: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <strong>
                <RouterLink to="/" class="navbar-brand justify-content-center"
                    >Home</RouterLink
                >
            </strong>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <RouterLink to="/" class="nav-link">Home</RouterLink>
                        <!-- <a class="nav-link" href="/">Home</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catalog">Catalog</a>
                    </li>
                    <li class="nav-item">
                        <RouterLink to="/about" class="nav-link"
                            >About Us</RouterLink
                        >
                    </li>
                </ul>
                <form class="d-flex">
                    <input
                        class="form-control ms-lg-2"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    />
                    <button class="btn btn-light" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                        </a>
                        <ul
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdown"
                        >
                            <li>
                                <a class="dropdown-item" href="/dashboard"
                                    ><i
                                        class="bi bi-layout-text-window-reverse"
                                    ></i>
                                    My Dashboard</a
                                >
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <form action="/logout" method="post">
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <RouterLink to="/login" class="nav-link"
                            ><i class="bi bi-box-arrow-in-right"></i>
                            Login</RouterLink
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
