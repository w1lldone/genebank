<template>
    <div class="slide">
        <img v-bind:src="slide.src" alt="">
    </div>

</template>

<script>

export default {
   
    data () {
        return {

        }
    },
    props: {
        slide: ['slide']
    }
}
</script>

<style lang="css" scoped>
</style>
