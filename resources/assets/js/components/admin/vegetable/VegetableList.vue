<template>
    <table class="table">
        <thead>
            <tr>
                <th>UGM number (PINO)</th>
                <th>Temp. Number</th>
                <th>Genus</th>
                <th>Species</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="vegetable in vegetables">
                <td><a :href="`/admin/vegetable/${vegetable.id}`">{{ vegetable.plant_introduction_number }}</a></td>
                <td>{{ vegetable.temporary_number }}</td>
                <td>{{ vegetable.species.genus.name }}</td>
                <td>{{ vegetable.species.name }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {

  name: 'VegetableList',

  data () {
    return {
        vegetables: [],
        params: {

        },
    }
  },
  methods: {
    async loadVegetables() {
        let response = await axios.get('/api/vegetables', {
            params: this.params
        })
        this.vegetables = response.data.data
    }
  },
  mounted() {
    this.loadVegetables()
  }
}
</script>

<style lang="css" scoped>
</style>
