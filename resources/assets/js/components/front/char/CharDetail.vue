<template>
    <front-base>
        <section id="char">
            <div class="row">
              <div class="container col-md-12">                
                  <div class="msg">
                    <div class="msg_title">
                        <h4><b>Characterization</b></h4>
                        <br>
                        <p>Refers to the morphological and agronomic descriptions of an accession (i.e. hypocotyl color, plant growth habit, corolla color, fruit length, seed color, etc.). These data were observed and gathered at AVRDC experimental fields by GRSU staff or by NARS partner. </p><br><br>
                    </div>
                    <h5 class="col-md-2"><b>{{ vegetables.species.genus.name }}</b></h5>
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
                                            <td>{{ vegetables.plant_introduction_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Temporary Number</td>
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
                                            <td>Cultivar Name</td>
                                            <td>{{ vegetables.cultivar_name }}</td>
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
                                            <td>Genus</td>
                                            <td>{{ vegetables.species.genus.name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td></td>
                                        </tr>                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="col-md-10 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    SEEDLING DATA
                                  </a>
                                </h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-10 table-responsive table-detail">
                                            <table class="table">
                                                <tbody>
                                                    <tr v-for="item in result">
                                                        <td>{{ item }}</td>
                                                        <!-- // <td>{{ vegetable.characters.value }}</td> -->
                                                    </tr>
                                                    <!-- <tr>
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
                                                    </tr> -->
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
                                    VEGETATIVE DATA
                                  </a>
                                </h4>
                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="col-md-10 table-responsive table-detail">
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
                                </div>
                            </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    INFLORESCENCE DATA
                                  </a>
                                </h4>
                              </div>
                              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="col-md-10 table-responsive table-detail">

                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingFor">
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                                    FRUIT DATA
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
                                    SEED DATA
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
                        </div>
                    </div>
                    </div><!-- end of row detail -->
                </div>
              </div><!--End of container-->
            </div>
        </section>
    </front-base>
   
</template>

<script>
import FrontBase from '../FrontBase';

export default {

    name: 'CharDetail',
    props: {
        genus: String,
        pin: String,
    },
    data () {
        return {
            vegetables: {
                species:{
                    genus:{
                    
                    }
                },
                characters: {}
            },
            result:[],
            load: 'characterization',

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
        var result = _.pluck(vegetables.characters, 'name')
      },


      components: {
        FrontBase,
      }
    }
</script>

<style lang="css" scoped>
</style>
