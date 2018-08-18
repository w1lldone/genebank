<template>
    <div class="filter">
        <span v-if="!emptyFilters">Filters:</span>
        <button v-for="(value, index) in filledFilters" 
        class="btn btn-sm btn-default" 
        title="Click to remove this filter"
        @click="removeFilter(index)">
            {{ index | titleCase }}: {{ value }} 
            <i class="fa fa-times fa-fw"></i>
        </button>
    </div>
</template>

<script>
export default {

  name: 'CharVegetableListActiveFilters',
  props: {
    filters: Object,
  },
  data () {
    return {

    }
  },
  methods: {
    removeFilter(index) {
      this.$emit('update:filters', {
          index: index,
          value: null,
      });
    }
  },
  computed: {
    filledFilters: function () {
        let newObj = {};
        Object.keys(this.filters).forEach((prop) => {
          if (this.filters[prop]) { newObj[prop] = this.filters[prop]; }
        });
        return newObj;
    },
    emptyFilters: function () {
      return Object.keys(this.filledFilters).length === 0
    }
  }
}
</script>

<style lang="css" scoped>
.filter {
    margin-bottom: 15px;
}
</style>
