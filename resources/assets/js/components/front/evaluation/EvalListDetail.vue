<template>
    <front-base>
      <section id="eval">
        <!--for demo wrap-->
        <div class="row">
          <div class="msg_title col-md-12">
            <h4><b>Evaluation</b></h4>
            <br>
            <p>Refers to the data results of screening accessions for their resistance to different pests (i.e. melon fly, cotton aphid, etc.) and diseases (i.e. Bhendi Yellow Vein Mosaic Virus,Tobacco Mosaic Virus, etc.). It also includes nutritive value (i.e.Vitamin A, Vitamin C, Anti-oxidant Activity, etc). The screening was conducted by scientists in various departments at AVRDC - The World Vegetable Center and other research institutes. </p><br><br>
          </div>
          <div class="detail">
              <div class="col-md-10 mdl-cell--4-col-phone table-responsive table-detail">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Vegetable introduction number</td>
                      <td>{{ vegetables.plant_introduction_number }}</td>
                    </tr>
                    <tr>
                      <td>Crop accession number</td>
                      <td>V01001</td>
                    </tr>
                    <tr>
                      <td>Temporary number</td>
                      <td>{{ vegetables.temporary_number }}</td>
                    </tr>
                    <tr>
                      <td>Variant</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Characterized Year and Season</td>
                      <td>1986SP</td>
                    </tr>
                    <tr>
                      <td>Species</td>
                      <td>{{ vegetables.species.name }}</td>
                    </tr>
                    <tr>
                      <td>Subtaxa</td>
                      <td>VAR. RADIATA</td>
                    </tr>
                    <tr>
                      <td>Pedigree / Cultivar Name</td>
                      <td>{{ vegetables.cultivar_name }}</td>
                    </tr>
                    <tr>
                      <td>Country</td>
                      <td>{{ vegetables.passport.country }}</td>
                    </tr>
                    <tr>
                      <td>Remarks</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>  
            </div>

          <div class="panel-group col-md-10" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    NUTRITIVE DATA
                  </a>
                </h4>
              </div>
          
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-10 mdl-cell--4-col-phone table-responsive table-detail">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Dry matter (%)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Sugar (%)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Color value (*100)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Lipid (%)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Capsacin (mg/g)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Alkalinity (pH)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Soluble solids (Brix)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Acidity (% Citric acid)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total solids</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Beta carotene (mg/100g)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Fiber (%)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Vitamin A (mg/100g)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Vitamin C (mg/100g)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ascorbic acid (mg/100g)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total phenolic (mg/100g) (by Folin-Denis Method)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Anti-oxidant activity (%) (by Modified Thiocyanate Method)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Anti-oxidant activity (%) (by DPPH Method)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total oil content (%)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Protein content (%)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Starch content (%)</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ABIOTIC STRESS TOLERANCE
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <div class="row">
                      <div class="col-md-10 mdl-cell--4-col-phone table-responsive table-detail">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Dry matter (%)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Sugar (%)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Color value (*100)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Lipid (%)</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    INSECT PEST RESISTANCE
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <div class="row">
                      <div class="col-md-10 mdl-cell--4-col-phone table-responsive table-detail">
                        

                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFor">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                    BACTERIAL RESISTANCE
                  </a>
                </h4>
              </div>
              <div id="collapseFor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFor">
                <div class="panel-body">
                  <div class="row">
                      <div class="col-md-10 mdl-cell--4-col-phone table-responsive table-detail">
                        

                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFive">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    FUNGAL RESISTANCE
                  </a>
                </h4>
              </div>
              <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                <div class="panel-body">
                  <div class="row">
                      <div class="col-md-10 mdl-cell--4-col-phone table-responsive table-detail">      

                      </div>
                  </div>
              </div>
            </div>

          </div> 
        </div> <!-- end of panel-default -->
      </div> <!-- end of panel group -->
    </div>
    </section>
  </front-base>
   
</template>

<script>
import FrontBase from '../FrontBase';

export default {

  name: 'EvalListDetail',
  props: {
    pin: String,
  },
  data () {
    return {
      vegetables: {
            species:{
                genus:{
                    
                }
            },
            passport:{}
        },
    }
  },
  methods: {
    async loadVegetables(){
      let response = await axios.get(`/api/vegetables/${this.pin}`)
      this.vegetables = response.data.data
    }
  },
  mounted() {
    this.loadVegetables()
  },
  components: {
    FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
