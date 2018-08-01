<template>
    <front-base>
    <section id="char">
      <div class="container col-md-12">                
          <div class="msg">
            <div class="msg_title">
                <h4><b>Characterization</b></h4>
                <br>
                <p>Refers to the morphological and agronomic descriptions of an accession (i.e. hypocotyl color, plant growth habit, corolla color, fruit length, seed color, etc.). These data were observed and gathered at AVRDC experimental fields by GRSU staff or by NARS partner. </p><br><br>
            </div>
            <h5 class="col-md-2"><b>Capsicum</b></h5>
            <br><br>
            <div class="row detail">
                <div class="col-md-6">
                    <img src="img/char/capsicum.jpg">
                </div>
                <div id="list">
                    <div class="col-md-6 table-responsive table-detail">
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
                            </tbody>
                        </table>
                    </div>
                </div>
                <br><br><br><br>
                <div class="row">
                    <div class="col-md-10 table-responsive table-detail">
                    <h4>SEEDLING DATA</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Hypocotyl color (terminal bud 1-2 mm)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Hypocotyl color intensity</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cotyledonous leaf length (mm) (N=10)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cotyledonous leaf width (mm) (N=10)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cotyledonous leaf shape</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cotyledonous leaf color</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Hypocotyl pubescence</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Stem color (before transplanting)</td>
                                    <td>Green</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                    <div class="col-md-10 table-responsive table-detail">
                    <h4>VEGETATIVE DATA</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Hypocotyl color (terminal bud 1-2 mm)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Hypocotyl color intensity</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cotyledonous leaf length (mm) (N=10)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cotyledonous leaf width (mm) (N=10)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cotyledonous leaf shape</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cotyledonous leaf color</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Hypocotyl pubescence</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Stem color (before transplanting)</td>
                                    <td>Green</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                    <div class="col-md-10 table-responsive table-detail">
                        <h4>INFLORESCENCE DATA</h4>
                    </div>
                    <br><br>
                    <div class="col-md-10 table-responsive table-detail">
                        <h4>FRUIT DATA</h4>
                    </div>
                    <br><br>
                    <div class="col-md-10 table-responsive table-detail">
                        <h4>SEED DATA</h4>
                    </div>
                </div>
            </div>
        </div>
      </div><!--End of container-->
    </section>
    </front-base>
   
</template>

<script>
import FrontBase from '../FrontBase';

function Seedling() {
            var x = document.getElementById("seedling");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }}
        function Vegetative() {
            var x = document.getElementById("vegetative");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }}
        function Inflorescence() {
            var x = document.getElementById("inflorescence");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }}
            
export default {

  name: 'CharListDetail',
  data () {
    return {
        load: 'characterization',
    }
  },
  components: {
    FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
