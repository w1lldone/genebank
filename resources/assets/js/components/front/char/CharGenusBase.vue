<template>
    <front-base>
        <section id="char">
          <div class="container">
          <div class="row">                
              <div class="col-md-12">
                  <h4><b>Karakterisasi</b></h4>
                  <br>
                  <p>Mengacu pada deskripsi morfologi dan agronomi dari aksesi (yaitu warna hypocotyl, kebiasaan pertumbuhan tanaman, warna corolla, panjang buah, warna biji, dll.). Data ini diamati dan dikumpulkan di lapangan eksperimental oleh Bank Sumber Daya Genetik Sayuran.</p><br><br>
                </div>
                    <div class="card col-md-3 col-sm-4" v-for="item in genera">
                      <div class="card-header"><a :href="'/search/characterization/'+item.id">{{item.name}}</a></div>
                      <div class="card-main">
                        <img :src="item.photo" alt="..." width="500" height="500">
                      </div>
                    </div>
                </div>
        </div>
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';
import CharVegetableList from './CharVegetableList';
import CharDetail from './CharDetail';

export default {

  name: 'CharGenusBase',

  data () {
    return {
        genera: [],
    }
  },
  methods: {
    async loadGenera(){
      let response = await axios.get('/api/genera')
      this.genera = response.data.data
    },
    
  },
  mounted() {
    this.loadGenera()
  },
  components: {
    FrontBase,
    CharVegetableList,
    CharDetail,
  },

}
</script>

<style lang="css" scoped>
img {
  width: 200px !important;
  height: 200px !important;
}
</style>
