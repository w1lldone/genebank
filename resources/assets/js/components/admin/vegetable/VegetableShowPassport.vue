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
            <div class="form-group row" v-for="(value, index) in inputs" :key="index">
                <label class="col-md-2">
                    {{ index | titleCase }}
                </label>
                <div class="col-md-5">
                    <input type="text" v-model="inputs[index]" name="cultivar_name" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-7 text-right">
            <button type="submit" class="btn btn-success" :class="{ disabled: loading }">Submit</button>
          </div>
        </div>
    </form>
</template>

<script>
export default {

  name: 'VegetableShowPassport',
  props: {
    // donor_number: String,
    // distribution_status: String,
    // country: String,
    // location: String,
    // collecting_institute: String,
    // collector: String,
    // collecting_number: String,
    // collecting_date: String,
    // latitude: String,
    // longitude: String,
    // alititude: String,
    vegetableId: Number,
    passport: Object,
  },
  data () {
    return {
        loading: false,
        inputs: {...this.passport},
    }
  },
  methods: {
    async submitForm() {
      this.loading = true
      await this.putRequest()
      this.loading = false
    },
    putRequest() {
      return axios.put(`/api/vegetables/${this.vegetableId}/passport`, this.getInputs)
          .then(response => {
            console.log(response.data.data)
            toastr.success('The passport has been updated', 'Success!')
          })
          .catch(error => {
            toastr.error("There's something wrong, please check the form carefully", 'Oops!')
            console.log(error.response)
          })
    }
  },
  computed: {
    getInputs: function () {
      return this.inputs
    }
  },
}
</script>

<style lang="css" scoped>
</style>
