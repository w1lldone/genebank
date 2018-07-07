<template>
    <div class="nav flex-column nav-pills" aria-orientation="vertical">
        <router-link class="nav-link" :to="{ name:'home' }">Home</router-link>
        <router-link class="nav-link" :to="{ name:'vegetable' }">Vegetable</router-link>
    </div>
</template>

<script>
export default {
  name: 'Sidebar',
}
</script>

<style lang="css" scoped>
</style>
