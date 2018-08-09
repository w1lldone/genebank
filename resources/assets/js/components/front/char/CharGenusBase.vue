<template>
    <front-base>
        <section id="char">
          <div class="container">
          <div class="row">                
              <div class="col-md-12">
                  <h4><b>Characterization</b></h4>
                  <br>
                  <p>Refers to the morphological and agronomic descriptions of an accession (i.e. hypocotyl color, plant growth habit, corolla color, fruit length, seed color, etc.). These data were observed and gathered at AVRDC experimental fields by GRSU staff or by NARS partner. </p><br><br>
                </div>
                    <div class="card col-md-3" v-for="item in genera">
                      <div class="card-header"><a :href="'/search/characterization/'+item.id">{{item.name}}</a></div>
                      <div class="card-main">
                        <img :src="item.photo" alt="...">
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
</style>
