<template>
    <front-base>
        <section id="passport">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4><b>Passport Data VI000002</b></h4>
                        <br>
                        <p>Refers to accession no. and data recorded when the sample was originally collected (i.e. crop accession no., genus, species, altitude, collecting location, etc.). These data were received from the seed donor together with the germplasm. </p><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 table-responsive table-detail">
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
                                    <td>Duplicate note</td>
                                    <td>0</td>
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
                                    <td>Distribution Status</td>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <td>Family</td>
                                    <td>LEGUMINOSAE</td>
                                </tr>
                                <tr>
                                    <td>Genus</td>
                                    <td>VIGNA</td>
                                </tr>
                                <tr>
                                    <td>Species</td>
                                    <td>RADIATA</td>
                                </tr>
                                <tr>
                                    <td>Subtaxa</td>
                                    <td>VAR. RADIATA</td>
                                </tr>
                                <tr>
                                    <td>Sender's Name</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Donor identification number</td>
                                    <td>PI 424927</td>
                                </tr>
                                <tr>
                                    <td>Other number 1</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Other number 2</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>PI number</td>
                                    <td>PI 424927</td>
                                </tr>
                                <tr>
                                    <td>Pedigree / Cultivar name</td>
                                    <td>BK-1</td>
                                </tr>
                                <tr>
                                    <td>Donor institute</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Donor's address</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Acquisition date</td>
                                    <td>1972-01-01</td>
                                </tr>
                                <tr>
                                    <td>Duplicate status</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Collector</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Collector's number</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Collecting institute</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Collection date of original sample</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Country of collection</td>
                                    <td>Thailand</td>
                                </tr>
                                <tr>
                                    <td>Province / State</td>
                                    <td>BANGKOK</td>
                                </tr>
                                <tr>
                                    <td>Municipality / Country / District</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Location of collection site</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Latitude of collection site</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Longitude of collection site</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Altitude of collection site (Meters)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Collecting source</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Sample source</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Status of sample</td>
                                    <td>Unknown</td>
                                </tr>
                                <tr>
                                    <td>Collecting project</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Core collection</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Notes</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Annotation</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Duplicate storage site</td>
                                    <td>NPGRC, SGSV, RDASV</td>
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
