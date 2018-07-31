<template>
    <front-base>
        <section id="eval">
      <!--for demo wrap-->
          <div class="msg_title col-md-12">
            <h4><b>Evaluation</b></h4>
            <br>
            <p>Refers to the data results of screening accessions for their resistance to different pests (i.e. melon fly, cotton aphid, etc.) and diseases (i.e. Bhendi Yellow Vein Mosaic Virus,Tobacco Mosaic Virus, etc.). It also includes nutritive value (i.e.Vitamin A, Vitamin C, Anti-oxidant Activity, etc). The screening was conducted by scientists in various departments at AVRDC - The World Vegetable Center and other research institutes. </p><br><br>
          </div>
          <div class="detail">
            <form action="" class="form-horizontal" role="form">
                  <div class="form-group form-inline" align="right">
                    <div class="col-sm-12" >
                      <label>Vegetable introduction number &emsp;</label>
                      <input type="text" class="form-control" name="number" id="number" placeholder="VI000306"><br>
                      <label>Crop accession number &emsp;</label>
                      <input type="text" class="form-control" name="crop_number" id="crop_number" placeholder="V01306"><br>
                      <label>Family &emsp;</label>
                      <input type="text" class="form-control" name="family" id="family" placeholder="LEGUMINOSAE"><br>
                      <label>Genus &emsp;</label>
                      <input type="text" class="form-control" name="genus" id="genus" placeholder="VIGNA"><br>
                      <label>Species &emsp;</label>
                      <input type="text" class="form-control" name="species" id="species" placeholder="MUNGO"><br>
                    </div>
                  </div>
                </form>
            <div id="button">
              <button class="col-sm-12" align:"left" onclick="Eval()">seedling data</button>
                <form action="" class="form-horizontal" role="form" name="evalTable" id="evalTable">
                  <div class="form-group form-inline" align="right">
                    <div class="col-sm-12" >
                      <label>Vegetable introduction number &emsp;</label>
                      <input type="text" class="form-control" name="number" id="number" placeholder="VI000306"><br>
                      <label>Crop accession number &emsp;</label>
                      <input type="text" class="form-control" name="crop_number" id="crop_number" placeholder="V01306"><br>
                      <label>Family &emsp;</label>
                      <input type="text" class="form-control" name="family" id="family" placeholder="LEGUMINOSAE"><br>
                      <label>Genus &emsp;</label>
                      <input type="text" class="form-control" name="genus" id="genus" placeholder="VIGNA"><br>
                      <label>Species &emsp;</label>
                      <input type="text" class="form-control" name="species" id="species" placeholder="MUNGO"><br>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </section>
    </front-base>
   
</template>

<script>
import FrontBase from '../FrontBase';

export default {

  name: 'EvalListDetail',
  data () {
    return {
        load: 'evaluation',
    }
  },
  components: {
    FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
