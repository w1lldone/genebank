<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <sidebar></sidebar>
            </div>
            <div class="col">
                <form class="form" @submit.prevent="onSubmit">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Species</label>
                        <div class="col-sm-3">
                            <select class="form-control" v-model="fields.species_id">
                                <option value="" disabled>PLEASE SELECT</option>
                                <option v-for="{id, name} in species"
                                :value="id"
                                :key="id"
                                >
                                    {{ name }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Cultivar name</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" v-model="fields.cultivar_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Temporary number</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" v-model="fields.temporary_number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col text-right">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {

  name: 'VegetableFormBase',

  data: function() {
    return {
        fields: {
            species_id: null,
            cultivar_name: null,
            temporary_number: null,
        },
        species: [],
    }
  },
  methods: {
    async onSubmit() {
        try {
            let response = await axios.post('/api/vegetables', this.fields)
            console.log(response)
        } catch (error) {
            console.log(error.response)
            console.log(axios.defaults.headers.common)
        }
    }
  },
  async mounted() {
    let response = await axios.get(`/api/species`)
    this.species = response.data.data
  }
}
</script>

<style lang="css" scoped>
</style>
