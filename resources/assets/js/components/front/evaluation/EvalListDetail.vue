<template>
    <front-base>
        <section id="eval">
      <!--for demo wrap-->
          <div class="msg_title col-md-12">
            <h4><b>Evaluation</b></h4>
            <br>
            <p>Refers to the data results of screening accessions for their resistance to different pests (i.e. melon fly, cotton aphid, etc.) and diseases (i.e. Bhendi Yellow Vein Mosaic Virus,Tobacco Mosaic Virus, etc.). It also includes nutritive value (i.e.Vitamin A, Vitamin C, Anti-oxidant Activity, etc). The screening was conducted by scientists in various departments at AVRDC - The World Vegetable Center and other research institutes. </p><br><br>
          </div>
          <div class="detail">
            <div class="col-md-10 table-responsive table-detail">
              <table class="table">
                <tbody>
                  <tr>
                    <td>Vegetable introduction number</td>
                    <td>VI000002</td>
                  </tr>
                  <tr>
                    <td>Crop accession number</td>
                    <td>V01001</td>
                  </tr>
                  <tr>
                    <td>Temporary number</td>
                    <td></td>
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
                    <td>ANNUM</td>
                  </tr>
                  <tr>
                    <td>Subtaxa</td>
                    <td>VAR. RADIATA</td>
                  </tr>
                  <tr>
                    <td>Pedigree / Cultivar Name</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Country</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Remarks</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>  
          </div>

          <div class="row">
                    <div class="col-md-10 table-responsive table-detail">
                    <h4>NUTRITIVE DATA</h4>
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
                    <br><br>
                    <div class="col-md-10 table-responsive table-detail">
                    <h4>ABIOTIC STRESS TOLERANCE</h4>
                    </div>
                    <br><br>
                    <div class="col-md-10 table-responsive table-detail">
                      <h4>INSECT PEST RESISTANCE</h4>
                    </div>
                    <br><br>
                    <div class="col-md-10 table-responsive table-detail">
                      <h4>BACTERIAL RESISTANCE</h4>
                    </div>
                    <br><br>
                    <div class="col-md-10 table-responsive table-detail">
                      <h4>FUNGAL RESISTANCE</h4>
                    </div>
                </div>

        </section>
    </front-base>
   
</template>

<script>
import FrontBase from '../FrontBase';

export default {

  name: 'EvalListDetail',
  data () {
    return {
        load: 'evaluation',
    }
  },
  components: {
    FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
