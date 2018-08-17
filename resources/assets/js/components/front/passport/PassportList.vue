<template>
    <front-base>
        <section id="passport">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4><b>Paspor</b></h4>
                        <br>
                        <p>Mengacu pada nomor aksesi dan data dicatat ketika sampel telah dikumpulkan (yaitu aksesi tanaman no., genus, spesies, ketinggian, mengumpulkan lokasi, dll.). Data ini diterima dari donor benih bersama dengan plasma nutfah. </p><br><br>
                        
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
                                        
                                        <td style="text-align: right">Distribution Status</td><td>
                                            <select name="DISSTA">
                                                <option value="">* Any *</option>
                                                <option value="Tersedia">Tersedia</option>
                                                <option value="Sudah Tidak Tersedia">Sudah Tidak Tersedia</option>
                                                <option value="Tidak Tersedia">Tidak Tersedia</option>
                                                <option value="Distribusi Terbatas">Distribusi Terbatas</option>
                                            </select>
                                        </td>
                                        <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>      
                        <br> <br>
                        <!-- end of filters -->

                        <div class="table-responsive passport-list list-table">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Distribution status</th>
                                        <th>VINO</th>
                                        <th>Temp. no</th>
                                        <th>Genus</th>
                                        <th>Species</th>
                                        <th>Cultivar name</th>
                                        <th>Country</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody v-if="vegetables.length != 0">
                                    <passport-list-item 
                                    v-for="vegetable in vegetables"
                                    :key="vegetable.id"
                                    v-bind="getPassportObject(vegetable)"
                                    ></passport-list-item>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--for demo wrap-->
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';
import PassportListItem from './PassportListItem';
import PassportListDetail from './PassportListDetail';

export default {

  name: 'PassportList',

  data () {
    return {
        vegetables: [],
        params: {
            load: 'passport',
        }
    }
  },
  methods: {
    async fetchVegetables() {
        try {
            let response = await axios.get('/api/vegetables', {
                params: this.params
            })

            this.vegetables = response.data.data
        } catch(error) {
            console.log(error.response)
        }
    },
    getPassportObject(vegetable) {
        return {
            status: vegetable.passport.distribution_status,
            pin: vegetable.plant_introduction_number,
            tempNumber: vegetable.temporary_number,
            species: vegetable.species.name,
            genus: vegetable.species.genus.name,
            cultivarName: vegetable.species.genus.name,
            country: vegetable.passport.country,
        }
    }
  },
  mounted() {
    this.fetchVegetables()
  },
  components: {
    FrontBase,
    PassportListItem,
    PassportListDetail,
  }
}
</script>

<style lang="css" scoped>
</style>
