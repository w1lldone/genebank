<template>
    <div class="row">
        <div class="col-md-6">
            {{ genus.name }}
        </div>
        <div class="col-md-6">
            {{ genus.vegetables_count }}
        </div>
    </div>
</template>

<script>
export default {

  name: 'GeneraList',
  props: {
    genus: Object,
  },
  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>
