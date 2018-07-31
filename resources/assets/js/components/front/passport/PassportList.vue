<template>
    <front-base>
        <section id="passport">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <h4><b>Passport</b></h4>
                      <br>
                      <p>Refers to accession no. and data recorded when the sample was originally collected (i.e. crop accession no., genus, species, altitude, collecting location, etc.). These data were received from the seed donor together with the germplasm. </p><br><br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Distribution status</th>
                                        <th>VINO</th>
                                        <th>Temp. no</th>
                                        <th>Genus</th>
                                        <th>Species</th>
                                        <th>Cultivar name</th>
                                        <th>Country</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody v-if="vegetables.length != 0">
                                    <passport-list-item 
                                    v-for="vegetable in vegetables"
                                    :key="vegetable.id"
                                    v-bind="getPassportObject(vegetable)"
                                    ></passport-list-item>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p><a href="/search/passport/detail" class="btn btn-success">Details</a></p>
            </div>
            <!--for demo wrap-->
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';
import PassportListItem from './PassportListItem';
import PassportListDetail from './PassportListDetail';

export default {

  name: 'PassportList',

  data () {
    return {
        vegetables: [],
        params: {
            load: 'passport',
        }
    }
  },
  methods: {
    async fetchVegetables() {
        try {
            let response = await axios.get('/api/vegetables', {
                params: this.params
            })

            this.vegetables = response.data.data
        } catch(error) {
            console.log(error.response)
        }
    },
    getPassportObject(vegetable) {
        return {
            status: 'Available',
            pin: vegetable.plant_introduction_number,
            tempNumber: vegetable.temporary_number,
            species: vegetable.species.name,
            genus: vegetable.species.genus.name,
            cultivarName: vegetable.species.genus.name,
            country: vegetable.passport.country,
        }
    }
  },
  mounted() {
    this.fetchVegetables()
  },
  components: {
    FrontBase,
    PassportListItem,
    PassportListDetail,
  }
}
</script>

<style lang="css" scoped>
</style>
