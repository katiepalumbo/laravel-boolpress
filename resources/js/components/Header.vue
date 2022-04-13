<template>
    <nav class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="#">Boolpress</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <!-- <a class="nav-link" href="/">Home</a> -->
                <router-link class="nav-link" :to="{name: 'home'}">Home</router-link>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link" href="/chi-siamo">Chi Siamo</a> -->
                <router-link class="nav-link" :to="{name: 'about'}">About</router-link>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link" href="/contatti">Contatti</a> -->
                <router-link class="nav-link" :to="{name: 'contact'}">Contact</router-link>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link" href="/contatti">Contatti</a> -->
                <router-link class="nav-link" :to="{name: 'posts'}">Blog</router-link>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="/admin">Admin Access</a>
            </li>
        </ul>


    </nav>
</template>

<script>
export default {
    name: 'Header'

}
</script>

<style>

    .router-link-exact-active {
        font-weight: bold;
    }

</style>