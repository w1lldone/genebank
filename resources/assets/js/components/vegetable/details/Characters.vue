<template>
    <div class="card">
        <div class="card-body">
            <div v-if="loading">
                <h3>Please wait...</h3>
            </div>
            <form @submit.prevent="submitForm()" v-else>
                <div v-for="category in categories" class="mb-3">
                    <h3>
                        {{ category }}
                    </h3>
                    <div v-for="item in getCharacters(category)" :key="item.id" class="form-group row">
                        <label class="col-md-3 text-right">
                            {{ item.name }}
                        </label>
                        <div class="col-md-6">
                            <input class="form-control" :name="item.id" type="text" :value="item.value" ref="inputs">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-success" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {

  name: 'Characters',
  props: {
    id: String,
    characters: Array,
  },
  data () {
    return {
        loading: false,
    }
  },
  computed: {
    categories: function() {
        return [...new Set(this.characters.map(item => item.category))]
    }
  },
  methods: {
    getCharacters(category) {
        return this.characters.filter(item => {
            return item.category == category
        })
    },
    async submitForm() {
        this.loading = true

        var inputs = this.$refs.inputs.map(item => {
            return {
                id: item.name,
                value: item.value,
            }
        })

        try {
            let response = await axios.put(`/api/vegetables/${this.id}/characters`, inputs)
            console.log(response.data.data)
            location.reload(); 
        } catch (error) {
            console.log(error.response)
        }
        this.loading = false
    }
  },
}
</script>

<style lang="css" scoped>
</style>    
