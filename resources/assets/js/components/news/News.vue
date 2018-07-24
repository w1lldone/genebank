<template>
    <div class="container">            
        
              <sidebar></sidebar>
                <div class="col text-center">
                <h1>Welcome to genebank</h1>
                <router-link :to="{ name:'genus' }"> Go to Genus list </router-link>
            </div>
          
    </div>

</template>

<script>
export default {

  name: 'HomeBase',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>
