<template>
    <front-base>
        <section id="passport">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4><b>Paspor</b></h4>
                        <br>
                        <p>Mengacu pada nomor aksesi dan data dicatat ketika sampel telah dikumpulkan (yaitu aksesi tanaman no., genus, spesies, ketinggian, mengumpulkan lokasi, dll.). Data ini diterima dari donor benih bersama dengan plasma nutfah. </p><br><br>

                        <vegetable-active-filters
                        :filters="filters"
                        @update:filters="onUpdateFilter"></vegetable-active-filters>
                        
                        <vegetable-filters
                        :active-filters="filters"
                        :species="species"
                        @update:filters="onUpdateFilter"
                        ></vegetable-filters>

                        <spinner v-if="loading"></spinner>
                        <div class="table-responsive passport-list list-table" v-else>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Distribution status</th>
                                        <th>UGM Number (PINO)</th>
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
                            <div class="panel panel-default" v-if="vegetables.length == 0" >
                              <div class="panel-body text-center">
                                Sorry. We could't find the vegetables you're looking for. <br>
                                Please try again with different filters.
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--for demo wrap-->
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';
import PassportListItem from './PassportListItem';
import PassportListDetail from './PassportListDetail';
import VegetableFilters from '../VegetableFilters';
import VegetableActiveFilters from '../VegetableActiveFilters';
import { vegetableFilters } from '../../mixins/vegetableFilters.js';

export default {

  name: 'PassportList',
  mixins: [vegetableFilters],
  data () {
    return {
        vegetables: [],
        params: {
            load: 'passport',
        },
        species: [],
        loading: true,
    }
  },
  methods: {
    async loadVegetables() {
        try {
            let response = await axios.get('/api/vegetables', {
                params: this.allParams
            })

            this.vegetables = response.data.data
        } catch(error) {
            console.log(error.response)
        }
    },
    async loadSpecies() {
        try {
            let response = await axios.get('/api/species')

            this.species = response.data.data
        } catch(error) {
            console.log(error.response)
        }
    },
    getPassportObject(vegetable) {
        return {
            status: vegetable.passport.distribution_status,
            pin: vegetable.plant_introduction_number,
            tempNumber: vegetable.temporary_number,
            species: vegetable.species.name,
            genus: vegetable.species.genus.name,
            cultivarName: vegetable.cultivar_name,
            country: vegetable.passport.country,
        }
    }
  },
  async mounted() {
    await this.loadVegetables()
    await this.loadSpecies()
    this.loading = false
  },
  components: {
    FrontBase,
    PassportListItem,
    PassportListDetail,
    VegetableFilters,
    VegetableActiveFilters,
  }
}
</script>

<style lang="css" scoped>
</style>
