<template>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1 class="card-title m-0">Vegetable List</h1>
            <router-link to="/vegetable/create" class="btn btn-primary">
                Create
            </router-link>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>PIN</th>
                        <th>Temporary no.</th>
                        <th>Species</th>
                        <th>Cultivar name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                    v-for="vegetable in vegetables"
                    :key="vegetable.id"
                    >
                        <td>
                            <router-link
                            :to="{ name: 'character.index', params: { id:vegetable.id }}"
                            >
                                {{ vegetable.plant_introduction_number }}
                            </router-link>
                        </td>
                        <td>{{ vegetable.temporary_number }}</td>
                        <td>{{ vegetable.species.name }}</td>
                        <td>{{ vegetable.cultivar_name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {

  name: 'VegetableListBase',
  data () {
    return {
        vegetables: [],
    }
  },
  methods: {
    async getAllVegetables() {
        let response = await axios.get('/api/vegetables')
        this.vegetables = response.data.data
    },
  },
  mounted() {
    this.getAllVegetables()
  }
}
</script>

<style lang="css" scoped>
</style>
