<template>
    <section class="py-3">
        <div class="row">
          <div class="col-md-7">
            <h3>Vegetable {{ vegetable.plant_introduction_number }} details</h3>
          </div>
          <div class="col-md-5 text-right">
            <button class="btn btn-info" type="button" data-toggle="modal" data-target="#createVegetableModal">
              <i class="fa fa-plus fa-fw"></i> Add new vegetable
            </button>
            <button class="btn btn-danger" @click="deleteVegetable()">
              <i class="fa fa-trash fa-fw"></i>Delete
            </button>
            <vegetable-create-modal></vegetable-create-modal>
          </div>
        </div>
        <div class="row py-4" v-if="loading">
          <div class="col-md-7 text-center">
            <spinner></spinner>
          </div>
        </div>
        <div class="row mt-3" v-if="!loading">
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
                :photos="vegetable.photos"
                :species_id="vegetable.species.id"
                :temporary_number="vegetable.temporary_number"
                :cultivar_name="vegetable.cultivar_name"
                :subtaxa="vegetable.subtaxa"
                :accession_number="vegetable.accession_number"></vegetable-show-general>
              </div>
              <div class="tab-pane fade" id="nav-passport" role="tabpanel" aria-labelledby="nav-passport-tab">
                <vegetable-show-passport 
                :vegetableId="vegetableId"
                :passport="vegetable.passport"
                ></vegetable-show-passport>
              </div>
              <div class="tab-pane fade" id="nav-characters" role="tabpanel" aria-labelledby="nav-characters-tab">
                <vegetable-show-characters
                type="characters"
                :vegetableId="vegetableId"
                :characters="vegetable.characters"></vegetable-show-characters>
              </div>
              <div class="tab-pane fade" id="nav-evaluations" role="tabpanel" aria-labelledby="nav-evaluations-tab">
                <vegetable-show-characters
                type="evaluation"
                :vegetableId="vegetableId"
                :characters="vegetable.evaluations"></vegetable-show-characters>
              </div>
            </div>
          </div>
        </div>
    </section>
</template>

<script>
import VegetableShowGeneral from './VegetableShowGeneral';
import VegetableShowPassport from './VegetableShowPassport';
import VegetableShowCharacters from './VegetableShowCharacters';
import VegetableCreateModal from './VegetableCreateModal';

export default {

  name: 'VegetableShow',
  props: {
    vegetableId: Number,
  },
  data () {
    return {
      loading: true,
      vegetable: {
        species: {
          id: null,
        },
        passport: {},
        characters: [],
        evaluations: [],
        photos: [],
      },
    }
  },
  methods: {
    async loadVegetable() {
      let response = await axios.get(`/api/vegetables/${this.vegetableId}`)
      this.vegetable = response.data.data
      this.loading = false
    },
    deleteVegetable() {
      let confirmed = confirm('Are you sure want to delete this vegetable? This action cannot be undone')
      if (confirmed) {
        axios.delete(`/api/vegetables/${this.vegetableId}`)
            .then(response => {
              window.location = `/admin/vegetable`
            })
            .catch(error => {
              toastr.error(error.response.statusText, error.response.status)
            })
      }
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
    VegetableShowCharacters,
    VegetableCreateModal,
  }
}
</script>

<style lang="css" scoped>
</style>
