<template>
    <front-base>
        <section id="char">
            <div class="row">
              <div class="container col-md-12">                
                  <div class="msg">
                    <div class="msg_title">
                        <h4><b>Karakterisasi</b></h4>
                        <br>
                        <p>Mengacu pada deskripsi morfologi dan agronomi dari aksesi (yaitu warna hypocotyl, kebiasaan pertumbuhan tanaman, warna corolla, panjang buah, warna biji, dll.). Data ini diamati dan dikumpulkan di lapangan eksperimental oleh Bank Sumber Daya Genetik Sayuran.</p><br><br>
                    </div>
                    <h5 class="col-md-2"><b>{{ vegetable.species.genus.name }}</b></h5>
                    <br><br>
                    <div class="detail">
                        <div class="col-md-6" v-if="vegetable.photos.length == 0">
                            <div class="panel panel-default">
                                <div class="panel-body text-center text-muted">
                                    <i class="fa fa-image fa-5x"></i> <br>
                                    No images available
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" v-for="photo in vegetable.photos">
                            <img :src="photo.url" alt="..." class="img-responsive">
                        </div>
                        <div id="list" class="col-md-6">
                            <div class="table-responsive table-detail">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Vegetable introduction number</td>
                                            <td>{{ vegetable.plant_introduction_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Temporary Number</td>
                                            <td>{{ vegetable.temporary_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Characterized Year and Season</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Species</td>
                                            <td>{{ vegetable.species.name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Cultivar Name</td>
                                            <td>{{ vegetable.cultivar_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Species</td>
                                            <td>{{ vegetable.species.name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Subtaxa</td>
                                            <td>{{ vegetable.subtaxa }}</td>
                                        </tr>
                                        <tr>
                                            <td>Genus</td>
                                            <td>{{ vegetable.species.genus.name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>{{ vegetable.passport.country }}</td>
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
                                        
                                        <div class="col-md-10 table-responsive table-detail">
                                            <table class="table">
                                                <tbody>
                                                    <!-- SEE COMPUTED SEEDLINGS METHODS -->
                                                    <tr v-for="item in seedlings">
                                                        <td>
                                                            {{ item.name }}
                                                        </td>
                                                        <td>
                                                            {{ item.value }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                                <tr v-for="item in vegetative">
                                                    <td>
                                                        {{ item.name }}
                                                    </td>
                                                    <td>
                                                        {{ item.value }}
                                                    </td>
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
                                        <table class="table">
                                            <tbody>
                                                <tr v-for="item in inflorescence">
                                                    <td>
                                                        {{ item.name }}
                                                    </td>
                                                    <td>
                                                        {{ item.value }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                                 
                                      <div class="col-md-10 table-responsive table-detail">
                                        <table class="table">
                                            <tbody>
                                                <tr v-for="item in fruit">
                                                    <td>
                                                        {{ item.name }}
                                                    </td>
                                                    <td>
                                                        {{ item.value }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                                
                                      <div class="col-md-10 table-responsive table-detail"> 
                                        <table class="table">
                                            <tbody>
                                                <tr v-for="item in seed">
                                                    <td>
                                                        {{ item.name }}
                                                    </td>
                                                    <td>
                                                        {{ item.value }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
        genusId: Number,
        vegetableId: Number,
    },
    data () {
        return {
            vegetable: {
                species:{
                    genus:{
                    
                    }
                },
                characters: [],
                passport: {},
                photos: [],
            },
            result:[],
            load: 'characterization',
        }
      },
      methods: {
        async loadVegetable(){
          let response = await axios.get(`/api/vegetables/${this.vegetableId}`)
          this.vegetable = response.data.data
        }
       },
       // computed properties dapat digunakan untuk mendefinisikan variable yang membutuhkan proses panjang. Contohnya mengambil character yang berkategori seedling.
       // computed bisa langsung diakses di template seperti pada baris #83
       // https://vuejs.org/v2/guide/computed.html#Computed-Properties
      computed: {
        // contoh penggunaan
        properties: function () {

            return // something
        },
        seedlings: function () {
            // Cek apakah characters tidak kosong
            if (this.vegetable.characters.length != 0) {
                // Hanya tampilkan characters yang mempunyai kategori seedling
                return this.vegetable.characters.filter(function (item) {
                    return item.category == 'Seedling'
                })
            }
            return []
        },
        vegetative: function () {
            if (this.vegetable.characters.length != 0) {
                return this.vegetable.characters.filter(function (item) {
                    return item.category == 'Vegetative'
                })
            }
            return []
        },
        inflorescence: function () {
            if (this.vegetable.characters.length != 0) {
                return this.vegetable.characters.filter(function (item) {
                    return item.category == 'Inflorescence'
                })
            }
            return []
        },
        fruit: function () {
            if (this.vegetable.characters.length != 0) {
                return this.vegetable.characters.filter(function (item) {
                    return item.category == 'Fruit'
                })
            }
            return []
        },
        seed: function () {
            if (this.vegetable.characters.length != 0) {
                return this.vegetable.characters.filter(function (item) {
                    return item.category == 'Seed'
                })
            }
            return []
        }
      },
      mounted() {
        this.loadVegetable()
      },
      components: {
        FrontBase,
      }
    }
</script>

<style lang="css" scoped>
</style>
