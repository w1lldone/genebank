<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <sidebar></sidebar>
            </div>
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {

  name: 'ComponentBase',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>
