<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              <sidebar></sidebar>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="m-0">Characters</h2>
                    </div>
                    <div class="card-body">
                        <div v-if="loading">
                            <h3>Please...</h3>
                        </div>
                        <form @submit.prevent="submitForm()" v-else>
                            <div v-for="category in categories" class="mb-3">
                                <h3>
                                    {{ category }}
                                </h3>
                                <div v-for="item in getCharacters(category)" :key="item.id" class="form-group row">
                                    <label class="col-6 text-right">
                                        {{ item.name }}
                                    </label>
                                    <div class="col-6">
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
            </div>
        </div>
    </div>
</template>

<script>
export default {

  name: 'CharacterBase',
  props: {
    id: String,
  },
  data () {
    return {
        vegetable: {
            characters: [
                {
                    category: '',
                }
            ],
        },
        categories: [],
        inputs: [],
        loading: false,
    }
  },
  computed: {
    
  },
  methods: {
    async loadVegetableCharacter() {
        let response = await axios.get('/api/vegetables/'+this.id, {
            params: {
                view: 'characters,passport'
            },
        })
        this.vegetable = response.data.data
    },
    getCharacters(category) {
        return this.vegetable.characters.filter(item => {
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
            this.vegetable.characters = response.data.data
        } catch (error) {
            console.log(error.response)
        }

        this.vegetable.characters = response.data.data
        this.loading = false
        
    }
  },
  mounted() {
    this.loadVegetableCharacter().then(() => {
        this.categories = [...new Set(this.vegetable.characters.map(item => item.category))]
    })
  }
}
</script>

<style lang="css" scoped>
</style>
