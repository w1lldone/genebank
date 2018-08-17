<template>
    <front-base>
        <section id="eval">
          <!--for demo wrap-->
          <div class="row">
            <div class="msg_title col-md-12">
              <h4><b>Evaluasi</b></h4>
              <br>
              <p>Mengacu pada hasil data aksesi penyaringan untuk ketahanannya terhadap hama yang berbeda (yaitu lalat melon, kutu kapas, dll.) dan penyakit (yaitu Virus Benyak Kuning Vena, Virus Mosaik Tembakau, dll.). Ini juga termasuk nilai gizi (yaitu. Vitamin A, Vitamin C, Aktivitas Anti-oksidan, dll). Penyaringan dilakukan oleh para ilmuwan di berbagai departemen di Bank Sumber Daya Genetik Sayuran dan lembaga penelitian lainnya.</p><br><br>
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
                      <td style="text-align: right">Genus</td>
                      <td>
                        <select name="GENUS">
                          <option value="">* Any *</option>
                          <option value="ABELMOSCHUS">ABELMOSCHUS</option>
                          <option value="ABRUS">ABRUS</option>
                        </select>
                      </td>
                      <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                                          
                      <td style="text-align: right">Species</td>
                      <td>
                        <select name="SPECIES">
                        </select>
                      </td>
                      <td><a name="add" class="btn btn-success" title="add" style="display: none;">ADD</a></td>
                    </tr>
                    <tr>
                      <td style="text-align: right">Subtaxa</td>
                      <td>
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
                      <td></td><td></td><td></td>
                    </tr>
                  </tbody>
                </table>
                <div class="other_filters">
                  <div data-toggle="collapse" href="#collapseNutritive" role="button" aria-expanded="false" aria-controls="collapseNutritive"><h5>For Nutritive Value</h5></div>
                    <div class="collapse" id="collapseNutritive">
                      <table>
                          <tbody>
                              <tr>
                                <td style="text-align: right">Dry matter (%)</td>
                                <td>
                                  <select name="DRYMAT">
                                    <option value=">">&gt;</option>
                                    <option value="=">=</option>
                                    <option value="<">&lt;</option>
                                  </select>
                                  <input name="DRYMAT" type="number">
                                </td>
                                <td><a name="add" class="btn btn-success" title="add">ADD</a></td>

                                <td style="text-align: right">Vitamin A (mg/100g)</td><td>
                                  <select name="VITA">
                                    <option value=">">&gt;</option>
                                    <option value="=">=</option>
                                    <option value="<">&lt;</option>
                                  </select>
                                  <input name="VITA" type="number">
                                </td>
                                <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                              </tr>

                              <tr>
                                <td style="text-align: right">Sugar (%)</td><td>
                                  <select name="SUGAR">
                                    <option value=">">&gt;</option>
                                    <option value="=">=</option>
                                    <option value="<">&lt;</option>
                                  </select>
                                  <input name="SUGAR" type="number">
                                </td>
                                <td><a name="add" class="btn btn-success" title="add">ADD</a></td>

                                <td style="text-align: right">Vitamin C (mg/100g)</td><td>
                                  <select name="VITC">
                                    <option value=">">&gt;</option>
                                    <option value="=">=</option>
                                    <option value="<">&lt;</option>
                                  </select>
                                  <input name="VITC" type="number">
                                </td>
                                <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                              </tr>
                              
                              <tr>
                                <td style="text-align: right">Color value (*100)</td><td>
                                  <select name="COLORVAL">
                                    <option value=">">&gt;</option>
                                    <option value="=">=</option>
                                    <option value="<">&lt;</option>
                                  </select>
                                  <input name="COLORVAL" type="number"></td>
                                  <td><a name="add" class="btn btn-success" title="add">ADD</a>
                                </td>

                                <td style="text-align: right">Ascorbic acid (mg/100g)</td><td>
                                  <select name="ASA">
                                    <option value=">">&gt;</option>
                                    <option value="=">=</option>
                                    <option value="<">&lt;</option>
                                  </select><input name="ASA" type="number"></td><td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                  <div data-toggle="collapse" href="#collapseAbiotic" role="button" aria-expanded="false" aria-controls="collapseAbiotic"><h5>For Abiotic Stress Tolerance</h5></div>
                    <div class="collapse" id="collapseAbiotic">
                      <table style="display: none;">
                        <tbody>
                          <tr>
                            <td>Heat tolerance</td>
                            <td>
                              <select name="HEAT">
                                <option value="">* Any *</option>
                              </select></td>
                            <td><a name="add" class="btn btn-success" title="add">ADD</a></td>

                            <td>Cold tolerance</td><td>
                              <select name="COLD">
                                <option value="">* Any *</option>
                              </select></td>
                            <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                          </tr>
                          <tr>
                            <td>Drought tolerance</td>
                            <td>
                              <select name="DROUGHT">
                                <option value="">* Any *</option>
                              </select></td>
                            <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                            <td>Flooding  tolerance</td>
                            <td>
                              <select name="FLOOD">
                                <option value="">* Any *</option>
                              </select></td>
                            <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                          </tr>
                          <tr><td>Salinity tolerance</td>
                            <td>
                              <select name="SALINITY">
                                <option value="">* Any *</option>
                              </select></td>
                            <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                            <td></td><td></td><td></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
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
h5{
  padding: 10px 5px;
  text-align: left;
  font-weight: 500;
  color: #fff;
  text-transform: uppercase;
  background:  #808b96 ;
}
.other_filters select{
    display: inline-block;
    text-align: center;
    height:30px;
    margin-right: 10px;
    outline: none;
    color: #74646e;
    border: 1px solid #C8BFC4;
    box-shadow: inset 1px 1px 2px #ddd8dc;
    background: #fff;
    width: 45px;
}
.other_filters input{
    display: inline-block;
    text-align: center;
    height:30px;
    margin-right: 10px;
    outline: none;
    color: #74646e;
    border: 1px solid #C8BFC4;
    box-shadow: inset 1px 1px 2px #ddd8dc;
    background: #fff;
    width: 65px;
}

</style>
