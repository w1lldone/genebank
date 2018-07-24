<template>
<div class="header_menu text-center">
<nav class="navbar navbar-default">
    <div class="menu navbar-collapse">
    <ul class="nav navbar-nav main_menu clearfix">
        <li><router-link :to="{ name:'home' }"><i class="ion-android-home"></i>Home</router-link></li>
        <li><router-link :to="{ name:'vegetable' }">Vegetable</router-link></li>
        <li><router-link :to="{ name:'search' }">Search</router-link>
            <ul class="sub-menu">
                <li><router-link :to="{ name:'search.passport' }">Passport</router-link></li>
                <li><router-link :to="{ name:'search.char' }">Characterization</router-link></li>
                <li><router-link :to="{ name:'search.eval' }">Evaluation</router-link></li>
            </ul>
        </li>
        <li><router-link :to="{ name:'download' }">Download</router-link></li>
        <li><router-link :to="{ name:'news' }">News</router-link></li>
        <li><router-link :to="{ name:'gallery' }">Gallery</router-link></li>
        <li><router-link :to="{ name:'terms' }">Terms of Use</router-link></li>
        <li><router-link :to="{ name:'about' }">About Us</router-link></li>
    </ul>
    </div>
    </nav>
    </div>

</template>

<script>

</script>

<style lang="css" scoped>

</style>
