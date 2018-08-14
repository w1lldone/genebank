<template>
    <form @submit.prevent="submitForm()">
        <div class="form-group row" v-for="(attribute, index) in sortedInputs">
            <label class="col-md-2 form-label">
                {{ attribute.name }}
            </label>
            <div class="col-md-5">
                <input type="text" v-model="inputs[index].value" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-7 text-right">
                <button type="submit" class="btn btn-success" :class="{ disabled: loading }">Save</button>
            </div>
        </div>
    </form>
</template>

<script>
export default {

  name: 'VegetableAttributeForm',
  props: {
    type: String,
    vegetableId: Number,
    attributes: Array,
  },
  data () {
    return {
        inputs: [...this.attributes],
        loading: false,
    }
  },
  methods: {
    async submitForm() {
        this.loading = true
        await this.putRequest()
        this.loading = false
    },
    putRequest() {
        return axios.put(`/api/vegetables/${this.vegetableId}/attributes`, this.requestParams)
                .then(response => {
                    toastr.success(`The ${this.type} data has been updated`, 'Success!')
                    console.log(response.data.data)
                })
                .catch(error => {
                    console.log(error.response)
                })
    }
  },
  computed: {
    requestParams: function () {
        return this.inputs.map(item => {
            return {
                id: item.id,
                value: item.value,
            }
        })
    },
    sortedInputs: function () {
        return this.inputs.sort((a, b) => {
            var nameA = a.name.toUpperCase(); // ignore upper and lowercase
            var nameB = b.name.toUpperCase(); // ignore upper and lowercase
            if (nameA < nameB) {
              return -1;
            }
            if (nameA > nameB) {
              return 1;
            }

            // names must be equal
            return 0;
        })
    }
  }
}
</script>

<style lang="css" scoped>
</style>
