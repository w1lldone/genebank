<template>
    <front-base>
        <section id="char">
          <div class="container">                
              <div class="row col-md-12">
                  <h4><b>Characterization</b></h4>
                  <br>
                  <p>Refers to the morphological and agronomic descriptions of an accession (i.e. hypocotyl color, plant growth habit, corolla color, fruit length, seed color, etc.). These data were observed and gathered at AVRDC experimental fields by GRSU staff or by NARS partner. </p><br><br>
                
                <div class="col-md-12">
                    <div class="card col-md-3">
                      <div class="card-header"><a href="/search/characterization/item">Capsicum</a></div>
                      <div class="card-main">
                        <img src="img/char/capsicum.jpg" alt="...">
                      </div>
                    </div>
                    <div class="card col-md-3">
                      <div class="card-header"><a>Cucumis</a></div>
                      <div class="card-main">
                        <img src="img/char/cucumis.jpg" alt="...">
                      </div>
                    </div>
                    <div class="card col-md-3">
                      <div class="card-header"><a>Solanum</a></div>
                      <div class="card-main">
                        <img src="img/char/solanum.jpeg" alt="...">
                      </div>
                    </div>
                    <div class="card col-md-3">
                      <div class="card-header"><a>Vigna</a></div>
                      <div class="card-main">
                        <img src="img/char/vigna.jpg" alt="...">
                      </div>
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
        
    }
  },
  components: {
    FrontBase,
    CharVegetableList,
    CharDetail,
  }
}
</script>

<style lang="css" scoped>
</style>
