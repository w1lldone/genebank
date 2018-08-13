<template>
    <front-base>
        <section id="eval">
      <!--for demo wrap-->
        <div class="row">
          <div class="msg_title col-md-12">
            <h4><b>Evaluation</b></h4>
            <br>
            <p>Refers to the data results of screening accessions for their resistance to different pests (i.e. melon fly, cotton aphid, etc.) and diseases (i.e. Bhendi Yellow Vein Mosaic Virus,Tobacco Mosaic Virus, etc.). It also includes nutritive value (i.e.Vitamin A, Vitamin C, Anti-oxidant Activity, etc). The screening was conducted by scientists in various departments at AVRDC - The World Vegetable Center and other research institutes. </p><br><br>
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
                                    <a id="reset_filters" title="reset all" class="btn btn-success">RESET ALL</a></b>
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
                                        <td><a name="add" class="btn btn-success" title="add">ADD</a>
                                        </td>
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
                                        <td style="text-align: right">Genus</td>
                                        <td>
                                            <select name="GENUS">
                                                <option value="">* Any *</option>
                                                <option value="ABELMOSCHUS">ABELMOSCHUS</option>
                                                <option value="ABRUS">ABRUS</option>
                                            </select>
                                        </td>
                                        <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                                        
                                        <td style="text-align: right">Species</td><td>
                                            <select name="SPECIES">
                                            </select>
                                        </td>
                                        <td><a name="add" class="btn btn-success" title="add" style="display: none;">ADD</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right">Subtaxa</td><td>
                                            <select name="SUBTAXA">
                                            </select>
                                        </td>
                                        <td><a name="add" class="btn btn-success" title="add" style="display: none;">ADD</a></td>
                                        
                                        <td style="text-align: right">Country</td>
                                        <td>
                                            <select name="COUNTRY">
                                                <option value="">* Any *</option>
                                            </select>
                                        </td>
                                        <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right">Text Search</td><td><input name="TEXT" type="text"></td>
                                        <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                                        <!-- kosong -->
                                        <td></td><td>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>      
                        <br> <br>
                        <!-- end of filters -->

          <div class="tbl-header tbl-content col-md-12 list-table">
            <table cellpadding="0" cellspacing="0" border="0">
              <thead>
                <tr>
                  <th>VINO</th>
                  <th>ACCNO</th>
                  <th>Tempno</th>
                  <th>Family</th>
                  <th>Genus</th>
                  <th>Species</th>
                  <th>Subtaxa</th>
                  <th>Pedigree / Cultivar Name</th>
                  <th>Country</th>
                  <th>Operation</th>
                </tr>
              </thead>

              <tbody>
                <tr v-for="vegetable in vegetables":key="vegetable.id">
                  <td>VI000306</td>
                  <td></td>
                  <td>{{vegetable.temporary_number}}</td>
                  <td></td>
                  <td>{{vegetable.species.genus.name}}</td>
                  <td>{{vegetable.species.name}}</td>
                  <td></td>
                  <td>{{vegetable.species.genus.name}}</td>
                  <td>{{vegetable.passport.country}}</td>
                  <td><a :href="url('/search/evaluation/'+vegetable.id)" class="btn btn-success">Details</a></td>
                </tr>
              </tbody>
            </table>
        </div>
        </div>
        </div>
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';
import EvalListDetail from './EvalListDetail';

export default {

  name: 'EvalList',
  data () {
    return {
      vegetables: [],
    }
  },
  methods: {
    async loadVegetables(){
      let response = await axios.get('/api/vegetables?load=passport', {
        
      })
      this.vegetables = response.data.data
    }
  },
  mounted() {
    this.loadVegetables()
  },
  components: {
    FrontBase,
    EvalListDetail,
  }
}
</script>

<style lang="css" scoped>
</style>
