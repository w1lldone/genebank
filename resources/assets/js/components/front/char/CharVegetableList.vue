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
          <div class="text-center">
            <paginate
            v-model="page"
            :page-count="20"
            :page-range="3"
            :margin-pages="2"
            :click-handler="clickCallback"
            :prev-text="'<'"
            :next-text="'>'"
            :container-class="'pagination'"
            :page-class="'page-item'">
            </paginate>
          </div>
        </div>
      </div>
    </section>
  </front-base>
   
</template>
<script>
import FrontBase from '../FrontBase';
import CharVegetableListFilter from '../VegetableFilters';
import ActiveFilters from '../VegetableActiveFilters';
import { vegetableFilters } from '../../mixins/vegetableFilters.js';
Vue.component('paginate', VuejsPaginate)
 
new Vue({
  el: '#app',
  methods: {
    clickCallback: function(pageNum) {
      console.log(pageNum)
    }
  }
})
export default {

  name: 'CharVegetableList',
  mixins: [vegetableFilters],
  props: {
    genusId: Number,
  },
  data () {
    return {
      page: 10,
      loading: true,
      vegetables: [],
      params: {
        load: 'passport',
        genus_id: this.genusId,
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
    onUpdateFilter({index, value}) {
      this.filters[index] = value
    },
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
.pagination {
}
.page-item {
}

</style>
