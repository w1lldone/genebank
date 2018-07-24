<template>
    <div class="container">            
        <div class="row">
            <div class="col-md-3">
              <sidebar></sidebar>
            </div>
            <div class="col text-center">
                <h1>Welcome to genebank</h1>
                <router-link :to="{ name:'genus' }"> Go to Genus list </router-link>
            </div>
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
