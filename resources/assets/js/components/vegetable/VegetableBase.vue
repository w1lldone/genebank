<template>
    <div class="container">
       
            <sidebar></sidebar>
            <div class="col">
                <vegetable-list-base></vegetable-list-base>
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
