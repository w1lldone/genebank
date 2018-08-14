<template>
  <front-base>
    <section id="char">
      <div class="row">
        <div class="msg_title col-md-12">
          <h4><b>Characterization</b></h4>
          <br>
          <p>Refers to the morphological and agronomic descriptions of an accession (i.e. hypocotyl color, plant growth habit, corolla color, fruit length, seed color, etc.). These data were observed and gathered at AVRDC experimental fields by GRSU staff or by NARS partner. </p><br><br>
          <!-- Filters -->
          <div id="filters_area">            
            <div id="filters">
              <b>Show:</b>
              <select id="perLow">
                <option value="20" selected="selected">20</option>
                <option value="40">40</option>
                <option value="60">60</option>
                <option value="80">80</option>
                <option value="100">100</option>
              </select> 
              <b id="add_area"> &nbsp; Filters: &nbsp;
                <a id="add" title="search" class="btn btn-success" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">SEARCH</a> &nbsp;
                <a id="reset_filters" title="reset all" class="btn btn-success">RESET ALL</a>
              </b>
            </div>
          </div>
          <br>
          <div class="options collapse" id="collapseExample" >
            <table>
              <thead class=list-table>
                <tr>
                  <th colspan="6">Filter Options</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="text-align: right">AVRDC Code (VINO)</td>
                  <td><input name="VINO" placeholder="e.g. VI000001, VI000002, ..." type="text"></td>
                  <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                  
                  <td style="text-align: right">Crop Accession Number (ACCNO)</td>
                  <td><input name="ACCNO" placeholder="e.g. A00001, B00001, ..." type="text"></td>
                  <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                </tr>
                <tr>
                  <td style="text-align: right">Temporary Number (TEMPNO)</td>
                  <td><input name="TEMPNO" placeholder="e.g. TA00001, TB00001, ..." type="text"></td>
                  <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                  
                  <td style="text-align: right">Pedigree / Cultivar Name</td>
                  <td><input name="PEDCUL" type="text"></td>
                  <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                </tr>
                <tr>
                  <td style="text-align: right">Donor identification number (DONO)</td>
                  <td><input name="DONO" type="text"></td>
                  <td><a name="add" class="btn btn-success" title="add">ADD</a></td>

                  <td style="text-align: right">PI number (PINO)</td>
                  <td><input name="PINO" type="text"></td>
                  <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                </tr>
                <tr>
                  <td style="text-align: right">Species</td>
                  <td>
                    <select name="SPECIES">
                    </select>
                  </td>
                  <td><a name="add" class="btn btn-success" title="add" style="display: none;">ADD</a></td>

                  <td style="text-align: right">Subtaxa</td>
                  <td>
                    <select name="SUBTAXA">
                    </select>
                  </td>
                  <td><a name="add" class="btn btn-success" title="add" style="display: none;">ADD</a></td>
                </tr>
                <tr>
                  <td style="text-align: right">Country</td>
                  <td>
                    <select name="COUNTRY">
                      <option value="">* Any *</option>
                    </select>
                  </td>
                  <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                  <!-- kosong -->
                  <td></td><td></td><td></td>
                </tr>
              </tbody>
            </table>
          </div>      
          <br> <br>
          <!-- end of filters -->
        </div>
        <h5 class="col-md-2"><b>{{genera.name}}</b></h5><br><br><br>
        <div class="tbl-header tbl-content list-table">
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
                  <a :href="url('/search/characterization/'+genusId+'/'+vegetable.id)" class="btn btn-success">Details</a>
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
    genusId: Number,
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
      genera:[],
      load: 'characterization',
    }
  },
  methods: {
    async loadVegetables(){
      let response = await axios.get('/api/vegetables?load=passport', {
        params: {
          genus_id: this.genusId
        }
      })
      this.vegetables = response.data.data
    },
    async loadGenera(){
      let response = await axios.get(`/api/genera/${this.genusId}`) 
      this.genera = response.data.data
    },
  },
  mounted() {
    this.loadVegetables()
    this.loadGenera()
  },

  components: {
    FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
