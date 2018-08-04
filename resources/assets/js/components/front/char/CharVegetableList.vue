<template>
  <front-base>
    <section id="char" class="list-table">
      <div class="row">
        <div class="msg_title col-md-12">
          <h4><b>Characterization</b></h4>
          <br>
          <p>Refers to the morphological and agronomic descriptions of an accession (i.e. hypocotyl color, plant growth habit, corolla color, fruit length, seed color, etc.). These data were observed and gathered at AVRDC experimental fields by GRSU staff or by NARS partner. </p><br><br>
        </div>
        <h5 class="col-md-2"><b>Capsicum</b></h5><br><br><br>
        <div class="tbl-header tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
                <th>VINO</th>
                <th>Variant</th>
                <th>Accno</th>
                <th>Temp. no</th>
                <th>Variant</th>
                <th>Species</th>
                <th>Subtaxa</th>
                <th>Country</th>
                <th>Operation</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="vegetable in vegetables":key="vegetable.id">
                <td>{{vegetable.plant_introduction_number}}</td>
                <td></td>
                <td></td>
                <td>{{vegetable.temporary_number}}</td>
                <td></td>
                <td>{{vegetable.species.name}}</td>
                <td></td>
                <td>{{vegetable.passport.country}}</td>
                <td>
                  <a :href="url('/search/characterization/'+genus+'/'+pin)" class="btn btn-success">Details</a>
                </td>
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

  name: 'CharVegetableList',
  props: {
    genus: String,
    pin: String,
  },
  data () {
    return {
      vegetables:[],
      vegetable: {
            species:{
                genus:{}
            },
            passport:{}
      },
      // genera:[],
      load: 'characterization',
    }
  },
  methods: {
    async loadVegetables(){
      let response = await axios.get('/api/vegetables?load=passport', {
        params: {
          genus_id: this.genus
        }
      })
      this.vegetables = response.data.data
    },
    // async loadGenera(){
    //   let response = await axios.get(`/api/genera/${this.genus}`) 
    //     // {
    //     //   params: {
    //     //     genus_id: this.genus
    //     // }})
    //   this.genera = response.data.data
    // },
  },
  mounted() {
    this.loadVegetables()
    // this.loadGenera()
  },

  components: {
    FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
