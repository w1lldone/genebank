<template>
    <front-base>
        <section id="char" class="list-table">
          <div class="msg_title col-md-12">
            <h4><b>Characterization</b></h4>
            <br>
            <p>Refers to the morphological and agronomic descriptions of an accession (i.e. hypocotyl color, plant growth habit, corolla color, fruit length, seed color, etc.). These data were observed and gathered at AVRDC experimental fields by GRSU staff or by NARS partner. </p><br><br>
          </div>
          <h5 class="col-md-2"><b>Capsicum</b></h5><br><br>
          <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
              <thead>
                <tr>
                  <th>VINO</th>
                  <th>Variant</th>
                  <th>Accno</th>
                  <th>Tempno</th>
                  <th>Variant</th>
                  <th>Species</th>
                  <th>Subtaxa</th>
                  <th>Country</th>
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
                  <td></td>
                  <td></td>
                  <td>TOT2209</td>
                  <td>A (green plant)</td>
                  <td>Annulus</td>
                  <td></td>
                  <td></td>
                  <td><input type="button" value="Detail" onclick="window.location.href='/search/characterization/item/detail'"></td>
                </tr>
                <tr>
                  <td>VI000306</td>
                  <td></td>
                  <td></td>
                  <td>TOT2209</td>
                  <td>B (purple plant)</td>
                  <td>Annulus</td>
                  <td></td>
                  <td></td>
                  <td><input type="button" value="Detail" onclick="window.location.href='/search/characterization/item/detail'"></td>
                </tr>
              </tbody>
            </table>
          </div>
    </section>
    </front-base>
   
</template>

<script>
$(window).on("load resize ", function() {
var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
$('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
import FrontBase from '../FrontBase';

export default {

  name: 'CharListItem',
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
