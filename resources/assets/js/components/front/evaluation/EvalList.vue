<template>
    <front-base>
        <section id="eval">
      <!--for demo wrap-->
          <div class="msg_title col-md-12">
            <h4><b>Evaluation</b></h4>
            <br>
            <p>Refers to the data results of screening accessions for their resistance to different pests (i.e. melon fly, cotton aphid, etc.) and diseases (i.e. Bhendi Yellow Vein Mosaic Virus,Tobacco Mosaic Virus, etc.). It also includes nutritive value (i.e.Vitamin A, Vitamin C, Anti-oxidant Activity, etc). The screening was conducted by scientists in various departments at AVRDC - The World Vegetable Center and other research institutes. </p><br><br>
          </div>
          <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
              <thead>
                <tr>
                  <th>VINO</th>
                  <th>Tempno</th>
                  <th>Family</th>
                  <th>Genus</th>
                  <th>Species</th>
                  <th>Operation</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
              <tbody>
                <tr>
                  <td>VI000306</td>
                  <td>TOT2209</td>
                  <td>Solanaceae</td>
                  <td>Capsicum</td>
                  <td>Annum</td>
                  <td><input type="button" value="Detail" onclick="window.location.href='/search/evaluation/detail'"></td>
                </tr>
                <tr>
                  <td>VI000306</td>
                  <td>TOT2209</td>
                  <td>Solanaceae</td>
                  <td>Capsicum</td>
                  <td>Chinense</td>
                  <td><input type="button" value="Detail" onclick="window.location.href='search/evaluation/detail'"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';
import EvalListDetail from './EvalListDetail';

export default {

  name: 'EvalList',

  data () {
    return {
        
    }
  },
  components: {
    FrontBase,
    EvalListDetail,
  }
}
</script>

<style lang="css" scoped>
</style>
