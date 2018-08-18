<template>
    <div class="modal fade" id="createVegetableModal" tabindex="-1" role="dialog" aria-labelledby="createVegetableModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form @submit.prevent="submit()">
                <div class="modal-header">
                  <h5 class="modal-title" id="createVegetableModalLabel">New Vegetable</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div v-show="loading" class="text-center">
                        <h3 class="text-muted">
                            Loading...
                        </h3>
                    </div>
                    <div v-show="!loading">
                        <div class="form-group row">
                          <label class="col-md-4">Species</label>
                          <div class="col-md">
                              <select required class="custom-select" v-model="inputs.species_id">
                                  <option value="">Choose...</option>
                                  <option v-for="item in species" :value="item.id">
                                      {{ item.genus.name }} {{ item.name }}
                                  </option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4">Incoming date</label>
                          <div class="col-md">
                              <input class="form-control" type="text" placeholder="YYYY-MM-DD" v-model="inputs.incoming_date">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4">Cultivar name</label>
                          <div class="col-md">
                              <input class="form-control" type="text" placeholder="Green chili" v-model="inputs.cultivar_name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4">Temp. number</label>
                          <div class="col-md">
                              <input class="form-control" type="text" placeholder="GPT223" v-model="inputs.temporary_number">
                          </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary" :class="{ disabled: loading}">Save new vegetable</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</template>

<script>
export default {

  name: 'VegetableCreateModal',

  data () {
    return {
        loading: false,
        genera: [],
        species: [],
        inputs: {
            species_id: '',
            cultivar_name: '',
            temporary_number: '',
            incoming_date: '',
        },
        errors: [],
    }
  },
  methods: {
    async loadSpecies() {
        let response = await axios.get('/api/species')
        this.species = response.data.data
    },
    async storeVegetable() {
        try {
            let response = await axios.post('/api/vegetables', this.inputs)
            console.log(response.data.data)
            return response.data.data
        } catch(error) {
            this.errors = error.response.data
            console.log(error.response)
            return false
        }
    },
    async submit() {
        this.loading = true
        let success = await this.storeVegetable()

        if (success) {
            window.location = `/admin/vegetable/${success.id}`
        } else {
            this.loading = false
        }

    }
  },
  mounted() {
    this.loadSpecies()
  }
}
</script>

<style lang="css" scoped>
</style>
