<template>
    <nav class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="#">Boolpress</a>
        <ul class="navbar-nav mr-auto">
            <!-- we included v-for here to cycle through the menu arrays 
                instead of using list items for each one
                arrays are found in the data portion below -->
            <li class="nav-item" v-for="menuItem in menuItems" :key="menuItem.routeName">
                <router-link class="nav-link" :to="{name: menuItem.routeName}">{{menuItem.label}}</router-link>
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
    name: 'Header',
        data() {
            return {
                menuItems: [
                    {
                        routeName: 'home',
                        label: 'Home'
                    },
                    {
                        routeName: 'about',
                        label: 'About Us'
                    },
                    {
                        routeName: 'contact',
                        label: 'Contact Us'
                    },
                    {
                        routeName: 'blog',
                        label: 'Blog'
                    },
                ]
            }
    }

}
</script>

<style>

    .router-link-exact-active {
        font-weight: bold;
    }

</style>