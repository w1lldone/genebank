<template>
    <div>
        <navbar></navbar>
        <slot></slot>
    </div>
</template>

<script>
import Navbar from './navigations/Navbar';

export default {

  name: 'FrontBase',

  data () {
    return {

    }
  },
  components: {
    Navbar
  }
}
</script>

<style lang="css" scoped>
</style>
