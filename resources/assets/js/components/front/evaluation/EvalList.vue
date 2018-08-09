<template>
    <front-base>
        <section id="eval" class="list-table">
      <!--for demo wrap-->
        <div class="row">
          <div class="msg_title col-md-12">
            <h4><b>Evaluation</b></h4>
            <br>
            <p>Refers to the data results of screening accessions for their resistance to different pests (i.e. melon fly, cotton aphid, etc.) and diseases (i.e. Bhendi Yellow Vein Mosaic Virus,Tobacco Mosaic Virus, etc.). It also includes nutritive value (i.e.Vitamin A, Vitamin C, Anti-oxidant Activity, etc). The screening was conducted by scientists in various departments at AVRDC - The World Vegetable Center and other research institutes. </p><br><br>
         
          <div class="tbl-header tbl-content col-md-12">
            <table cellpadding="0" cellspacing="0" border="0">
              <thead>
                <tr>
                  <th>VINO</th>
                  <th>ACCNO</th>
                  <th>Tempno</th>
                  <th>Family</th>
                  <th>Genus</th>
                  <th>Species</th>
                  <th>Subtaxa</th>
                  <th>Pedigree / Cultivar Name</th>
                  <th>Country</th>
                  <th>Operation</th>
                </tr>
              </thead>

              <tbody>
                <tr v-for="vegetable in vegetables":key="vegetable.id">
                  <td>VI000306</td>
                  <td></td>
                  <td>{{vegetable.temporary_number}}</td>
                  <td></td>
                  <td>{{vegetable.species.genus.name}}</td>
                  <td>{{vegetable.species.name}}</td>
                  <td></td>
                  <td>{{vegetable.species.genus.name}}</td>
                  <td>{{vegetable.passport.country}}</td>
                  <td><a :href="url('/search/evaluation/'+vegetable.id)" class="btn btn-success">Details</a></td>
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
import EvalListDetail from './EvalListDetail';

export default {

  name: 'EvalList',
  data () {
    return {
      vegetables: [],
    }
  },
  methods: {
    async loadVegetables(){
      let response = await axios.get('/api/vegetables?load=passport', {
        
      })
      this.vegetables = response.data.data
    }
  },
  mounted() {
    this.loadVegetables()
  },
  components: {
    FrontBase,
    EvalListDetail,
  }
}
</script>

<style lang="css" scoped>
</style>
