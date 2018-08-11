<template>
    <section class="py-3">
        <div class="row">
          <div class="col">
            <h3>Vegetable {{ vegetable.plant_introduction_number }} details</h3>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General information</a>
                <a class="nav-item nav-link" id="nav-passport-tab" data-toggle="tab" href="#nav-passport" role="tab" aria-controls="nav-passport" aria-selected="false">Passport</a>
                <a class="nav-item nav-link" id="nav-characters-tab" data-toggle="tab" href="#nav-characters" role="tab" aria-controls="nav-characters" aria-selected="false">Characterization</a>
                <a class="nav-item nav-link" id="nav-evaluations-tab" data-toggle="tab" href="#nav-evaluations" role="tab" aria-controls="nav-evaluations" aria-selected="false">Evaluation</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                <vegetable-show-general
                :vegetableId="vegetableId"
                :photo="vegetable.photo"
                :species_id.sync="vegetable.species.id"
                :temporary_number.sync="vegetable.temporary_number"
                :cultivar_name.sync="vegetable.cultivar_name"></vegetable-show-general>
              </div>
              <div class="tab-pane fade" id="nav-passport" role="tabpanel" aria-labelledby="nav-passport-tab">
                <vegetable-show-passport 
                :vegetableId="vegetableId"
                :passport="vegetable.passport"
                ></vegetable-show-passport>
              </div>
              <div class="tab-pane fade" id="nav-characters" role="tabpanel" aria-labelledby="nav-characters-tab">
                
              </div>
              <div class="tab-pane fade" id="nav-evaluations" role="tabpanel" aria-labelledby="nav-evaluations-tab">
                
              </div>
            </div>
          </div>
        </div>
    </section>
</template>

<script>
import VegetableShowGeneral from './VegetableShowGeneral';
import VegetableShowPassport from './VegetableShowPassport';

export default {

  name: 'VegetableShow',
  props: {
    vegetableId: Number,
  },
  data () {
    return {
      vegetable: {
        species: {
          id: null,
        },
        passport: {}
      }
    }
  },
  methods: {
    async loadVegetable() {
      let response = await axios(`/api/vegetables/${this.vegetableId}`)
      this.vegetable = response.data.data
    }
  },
  computed: {
    generalData: function () {
      if (this.vegetable.length == 0) {
        return {}
      }

      return {
        cultivar_name: this.vegetable.cultivar_name,
        species: this.vegetable.species,
        temporary_number: this.vegetable.temporary_number,
        photo: this.vegetable.photo,
      }
    },
  },
  mounted() {
    this.loadVegetable()
  },
  components: {
    VegetableShowGeneral,
    VegetableShowPassport,
  }
}
</script>

<style lang="css" scoped>
</style>
