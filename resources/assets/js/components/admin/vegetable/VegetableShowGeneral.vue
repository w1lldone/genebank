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
                  Photos
              </label>
              <div class="col-md-8">
                  <photos :photos="photos" :vegetableId="vegetableId" @delete:photo="onDeletePhoto" @store:photo="onStorePhoto"></photos>
              </div>
          </div>
          <div class="form-group row">
              <label class="col-md-2">
                  Cultivar name
              </label>
              <div class="col-md-5">
                  <input type="text" v-model="inputs.cultivar_name" name="cultivar_name" class="form-control">
              </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2">Species</label>
            <div class="col-md-4">
                <select required class="custom-select" v-model="inputs.species_id">
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
                  <input type="text" name="temporary_number" class="form-control" v-model="inputs.temporary_number">
              </div>
          </div>
          <div class="form-group row">
              <label class="col-md-2">
                  Subtaxa
              </label>
              <div class="col-md-3">
                  <input type="text" name="temporary_number" class="form-control" v-model="inputs.subtaxa">
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
import Photos from './VegetableShowGeneralPhotos';

export default {

  name: 'VegetableShowGeneral',
  props: {
    vegetableId: Number,
    photos: Array,
    species_id: Number,
    temporary_number: String,
    cultivar_name: String,
    subtaxa: String,
  },
  data () {
    return {
        allSpecies: [],
        inputs: {...this.$props},
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
          let response = await axios.put(`/api/vegetables/${this.vegetableId}`, this.inputs)
          toastr.success('The vegetable has been updated', 'Success!')
        } catch(error) {
          toastr.error('Please check the form carefully', 'Oops!')
        }
        this.loading = false
    },
    onDeletePhoto(event) {
      this.inputs.photos.splice(event.index, true)
    },
    onStorePhoto(event) {
      this.inputs.photos.push(event.data)
    }
  },
  mounted() {
    this.loadSpecies()
  },
  components: {
    Photos,
  },
}
</script>

<style lang="css" scoped>
</style>
