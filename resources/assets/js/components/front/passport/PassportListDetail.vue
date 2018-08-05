<template>
    <front-base>
        <section id="passport">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4><b>Passport Data {{ pin }}</b></h4>
                    </div>
                </div>
            
                    <div class="col-md-12 table-responsive table-detail">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Plant introduction number</td>
                                    <td>{{ vegetable.plant_introduction_number }}</td>
                                </tr>
                                <tr>
                                    <td>Temporary Number</td>
                                    <td>{{ vegetable.temporary_number }}</td>
                                </tr>
                                <tr>
                                    <td>Cultivar Name</td>
                                    <td>{{ vegetable.cultivar_name }}</td>
                                </tr>
                                <tr>
                                    <td>Genus</td>
                                    <td>{{ vegetable.species.genus.name }}</td>
                                </tr>
                                <tr>
                                    <td>Species</td>
                                    <td>{{ vegetable.species.name }}</td>
                                </tr>
                                <tr v-for="(value, index) in vegetable.passport">
                                    <td>{{ index | removeUnderScore }}</td>
                                    <td>{{ value }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            
            </div>
        </section>
    </front-base>
   
</template>

<script>
import FrontBase from '../FrontBase';

export default {

  name: 'PassportListDetail',
  props: {
    pin: String,
  },
  data () {
    return {
        load: 'passport',
        vegetable: {
            species:{
                genus:{
                    
                }
            }
        },
        errors: {},
    }
  },
  methods: {
    async loadPassport() {
        try {
            let response = await axios.get(`/api/vegetables/${this.pin}/passport`)
            this.vegetable = response.data.data
        } catch(error) {
            console.log(error)
            this.errors = error
        }
    }
  },
  filters: {
    removeUnderScore: function (value) {
        return value.replace('_', ' ')
    }
  },
  mounted() {
    this.loadPassport()
  },
  components: {
    FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
