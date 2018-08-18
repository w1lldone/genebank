<template>
  <front-base>
    <section id="char">
      <div class="row">
        <div class="msg_title col-md-12">
          <h4><b>Karakterisasi</b></h4>
          <br>
          <p>Mengacu pada deskripsi morfologi dan agronomi dari aksesi (yaitu warna hypocotyl, kebiasaan pertumbuhan tanaman, warna corolla, panjang buah, warna biji, dll.). Data ini diamati dan dikumpulkan di lapangan eksperimental oleh Bank Sumber Daya Genetik Sayuran.</p><br><br>
          <!-- ACTIVE FILTERS -->
          <active-filters
          :filters="filters"
          @update:filters="onUpdateFilter"
          ></active-filters>

          <!-- Filters -->
          <char-vegetable-list-filter
          :species="genus.species"
          :active-filters="filters"
          @update:filters="onUpdateFilter"
          ></char-vegetable-list-filter>
          <h5 class="col-md-2"><b>{{ genus.name }}</b></h5>
          <br><br><br>
          <spinner v-if="loading"></spinner>
          <div class="tbl-header tbl-content list-table" v-else>
            <table cellpadding="0" cellspacing="0" border="0">
              <thead>
                <tr>
                  <th>UGM Number (PINO)</th>
                  <th>Temp. no</th>
                  <th>Acc. no</th>
                  <th>Species</th>
                  <th>Subtaxa</th>
                  <th>Country</th>
                  <th>Operation</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="vegetable in vegetables":key="vegetable.id">
                  <td>{{ vegetable.plant_introduction_number }}</td>
                  <td>{{ vegetable.temporary_number }}</td>
                  <td>{{ vegetable.accession_number }}</td>
                  <td>{{ vegetable.species.name }}</td>
                  <td>{{ vegetable.subtaxa }}</td>
                  <td>{{ vegetable.passport.country }}</td>
                  <td>
                    <a :href="url('/search/characterization/'+genusId+'/'+vegetable.id)" class="btn btn-success">Details</a>
                  </td>
                </tr>
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
    </section>
  </front-base>
   
</template>
<script>
import FrontBase from '../FrontBase';
import CharVegetableListFilter from './CharVegetableListFilter';
import ActiveFilters from './CharVegetableListActiveFilters';

export default {

  name: 'CharVegetableList',
  props: {
    genusId: Number,
  },
  data () {
    return {
      loading: true,
      vegetables: [],
      params: {
        load: 'passport',
        genus_id: this.genusId,
      },
      filters: {
        plant_introduction_number: null,
        temporary_number: null,
        donor_number: null,
        cultivar_name: null,
        species_id: null,
        accession_number: null,
      },
      genus: {},
    }
  },
  methods: {
    async loadVegetables(){
      try {
        let response = await axios.get('/api/vegetables', {
          params: this.allParams
        })
        this.vegetables = response.data.data
      } catch(error) {
        console.log(error.response)
      }
    },
    async loadGenus(){
      let response = await axios.get(`/api/genera/${this.genusId}`) 
      this.genus = response.data.data
    },
    async onUpdateFilter({index, value}) {
      this.filters[index] = value
    },
  },
  computed: {
    allParams: function () {
      return {...this.params, ...this.filters}
    },
  },
  watch: {
    filters: {
      async handler(newVal, oldVal) {
        this.loading = true
        await this.loadVegetables()
        this.loading = false
      },
      deep: true
    }
  },
  async mounted() {
    await this.loadVegetables()
    await this.loadGenus()
    this.loading = false
  },

  components: {
    FrontBase,
    CharVegetableListFilter,
    ActiveFilters,
  }
}
</script>

<style lang="css" scoped>
</style>
