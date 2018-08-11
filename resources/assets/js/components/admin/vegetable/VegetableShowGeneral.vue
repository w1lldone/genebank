<template>
    <form class="card card-body" @submit.prevent="submitForm()">
        <div class="text-center" v-show="loading">
          <div class="row py-5">
            <div class="col-md-7 text-center">
              <h4 class="text-muted">Loading...</h4>
            </div>
          </div>
        </div>
        <div v-show="!loading">
          <div class="form-group row">
              <label class="col-md-2">
                  Cultivar name
              </label>
              <div class="col-md-5">
                  <input type="text" :value="cultivar_name" name="cultivar_name" class="form-control" @input="$emit('update:cultivar_name', $event.target.value)">
              </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2">Species</label>
            <div class="col-md-4">
                <select required class="custom-select" :value="species_id" @change="$emit('update:species_id', $event.target.value)">
                    <option value="">Choose...</option>
                    <option v-for="item in allSpecies" :value=item.id>
                        {{ item.genus.name }} {{ item.name }}
                    </option>
                </select>
            </div>
          </div>
          <div class="form-group row">
              <label class="col-md-2">
                  Temporary number
              </label>
              <div class="col-md-5">
                  <input type="text" name="temporary_number" class="form-control" :value="temporary_number" @input="$emit('update:temporary_number', $event.target.value)">
              </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-7 text-right">
            <button type="submit" class="btn btn-success" :class="{ disabled: loading }">Save changes</button>
          </div>
        </div>
    </form>
</template>

<script>
export default {

  name: 'VegetableShowGeneral',
  props: {
    vegetableId: Number,
    photo: String,
    species_id: Number,
    temporary_number: String,
    cultivar_name: String,
  },
  data () {
    return {
        allSpecies: [],
        errors: {},
        loading: false,
    }
  },
  computed: {
  },
  methods: {
    async loadSpecies() {
        let response = await axios.get('/api/species')
        this.allSpecies = response.data.data
    },
    async submitForm() {
        this.loading = true
        try {
          let response = await axios.put(`/api/vegetables/${this.vegetableId}`, this.$props)
          toastr.success('The vegetable has been updated', 'Success!')
        } catch(error) {
          toastr.error('Please check the form carefully', 'Oops!')
        }
        this.loading = false
    },
  },
  mounted() {
    this.loadSpecies()
  }
}
</script>

<style lang="css" scoped>
</style>
