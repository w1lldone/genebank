export const vegetableFilters = {
    data() {
        return {
            filters: {
              plant_introduction_number: null,
              temporary_number: null,
              donor_number: null,
              cultivar_name: null,
              species_id: null,
              accession_number: null,
            }
        }
    },
    methods: {
        onUpdateFilter({index, value}) {
          this.filters[index] = value
        },
    },
    computed: {
      allParams: function () {
        return {...this.params, ...this.filters}
      },
    },
    watch: {
      filters: {
        async handler(newVal, oldVal) {
          this.loading = true
          await this.loadVegetables()
          this.loading = false
        },
        deep: true
      }
    },
};
