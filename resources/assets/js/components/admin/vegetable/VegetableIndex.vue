<template>
    <section class="py-3">
        <div class="row">
            <div class="col-12">
                <div class="card card-body mb-3 bg-light">
                    <vegetable-index-filter
                    v-bind.sync="params"></vegetable-index-filter>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <span>Vegetable list</span>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#createVegetableModal"><i class="fa fa-plus"></i> Add new vegetable</button>
                    </div>
                    <div v-if="loading" class="card-body">
                        <spinner></spinner>
                    </div>
                    <div class="card-body" v-else>
                        <vegetable-list
                        :vegetables="vegetables"></vegetable-list>
                    </div>
                </div>
            </div>
        </div>
        <vegetable-create-modal></vegetable-create-modal>
    </section>
</template>

<script>
import VegetableList from './VegetableList';
import VegetableCreateModal from './VegetableCreateModal';
import VegetableIndexFilter from './VegetableIndexFilter';

export default {

  name: 'VegetableIndex',

  data () {
    return {
        vegetables: [],
        params: {
            genus_id: null,
        },
        loading: true,
    }
  },
  methods: {
    async loadVegetables() {
        let response = await axios.get('/api/vegetables', {
            params: this.params
        })
        this.vegetables = response.data.data
    }
  },
  watch: {
    params: {
        handler: function (newVal) {
            this.loadVegetables()
        },
        deep: true,
    }
  },
  async mounted() {
    await this.loadVegetables()
    this.loading = false
  },
  components: {
    VegetableList,
    VegetableCreateModal,
    VegetableIndexFilter,
  }
}
</script>

<style lang="css" scoped>
</style>
