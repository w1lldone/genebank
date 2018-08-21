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
                              <select required class="custom-select" v-model="inputs.species_id" :class="hasError('species_id')">
                                  <option :value="null">Choose...</option>
                                  <option v-for="item in species" :value="item.id">
                                      {{ item.genus.name }} {{ item.name }}
                                  </option>
                              </select>
                              <div class="invalid-feedback">
                                {{ errorMessage('species_id') }}
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4">Incoming date</label>
                          <div class="col-md">
                              <input class="form-control" type="text" placeholder="YYYY-MM-DD" v-model="inputs.incoming_date" :class="hasError('incoming_date')">
                              <div class="invalid-feedback">
                                {{ errorMessage('incoming_date') }} Please use this format: YYYY-MM-DD
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4">Cultivar name</label>
                          <div class="col-md">
                              <input class="form-control" type="text" placeholder="" v-model="inputs.cultivar_name" :class="hasError('cultivar_name')">
                              <div class="invalid-feedback">
                                {{ errorMessage('cultivar_name') }}
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4">Temp. number</label>
                          <div class="col-md">
                              <input class="form-control" type="text" placeholder="GPT223" v-model="inputs.temporary_number" :class="hasError('temporary_number')">
                              <div class="invalid-feedback">
                                {{ errorMessage('temporary_number') }}
                              </div>
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
  props: {
    speciesId: Number,
  },
  data () {
    return {
        loading: false,
        genera: [],
        species: [],
        inputs: {
            species_id: this.speciesId,
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
            this.errors = error.response.data.errors
            toastr.error('We could not make a new vegetable. Please check the form carefully', 'Opps!')
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

    },
    hasError(type) {
      if (this.errors[type]) {
        return 'is-invalid'
      }
    },
    errorMessage(type) {
      if (this.errors[type]) {
        return this.errors[type][0]
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
