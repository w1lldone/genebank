<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <sidebar></sidebar>
            </div>
            <div class="col">
                <vegetable-list-base></vegetable-list-base>
            </div>
        </div>
    </div>
</template>

<script>
import VegetableListBase from './VegetableListBase.vue';

export default {

  name: 'VegetableBase',

  data () {
    return {

    }
  },
  components: {
    VegetableListBase
  }
}
</script>

<style lang="css" scoped>
</style>
