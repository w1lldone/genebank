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
            <div class="detail">
                <div class="col-md-6">
                    <img src="img/char/capsicum.jpg">
                </div>
                <div id="list">
                    <form action="" class="form-horizontal" role="form" name="list" id="list">
                        <div class="form-group form-inline" align="right">
                            <div class="col-sm-6">
                                <label>Vegetable introduction number</label>
                                <input type="text" class="form-control" name="name" id="name"><br>
                                <label>Variant &emsp;</label>
                                <input type="text" class="form-control" name="variant" id="variant"><br>
                                <label>Species &emsp;</label>
                                <input type="text" class="form-control" name="species" id="species"><br>
                                <label>Country &emsp;</label>
                                <input type="text" class="form-control" name="country" id="country">
                                
                                <!-- <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button> -->
                            </div>
                        </div>
                    </form>
                </div>
                <div id="button">
                    <button class="col-sm-12" align:"left" onclick="Seedling()">seedling data</button>
                    <form action="" class="form-horizontal" role="form" name="seedling" id="seedling">
                        <div class="form-group form-inline" align="right">
                            <div class="col-sm-12" >
                                <label>Germination period &emsp;</label>
                                <input type="text" class="form-control" name="period" id="period"><br>
                                <label>Hypocotyl color &emsp;</label>
                                <input type="text" class="form-control" name="hypo_color" id="dypo_color"><br>
                                <label>Cotyledon color &emsp;</label>
                                <input type="text" class="form-control" name="cot_color" id="cot_color"><br>
                            </div>
                        </div>
                    </form>
                    <button class="col-sm-12" align:"left" onclick="Vegetative()">vegetative data</button>
                    <form action="" class="form-horizontal" role="form" name="vegetative" id="vegetative">
                        <div class="form-group form-inline" align="right">
                            <div class="col-sm-12" >
                                <label>Plant grow habit &emsp;</label>
                                <input type="text" class="form-control" name="period" id="period"><br>
                                <label>Plan height &emsp;</label>
                                <input type="text" class="form-control" name="hypo_color" id="dypo_color"><br>
                                <label>Number of internodes &emsp;</label>
                                <input type="text" class="form-control" name="cot_color" id="cot_color"><br>
                            </div>
                        </div>
                    </form>
                    <button class="col-sm-12" align:"left" onclick="Inflorescence()">inflorescence data</button>
                    <form action="" class="form-horizontal" role="form" name="inflorescence" id="inflorescence">
                        <div class="form-group form-inline" align="right">
                            <div class="col-sm-12" >
                                <label>Flowering date &emsp;</label>
                                <input type="text" class="form-control" name="period" id="period"><br>
                                <label>Number of nodes to first flower &emsp;</label>
                                <input type="text" class="form-control" name="hypo_color" id="dypo_color"><br>
                                <label>Corolla color &emsp;</label>
                                <input type="text" class="form-control" name="cot_color" id="cot_color"><br>
                            </div>
                        </div>
                    </form>
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
