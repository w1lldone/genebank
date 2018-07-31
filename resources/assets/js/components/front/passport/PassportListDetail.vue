<template>
    <front-base>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4><b>Passport Data VI000002</b></h4>
                        <br>
                        <p>Refers to accession no. and data recorded when the sample was originally collected (i.e. crop accession no., genus, species, altitude, collecting location, etc.). These data were received from the seed donor together with the germplasm. </p><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 table-responsive passport-detail">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Vegetable introduction number</td>
                                    <td>VI000002</td>
                                </tr>
                                <tr>
                                    <td>Family</td>
                                    <td>LEGUMINOSAE</td>
                                </tr>
                                <tr>
                                    <td>Species</td>
                                    <td>LEGUMINOSAE</td>
                                </tr>
                                <!-- PLEASE CONTINUE THE TABLE BASED ON PASSPORT DETAILS ON SEED.WORLDVEG.ORG -->
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

export default {

  name: 'PassportListDetail',
  data () {
    return {
        load: 'passport',
    }
  },
  components: {
    FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
